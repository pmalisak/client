FROM trafex/php-nginx:latest

USER root

RUN apk add --no-cache \
    php83-iconv \
    make

RUN sed -i 's|root /var/www/html|root /var/www/html/public|g' /etc/nginx/conf.d/default.conf

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php \
  && php -r "unlink('composer-setup.php');" \
  && mv composer.phar /usr/local/bin/composer

USER nobody
