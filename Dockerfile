FROM php:7.3-fpm-alpine

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql
