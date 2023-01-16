FROM php:8.1.12-apache-buster
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli pdo_mysql