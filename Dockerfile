FROM php:8.0-cli
RUN pecl install openswoole-22.0.0 \
    && docker-php-ext-enable swoole
COPY index.php /var/www
EXPOSE 9501

ENTRYPOINT ["php", "/var/www/index.php", "start"]
