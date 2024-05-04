<nav class="h-10v bg-nav flex flex-grow justify-start items-center space-x-2 p-3">
    <a class="btn btn-primary" href="about">About</a>
    <a class="btn btn-secondary" href="/">Home</a>
    <a class="btn btn-accent" href="#">Productos</a>
    @auth
        <a class="btn btn-warning" href="{{route("proyectos")}}">Proyectos</a>
    @endauth
</nav>
