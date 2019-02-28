FROM php:7.2.7-fpm-alpine3.7
RUN apk update; \
    apk upgrade; \
    apk add zlib-dev;
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install zip
