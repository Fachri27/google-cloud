# ---------- Base Image ----------
FROM php:8.2-fpm

# ---------- System dependencies ----------
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    curl \
    npm \
    nodejs \
    && docker-php-ext-install pdo_mysql zip

# ---------- Install Composer ----------
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ---------- Set working directory ----------
WORKDIR /var/www/html

# ---------- Copy all source code ----------
COPY . .

# ---------- Copy composer files & install deps ----------
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader


# ---------- Build frontend (Tailwind + Alpine) ----------
RUN npm install
RUN npm run build

# ---------- Fix permissions ----------
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# ---------- Clear Laravel cache ----------
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan view:clear \
    && php artisan route:clear

# ---------- Expose port ----------
EXPOSE 8080

# ---------- Start Laravel server ----------
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
