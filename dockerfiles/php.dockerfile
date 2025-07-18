FROM php:8.3-fpm

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions gd  mysqli pdo_mysql  pgsql pdo_pgsql  mcrypt soap  zip json xml iconv curl bcmath @composer imagick rdkafka

WORKDIR /var/www/html/

RUN chown -R www-data:www-data /var/www
RUN chmod 755 /var/www
RUN echo 'memory_limit = 512M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

