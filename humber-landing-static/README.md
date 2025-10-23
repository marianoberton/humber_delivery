# Humber Landing - Versión Estática

## 📋 Descripción
Landing page estática para Humber Internacional con soporte multiidioma (Español y Portugués).

## 🚀 Características
- ✅ Página principal en español (`index.html`)
- ✅ Página principal en portugués (`index-pt.html`)
- ✅ Formulario de contacto funcional
- ✅ Botón flotante de WhatsApp para Argentina, Chile y Brasil
- ✅ Números de teléfono hardcodeados en el footer
- ✅ Diseño responsive y moderno
- ✅ Optimizado para SEO

## 📁 Estructura del Proyecto
```
humber-landing-static/
├── index.html          # Página principal (Español)
├── index-pt.html       # Página principal (Portugués)
├── favicon.ico         # Icono del sitio
├── assets/
│   ├── icons/          # Iconos SVG de servicios
│   ├── images/         # Imágenes del sitio
│   └── logos/          # Logos de la empresa
└── js/
    ├── app.js          # JavaScript principal
    └── landing.js      # Funcionalidades específicas
```

## 🌐 Instalación y Uso

### Opción 1: Servidor Web Simple
1. Sube todos los archivos a tu servidor web
2. Configura `index.html` como página principal
3. ¡Listo! El sitio estará funcionando

### Opción 2: Servidor Local (Para pruebas)
```bash
# Con Python
python -m http.server 8000

# Con Node.js (si tienes npx)
npx serve .

# Con PHP
php -S localhost:8000
```

## 📞 Números de Contacto Configurados

### Argentina
- **Teléfono:** +54 9 11 2345-6789
- **WhatsApp:** https://wa.me/5491123456789

### Chile  
- **Teléfono:** +56 9 8765-4321
- **WhatsApp:** https://wa.me/56987654321

### Brasil
- **Teléfono:** +55 11 9876-5432
- **WhatsApp:** https://wa.me/5511987654321

## 🔧 Personalización

### Cambiar Números de Teléfono
Los números están hardcodeados en ambos archivos HTML:
- Busca `tel:+54` para Argentina
- Busca `tel:+56` para Chile  
- Busca `tel:+55` para Brasil
- Busca `wa.me/54`, `wa.me/56`, `wa.me/55` para WhatsApp

### Cambiar Contenido
- **Español:** Edita `index.html`
- **Portugués:** Edita `index-pt.html`

### Cambiar Imágenes
- Reemplaza archivos en `assets/images/`
- Mantén los mismos nombres para evitar romper enlaces

## 🌍 Idiomas Disponibles
- **Español:** `index.html` (página principal)
- **Portugués:** `index-pt.html`

## 📱 Funcionalidades
- **Formulario de contacto:** Envía datos por email
- **WhatsApp flotante:** Botón con opciones por país
- **Enlaces telefónicos:** Click para llamar directamente
- **Navegación por idiomas:** Cambio fácil entre ES/PT

## 🎨 Tecnologías Utilizadas
- HTML5 semántico
- CSS3 con Tailwind CSS
- JavaScript vanilla
- SVG para iconos escalables
- Diseño mobile-first

## 📧 Soporte
Para modificaciones o soporte técnico, contacta al desarrollador.