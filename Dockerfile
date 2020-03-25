FROM wordpress:5.3.2-php7.2-apache

WORKDIR /var/www/html/wp-content/themes

RUN mkdir tocando-tierra

COPY template/ tocando-tierra/

WORKDIR /var/www/html

