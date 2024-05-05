<x-layouts.layout>
    <div class="flex flex-row justify-center p-5 bg-gray-200 max-h-full">
        <form onsubmit="(e)->e.preventDefault()" method="POST" action="{{route('alumnos.update', $alumno->id)}}" class="bg-white p-7 rounded-2xl">
            @method('PUT')
            @csrf
            <x-input-label for="nombre">Nombre</x-input-label>
            <input type="text" name="nombre" value="{{$alumno->nombre}}" id=""> <!--old mantiene el ultimo valor-->
            @if ($errors->get("nombre"))
                @foreach($errors->get("nombre") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="dni">DNI</x-input-label>
            <input type="text" name="dni" value="{{$alumno->dni}}" id="">
            @if ($errors->get("dni"))
                @foreach($errors->get("dni") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="email">Email</x-input-label>
            <input type="email" name="email" value="{{$alumno->email}}" id="">
            @if ($errors->get("email"))
                @foreach($errors->get("email") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <x-input-label for="edad">Edad</x-input-label>
            <input type="text" name="edad" value="{{$alumno->edad}}" id="">
            @if ($errors->get("edad"))
                @foreach($errors->get("edad") as $error)
                    <div class="text-sm text-red-600">{{$error}}</div>
                @endforeach
            @endif
            <br/>
            <button onclick="handleConfirm()" class="btn btn-primary m-2" type="submit">Guardar</button>
            <a href="{{route("alumnos.index")}}" class="btn btn-primary m-2">Cancelar</a>
        </form>
    </div>
    <script>
       function handleConfirm() {
            Swal.fire ({
                title:"Prueba"
            })
        }
    </script>
</x-layouts.layout>
