# Guía de Pruebas del Formulario de Contacto

## Resumen de la Funcionalidad

El formulario de contacto está completamente configurado para enviar emails a través del endpoint REST de Humber. La implementación incluye:

### Configuración del Endpoint
- **URL**: `https://notifications.humberapp.com.ar/service/send`
- **Método**: POST
- **Email origen**: `no-reply@humber.com.ar`
- **Email destino**: `Comercial.Internacional@humber.com.ar`

### Campos del Formulario
- **Nombre** (`nombre`): Campo obligatorio
- **Email** (`email`): Campo obligatorio con validación
- **Teléfono** (`telefono`): Campo opcional
- **Empresa** (`empresa`): Campo opcional
- **Mensaje** (`mensaje`): Campo obligatorio
- **Idioma** (`idioma`): Campo oculto (es/pt)
- **Honeypot** (`website`): Campo oculto para prevenir spam

### Mensajes de Éxito y Error

#### Modo Testing (isTestMode = true)
- **Éxito**: 
  - ES: "[MODO TESTING] Formulario validado correctamente. Los datos NO fueron enviados al servidor."
  - PT: "[MODO TESTING] Formulário validado corretamente. Os dados NÃO foram enviados ao servidor."
- **Error**: 
  - ES: "[MODO TESTING] Error simulado para pruebas."
  - PT: "[MODO TESTING] Erro simulado para testes."

#### Modo Producción (isTestMode = false)
- **Éxito**: 
  - ES: "Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto."
  - PT: "Mensagem enviada com sucesso. Entraremos em contato em breve."
- **Error de envío**: 
  - ES: "Error al enviar el mensaje. Por favor, inténtalo de nuevo."
  - PT: "Erro ao enviar mensagem. Por favor, tente novamente."
- **Error de conexión**: 
  - ES: "Error de conexión. Por favor, inténtalo de nuevo."
  - PT: "Erro de conexão. Por favor, tente novamente."

## Cómo Probar el Formulario

### 1. Modo Testing (Recomendado para Pruebas)
Para activar el modo testing, cambia la variable en `_layout.blade.php` línea 387:
```javascript
const isTestMode = true; // Cambiar a false para enviar emails reales
```

En este modo:
- El formulario valida todos los campos
- NO se envían datos reales al servidor
- Se muestran mensajes específicos de testing
- No se consume el endpoint real

### 2. Modo Producción
Para activar el modo producción:
```javascript
const isTestMode = false; // Cambiar a false para enviar emails reales
```

En este modo:
- Se envían datos reales al endpoint de Humber
- Se generan emails reales a `comercial.internacional@humber.com.ar`
- Se muestran mensajes de éxito/error reales

### 3. Script de Prueba Independiente
Utiliza el archivo `test-form.php` para probar la configuración:
```bash
cd humber-landing-php
php test-form.php
```

Este script:
- Valida la configuración del endpoint
- Muestra el payload que se enviaría
- Permite testing sin enviar emails reales

## Variables de Entorno

Asegúrate de configurar estas variables en tu archivo `.env`:

```env
# Endpoint REST de Humber
LEAD_REST_URL=https://notifications.humberapp.com.ar/service/send

# Configuración de emails
LEAD_FROM_EMAIL=no-reply@humber.com.ar
LEAD_FROM_NAME="Humber Landing"
LEAD_TO_ALL=Comercial.Internacional@humber.com.ar
LEAD_NOTIFY_BCC=

# WhatsApp (opcional)
LEAD_WHATSAPP_AR=
LEAD_WHATSAPP_BR=

# Google Tag Manager (opcional)
GTM_ID=
```

## Validaciones Implementadas

### Frontend (JavaScript)
- Validación de campos obligatorios
- Validación de formato de email
- Prevención de envíos duplicados
- Honeypot para prevenir spam

### Backend (PHP)
- Validación de todos los campos
- Sanitización de datos
- Verificación de honeypot
- Throttling de requests (máximo 5 por minuto)

## Estructura del Email Enviado

### Asunto
- ES: "Nuevo contacto desde Landing Humber - [Nombre]"
- PT: "Novo contato do Landing Humber - [Nome]"

### Contenido
- **Texto plano**: Información básica del contacto
- **HTML**: Versión formateada con estilos
- **Datos UTM**: Se incluyen automáticamente si están disponibles

## Troubleshooting

### Error: "SyntaxError: missing ) after argument list"
Este error se ha corregido usando `json_encode()` para todos los mensajes dinámicos.

### Error: "net::ERR_BLOCKED_BY_ORB"
Este es un error esperado relacionado con Google Tag Manager en desarrollo local. No afecta la funcionalidad del formulario.

### Formulario no envía
1. Verifica que `isTestMode` esté configurado correctamente
2. Revisa la consola del navegador para errores JavaScript
3. Confirma que las variables de entorno estén configuradas
4. Verifica que el servidor PHP esté ejecutándose

## URLs de Prueba

- **Español**: http://localhost:8001/
- **Portugués**: http://localhost:8001/?lang=pt

## Archivos Relacionados

- `resources/views/landing/_layout.blade.php`: Lógica principal del formulario
- `app/Http/Controllers/LeadController.php`: Controlador backend
- `config/leads.php`: Configuración del sistema
- `test-form.php`: Script de prueba independiente
- `.env.example`: Variables de entorno de ejemplo