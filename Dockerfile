# # Stage 1: Build frontend dengan Node 20
# FROM node:20 AS frontend
# WORKDIR /app
# COPY package*.json vite.config.js ./
# COPY resources ./resources
# RUN npm ci
# RUN npm run build

# # Base image PHP
# FROM php:8.2-cli

# # Install dependency sistem
# RUN apt-get update && apt-get install -y \
#     unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
#     && docker-php-ext-install pdo pdo_mysql zip bcmath

# # Install Node.js (LTS)
# RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
#     && apt-get install -y nodejs

    
# # Install Composer
# COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# # Set working directory
# WORKDIR /var/www/html

# # Copy semua file project Laravel
# COPY . .

# # Copy hasil build dari stage frontend
# COPY --from=frontend /app/public/build ./public/build

# # Install dependency PHP (vendor)
# RUN composer install --no-dev --optimize-autoloader


# # Permission untuk Laravel
# RUN chmod -R 777 storage bootstrap/cache

# # ✅ Hapus cache Laravel biar baca manifest terbaru
# RUN rm -rf bootstrap/cache/*.php storage/framework/views/* \
#     && php artisan config:clear \
#     && php artisan cache:clear \
#     && php artisan view:clear \
#     && php artisan route:clear

# # Permission fix untuk Laravel
# RUN mkdir -p storage/logs \
#     && touch storage/logs/laravel.log \
#     && chmod -R 777 storage bootstrap/cache

# # Clear cache otomatis setelah copy file
# RUN php artisan optimize:clear

# # Expose port (Railway pakai 8080)
# EXPOSE 8080

# RUN php artisan config:clear && php artisan cache:clear


# # Jalankan Laravel pakai PHP built-in server
# CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

# Stage 1: Build dependencies & assets
FROM php:8.2-fpm AS build

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy PHP dependencies & install
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copy Node.js dependencies & build frontend
COPY package.json package-lock.json vite.config.js tailwind.config.js postcss.config.js ./
RUN npm install
COPY resources ./resources
RUN npm run build

# Stage 2: Production
FROM php:8.2-fpm

# Install PHP extensions
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html

# Copy built app from build stage
COPY --from=build /var/www/html /var/www/html

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
