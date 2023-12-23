FROM php:8.2.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html/
COPY ./src .

RUN chown -R root:www-data /var/www/html
RUN chmod 750 /var/www/html
RUN find . -type f -exec chmod 640 {} \;
RUN find . -type d -exec chmod 750 {} \;

RUN chmod +t -R /var/www/html/
