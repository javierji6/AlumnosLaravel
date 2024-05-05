<nav class="h-16 bg-nav flex justify-start items-center space-x-4 p-3">
    <a class="btn btn-primary" href="about">About</a>
    <a class="btn btn-secondary" href="/">Home</a>
    <a class="btn btn-accent" href="{{route("alumnos.index")}}">Alumnos</a>
    @auth
        <a class="btn btn-warning" href="{{route("proyectos")}}">Proyectos</a>
    @endauth
</nav>
