FROM php:7.3-fpm-alpine

RUN apk update && apk add curl && \
  curl -sS https://getcomposer.org/installer | php \
  && chmod +x composer.phar && mv composer.phar /usr/local/bin/composer

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
