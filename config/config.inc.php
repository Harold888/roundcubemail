<?php

/*
 +-----------------------------------------------------------------------+
 | Configuración local para la instalación de Roundcube Webmail.         |
 |                                                                       |
 | Este es un archivo de configuración de ejemplo que solo contiene       |
 | la configuración mínima necesaria para una instalación funcional.      |
 | Puedes copiar más opciones desde defaults.inc.php a este archivo       |
 | para sobreescribir las configuraciones por defecto.                    |
 |                                                                       |
 | Este archivo es parte del cliente Roundcube Webmail                    |
 | Copyright (C) The Roundcube Dev Team                                   |
 |                                                                       |
 | Licenciado bajo la Licencia Pública General GNU versión 3 o            |
 | cualquier versión posterior, con excepciones para skins y plugins.     |
 | Consulta el archivo README para ver la licencia completa.              |
 +-----------------------------------------------------------------------+
*/

$config = [];

// Cadena de conexión a la base de datos (DSN) para operaciones de lectura y escritura
// Formato (compatible con PEAR MDB2): db_provider://usuario:contraseña@host/base_de_datos
// Proveedores soportados actualmente: mysql, pgsql, sqlite
// Para SQLite usa una ruta absoluta (Linux): 'sqlite:////ruta/completa/a/sqlite.db?mode=0646'
// o en Windows: 'sqlite:///C:/ruta/completa/a/sqlite.db'
$config['db_dsnw'] = sprintf(
    'mysql://%s:%s@%s/%s',
    getenv('DB_USER'),
    getenv('DB_PASS'),
    getenv('DB_HOST'),
    getenv('DB_NAME')
);

// Servidor IMAP que se utilizará para iniciar sesión
// Consulta defaults.inc.php para la descripción de la opción
$config['imap_host'] = 'localhost:143';

// Servidor SMTP (para enviar correos)
// Consulta defaults.inc.php para la descripción de la opción
$config['smtp_host'] = 'localhost:587';

// Usuario SMTP (si se requiere); si usas %u como nombre de usuario
// Roundcube usará el nombre de usuario actual para iniciar sesión
$config['smtp_user'] = '%u';

// Contraseña SMTP (si se requiere); si usas %p como contraseña
// Roundcube usará la contraseña del usuario actual
$config['smtp_pass'] = '%p';

// URL de soporte donde los usuarios pueden obtener ayuda para esta instalación de Roundcube
// POR FAVOR NO PONGAS AQUÍ EL SITIO DE ROUNDCUBE.NET
$config['support_url'] = '';

// Nombre de tu servicio. Se muestra en la pantalla de inicio de sesión y en el título de la ventana
$config['product_name'] = 'Roundcube Webmail';

// Esta clave se usa para cifrar la contraseña IMAP de los usuarios que se guarda
// en la sesión. Para el método de cifrado por defecto, debe tener
// exactamente 24 caracteres de largo.
// TU CLAVE DEBE SER DIFERENTE A ESTE VALOR DE EJEMPLO POR RAZONES DE SEGURIDAD
$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

// Lista de plugins activos (en el directorio plugins/)
$config['plugins'] = [
    'archive',
    'zipdownload',
];

// Nombre del skin: carpeta dentro de skins/
$config['skin'] = 'elastic';

// AUMENTO DEL LÍMITE DE TAMAÑO DE MENSAJE (incluye adjuntos)
// Esto establece el tamaño máximo permitido de los mensajes en 64MB
$config['max_message_size'] = '64M';
