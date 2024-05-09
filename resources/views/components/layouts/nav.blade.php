<nav class="h-16 bg-nav flex justify-center items-center space-x-4 p-3">
    <a class="btn btn-secondary" href="about">About</a>
    <a class="btn btn-accent" href="{{ route("alumnos.index") }}">Alumnos</a>
    @auth
        <a class="btn btn-warning" href="{{ route("proyectos") }}">Proyectos</a>
    @endauth
</nav>
