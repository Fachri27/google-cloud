
# Base image PHP
FROM php:8.2-cli

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    zip \
    libzip-dev \
    libonig-dev \
    npm \
    nodejs \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/htm


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

# Install Node dependencies dan build
RUN npm install
RUN npm run build

RUN php artisan config:clear && php artisan cache:clear


# Jalankan Laravel pakai PHP built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

