# Documentación del Proyecto: Sinopsis Studio

Este documento detalla el estado actual, la arquitectura técnica y los requisitos del proyecto web **Sinopsis Studio**, con el fin de facilitar futuras migraciones (por ejemplo, a SiteGround) o configuraciones en entornos de desarrollo local.

## 1. Stack Tecnológico

*   **Lenguaje Base:** PHP 7.4 (Versión original en la que fue desarrollado el proyecto. **NOTA CRÍTICA: El código fuente y su lógica original NO deben ser actualizados ni modificados; se deben mantener tal cual para evitar posibles incompatibilidades**, aunque la sintaxis soporte entornos de ejecución PHP 8.x). No utiliza frameworks pesados como Laravel o Symfony; está desarrollado en **PHP Vanilla (Nativo)** con una estructura personalizada.
*   **Base de Datos:** MySQL / MariaDB.
*   **Servidor Web:** Apache (requiere tener habilitado el módulo `mod_rewrite` para que las reglas del archivo `.htaccess` funcionen correctamente).
*   **Frontend:** HTML, CSS, JavaScript nativo y jQuery. (Diseño estructurado mediante vistas y plantillas en las carpetas públicas).

## 2. Librerías y Dependencias

El proyecto utiliza dependencias gestionadas mediante **Composer** (ubicadas en las carpetas `vendor` / `panel/vendor`):

*   **PHPMailer (`class.phpmailer.php`):** Utilizada para el envío de correos electrónicos desde los formularios de contacto.
*   **AWS SDK for PHP:** Utilizado en el panel de administración (`s3.php`, `addaudio.php`, `addvideo.php`) para subir contenido multimedia (fotos, audios, videos) directamente a un bucket de **Amazon S3** (`gomademascar-noticias`).

## 3. Conexión a Base de Datos y Configuración

Las variables de entorno y las conexiones a bases de datos se gestionan de forma centralizada. Cuando se migre el sitio a producción (SiteGround), se deben modificar estrictamente estos archivos:

1.  **`config/config.php`**
    *   Define las constantes del sistema como `URL` (ej. `https://tusitio.com/`).
    *   Define las credenciales de la base de datos (`SERVER`, `USER`, `PASS`, `BD`).
2.  **`config/conexion.php` (o similar dentro del panel)**
    *   Gestiona la conexión mediante la extensión **`mysqli`**.

**Importante:** Asegurarse de que el usuario de la base de datos en SiteGround tenga todos los privilegios sobre la base de datos importada.

## 4. Estructura de Directorios Clave

*   `/config/` : Archivos de conexión y definición de constantes globales.
*   `/panel/` : Sistema de gestión de contenidos (CMS) propio. Administra:
    *   Portafolio / Proyectos.
    *   Blog (Artículos).
    *   Clientes y Servicios.
    *   Gestión de usuarios y buzón de correos.
*   `/uploads/` y `/panel/assets/uploads/` : Directorios de destino para archivos locales (si no van a Amazon S3). Deben tener permisos de escritura (generalmente `755` o `775` en servidores Linux/SiteGround).

## 5. Autenticación y Seguridad

*   **Cifrado de contraseñas:** El sistema no guarda contraseñas en texto plano. Utiliza las funciones nativas y seguras de PHP (`password_hash()` y `password_verify()`) bajo el algoritmo **BCRYPT**.
*   **Archivos Sensibles:** Los archivos `.gitignore` y `.htaccess` están configurados para proteger directorios críticos y evitar subir credenciales reales al repositorio.

## 6. Consideraciones para la Migración a SiteGround (Producción)

Para desplegar este proyecto en un servidor en vivo, asegúrate de cumplir los siguientes pasos:

1.  **Subir archivos:** Subir todo el contenido (excepto la carpeta `.git` y el archivo `config.example.php`) al directorio `public_html` de SiteGround.
2.  **Importar Base de Datos:** Crear una nueva base de datos MySQL desde el cPanel de SiteGround e importar el archivo `.sql` de estructura y datos (ej. `dbsw8j8gs0l1v8.sql`).
3.  **Actualizar Credenciales:** Editar `config/config.php` y colocar el nombre de la nueva base de datos, el usuario y la contraseña generados en SiteGround.
4.  **Actualizar URL:** En `config/config.php`, cambiar la constante `URL` de `http://sinopsis.local/` al dominio real (ej. `https://sinopsisstudio.com/`).
5.  **Permisos de Escritura:** Validar que las carpetas de subida (`/uploads`, `/php_errorlog`) tengan permisos `755` para que PHP pueda escribir en ellas.
6.  **Amazon S3:** Configurar nuevamente las credenciales de `IAM_KEY` e `IAM_SECRET` en los archivos del panel (si se va a seguir usando el almacenamiento en la nube). **NUNCA** subir estas credenciales a GitHub.
7.  **Forzar HTTPS:** Es recomendable activar el certificado SSL (Let's Encrypt gratuito en SiteGround) y forzar la redirección a HTTPS, ya sea desde el panel de SiteGround o editando el archivo `.htaccess`.
