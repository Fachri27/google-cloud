# Gunakan PHP image dengan extensions
FROM php:8.2-apache

# Install dependencies PHP
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Copy project ke container
WORKDIR /var/www/html
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permission storage & bootstrap/cache
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 8000

# Apache DocumentRoot ubah ke /public
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8000}

