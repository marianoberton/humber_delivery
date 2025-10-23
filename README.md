# Humber International - Página de Destino Oficial

![Humber International](https://www.humber.com.ar/images/logo-humber.png)

## Sobre Humber

Humber es una empresa de logística líder impulsada por la tecnología, con más de una década de experiencia conectando negocios en toda América Latina. Nos especializamos en proporcionar soluciones de transporte innovadoras y confiables, actuando como un "Uber de la carga" para una nueva generación de comercio.

Este repositorio contiene el código fuente oficial de la página de destino de Humber International, diseñada para una integración perfecta y un alto rendimiento.

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

Este repositorio proporciona dos implementaciones optimizadas de la página de destino de Humber International:

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
    git clone https://github.com/your-username/humber-landing.git
    cd humber-landing
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
- `LEAD_REST_URL`: El endpoint para el envío de leads.
- `WHATSAPP_AR`, `WHATSAPP_CL`, `WHATSAPP_BR`: Números de WhatsApp para cada región.
- `GTM_ID`: Su ID de Google Tag Manager.

### Versión Estática

Toda la configuración se maneja directamente dentro de los archivos HTML (`index.html` y `index-pt.html`). Necesitará editar manualmente estos archivos para cambiar números de teléfono, URLs y otras configuraciones.

## Características Clave

- **Soporte Multilenguaje:** Localizaciones en español y portugués.
- **Preparado para Múltiples Regiones:** Configurado para Argentina, Chile y Brasil.
- **Diseño Responsivo:** Optimizado para dispositivos de escritorio, tabletas y móviles.
- **Formulario de Contacto Funcional:** Captura de leads con procesamiento en el backend (versión PHP).
- **WhatsApp Integrado:** Botón flotante con números específicos por país.
- **Optimizado para SEO:** HTML semántico, metaetiquetas y mejores prácticas.

## Soporte y Contribución

Este proyecto es mantenido por el equipo de desarrollo de Humber.

- **Informes de Errores:** Por favor, abra una *incidencia* en GitHub con una descripción detallada del problema.
- **Solicitudes de Características:** Para nuevas características o mejoras, por favor, abra una *incidencia* para iniciar una discusión.
- **Contribuciones:** Agradecemos las contribuciones. Por favor, envíe una *pull request* con una descripción clara de sus cambios.



## Licencia

Este proyecto está licenciado bajo la Licencia MIT. Vea el archivo [LICENSE](LICENSE) para más detalles.

Copyright (c) 2025 Humber International.