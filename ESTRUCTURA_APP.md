# Estructura de la Aplicación "Mutanto"

Este documento proporciona un recorrido por la estructura de la aplicación y una guía paso a paso sobre cómo y dónde agregar código nuevo para crear una página personalizada.

## 📂 Árbol de Directorios Principal

La aplicación está construida en **PHP** puro sin un framework estricto, utilizando un enfoque de enrutamiento basado en carpetas (cada carpeta en `/es` o `/en` actúa como una URL y contiene un `index.php`).

- **`/` (Raíz):**
  - `index.php`: Punto de entrada principal. Se encarga de detectar el idioma o leerlo de la configuración y redirigir al usuario a `/es/` o `/en/`.
  - `config.php`: Archivo de configuración global. Define constantes como `COMPANY_NAME` y `URL_SITE`, e incluye dependencias iniciales.
  - `composer.json` / `package.json`: Gestores de dependencias para PHP (Composer) y utilidades de Node/JS (NPM).

- **`/es/` y `/en/` (Idiomas):**
  Aquí reside el contenido principal de la web. Cada subcarpeta representa una "página" (ruta) en la aplicación (por ejemplo: `es/contacto`, `es/proyectos`). 
  - Dentro de cada de estas carpetas hay un archivo `index.php` con el código específico de esa página.

- **`/includes/`:**
  Contiene partes reutilizables de la interfaz de usuario (componentes) para mantener el código DRY (Don't Repeat Yourself). Ejemplos:
  - `header.php` / `footer.php`: Cabecera y pie de página de la web.
  - `head.php`: Etiquetas `<head>` de HTML, metadatos y carga de scripts globales.
  - Otros archivos como botones o modales reutilizables.

- **`/css/`, `/js/`, `/img/`:**
  Recursos estáticos de la aplicación (hojas de estilo, scripts para el frontend e imágenes).

- **`/dependencys/` y `/vendor/`:**
  Bibliotecas, paquetes o código de terceros de los que depende la aplicación.

---

## 🛠️ Cómo Crear una Página Personalizada

Dado el sistema de enrutamiento por carpetas, para crear una nueva página (por ejemplo, `mutanto.com/es/mi-pagina-nueva`), debes seguir estos pasos:

### 1. Crear el Directorio de la Ruta
Si quieres que la URL sea `/es/mi-pagina-nueva`, crea una carpeta con ese nombre dentro del directorio del idioma correspondiente:
```text
/es/mi-pagina-nueva/
```
*(Si tu sitio es bilingüe, recuerda hacer lo mismo en `/en/mi-pagina-nueva/`)*

### 2. Crear el Archivo `index.php`
Dentro de la carpeta recién creada, crea un archivo `index.php`. Este será el contenido que se mostrará al acceder a esa URL.

```text
/es/mi-pagina-nueva/index.php
```

### 3. Estructura Básica del Nuevo `index.php`
Debes incluir la configuración, el head, el header de la página, tu contenido HTML/PHP, y finalmente el footer. 

Puedes usar la siguiente plantilla básica para tu nuevo `index.php`:

```php
<?php 
// 1. Incluir el archivo de configuración base desde la raíz
require_once($_SERVER['DOCUMENT_ROOT'] . "/config.php"); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php 
    // Opcional: Definir variables que head.php o metaGenerator.php puedan usar (ej: titulo)
    $page_title = "Mi Página Nueva | Mutanto";
    
    // 2. Incluir el Head común (Metadatos, CSS, JS)
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/head.php"); 
    ?>
</head>
<body>
    <?php 
    // 3. Incluir el Loader o Preloader si la app lo utiliza
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/loader.php");
    
    // 4. Incluir el Header (Menú de navegación)
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/header.php"); 
    ?>

    <!-- ========================================== -->
    <!-- AQUÍ VA EL CONTENIDO DE TU PÁGINA PERSONALIZADA -->
    <!-- ========================================== -->
    <main>
        <section class="mi-seccion-personalizada">
            <div class="container">
                <h1>Bienvenido a Mi Página Nueva</h1>
                <p>Este es el contenido de prueba para la nueva ruta.</p>
            </div>
        </section>
    </main>
    <!-- ========================================== -->

    <?php 
    // 5. Incluir el Footer (Pie de página)
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/footer.php"); 
    
    // 6. Incluir scripts o elementos que van antes del cierre del body (si aplica)
    require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/after-body.php"); 
    ?>
</body>
</html>
```

### 4. (Opcional) Agregar Estilos y Scripts
- Si tu página requiere **CSS** específico, puedes agregarlo en los archivos existentes dentro de `/css/` o crear uno nuevo e importarlo.
- Lo mismo aplica para **JavaScript** en la carpeta `/js/`.

¡Con estos pasos, tu nueva página estará disponible y compartirá la misma identidad visual y estructura técnica del resto de la aplicación Mutanto!
