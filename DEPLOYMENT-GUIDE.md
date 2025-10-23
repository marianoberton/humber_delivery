# Guía Profesional de Despliegue

## Introducción

Esta guía detalla las mejores prácticas y procedimientos para desplegar esta landing page multiidioma. Cubre dos enfoques de implementación: una versión PHP dinámica y una versión HTML estática, permitiéndole elegir la que mejor se adapte a su infraestructura y necesidades.

## Tabla de Contenido

- [Requisitos Previos](#requisitos-previos)
- [Opción 1: Despliegue de la Versión PHP (Recomendado)](#opción-1-despliegue-de-la-versión-php-recomendado)
- [Opción 2: Despliegue de la Versión Estática](#opción-2-despliegue-de-la-versión-estática)
- [Configuración del Servidor Web](#configuración-del-servidor-web)
- [Verificación Post-Despliegue](#verificación-post-despliegue)
- [Solución de Problemas Comunes](#solución-de-problemas-comunes)
- [Soporte](#soporte)

## Requisitos Previos

Antes de comenzar, asegúrese de que su entorno cumpla con los siguientes requisitos:

- **Para la versión PHP:**
  - PHP 7.4 o superior (se recomienda 8.0+)
  - Servidor web (Apache, Nginx)
  - Acceso para configurar variables de entorno y reglas de reescritura.
- **Para la versión estática:**
  - Cualquier servidor web o plataforma de hosting de sitios estáticos (Netlify, Vercel, GitHub Pages).

## Opción 1: Despliegue de la Versión PHP (Recomendado)

Este enfoque ofrece la máxima flexibilidad y es ideal para entornos de servidor tradicionales.

### Pasos de Despliegue

1.  **Transferir Archivos:** Copie el contenido del directorio `humber-landing-php/` al directorio raíz de su servidor (ej. `/var/www/html`).
2.  **Configurar Variables de Entorno:**
    -   Renombre el archivo `.env.example` a `.env`.
    -   Edite el archivo `.env` para configurar los parámetros de la aplicación, como las credenciales de la API de notificaciones y los números de contacto regionales.
3.  **Configurar el Servidor Web:**
    -   Asegúrese de que su servidor web redirija todas las solicitudes al archivo `index.php`. Consulte la sección [Configuración del Servidor Web](#configuración-del-servidor-web) para ver ejemplos.
4.  **Establecer Permisos:**
    -   Asegúrese de que los directorios tengan permisos `755` y los archivos `644` para garantizar la seguridad y el correcto funcionamiento.

## Opción 2: Despliegue de la Versión Estática

Esta opción es ideal para simplicidad y velocidad, utilizando plataformas de hosting modernas.

### Pasos de Despliegue

1.  **Subir Archivos:** Despliegue el contenido del directorio `humber-landing-static/` en su plataforma de hosting preferida (Netlify, Vercel, etc.).
2.  **Configuración Manual:**
    -   A diferencia de la versión PHP, deberá editar manualmente los archivos `index.html` y `index-pt.html` para actualizar los números de teléfono, el ID de Google Tag Manager y cualquier otro contenido.
3.  **Configurar Redirecciones (si es necesario):**
    -   Configure reglas en su proveedor de hosting para que la ruta `/br` sirva el archivo `index-pt.html`.

## Configuración del Servidor Web

### Apache (`.htaccess`)

Para habilitar URLs amigables, cree un archivo `.htaccess` en el directorio raíz con el siguiente contenido:

```apache
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```

### Nginx

Agregue el siguiente bloque `location` a la configuración de su servidor Nginx:

```nginx
location / {
    try_files $uri $uri/ /index.php?$query_string;
}

location ~ \.php$ {
    fastcgi_pass unix:/var/run/php/php8.2-fpm.sock; # Ajuste a su socket PHP-FPM
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}
```

## Verificación Post-Despliegue

### Lista de Verificación

- [ ] El dominio o subdominio apunta correctamente a la IP del servidor.
- [ ] Se ha configurado un certificado SSL (HTTPS).
- [ ] Las URLs (`/` y `/br`) cargan las versiones correctas del sitio.
- [ ] Los activos (CSS, JS, imágenes) se cargan sin errores 404.
- [ ] Los enlaces de contacto (WhatsApp) funcionan y son correctos.
- [ ] No hay errores en la consola del navegador.

### Pruebas Locales

Para una verificación rápida antes del despliegue, puede usar el servidor incorporado de PHP:

```bash
# Desde el directorio humber-landing-php
php -S localhost:8001
```

## Solución de Problemas Comunes

-   **Error 500 (Internal Server Error):** Generalmente causado por una sintaxis incorrecta en `.htaccess` o permisos de archivo incorrectos. Revise los logs de error de su servidor.
-   **Página en Blanco:** A menudo es un error de PHP. Habilite la visualización de errores de PHP en su entorno de desarrollo o revise los logs de PHP.
-   **Assets no Cargan (Error 404):** Verifique que las rutas a los archivos CSS, JS e imágenes en su HTML sean correctas en relación con la raíz de su dominio.

## Soporte

Si encuentra problemas técnicos durante el despliegue, consulte la documentación del proyecto o revise los logs de error de su servidor web para obtener más información sobre posibles problemas de configuración.