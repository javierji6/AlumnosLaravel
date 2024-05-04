<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite("resources/css/app.css")
    </head>
    <body>
        <header class="h-15v bg-header">
            <h1 class="text-6xl">Esta es mi página principal</h1>
        </header>
        <hr/>
        <nav class="h-10v bg-nav">
            <a href="about">About</a>
            <a href="main">Home</a>
            <a href="#">Productos</a>
            <a href="#">Contacta</a>
        </nav>
        <main class="h-65v bg-main">
            <h2>En el back he generado un número <span style="color: red">{{$num}}</span></h2>
            <h2>En el back me dan el nombre <span style="color: red">{{$nombre}}</span></h2>
        </main>
        <footer class="10v bg-footer">

        </footer>
    </body>
</html>
