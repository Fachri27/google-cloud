# Stage 1: build frontend asset dengan Node
# FROM node:18 AS frontend
# WORKDIR /app
# COPY package*.json vite.config.js ./
# COPY resources ./resources
# RUN npm ci
# RUN npm run build

# Base image PHP
FROM php:8.2-cli

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /public

# Copy semua file project Laravel
COPY . .

# # Copy hasil build dari stage frontend
# COPY --from=frontend /app/public/build ./public/build

# Install dependency PHP (vendor)
RUN composer install --no-dev --optimize-autoloader


# Permission untuk Laravel
RUN chmod -R 777 storage bootstrap/cache

# Permission fix untuk Laravel
RUN mkdir -p storage/logs \
    && touch storage/logs/laravel.log \
    && chmod -R 777 storage bootstrap/cache


# Expose port (Railway pakai 8080)
EXPOSE 8080

RUN php artisan config:clear && php artisan cache:clear


# Jalankan Laravel pakai PHP built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

