FROM php:8.2-fpm

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    zip \
    libcurl4 \
    libcurl4-openssl-dev \
    unzip \
    libxml2-dev \
    nodejs \
    npm \
    git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql zip curl xml

# Cambiar usuario a root para las siguientes operaciones
USER root

# Copiar todo el contenido del proyecto en el contenedor
COPY . /var/www/html

RUN cp .env.example .env

# Configurar entorno de trabajo en el directorio del proyecto
WORKDIR /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

# Instalar dependencias de Node.js y construir assets
RUN npm install

RUN npm run build

# Ajustar permisos para los directorios necesarios
RUN chown -R www-data:www-data /var/www/html \
    && chmod 775 -R /var/www/html \
    && chmod -R 777 /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]