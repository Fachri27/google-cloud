# --- Stage 1: Build frontend ---
FROM node:20 AS node-build

WORKDIR /app

# Copy package files & install deps
COPY package.json package-lock.json ./
RUN npm install

# Copy source & build frontend
COPY resources resources
RUN npm run build

# --- Stage 2: PHP / Laravel ---
FROM php:8.2-fpm

WORKDIR /var/www/html

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy composer files & install deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copy Laravel app
COPY . .

# Copy frontend build
COPY --from=node-build /app/public/build public/build

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose port for Railway
EXPOSE 8080

CMD ["php-fpm"]
