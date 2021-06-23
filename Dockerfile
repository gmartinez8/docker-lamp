FROM php:7.4.3-apache
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN apt-get update && apt-get upgrade -y
RUN apt-get install -y git
RUN docker-php-ext-install mysqli pdo pdo_mysql
#Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer 