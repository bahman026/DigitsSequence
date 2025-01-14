FROM php:8.4-fpm

RUN apt-get update
RUN apt-get install -y curl
RUN apt-get install -y zip
RUN apt-get install -y unzip
RUN apt-get install -y libzip-dev
RUN apt-get install -y libgmp-dev

RUN docker-php-ext-install zip gmp

RUN useradd -m -d /home/appuser -s /bin/bash appuser \
    && chown -R appuser:appuser /var/www/html

USER appuser

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . /var/www/html
WORKDIR /var/www/html

ENTRYPOINT ["composer", "install"]
