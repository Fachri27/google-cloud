# Base image PHP
FROM php:8.2-cli-bullseye


# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory ke root project Laravel
WORKDIR /var/www/html

# Copy composer files dulu (biar cache lebih efisien)
COPY composer.json composer.lock ./

RUN ls -lah && ls -lah public

# Install dependencies tanpa dev
RUN composer install --no-dev --optimize-autoloader \
    && ls -lah /app/vendor \
    && ls -lah /app/public

# Copy semua file project
COPY . .

# Railway expose port 8080
EXPOSE 8080

# Jalankan Laravel via PHP built-in server
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
