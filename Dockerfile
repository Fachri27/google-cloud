# Base image PHP
FROM php:8.2-cli

# Install dependency sistem
RUN apt-get update && apt-get install -y \
    unzip git curl libpq-dev libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip bcmath

# Install Node.js (LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y nodejs


# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy composer dan npm files
COPY composer.json package.json ./

# Copy .env file
COPY .env .env

# Copy semua file project Laravel
COPY . .

# Install npm dependencies & build assets
RUN npm install
RUN chmod +x node_modules/.bin/vite
RUN npm run build

# Copy hasil build dari stage frontend
COPY --from=frontend /app/public/build ./public/build

# Install dependency PHP (vendor)
RUN composer install --no-dev --optimize-autoloader


# Pastikan permission folder
RUN chown -R www-data:www-data storage bootstrap/cache && chmod -R 775 storage bootstrap/cache

# ✅ Hapus cache Laravel biar baca manifest terbaru
RUN rm -rf bootstrap/cache/*.php storage/framework/views/* \
    && php artisan config:clear \
    && php artisan cache:clear \
    && php artisan view:clear \
    && php artisan route:clear

# Permission fix untuk Laravel
RUN mkdir -p storage/logs \
    && touch storage/logs/laravel.log \
    && chmod -R 777 storage bootstrap/cache

# Clear cache otomatis setelah copy file
RUN php artisan optimize:clear

RUN php artisan config:clear && php artisan cache:clear

# Expose port (Railway pakai 8080)
EXPOSE 8080

# Jalankan Laravel pakai PHP built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]

