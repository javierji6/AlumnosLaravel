<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alumnos</title>
        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body>
        <x-secciones.header/>
        <x-secciones.nav/>
        <main class="bg-main">
            {{$slot}}
        </main>
        <x-secciones.footer/>
    </body>
</html>
