<x-secciones.layout>
    <div class="bg-gray-200 min-h-screen">
        <h1 class="text-2xl font-bold text-center pt-5">Nuevo Alumno</h1>
        <div class="flex justify-center p-5">
            <form id="createForm" method="POST" action="{{ route('alumnos.store') }}" class="bg-white p-8 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nombre')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="dni">DNI</x-input-label>
                    <input type="text" name="dni" value="{{ old('dni') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dni')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</x-input-label>
                    <input type="email" name="email" value="{{ old('email') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad</x-input-label>
                    <input type="text" name="edad" value="{{ old('edad') }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('edad')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="idProfesor">Tutor</x-input-label>
                    <select name="idProfesor" class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                        <option value="" selected>Sin tutor</option>
                        @foreach($profesores as $profesor)
                            <option value="{{ $profesor->id }}">
                                {{ $profesor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" onclick="confirmCreate()" class="btn btn-primary mr-2">Guardar</button>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</x-secciones.layout>
<script>
    function confirmCreate() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: '¿Quieres crear un nuevo alumno?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Crear',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('createForm').submit();
            }
        });
    }
</script>
