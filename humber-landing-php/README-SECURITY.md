# Configuración de Seguridad

## Variables de Entorno Sensibles

Este proyecto utiliza variables de entorno para manejar información sensible. **NUNCA** incluyas el archivo `.env` en el repositorio.

### Configuración de Email

Las siguientes variables contienen información sensible y deben configurarse en tu archivo `.env` local:

```bash
# Configuración de Email para Leads
LEAD_REST_URL=https://tu-api-real.com/service/send
LEAD_FROM_EMAIL=no-reply@tu-dominio.com
LEAD_FROM_NAME="Tu Empresa"
LEAD_TO_ALL=contacto@tu-dominio.com
LEAD_NOTIFY_BCC=notificaciones@tu-dominio.com

# Google Tag Manager (ID real)
GTM_ID=GTM-XXXXXXX

# URL de tu aplicación
APP_URL=https://tu-sitio.com
```

### Archivos de Configuración

- `.env.example`: Contiene valores de ejemplo seguros para uso público
- `config/leads.php`: Usa `env()` para obtener valores del archivo `.env`

### Recomendaciones

1. Copia `.env.example` a `.env` y configura tus valores reales
2. Nunca hagas commit del archivo `.env`
3. Los valores por defecto en `config/leads.php` son seguros para repos públicos
4. Revisa que `.env` esté en tu `.gitignore`

### Para Desarrollo Local

```bash
cp .env.example .env
# Edita .env con tus valores reales
```