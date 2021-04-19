FROM php:7-fpm
WORKDIR /grm
RUN apt-get update && \
    apt-get install -y git && \
    git clone https://github.com/Raja-Vikraman/app-docker.git
#RUN docker-php-ext-install pdo pdo_mysql mysqli
#COPY --from=composer:2.0.12 /usr/bin/composer /usr/local/bin/composer
