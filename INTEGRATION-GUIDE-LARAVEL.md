# Guía Profesional de Integración para Laravel

## Introducción

Esta guía proporciona instrucciones detalladas para integrar la página de destino de Humber International en una aplicación Laravel nueva o existente. Está dirigida a desarrolladores con un conocimiento práctico del framework Laravel.

## Tabla de Contenido

- [Requisitos Previos](#requisitos-previos)
- [Estrategia de Integración](#estrategia-de-integración)
- [Integración Paso a Paso](#integración-paso-a-paso)
- [Configuración](#configuración)
- [Desarrollo y Despliegue](#desarrollo-y-despliegue)
- [Solución de Problemas](#solución-de-problemas)
- [Soporte](#soporte)

## Requisitos Previos

Antes de comenzar, por favor, asegúrese de que su entorno de desarrollo cumpla con los siguientes requisitos:

- Laravel 9.x o superior
- PHP 8.0 o superior
- Composer
- Node.js y npm/yarn

## Estrategia de Integración

Recomendamos encarecidamente utilizar la implementación `humber-landing-php`, ya que está construida con plantillas Blade y una estructura que es altamente compatible con Laravel. Este enfoque minimiza el esfuerzo de integración y se alinea con los principios arquitectónicos de Laravel.

No se recomienda la integración de la versión HTML estática, ya que requiere una conversión manual a Blade y no aprovecha los sistemas de configuración o enrutamiento de Laravel.

## Integración Paso a Paso

### 1. Copiar Vistas

Transfiera las plantillas Blade al directorio `resources/views` de su proyecto Laravel.

```bash
# Desde la raíz de su proyecto Laravel
cp -r ruta/a/humber-landing-php/resources/views/landing/ resources/views/landing/
```

### 2. Copiar Configuración

Copie el archivo de configuración `leads.php` a su directorio `config` de Laravel.

```bash
cp ruta/a/humber-landing-php/config/leads.php config/leads.php
```

### 3. Configurar Variables de Entorno

Añada las siguientes variables a su archivo `.env`. Son esenciales para la funcionalidad de la página de destino.

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

### 4. Copiar Activos Públicos

Copie todos los activos estáticos (CSS, JavaScript, imágenes) al directorio `public` de su proyecto.

```bash
# Asegúrese de crear un subdirectorio para evitar conflictos
cp -r ruta/a/humber-landing-php/assets/ public/humber-assets/
cp -r ruta/a/humber-landing-php/js/ public/humber-js/
```

**Nota:** Es posible que necesite actualizar las rutas de los activos dentro de las plantillas Blade para reflejar la nueva ubicación (ej., `asset(\'humber-assets/...\')`).

### 5. Definir Rutas y Controlador

Para una implementación limpia, cree un controlador dedicado para manejar la lógica de la página de destino.

**A. Crear el Controlador:**

```bash
php artisan make:controller LandingPageController
```

**B. Añadir Lógica al Controlador:**

```php
// app/Http/Controllers/LandingPageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    private function getPageConfig(string $lang)
    {
        $common = [
            'waAr' => config('leads.whatsapp.ar'),
            'waCl' => config('leads.whatsapp.cl'),
            'waBr' => config('leads.whatsapp.br'),
        ];

        $specific = [
            'es' => [
                'lang' => 'es',
                'title' => 'HUMBER - Transporte Internacional | Logística Argentina, Brasil, Chile',
                'description' => 'Líder en transporte de carga y logística internacional en Chile. Conectamos Argentina, Chile y Brasil con servicios especializados.',
                'canonical' => url('/'),
                'alternate' => url('/br'),
            ],
            'pt' => [
                'lang' => 'pt',
                'title' => 'HUMBER - Transporte Internacional | Logística Argentina, Brasil, Chile',
                'description' => 'Líder em transporte de carga e logística internacional no Chile. Conectamos Argentina, Chile e Brasil com serviços especializados.',
                'canonical' => url('/br'),
                'alternate' => url('/'),
            ],
        ];

        return array_merge($common, $specific[$lang]);
    }

    public function showSpanishLanding()
    {
        return view('landing.es', $this->getPageConfig('es'));
    }

    public function showPortugueseLanding()
    {
        return view('landing.pt', $this->getPageConfig('pt'));
    }
}
```

**C. Registrar las Rutas:**

```php
// routes/web.php

use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'showSpanishLanding']);
Route::get('/br', [LandingPageController::class, 'showPortugueseLanding']);
```

## Configuración

- **Variables de Entorno:** Todos los valores dinámicos se controlan a través del archivo `.env`.
- **Información de Contacto:** Los números de WhatsApp se gestionan en `config/leads.php` y se obtienen del `.env`.
- **SEO y Metadatos:** Los títulos de página, descripciones y URLs canónicas se gestionan dentro del `LandingPageController`.

## Desarrollo y Despliegue

### Desarrollo Local

1.  **Instalar Dependencias:**
    ```bash
    composer install
    npm install && npm run dev
    ```
2.  **Generar Clave de Aplicación:**
    ```bash
    php artisan key:generate
    ```
3.  **Ejecutar el Servidor de Desarrollo:**
    ```bash
    php artisan serve
    ```

### Despliegue en Producción

Siga los procedimientos estándar de despliegue de Laravel:

1.  **Optimizar para Producción:**
    ```bash
    composer install --optimize-autoloader --no-dev
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
    ```
2.  **Permisos de Archivos:** Asegúrese de que los directorios `storage` y `bootstrap/cache` tengan permisos de escritura por parte del servidor web.

## Solución de Problemas

- **Error `View not found`:** Verifique que los archivos de vista se copiaron correctamente en `resources/views/landing/`.
- **`config()` devuelve nulo:** Limpie la caché de configuración con `php artisan config:clear`.
- **Activos (CSS/JS) no se cargan:** Verifique dos veces las rutas de los activos en sus archivos Blade y asegúrese de que coincidan con la ubicación en el directorio `public`. Ejecute `npm run build` si está compilando activos.

## Soporte

Para consultas técnicas o para informar de problemas, por favor, abra una *incidencia* en el repositorio de GitHub del proyecto o contacte al equipo de desarrollo en `dev-team@humber.com.ar`.