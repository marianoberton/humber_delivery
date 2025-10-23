# Guía Profesional de Integración para PHP

## Introducción

Este documento proporciona instrucciones completas para desplegar la página de destino de Humber International en un entorno PHP estándar. Está diseñado para desarrolladores familiarizados con PHP y configuraciones comunes de servidores web (Apache/Nginx).

## Tabla de Contenido

- [Requisitos Previos](#requisitos-previos)
- [Enfoque Recomendado: `humber-landing-php`](#enfoque-recomendado-humber-landing-php)
- [Enfoque Alternativo: HTML Estático](#enfoque-alternativo-html-estático)
- [Configuración del Servidor](#configuración-del-servidor)
- [Despliegue y Verificación](#despliegue-y-verificación)
- [Solución de Problemas](#solución-de-problemas)
- [Soporte](#soporte)

## Requisitos Previos

- **PHP:** 7.4 o superior (8.0+ recomendado)
- **Servidor Web:** Apache 2.4+ o Nginx 1.18+
- **Extensiones de PHP:** `mbstring`, `json`, `curl`

## Enfoque Recomendado: `humber-landing-php`

Esta implementación es el método preferido, ya que incluye un sistema de enrutamiento y configuración flexible, lo que la hace adaptable y fácil de mantener.

### Despliegue Autónomo

Este es el método más sencillo para desplegar la página de destino.

1.  **Desplegar Archivos:** Copie el directorio completo `humber-landing-php/` a la raíz de su servidor web (ej., `/var/www/html`).
2.  **Configurar Entorno:** Renombre `.env.example` a `.env` y personalice las variables:

    ```env
    # Configuración de la Página de Destino de Humber
    LEAD_REST_URL=https://notifications.humberapp.com.ar/service/send
    LEAD_FROM_EMAIL=no-reply@humber.com.ar
    LEAD_FROM_NAME="Humber International"
    LEAD_TO_ALL=comercial.internacional@humber.com.ar
    LEAD_NOTIFY_BCC=leads@humber.com

    # Información de Contacto Regional
    WHATSAPP_AR="+54 9 11 2753-0009"
    WHATSAPP_CL="+56 9 5000 4666"
    WHATSAPP_BR="+55 43 9865-0213"

    # Analítica
    GTM_ID=GTM-NP6GMN3C
    ```

3.  **Configurar Servidor Web:** Configure reglas de reescritura para dirigir todas las solicitudes a `index.php`. Consulte la sección de [Configuración del Servidor](#configuración-del-servidor) para ver ejemplos.

### Integración en un Proyecto PHP Existente

1.  **Copiar Archivos Principales:**
    -   `index.php` (renómbrelo según sea necesario, ej., `landing.php`)
    -   Directorio `config/`
    -   Directorio `resources/`
    -   Directorios `assets/` y `js/` (colóquelos en su directorio web público)

2.  **Integrar Enrutador:** Adapte la lógica de enrutamiento de `index.php` al controlador frontal o sistema de enrutamiento de su aplicación existente. La lógica principal es una declaración `switch` que mapea las URIs a vistas específicas.

3.  **Cargar Ayudantes:** Asegúrese de que las funciones de ayuda `env()` y `config()` se carguen en el proceso de arranque de su aplicación.

## Enfoque Alternativo: HTML Estático

Utilice la versión `humber-landing-static` para despliegues simples y estáticos donde no se requiere configuración dinámica.

1.  **Desplegar Archivos:** Copie el contenido de `humber-landing-static/` a su servidor web.
2.  **Configuración Manual:** Debe editar manualmente los archivos HTML (`index.html` y `index-pt.html`) para actualizar:
    -   Información de contacto (números de WhatsApp)
    -   ID de Google Tag Manager
    -   Cualquier otro texto o enlace codificado.
3.  **Reescrituras del Servidor:** Configure su servidor web para manejar las rutas de idioma. Por ejemplo, una solicitud a `/br` debería servir `index-pt.html`.

## Configuración del Servidor

### Apache (`.htaccess`)

Cree un archivo `.htaccess` en la raíz de su proyecto con el siguiente contenido para habilitar URLs limpias:

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
    fastcgi_pass unix:/var/run/php/php8.2-fpm.sock; # Ajuste a su socket de PHP-FPM
    fastcgi_index index.php;
    fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    include fastcgi_params;
}
```

## Despliegue y Verificación

### Lista de Verificación de Despliegue

- [ ] Todos los archivos requeridos han sido subidos al servidor.
- [ ] El archivo `.env` está configurado correctamente y no es accesible públicamente.
- [ ] Las reglas de reescritura del servidor web están en su lugar y funcionando.
- [ ] Los permisos de archivos y directorios están configurados correctamente (ej., `755` para directorios, `644` para archivos).

### Verificación

1.  **Pruebas Locales:** Utilice el servidor web incorporado de PHP para una verificación rápida:
    ```bash
    php -S localhost:8001
    ```
2.  **Prueba de URLs:** Acceda a las siguientes URLs en su navegador:
    -   `http://your-domain.com/` (para español)
    -   `http://your-domain.com/br` (para portugués)
3.  **Verificación de Funcionalidad:**
    -   Verifique que todas las imágenes y activos se carguen correctamente.
    -   Confirme que todos los enlaces de contacto (WhatsApp) son correctos.
    -   Revise la consola del navegador en busca de errores de JavaScript o de red.

## Solución de Problemas

-   **Error 500 (Error Interno del Servidor):** Revise los registros de errores de su servidor web (ej., `/var/log/apache2/error.log` o `/var/log/nginx/error.log`). Esto a menudo es causado por una sintaxis incorrecta en `.htaccess` o problemas de permisos de archivos.
-   **Vista No Encontrada:** Asegúrese de que el directorio `resources/views/` y su contenido se hayan subido correctamente y que las rutas en `index.php` sean precisas.
-   **Activos No Cargan (404):** Verifique que las rutas de los activos en el HTML sean correctas en relación con la raíz de su web. Revise problemas de sensibilidad a mayúsculas y minúsculas si está desplegando en un servidor Linux.

## Soporte

Para consultas técnicas o para informar de problemas, por favor, abra una *incidencia* en el repositorio de GitHub del proyecto o contacte al equipo de desarrollo en `dev-team@humber.com.ar`.