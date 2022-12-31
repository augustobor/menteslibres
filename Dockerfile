FROM php:7.2-apache

RUN apt-get update && apt-get install -y libpq-dev && docker-php-ext-install pdo pdo_pgsql
RUN apt-get install php-pgsql
COPY /src /var/www/html
EXPOSE 80