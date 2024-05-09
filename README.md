# Documentación del Proyecto Laravel

Este README va documentando el proyecto de Laravel.

## 1. Inicio del Proyecto

Para crear un nuevo proyecto de Laravel, tenemos que ejecutar el siguiente comando:

```bash
laravel new nombre-del-proyecto
```

Este comando creará una nueva carpeta con la estructura del Laravel.

## 2. Configuración con la Base de Datos

Después de iniciar el proyecto, configuramos la base de datos en el archivo `.env` para que Laravel pueda conectarse.

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_db
DB_USERNAME=nombre_usuario
DB_PASSWORD=contrasena
```
## 3. Instalación de Tailwind con Breeze y DaisyUI

Para instalar el framework de Tailwind CSS junto con Breeze y DaisyUI, debemos de tener Node.js instalado en el sistema que se puede descargar desde [aquí](https://nodejs.org/en/).

Una vez que tengamos Node.js instalado, debemos de ejecutar estos comandos:

```bash
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
```

## 4. Instalación de SweetAlert2

Para instalar el SweetAlert2 para mostrar alertas en la aplicación, debemos de ejecuta el siguiente comando:

```bash
npm install sweetalert2
```

Ahora debemos de importar el plugin en `resources/js/app.js`

```javascript
import Swal from 'sweetalert2';
window.Swal = Swal;
```

## 5. Creación de Layouts (Componentes)

Creamos layouts (componentes) en la carpeta `resources` y empleamos Tailwind CSS y DaisyUI para dar estilo.

## 6. Creación de Controladores y Vistas

Usamos el generador proporciona Laravel para crear los controladores y vistas necesarias.

```bash
php artisan make:controller NombreController
php artisan make:view nombre_carpeta_opcional/nombre_vista
```

## 7. Creación de Migraciones (Tabla)

Para crear una migración de una tabla, para ello usamos el siguiente comando:

```bash
php artisan make:migration create_nombre_tabla_table
```

## 8. Creación del Modelo Alumno

Creamos un modelo para interactuar con la tabla `alumnos` de la base de datos.

```bash
php artisan make:model Alumno
```

## 9. Controlar las Vistas

En `routes/web.php` definimos las rutas.

- `Route::get('/', [MainController::class, "index"])->name("main");`, define una ruta GET que apunta a la raíz del sitio web y la opción `->name("main")` establece un nombre para la ruta.
- `Route::view("ejemplo1", "paginas.ejemplo1");`, define una ruta GET para la URL '/ejemplo1'.
- `Route::view("ejemplo2", "paginas.ejemplo2")->name("ejemplo2")->middleware("auth");`, con `middleware "auth"` especificamos que solo los usuarios autenticados podrán acceder a ella.
- `Route::resource("alumnos", \App\Http\Controllers\AlumnoController::class);`, define las rutas para el recurso `alumnos` utilizando el controlador.

```php
// Ejemplo
Route::get('/', [MainController::class, "index"])->name("main");
Route::view("ejemplo1", "paginas.ejemplo1");
Route::view("ejemplo2", "paginas.ejemplo2")->name("ejemplo2")->middleware("auth");
Route::resource("alumnos", \App\Http\Controllers\AlumnoController::class);
```
## 10. Instalación y configuración del Idioma Español

Podemos instalar el idioma español usando el siguiente comando:

```bash
composer require laravel-lang/lang-es
```

Ahora tenemos que configurar el idioma en la aplicación, para ello vamos a `.env` y cambiamos `APP_LOCALE=en` a `APP_LOCALE=es`.
