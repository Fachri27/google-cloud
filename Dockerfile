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

# Gunakan image resmi PHP dengan Apache
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Copy semua file project ke container
COPY . .

# Install ekstensi PHP yang sering dipakai
RUN docker-php-ext-install pdo pdo_mysql mbstring

# Expose port 80 untuk web
EXPOSE 80

# Jalankan Apache
CMD ["apache2-foreground"]
