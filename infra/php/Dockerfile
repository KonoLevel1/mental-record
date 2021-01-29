FROM php:8.0.1-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

# DockerでVimを使えるようにする
RUN ["apt-get", "update"]
RUN ["apt-get", "install", "-y", "vim"]

RUN apt-get -y update
RUN apt-get install -y \
  curl \
  gnupg
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get install -y nodejs
RUN npm install npm@latest -g
RUN apt-get update
RUN apt-get install vim
RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_mysql zip bcmath

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work