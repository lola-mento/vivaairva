FROM php:8.2-apache

# Actualizar los paquetes y dependencias necesarias
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
    curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*


RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
apt-get install -y nodejs

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install pdo_mysql zip curl xml

# Copiar todo el contenido del proyecto en el contenedor
COPY . /var/www/html

# Configurar entorno de trabajo en el directorio del proyecto
WORKDIR /var/www/html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Configurar el VirtualHost de Apache para que apunte al directorio public
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Habilitar mod_rewrite para Laravel
RUN a2enmod rewrite

# Reiniciar Apache después de los cambios
RUN service apache2 restart

#Estos comandos se deben agregar dentro del contenedor(La primera vez que se suba el Docker):
#composer install
#npm install
#chown -R www-data:www-data /var/www/html \ && chmod 775 -R /var/www/html \ && chmod -R 777 /var/www/html/storage \ && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
#cp .env.example .env
#php artisan key:generate
#php artisan migrate
#npm run build