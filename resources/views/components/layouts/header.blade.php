<header class="h-24 bg-header p-5 flex justify-between items-center">
    <img class="h-full mr-4" src="{{asset("/images/logo.png")}}" alt="Logo">
    <h1 class="text-3xl text-white font-bold">Proyecto Laravel</h1>
    <div class="flex items-center">
        @guest
            <a class="btn glass mr-2" href="/login">{{__("Login")}}</a>
            <a class="btn glass" href="/register">{{__("Register")}}</a>
        @endguest
        @auth
            <h1 class="text-lg text-white mr-4">{{auth()->user()->name}}</h1>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <button type="submit" class="btn glass">{{__("Logout")}}</button>
            </form>
        @endauth
    </div>
</header>
