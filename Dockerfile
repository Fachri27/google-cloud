# Base image PHP
FROM php:8.2-cli

# Install extension PHP yang umum dipakai Laravel
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer files dulu (biar cache gak invalid tiap file project berubah)
COPY composer.json composer.lock ./

# Install dependencies tanpa dev
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-progress

# Copy semua file project (termasuk .env dan folder public)
COPY . .

# Generate APP_KEY otomatis kalau belum ada
RUN php artisan key:generate --force

# Permission untuk Laravel
RUN chmod -R 777 storage bootstrap/cache

# Railway expose port 8080
EXPOSE 8080

# Jalankan Laravel pakai PHP built-in server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
