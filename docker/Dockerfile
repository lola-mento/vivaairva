FROM php:8.2-apache

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

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar archivo de configuración de Apache
COPY ./docker/apache/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Establecer el directorio raíz de Apache
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Ajustar configuración de Apache para que apunte al directorio public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql zip curl xml

# Cambiar usuario a root para las siguientes operaciones
USER root

# Copiar todo el contenido del proyecto en el contenedor
COPY . /var/www/html

# Configurar entorno de trabajo en el directorio del proyecto
WORKDIR /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Ajustar permisos para los directorios necesarios
RUN chown -R www-data:www-data /var/www/html \
    && chmod 775 -R /var/www/html \
    && chmod -R 777 /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Cambiar el usuario a www-data (usuario de Apache)
USER www-data

RUN composer install --no-interaction --prefer-dist

RUN npm install

# Exponer el puerto 80 para Apache
EXPOSE 80
