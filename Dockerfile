FROM roundcube/roundcubemail:1.6.9-apache

COPY custom-php.ini /usr/local/etc/php/conf.d/zzz-custom-php.ini
COPY . /var/www/html/public_html
RUN find /var/www/html/public_html/plugins -name "config.inc.php.dist" -exec bash -c 'cp "$1" "${1%.dist}"' _ {} \;
RUN chown -R www-data:www-data /var/www/html
