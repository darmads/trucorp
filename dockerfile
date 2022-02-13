FROM php:7.4-apache

WORKDIR /var/www/html
COPY index.php index.php

RUN chown -R www-data:www-data /var/www/html
RUN chmod o-wx /var/www/html
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

EXPOSE 80