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
    git \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql zip curl xml

# Cambiar usuario a root para las siguientes operaciones
USER root

# Copiar todo el contenido del proyecto en el contenedor
COPY . /application

RUN cp .env.example .env

# Configurar entorno de trabajo en el directorio del proyecto
WORKDIR /application

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer install

# Instalar dependencias de Node.js y construir assets
#RUN npm install

#RUN npm run build

# Ajustar permisos para los directorios necesarios
RUN chown -R www-data:www-data /application \
    && chmod 775 -R /application \
    && chmod -R 777 /application/storage \
    && chown -R www-data:www-data /application/storage /application/bootstrap/cache

# Exponer el puerto 9000 para PHP-FPM (comunicación entre Nginx y PHP-FPM)
EXPOSE 9000

# Ejecuta PHP-FPM
CMD ["php-fpm"]
