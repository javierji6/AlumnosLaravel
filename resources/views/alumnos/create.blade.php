<x-secciones.layout>
    <div class="bg-gray-200 min-h-screen">
        <h1 class="text-2xl font-bold text-center pt-5">Nuevo Alumno</h1>
        <div class="flex justify-center p-5">
            <form id="createForm" method="POST" action="{{ route('alumnos.store') }}" class="bg-white p-8 rounded-lg shadow-lg">
                @csrf
                <div class="mb-4">
                    <x-input-label for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" class="input-field">
                    @error('nombre')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="dni">DNI</x-input-label>
                    <input type="text" name="dni" value="{{ old('dni') }}" class="input-field">
                    @error('dni')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="email">Email</x-input-label>
                    <input type="email" name="email" value="{{ old('email') }}" class="input-field">
                    @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="edad">Edad</x-input-label>
                    <input type="text" name="edad" value="{{ old('edad') }}" class="input-field">
                    @error('edad')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
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
