<x-layouts.layout>
    <div class="flex flex-row justify-center p-5 bg-gray-200 max-h-full">
        <form method="POST" action="{{ route('alumnos.store') }}" class="bg-white p-7 rounded-2xl">
            @csrf
            <x-input-label for="nombre">Nombre</x-input-label>
            <x-text-input name="nombre"/>
            <x-input-label for="dni">DNI</x-input-label>
            <x-text-input name="dni"/>
            <x-input-label for="email">Email</x-input-label>
            <x-text-input name="email"/>
            <x-input-label for="edad">Edad</x-input-label>
            <x-text-input name="edad"/>
            <br/>
            <input class="btn btn-primary m-2" type="submit" value="Guardar" id=""/>
            <input class="btn btn-primary m-2" type="submit" value="Cancelar" id=""/>
        </form>
    </div>
</x-layouts.layout>
