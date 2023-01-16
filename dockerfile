FROM php:8.1.12-apache-buster
RUN a2enmod rewrite && service apache2 restart
RUN docker-php-ext-install pdo pdo_mysql
WORKDIR /var/www/html