FROM php:7.4.3-apache
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN apt-get update && apt-get upgrade -y

# Install git
RUN apt-get install -y git

# Install zip this is used by composer
RUN apt-get install -y --fix-missing \
  apt-utils \
  gnupg\
  libzip-dev \
  zip \
  && docker-php-ext-install zip

RUN docker-php-ext-install mysqli pdo pdo_mysql 
#Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
--install-dir=/usr/bin --filename=composer && chmod +x /usr/bin/composer 