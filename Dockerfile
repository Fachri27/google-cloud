# -------------------------------
# Stage 1: Node build (frontend)
# -------------------------------
FROM node:20 AS node-build

# Set working directory
WORKDIR /app

# Copy package files
COPY package.json package-lock.json ./

# Install dependencies
RUN npm install

# Copy frontend assets
COPY . .

# Build assets
RUN npm run build

# -------------------------------
# Stage 2: PHP / Laravel
# -------------------------------
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www/html

# Install PHP extensions & system deps
RUN apt-get update && apt-get install -y \
    libpng-dev libonig-dev libxml2-dev zip unzip git curl \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy composer files first for caching
COPY composer.json composer.lock ./

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy Laravel app source
COPY . .

# Copy built frontend from Node stage
COPY --from=node-build /app/public/build ./public/build

# Set permissions
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose port for Railway
EXPOSE 8080

# Run Laravel server (Railway uses $PORT)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
