FROM php:5.6-apache

RUN apt-get update -y && apt-get install git -y
RUN docker-php-ext-install pdo pdo_mysql

RUN git clone https://github.com/nrk/predis /var/www/html/predis
COPY ./index.php /var/www/html/index.php
