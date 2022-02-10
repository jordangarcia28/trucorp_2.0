FROM php:7.4-apache
ADD index.php /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN chown -R www-data /var/www
RUN chgrp -R www-data /var/www
RUN chmod -R 774 /var/www
EXPOSE 80
