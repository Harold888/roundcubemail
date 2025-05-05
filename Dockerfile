FROM roundcube/roundcubemail:1.6.9-apache

# Copiar configuración PHP personalizada
COPY custom-php.ini /usr/local/etc/php/conf.d/zzz-custom-php.ini

# Copiar tu código (Roundcube modificado)
COPY . /var/www/html

# Copiar los config.inc.php.dist a config.inc.php
RUN find /var/www/html/plugins -name "config.inc.php.dist" -exec bash -c 'cp "$1" "${1%.dist}"' _ {} \;

# Permisos
RUN chown -R www-data:www-data /var/www/html
