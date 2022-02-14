FROM php:7.4-apache
COPY ./Webserver/ /var/www/html/
RUN chown www-data:www-data /var/www/html/ \
    && chmod ug+rwx /var/www/html/ \
    && chmod o-wx /var/www/html/ \
    && docker-php-ext-install mysqli \
    && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
EXPOSE 80