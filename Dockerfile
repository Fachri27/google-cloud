# ===============================
# Stage 1: Frontend Build (Tailwind + Alpine via Vite)
# ===============================
FROM node:20 AS frontend

WORKDIR /app

# Copy only package files first (cache layer)
COPY package*.json vite.config.js postcss.config.js tailwind.config.js ./

# Install npm dependencies
RUN npm install

# Copy frontend resources
COPY resources ./resources

# Build frontend assets
RUN npm run build


# ===============================
# Stage 2: Backend Laravel + Composer
# ===============================
FROM php:8.2-cli

# Install PHP dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html

# Copy composer files
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy all source code
COPY . .

# Remove old build folder just in case
RUN rm -rf public/build

# Copy frontend build from stage frontend
COPY --from=frontend /app/public/build ./public/build

# Laravel optimize & cache clear
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan storage:link || true

# Expose port Railway
EXPOSE 8000

# Run Laravel server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
