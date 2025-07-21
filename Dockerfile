FROM php:8.2-fpm

# Installer nginx, extensions PHP et autres
RUN apt-get update && apt-get install -y \
    nginx \
    libpq-dev \
    unzip \
    zip \
    git \
    && docker-php-ext-install pdo pdo_pgsql

# Installer Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir dossier de travail
WORKDIR /var/www/html

# Copier tout le projet
COPY . .

# Installer dépendances PHP
RUN composer install

# Copier configuration NGINX
COPY .docker/nginx/default.conf /etc/nginx/conf.d/default.conf

# Copier le script de démarrage
COPY start.sh /start.sh
RUN chmod +x /start.sh

EXPOSE 80

CMD ["/start.sh"]
