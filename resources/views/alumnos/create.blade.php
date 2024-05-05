<x-layouts.layout>
    <div class="flex flex-row justify-center p-5 bg-gray-200 max-h-full">
        <form method="POST" action="{{ route('alumnos.store') }}" class="bg-white p-7 rounded-2xl">
            @csrf
            <x-input-label for="nombre">Nombre</x-input-label>
            <input type="text" name="nombre" value="{{old("nombre")}}" id=""> <!--old mantiene el ultimo valor-->
            @if ($errors->get("nombre"))
                @foreach($errors->get("nombre") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="dni">DNI</x-input-label>
            <input type="text" name="dni" value="{{old("dni")}}" id="">
            @if ($errors->get("dni"))
                @foreach($errors->get("dni") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="email">Email</x-input-label>
            <input type="email" name="email" value="{{old("email")}}" id="">
            @if ($errors->get("email"))
                @foreach($errors->get("email") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="edad">Edad</x-input-label>
            <input type="text" name="edad" value="{{old("edad")}}" id="">
            @if ($errors->get("edad"))
                @foreach($errors->get("edad") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <br/>
            <input class="btn btn-primary m-2" type="submit" value="Guardar" id=""/>
            <input class="btn btn-primary m-2" type="submit" value="Cancelar" id=""/>
        </form>
    </div>
</x-layouts.layout>
