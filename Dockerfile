# Usamos la imagen oficial de Roundcube
FROM roundcube/roundcubemail:1.6.9-apache

# Agregamos configuraciones personalizadas de PHP
RUN echo "upload_max_filesize = 50M" > /usr/local/etc/php/conf.d/custom-php.ini \
    && echo "post_max_size = 55M" >> /usr/local/etc/php/conf.d/custom-php.ini \
    && echo "memory_limit = 256M" >> /usr/local/etc/php/conf.d/custom-php.ini

# Copiamos tu código personalizado (desde el contexto de build)
COPY . /var/www/html

# Permisos opcionales si modificas archivos
RUN chown -R www-data:www-data /var/www/html
