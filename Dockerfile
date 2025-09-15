# ===========================
# Base image: PHP + Node
# ===========================
FROM php:8.2-fpm-alpine

# Set working directory
WORKDIR /var/www/html

# ===========================
# Install system dependencies
# ===========================
RUN apk add --no-cache \
    bash \
    git \
    unzip \
    curl \
    npm \
    nodejs \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    oniguruma-dev \
    postgresql-dev \
    zlib-dev \
    icu-dev \
    libzip-dev \
    shadow \
    yarn

# ===========================
# Install PHP extensions
# ===========================
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip intl

# ===========================
# Install Composer
# ===========================
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# ===========================
# Copy source code
# ===========================
COPY . .

# ===========================
# Copy composer files & install deps
# ===========================
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# ===========================
# Install & build frontend
# ===========================
RUN npm install && npm run build

# ===========================
# Fix permissions
# ===========================
RUN chown -R www-data:www-data storage bootstrap/cache public \
    && chmod -R 775 storage bootstrap/cache public

# ===========================
# Clear caches
# ===========================
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan route:clear \
    && php artisan view:clear

# ===========================
# Expose port for Railway
# ===========================
EXPOSE 8080

# ===========================
# Start Laravel server
# ===========================
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
