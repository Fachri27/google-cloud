# ===========================
# Stage 1: Build frontend (Tailwind + Alpine via Vite)
# ===========================
FROM node:20 AS frontend

WORKDIR /app

# Copy package.json dan package-lock.json
COPY package*.json ./

# Install dependencies
RUN npm install

# Copy semua file (termasuk vite.config.js, resources, dll)
COPY . .

# Build assets
RUN npm run build


# ===========================
# Stage 2: PHP Laravel App
# ===========================
FROM php:8.2-fpm AS backend

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libonig-dev libxml2-dev zip curl \
    && docker-php-ext-install pdo_mysql mbstring gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy semua file ke container
COPY . .

# Copy hasil build frontend dari stage frontend
COPY --from=frontend /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Laravel optimization
RUN php artisan config:clear \
    && php artisan route:clear \
    && php artisan view:clear \
    && php artisan storage:link || true

# ===========================
# Stage 3: Run app
# ===========================
FROM php:8.2-cli AS runner

WORKDIR /var/www/html

# Install extensions lagi (minimal runtime)
RUN apt-get update && apt-get install -y libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql mbstring gd

# Copy project dari backend stage
COPY --from=backend /var/www/html .

# Railway pakai PORT env
CMD php artisan serve --host=0.0.0.0 --port=$PORT
