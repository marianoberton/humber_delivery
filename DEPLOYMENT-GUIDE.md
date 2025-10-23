# 🚀 Guía de Despliegue - Humber Landing

## 📦 Dos Versiones Disponibles

Este proyecto incluye **dos versiones** listas para despliegue:

### 🌐 Versión Estática (`humber-landing-static/`)
- **Ideal para:** Hosting simple, GitHub Pages, Netlify, Vercel
- **Ventajas:** Más rápida, sin dependencias de servidor
- **Desventajas:** Números hardcodeados, menos flexible

### ⚙️ Versión PHP (`humber-landing-php/`)
- **Ideal para:** Servidores con PHP, hosting tradicional
- **Ventajas:** Configuración centralizada, más flexible
- **Desventajas:** Requiere servidor PHP

---

## 🎯 ¿Cuál Elegir?

### Elige **Versión Estática** si:
- ✅ Quieres máxima simplicidad
- ✅ Usas hosting gratuito (GitHub Pages, Netlify)
- ✅ No planeas cambiar números frecuentemente
- ✅ Quieres máxima velocidad de carga

### Elige **Versión PHP** si:
- ✅ Tienes hosting con PHP
- ✅ Quieres cambiar números fácilmente
- ✅ Planeas añadir más funcionalidades
- ✅ Necesitas procesamiento de formularios avanzado

---

## 🌐 Opciones de Hosting

### Para Versión Estática

#### **GitHub Pages** (Gratuito)
1. Crea repositorio en GitHub
2. Sube archivos de `humber-landing-static/`
3. Activa GitHub Pages en Settings
4. ¡Listo! URL: `usuario.github.io/repo`

#### **Netlify** (Gratuito)
1. Arrastra carpeta `humber-landing-static/` a netlify.com
2. Configura dominio personalizado (opcional)
3. ¡Desplegado automáticamente!

#### **Vercel** (Gratuito)
1. Conecta repositorio o sube archivos
2. Vercel detecta automáticamente HTML estático
3. Despliegue instantáneo

### Para Versión PHP

#### **Hosting Compartido**
1. Sube archivos de `humber-landing-php/` vía FTP
2. Configura `.env` con datos reales
3. Apunta dominio a `index.php`

#### **VPS/Cloud**
```bash
# Instalar dependencias
sudo apt update
sudo apt install php nginx

# Configurar Nginx
sudo nano /etc/nginx/sites-available/humber

# Subir archivos
scp -r humber-landing-php/ user@server:/var/www/
```

---

## ⚡ Despliegue Rápido

### Versión Estática (5 minutos)
```bash
# 1. Comprimir archivos
zip -r humber-static.zip humber-landing-static/

# 2. Subir a tu hosting favorito
# 3. Extraer y configurar dominio
# ¡Listo!
```

### Versión PHP (10 minutos)
```bash
# 1. Subir archivos
scp -r humber-landing-php/ user@server:/var/www/

# 2. Configurar .env
cp .env.example .env
nano .env

# 3. Configurar servidor web
# ¡Funcionando!
```

---

## 🔧 Configuración Post-Despliegue

### Cambiar Números de Teléfono

#### En Versión Estática:
```bash
# Buscar y reemplazar en archivos HTML
sed -i 's/+54 9 11 2345-6789/TU-NUMERO-AR/g' *.html
sed -i 's/5491123456789/TU-WHATSAPP-AR/g' *.html
```

#### En Versión PHP:
```php
// Editar config/leads.php
'whatsapp' => [
    'ar' => 'TU-NUMERO-WHATSAPP-AR',
    'cl' => 'TU-NUMERO-WHATSAPP-CL', 
    'br' => 'TU-NUMERO-WHATSAPP-BR',
]
```

### Configurar Dominio Personalizado
1. **DNS:** Apunta A record a IP del servidor
2. **SSL:** Configura certificado (Let's Encrypt recomendado)
3. **Redirecciones:** www → no-www (opcional)

---

## 📊 Monitoreo y Mantenimiento

### Métricas Importantes
- **Tiempo de carga:** < 3 segundos
- **Disponibilidad:** > 99.9%
- **Conversiones:** Formularios enviados
- **Tráfico:** Visitas por país/idioma

### Herramientas Recomendadas
- **Google Analytics:** Seguimiento de visitas
- **Google Search Console:** SEO y indexación
- **GTmetrix:** Velocidad de carga
- **Uptime Robot:** Monitoreo de disponibilidad

---

## 🆘 Solución de Problemas

### Problemas Comunes

#### "Página no carga"
- ✅ Verifica configuración DNS
- ✅ Revisa permisos de archivos (755)
- ✅ Comprueba logs del servidor

#### "Números no funcionan"
- ✅ Verifica formato internacional (+54, +56, +55)
- ✅ Comprueba enlaces `tel:` y `wa.me`
- ✅ Revisa configuración en PHP

#### "Formulario no envía"
- ✅ Configura SMTP en `.env` (versión PHP)
- ✅ Verifica JavaScript en consola
- ✅ Comprueba permisos de escritura

---

## 📞 Soporte Técnico

### Antes de Contactar
1. ✅ Revisa esta guía completa
2. ✅ Comprueba logs de error
3. ✅ Verifica configuración DNS
4. ✅ Prueba en navegador incógnito

### Información Necesaria
- Versión utilizada (estática/PHP)
- Tipo de hosting
- Mensaje de error exacto
- URL del sitio
- Navegador y dispositivo

---

## 🎉 ¡Felicidades!

Tu landing page de Humber está lista para conquistar Argentina, Chile y Brasil. 

**Próximos pasos sugeridos:**
1. 📈 Configurar Google Analytics
2. 🔍 Optimizar SEO
3. 📱 Probar en dispositivos móviles
4. 🚀 Lanzar campañas de marketing

¡Éxito en tu proyecto! 🌟