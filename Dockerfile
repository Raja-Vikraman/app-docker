FROM php:7-fpm
RUN apt-get update
RUN docker-php-ext-install pdo pdo_mysql mysqli
COPY --from=composer:2.0.12 /usr/bin/composer /usr/local/bin/composer
