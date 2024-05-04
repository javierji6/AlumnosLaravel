<header class="h-15v bg-header p-5 flex justify-between items-center">
    <img class="max-h-full" src="{{asset("/images/logo.png")}}" alt="Logo">
    <h1 class="text-5xl text-white">Proyecto Laravel</h1>
    <div>
        @guest
            <a class="btn glass" href="/login">Iniciar sesión</a>
            <a class="btn glass" href="/register">Registrarse</a>
        @endguest
        @auth
            <h1 class="text-3xl text-white">{{auth()->user()->name}}</h1>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <input class="btn glass" type="submit" value="Logout">
            </form>
        @endauth
    </div>
</header>
