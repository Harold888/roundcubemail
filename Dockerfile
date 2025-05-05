FROM roundcube/roundcubemail:1.6.9-apache

RUN echo "upload_max_filesize = 50M" > /usr/local/etc/php/conf.d/custom-php.ini && \
    echo "post_max_size = 55M" >> /usr/local/etc/php/conf.d/custom-php.ini && \
    echo "memory_limit = 128M" >> /usr/local/etc/php/conf.d/custom-php.ini
