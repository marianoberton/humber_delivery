# Landing Page Multiidioma - PHP

## 📋 Descripción
Landing page dinámica con backend PHP y soporte multiidioma (Español y Portugués) para empresas internacionales.

## 🚀 Características
- ✅ Backend PHP con sistema de rutas
- ✅ Plantillas Blade para ES y PT
- ✅ Configuración centralizada
- ✅ Formulario de contacto con procesamiento
- ✅ Botón flotante de WhatsApp dinámico
- ✅ Sistema de configuración flexible
- ✅ Diseño responsive y moderno

## 📁 Estructura del Proyecto
```
landing-php/
├── index.php                    # Punto de entrada principal
├── web.php                      # Definición de rutas
├── .env.example                # Ejemplo de configuración
├── app/
│   └── Http/
│       └── Controllers/        # Controladores PHP
├── config/
│   └── leads.php              # Configuración
├── resources/
│   └── views/
│       └── landing/
│           ├── es.blade.php   # Vista en español
│           └── pt.blade.php   # Vista en portugués
├── assets/                    # Assets estáticos
├── js/                       # JavaScript
└── public/                   # Archivos públicos
```

## 🌐 Instalación y Configuración

### Requisitos
- PHP 7.4 o superior
- Servidor web (Apache/Nginx) o PHP built-in server

### Instalación
1. **Clonar/Descargar** el proyecto
2. **Configurar variables de entorno:**
   ```bash
   cp .env.example .env
   ```
3. **Editar `.env`** con tus configuraciones
4. **Iniciar servidor:**
   ```bash
   php -S localhost:8000
   ```

### Configuración
Edita `config/leads.php` para personalizar:
```php
return [
    'whatsapp' => [
        'ar' => '5491123456789',    // Argentina
        'cl' => '56987654321',      // Chile  
        'br' => '5511987654321',    // Brasil
    ],
    'from' => [
        'email' => 'no-reply@tudominio.com',
        'name' => 'Tu Empresa'
    ],
    'destinations' => [
        'all' => 'contacto@tudominio.com'
    ]
];
```

## 🔧 Rutas Disponibles

### Páginas Principales
- `/` - Redirige a `/es`
- `/es` - Página en español
- `/pt` - Página en portugués

### API/Formularios
- `POST /lead` - Procesar formulario de contacto

## 🎨 Personalización

### Cambiar Contenido
- **Español:** `resources/views/landing/es.blade.php`
- **Portugués:** `resources/views/landing/pt.blade.php`

### Cambiar Configuración
- Edita `config/leads.php`
- Los cambios se reflejan automáticamente

### Añadir Nuevos Países
1. Agrega configuración en `config/leads.php`
2. Actualiza las plantillas Blade
3. Añade rutas en `web.php` si es necesario

## 🌍 Idiomas y Localización
- **Español:** Ruta `/es`
- **Portugués:** Ruta `/pt`
- Sistema extensible para más idiomas

## 📧 Configuración de Email
Para el formulario de contacto, configura en `.env`:
```env
LEAD_REST_URL=https://tu-api.com/service/send
LEAD_FROM_EMAIL=no-reply@tudominio.com
LEAD_FROM_NAME="Tu Empresa"
LEAD_TO_ALL=contacto@tudominio.com
```

## 🔒 Seguridad
- Variables de entorno para datos sensibles
- Validación de formularios
- Protección contra spam (honeypot)

## 🚀 Despliegue en Producción

### Servidor Compartido
1. Sube archivos vía FTP
2. Configura `.env` con datos reales
3. Apunta dominio a `index.php`

### VPS/Servidor Dedicado
1. Configura servidor web (Apache/Nginx)
2. Configura PHP y extensiones necesarias
3. Configura SSL/HTTPS
4. Optimiza para producción

## 📱 Funcionalidades
- **Configuración centralizada:** Un solo lugar para cambios
- **Rutas amigables:** URLs limpias por idioma
- **Plantillas reutilizables:** Sistema Blade eficiente
- **Procesamiento de formularios:** Backend robusto
- **Integración REST:** Envío de emails via API

## 🛠️ Tecnologías Utilizadas
- PHP 7.4+
- Sistema de plantillas Blade
- Routing personalizado
- HTML5 semántico
- CSS3 con Tailwind CSS
- JavaScript vanilla

## 📧 Soporte
Para modificaciones o soporte técnico, contacta al desarrollador del proyecto.

## 🔄 Mantenimiento
- Mantén respaldos antes de actualizar
- Revisa compatibilidad de PHP
- Actualiza configuraciones según necesidades