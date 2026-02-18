FROM php:8.2-cli

# Instalar dependencias del sistema esenciales
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql zip mbstring exif pcntl bcmath gd

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copiar archivos de dependencias primero
COPY package*.json composer.json composer.lock ./

# Copiar el resto del código
COPY . .

# Permisos críticos para Laravel
RUN chown -R www-data:www-data /var/www \
    && chmod -R 775 /var/www/storage /var/www/bootstrap/cache

# Exponemos el puerto 8000 que es el que mapeas en el Compose
EXPOSE 8000

# El comando se define en el compose, pero dejamos una base segura
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]