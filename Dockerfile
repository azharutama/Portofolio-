# Use an official PHP-FPM image with Alpine Linux for a smaller image size
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk update && apk add --no-cache \
    nginx \
    mysql-client \
    git \
    build-base \
    libpng-dev \
    jpeg-dev \
    zip \
    unzip \
    icu-dev \
    libzip-dev \
    oniguruma-dev # <--- TAMBAHKAN BARIS INI

# Install PHP extensions
RUN docker-php-ext-install -j$(nproc) \
    pdo_mysql \
    gd \
    zip \
    exif \
    bcmath \
    mbstring \
    intl \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application code (excluding .env and vendor, which will be handled by Docker/Composer)
COPY . .

# Install PHP dependencies
# --no-dev to exclude development dependencies in production
RUN composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev

# Generate application key if not already present
RUN php artisan key:generate --ansi

# Run database migrations (optional, can be done as a separate step or initContainer in Kubernetes)
# RUN php artisan migrate --force

# Set appropriate permissions for Laravel storage and bootstrap/cache directories
RUN chown -R www-data:www-data storage bootstrap/cache && \
    chmod -R 775 storage bootstrap/cache

# Expose port 9000 for PHP-FPM
EXPOSE 9000

# Start PHP-FPM
CMD ["php-fpm"]