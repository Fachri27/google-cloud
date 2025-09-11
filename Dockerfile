# Base image PHP
FROM php:8.0.2-cli

# Install extension PHP yang umum
RUN apt-get update && apt-get install -y unzip git libpq-dev libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy semua file project
COPY . .

# Install dependency PHP
RUN composer install --no-dev --optimize-autoloader

# Railway expose port 8080
EXPOSE 8080

# Jalankan PHP built-in server, serve dari folder public
CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
