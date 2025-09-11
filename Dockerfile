# Base image PHP
FROM php:8.2-cli

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html


# Copy semua file project Laravel
COPY . .

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

