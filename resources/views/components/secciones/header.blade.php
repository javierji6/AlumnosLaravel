<header class="h-24 bg-header p-5 flex justify-between items-center">
    <a href="/" class="h-full mr-4 flex items-center">
        <img class="max-h-full" src="{{ asset("/images/logo.png") }}" alt="Logo">
    </a>
    <h1 class="text-3xl text-white font-bold" style="margin-right: 8%">Gestión Educativa</h1>
    <div class="flex items-center">
        @guest
            <a class="btn glass mr-2" href="/login">{{__("Login")}}</a>
            <a class="btn glass" href="/register">{{__("Register")}}</a>
        @endguest
        @auth
            <h1 class="text-lg text-white mr-4">{{auth()->user()->name}}</h1>
            <form action="{{route("logout")}}" method="POST">
                @csrf
                <a class="text-white" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                    </svg>

                </a>
            </form>
        @endauth
    </div>
</header>
