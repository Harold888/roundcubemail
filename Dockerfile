FROM roundcube/roundcubemail:1.6.9-apache

# Config PHP
COPY custom-php.ini /usr/local/etc/php/conf.d/custom-php.ini

# Copiar tu config.inc.php al path correcto de la imagen oficial
COPY config/config.inc.php /var/roundcube/config/config.inc.php

# Copiar tu código (Roundcube modificado)
COPY . /var/www/html/public_html

# Permisos
RUN chown -R www-data:www-data /var/www/html