FROM roundcube/roundcubemail:1.6.9-apache

# Copiar configuración PHP personalizada
COPY custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini

# Copiar tu código (Roundcube modificado)
COPY . /var/www/html

# Permisos
RUN chown -R www-data:www-data /var/www/html