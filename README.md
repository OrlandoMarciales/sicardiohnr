 Plantilla General Para Proyectos del MINSAL
====================================================
1) Pasos para hacer funcionar la plantilla
---------------------------------------
* Verificar si se tiene el archivo composer.phar. Si se encuentra pasar al siguiente paso; si no se 
tiene debe de realizar los siguientes pasos:
    ** Como usuario normal ejecutar: curl -s https://getcomposer.org/installer | php
    ** Agregar el parameters.yml en el directorio app/config/ con un contenido similar al siguiente:
parameters:
    database_driver: pdo_pgsql
    database_host: nombreHost
    database_port: ''
    database_name: nombreBase
    database_user: usuarioBase
    database_password: contraseñaBase
    mailer_transport: smtp
    mailer_host: localhost
    mailer_user: null
    mailer_password: null
    locale: es_SV
    secret: df1ca40cfc425c4f34e654696720435a044b9ca9
    database_path: null
    ** Crear los directorios cache/ y logs/ dentro del directorio app/
    ** Como usuario normal ejecutar: php composer.phar install
    ** Aplicar las acl al directorio cache y logs:
            setfacl -R -m u:www-data:rwx -m u:`whoami`:rwx app/cache/ app/logs/
            setfacl -dR -m u:www-data:rwx -m u:`whoami`:rwx app/cache/ app/logs/
    ** Actualizar la base de datos con la siguiente sentencia: 
            php app/console doctrine:schema:create
    ** Crear el usuario administrador del sistema con la siguiente sentencia: 
            php app/console fos:user:create NOMBRE_USUARIO CORREO_USUARIO CONTRASEÑA --super-admin
    ** Realizar el virtual host y probar la URL para que aparezca la página de autenticación:
                http://mi_servidor/app_dev.php/admin/login
