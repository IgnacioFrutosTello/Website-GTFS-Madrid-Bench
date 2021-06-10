# Instalar composer (opcion 2)
FROM composer as builder
WORKDIR /app/
COPY composer.* ./
RUN composer install


FROM php:7.3-fpm-alpine

#opcion 1
 RUN apk update && apk add curl && \
  curl -sS https://getcomposer.org/installer | php \
 && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Get latest Composer (con la opcion 1)
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Get latest Composer (con la opcion 2)
# COPY --from=builder /app/vendor /var/www/vendor