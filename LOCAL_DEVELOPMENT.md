# Guía de Desarrollo Local - CoPAUPS

Este proyecto es un sitio web basado en PHP con una base de datos MySQL.

## Requisitos
- PHP 7.4 o superior
- MySQL/MariaDB (opcional para visualización básica, requerido para funcionalidad completa)

## Instrucciones para ver el sitio localmente

### 1. Iniciar el servidor de desarrollo de PHP
Desde la raíz del proyecto, ejecute el siguiente comando en su terminal:

```bash
php -S localhost:8000 -t public_html
```

Luego, abra su navegador y visite: `http://localhost:8000`

### 2. Configuración de la Base de Datos (Opcional)
Si desea que las noticias y la galería funcionen con datos reales:
1. Importe su base de datos a un servidor MySQL local.
2. Edite los archivos de conexión con sus credenciales locales:
   - `public_html/conection.php` (para el sitio principal)
   - `public_html/admin/conection.php` (para el panel de administración)

   Deberá actualizar las siguientes variables:
   - `$db_host = 'localhost';`
   - `$db_user = 'su_usuario';`
   - `$db_pass = 'su_contraseña';`
   - `$db_name = 'su_base_de_datos';`

**Nota:** He actualizado ambos archivos de conexión para que el sitio no falle (pantalla en blanco) si la base de datos no está conectada. Podrá navegar la estructura del sitio, aunque no verá el contenido dinámico.

## Cambios Realizados en este Análisis
- Se corrigieron rutas rotas en el panel de administración (`admin/`).
- Se corrigieron errores menores de HTML en `menu.php`.
- Se añadieron etiquetas `alt` a las imágenes principales para SEO.
- Se actualizaron enlaces externos a HTTPS.
