# Humber Landing - Versión PHP

## 📋 Descripción
Landing page dinámica para Humber Internacional con backend PHP y soporte multiidioma (Español y Portugués).

## 🚀 Características
- ✅ Backend PHP con sistema de rutas
- ✅ Plantillas Blade para ES y PT
- ✅ Configuración centralizada de números
- ✅ Formulario de contacto con procesamiento
- ✅ Botón flotante de WhatsApp dinámico
- ✅ Sistema de configuración flexible
- ✅ Diseño responsive y moderno

## 📁 Estructura del Proyecto
```
humber-landing-php/
├── index.php                    # Punto de entrada principal
├── web.php                      # Definición de rutas
├── index.blade.php             # Plantilla principal
├── .env.example                # Ejemplo de configuración
├── app/
│   └── Http/
│       └── Controllers/        # Controladores PHP
├── config/
│   └── leads.php              # Configuración de números
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

### Configuración de Números
Edita `config/leads.php` para cambiar los números:
```php
return [
    'whatsapp' => [
        'ar' => '5491123456789',    // Argentina
        'cl' => '56987654321',      // Chile  
        'br' => '5511987654321',    // Brasil
    ],
    'phone' => [
        'ar' => '+54 9 11 2345-6789',
        'cl' => '+56 9 8765-4321', 
        'br' => '+55 11 9876-5432',
    ]
];
```

## 🔧 Rutas Disponibles

### Páginas Principales
- `/` - Redirige a `/es`
- `/es` - Página en español
- `/pt` - Página en portugués

### API/Formularios
- `POST /contact` - Procesar formulario de contacto

## 📞 Números de Contacto Configurados

### Argentina
- **Teléfono:** +54 9 11 2345-6789
- **WhatsApp:** https://wa.me/5491127530009

### Chile  
- **Teléfono:** +56 9 8765-4321
- **WhatsApp:** https://wa.me/56950004666

### Brasil
- **Teléfono:** +55 11 9876-5432
- **WhatsApp:** https://wa.me/554398650213

## 🎨 Personalización

### Cambiar Contenido
- **Español:** `resources/views/landing/es.blade.php`
- **Portugués:** `resources/views/landing/pt.blade.php`

### Cambiar Números
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
MAIL_HOST=smtp.ejemplo.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@ejemplo.com
MAIL_PASSWORD=tu-password-seguro
MAIL_FROM_ADDRESS=noreply@tudominio.com
MAIL_FROM_NAME="Tu Empresa"
```

## 🔒 Seguridad
- Variables de entorno para datos sensibles
- Validación de formularios
- Protección CSRF (si se implementa)

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

## 📱 Funcionalidades Dinámicas
- **Configuración centralizada:** Un solo lugar para cambiar números
- **Rutas amigables:** URLs limpias por idioma
- **Plantillas reutilizables:** Sistema Blade eficiente
- **Procesamiento de formularios:** Backend robusto

## 🛠️ Tecnologías Utilizadas
- PHP 7.4+
- Sistema de plantillas Blade
- Routing personalizado
- HTML5 semántico
- CSS3 con Tailwind CSS
- JavaScript vanilla

## 📧 Soporte
Para modificaciones o soporte técnico, contacta al desarrollador.

## 🔄 Actualizaciones
- Mantén respaldos antes de actualizar
- Revisa compatibilidad de PHP
- Actualiza dependencias si es necesario