# ---------- Stage 1: Build ----------
FROM node:20 AS frontend-builder

WORKDIR /app

# Copy package files & install frontend deps
COPY package*.json ./
RUN npm install

# Copy full frontend source
COPY . .

# Build Tailwind + Alpine
RUN npm run build

# ---------- Stage 2: PHP + Laravel ----------
FROM php:8.2-fpm

# Install system deps & PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring gd bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy Laravel PHP source (except node_modules)
COPY . .

# Copy built frontend from Stage 1
COPY --from=frontend-builder /app/public/build ./public/build

# Install PHP deps
RUN composer install --no-dev --optimize-autoloader

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Clear caches
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear

# Expose port (Railway akan pakai $PORT)
ENV PORT=8080
EXPOSE 8080

# Start Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
