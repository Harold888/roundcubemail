FROM roundcube/roundcubemail:1.6.9-apache

# Copiar configuración PHP personalizada
COPY custom-php.ini /usr/local/etc/php/conf.d/zzz-custom-php.ini

# Copiar tu código (Roundcube modificado)
COPY . /var/www/html/public_html

# Permisos
RUN chown -R www-data:www-data /var/www/html