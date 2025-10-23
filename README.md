# Landing Page Multiidioma - PHP y HTML Estático

## Descripción

Este repositorio contiene una landing page multiidioma (español y portugués) con dos implementaciones: una versión PHP dinámica y una versión HTML estática. Está diseñada para empresas de logística y transporte que necesitan una presencia web profesional en múltiples mercados latinoamericanos.

## Tabla de Contenido

- [Descripción del Proyecto](#descripción-del-proyecto)
- [Tecnologías Utilizadas](#tecnologías-utilizadas)
- [Implementaciones Disponibles](#implementaciones-disponibles)
- [Cómo Empezar](#cómo-empezar)
- [Configuración](#configuración)
- [Características Clave](#características-clave)
- [Soporte y Contribución](#soporte-y-contribución)
- [Licencia](#licencia)

## Descripción del Proyecto

Este repositorio proporciona dos implementaciones optimizadas de una landing page para empresas de logística:

1.  **Versión HTML Estática:** Para un rendimiento y simplicidad máximos.
2.  **Versión PHP:** Para capacidades dinámicas y fácil integración con proyectos basados en PHP.

Ambas versiones son completamente responsivas, están optimizadas para SEO y localizadas para los mercados de habla hispana y portuguesa.

## Tecnologías Utilizadas

- **Frontend:**
    - HTML5 (Semántico)
    - CSS3 con Tailwind CSS
    - JavaScript (ES6+)
- **Backend (Versión PHP):**
    - PHP 8.0+
    - Motor de Plantillas Blade
- **Herramientas:**
    - Composer (para dependencias de PHP)

## Implementaciones Disponibles

### 1. HTML Estático (`humber-landing-static/`)

Ideal para entornos donde la velocidad y la simplicidad son primordiales.

- **Ventajas:**
    - Tiempos de carga ultrarrápidos.
    - Sin dependencias del lado del servidor.
    - Perfecto para arquitecturas JAMstack, CDNs y plataformas de alojamiento estático (Netlify, Vercel, GitHub Pages).
- **Desventajas:**
    - La configuración (ej., números de teléfono) está codificada y requiere actualizaciones manuales.

### 2. PHP (`humber-landing-php/`)

Una implementación flexible y potente para entornos de servidor dinámicos.

- **Ventajas:**
    - Configuración centralizada a través de archivos `.env`.
    - Fácil de mantener y actualizar.
    - Integración perfecta con aplicaciones PHP existentes y frameworks como Laravel.
- **Desventajas:**
    - Requiere un servidor con PHP habilitado.

## Cómo Empezar

### Requisitos Previos

- Git
- PHP 8.0+ (para la versión PHP)
- Composer (para la versión PHP)

### Instalación

1.  **Clonar el repositorio:**
    ```bash
    git clone https://github.com/tu-usuario/landing-page-multiidioma.git
    cd landing-page-multiidioma
    ```

2.  **Elija su implementación:**

    - **Para la versión Estática:**
      No se requiere instalación adicional. Puede servir los archivos desde el directorio `humber-landing-static/`.

    - **Para la versión PHP:**
      ```bash
      cd humber-landing-php/
      cp .env.example .env
      ```
      Revise y edite el archivo `.env` para que coincida con su entorno.

### Ejecución Local

- **Versión Estática:**
  Puede usar cualquier servidor HTTP simple. Por ejemplo, con Python:
  ```bash
  cd humber-landing-static/
  python -m http.server 8002
  ```
  - Español: `http://localhost:8002/`
  - Portugués: `http://localhost:8002/index-pt.html`

- **Versión PHP:**
  Use el servidor incorporado de PHP:
  ```bash
  cd humber-landing-php/
  php -S localhost:8001
  ```
  - Español: `http://localhost:8001/`
  - Portugués: `http://localhost:8001/br`

## Configuración

### Versión PHP (`.env`)

La versión PHP se configura a través del archivo `.env`. Las variables clave incluyen:

- `APP_URL`: La URL base de su aplicación.
- `LEAD_REST_URL`: El endpoint para el envío de formularios de contacto.
- `WHATSAPP_AR`, `WHATSAPP_CL`, `WHATSAPP_BR`: Números de WhatsApp para cada región.
- `GTM_ID`: Su ID de Google Tag Manager.

### Versión Estática

Toda la configuración se maneja directamente dentro de los archivos HTML (`index.html` y `index-pt.html`). Necesitará editar manualmente estos archivos para cambiar números de teléfono, URLs y otras configuraciones.

## Características Clave

- **Soporte Multilenguaje:** Localizaciones en español y portugués.
- **Preparado para Múltiples Regiones:** Configurado para Argentina, Chile y Brasil.
- **Diseño Responsivo:** Optimizado para dispositivos de escritorio, tabletas y móviles.
- **Formulario de Contacto Funcional:** Captura de información de contacto con procesamiento en el backend (versión PHP).
- **WhatsApp Integrado:** Botón flotante con números específicos por país.
- **Optimizado para SEO:** HTML semántico, metaetiquetas y mejores prácticas.


## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Vea el archivo [LICENSE](LICENSE) para más detalles.