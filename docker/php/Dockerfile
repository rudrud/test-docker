FROM php:7-fpm
MAINTAINER Rudy Leclercq <r.leclercq@epixelic.com>
RUN apt-get update \
    && apt-get install -y \
        libicu-dev \
        zlib1g-dev \
    && docker-php-source extract \
    && docker-php-ext-install \
        intl \
        mbstring \
        zip \
        pdo \
        pdo_mysql \
    && docker-php-source delete \
    && php -r "readfile('https://getcomposer.org/installer');" | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer