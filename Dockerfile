# Stage 1: build frontend
FROM node:20 AS frontend

WORKDIR /app

COPY package*.json vite.config.js tailwind.config.js postcss.config.js ./
RUN npm install

COPY resources ./resources
RUN npm run build

# Stage 2: backend PHP
FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y unzip git curl libpng-dev libonig-dev libxml2-dev zip \
    && docker-php-ext-install pdo_mysql mbstring gd \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy Laravel source
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Copy frontend build
COPY --from=frontend /app/public/build ./public/build

# Clear cache
RUN php artisan config:clear \
    && php artisan cache:clear \
    && php artisan view:clear

EXPOSE 8080

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
