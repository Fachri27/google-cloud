# ===========================
# Stage 1: Frontend build (Tailwind + Alpine via Vite)
# ===========================
FROM node:20 AS frontend

WORKDIR /app

COPY package*.json vite.config.js ./
RUN npm install

COPY resources ./resources
COPY postcss.config.js tailwind.config.js ./
RUN npm run build


# ===========================
# Stage 2: Backend (Laravel + Composer)
# ===========================
FROM php:8.2-cli AS backend

RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring gd

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy composer files & install deps
COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader

# Copy source code (kecuali public/build)
COPY . .
RUN rm -rf public/build

# Copy hasil build terbaru dari stage frontend
COPY --from=frontend /app/public/build ./public/build

# Clear & optimize Laravel cache
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan storage:link || true

CMD php artisan serve --host=0.0.0.0 --port=$PORT
