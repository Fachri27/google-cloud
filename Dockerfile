# ===== Stage 1: Frontend build =====
FROM node:20 AS frontend

WORKDIR /app

# Copy package files
COPY package*.json vite.config.js tailwind.config.js postcss.config.js ./

# Install node dependencies
RUN npm install

# Copy source files
COPY resources ./resources

# Build frontend
RUN npm run build

# ===== Stage 2: Backend =====
FROM php:8.2-cli

WORKDIR /var/www/html

# Install PHP dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring gd \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy all Laravel source code
COPY . .

# Install PHP dependencies (artisan sudah ada)
RUN composer install --no-dev --optimize-autoloader

# Copy frontend build from Stage 1
COPY --from=frontend /app/public/build ./public/build

# Expose port (Railway akan menggunakan PORT env)
EXPOSE 8080

# Run Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
