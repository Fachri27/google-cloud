# Base image PHP
FROM php:8.2-cli

# Install ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring gd

# Install Node.js (untuk Tailwind & Alpine)
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# Set workdir
WORKDIR /var/www

# Copy semua source code (bukan cuma composer.json)
COPY . .

# Install dependencies PHP
RUN composer install --no-dev --optimize-autoloader

# Install & build frontend
RUN npm install && npm run build

# Laravel optimize
RUN php artisan config:clear && php artisan cache:clear

# Expose port
EXPOSE 8000

# Jalankan server Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
