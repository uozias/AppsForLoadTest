FROM php:5.6-apache
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
  && apt-get install -y vim libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev  libicu-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt intl
RUN pecl channel-update pecl.php.net \
    && yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini
COPY default.conf /etc/apache2/sites-available/default.conf
RUN a2enmod rewrite \
    && a2ensite default
