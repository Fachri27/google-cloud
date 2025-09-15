FROM php:8.2-apache

# Install PHP extensions
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev zip curl \
    nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd

# Enable Apache rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies & build assets (Vite)
RUN npm install && npm run build

# Set Laravel permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Point Apache to Laravel public directory
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && sed -ri -e 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf

EXPOSE 80
CMD ["apache2-foreground"]