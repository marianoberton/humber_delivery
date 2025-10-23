# 🚢 Humber Internacional - Landing Page

## 📋 Descripción
Landing page profesional para **Humber Internacional**, empresa líder en logística y transporte de cargas en Argentina, Chile y Brasil.

## 🎯 Características Principales
- ✅ **Multiidioma:** Español y Portugués
- ✅ **Multirregión:** Argentina, Chile y Brasil
- ✅ **Responsive:** Optimizado para móviles y desktop
- ✅ **WhatsApp integrado:** Botón flotante por país
- ✅ **Formulario funcional:** Captura de leads
- ✅ **SEO optimizado:** Meta tags y estructura semántica

---

## 📦 Dos Versiones Disponibles

### 🌐 **Versión Estática** (`humber-landing-static/`)
**Ideal para hosting simple y máxima velocidad**
- Sin dependencias de servidor
- Números hardcodeados
- Despliegue instantáneo
- Compatible con GitHub Pages, Netlify, Vercel

### ⚙️ **Versión PHP** (`humber-landing-php/`)
**Ideal para máxima flexibilidad**
- Backend PHP con rutas
- Configuración centralizada
- Plantillas Blade
- Fácil mantenimiento

---

## 🚀 Inicio Rápido

### Opción 1: Versión Estática (Recomendada)
```bash
cd humber-landing-static/
# Subir archivos a tu hosting favorito
# ¡Listo!
```

### Opción 2: Versión PHP
```bash
cd humber-landing-php/
cp .env.example .env
php -S localhost:8000
```

---

## 📞 Números Configurados

| País | Teléfono | WhatsApp |
|------|----------|----------|
| 🇦🇷 Argentina | +54 9 11 2345-6789 | wa.me/5491123456789 |
| 🇨🇱 Chile | +56 9 8765-4321 | wa.me/56987654321 |
| 🇧🇷 Brasil | +55 11 9876-5432 | wa.me/5511987654321 |

---

## 🌍 URLs Disponibles

### Versión Estática
- **Español:** `index.html`
- **Portugués:** `index-pt.html`

### Versión PHP
- **Español:** `/es`
- **Portugués:** `/pt`

---

## 📁 Estructura del Repositorio

```
humber-landing-delivery/
├── README.md                    # Este archivo
├── DEPLOYMENT-GUIDE.md          # Guía completa de despliegue
├── humber-landing-static/       # Versión estática
│   ├── index.html              # Página principal (ES)
│   ├── index-pt.html           # Página principal (PT)
│   ├── assets/                 # Imágenes, iconos, logos
│   ├── js/                     # JavaScript
│   └── README.md               # Documentación específica
└── humber-landing-php/         # Versión PHP
    ├── index.php               # Punto de entrada
    ├── web.php                 # Rutas
    ├── config/                 # Configuraciones
    ├── resources/views/        # Plantillas Blade
    ├── assets/                 # Assets
    └── README.md               # Documentación específica
```

---

## 🎨 Servicios Destacados

- **Cargas Secas y Líquidas**
- **Cargas Refrigeradas**
- **Cargas Peligrosas**
- **Cargas de Proyecto**
- **Cargas Contenedores**
- **Cargas Consolidadas**

---

## 🌐 Cobertura Geográfica

### Argentina 🇦🇷
- Buenos Aires y área metropolitana
- Principales puertos y centros logísticos

### Chile 🇨🇱
- Santiago y regiones principales
- Puertos de Valparaíso y San Antonio

### Brasil 🇧🇷
- São Paulo y región sudeste
- Principales centros industriales

---

## 🔧 Personalización

### Cambiar Números de Teléfono

#### Versión Estática:
Editar directamente en archivos HTML:
- `index.html` (español)
- `index-pt.html` (portugués)

#### Versión PHP:
Editar `config/leads.php`:
```php
'whatsapp' => [
    'ar' => 'NUEVO-NUMERO-AR',
    'cl' => 'NUEVO-NUMERO-CL',
    'br' => 'NUEVO-NUMERO-BR',
]
```

### Cambiar Contenido
- **Estática:** Editar archivos HTML
- **PHP:** Editar plantillas en `resources/views/landing/`

---

## 📱 Funcionalidades

### Formulario de Contacto
- Captura nombre, email, teléfono y mensaje
- Validación en frontend
- Procesamiento en backend (versión PHP)

### WhatsApp Flotante
- Botón fijo en esquina inferior derecha
- Opciones por país (Argentina, Chile, Brasil)
- Enlaces directos a WhatsApp

### Footer Informativo
- Enlaces telefónicos clickeables
- Información de contacto por país
- Navegación entre idiomas

---

## 🚀 Opciones de Hosting

### Gratuitas
- **GitHub Pages** (estática)
- **Netlify** (estática)
- **Vercel** (estática)

### De Pago
- **Hosting compartido** (PHP)
- **VPS/Cloud** (PHP)
- **CDN** (estática)

---

## 📊 Métricas y Analytics

### Google Analytics
- Configurado para seguimiento de conversiones
- Eventos de formulario y WhatsApp
- Segmentación por país e idioma

### Conversiones Importantes
- Envío de formulario de contacto
- Clicks en botones de WhatsApp
- Llamadas telefónicas desde footer

---

## 🆘 Soporte

### Documentación Completa
Ver `DEPLOYMENT-GUIDE.md` para:
- Guía paso a paso de despliegue
- Configuración de hosting
- Solución de problemas comunes
- Optimización y mantenimiento

### Contacto Técnico
Para soporte técnico o modificaciones, contactar al desarrollador con:
- Versión utilizada (estática/PHP)
- Tipo de hosting
- Descripción del problema
- URL del sitio (si aplica)

---

## 📄 Licencia
Proyecto desarrollado para **Humber Internacional**. Todos los derechos reservados.

---

## 🎉 ¡Listo para Desplegar!

Elige la versión que mejor se adapte a tus necesidades:
- **¿Simplicidad máxima?** → Versión Estática
- **¿Flexibilidad máxima?** → Versión PHP

**¡Tu landing page está lista para conquistar Argentina, Chile y Brasil!** 🌟