FROM php:8.2-fpm
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd pdo pdo_mysql
WORKDIR /var/www
COPY . .
RUN chown -R www-data:www-data /var/www/storage /var/www/cache
EXPOSE 9000
CMD ["php-fpm"]