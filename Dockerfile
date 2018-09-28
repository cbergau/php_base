FROM php:7.2-apache

RUN docker-php-ext-install opcache

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY . .
