<x-secciones.layout>
    <div class="flex justify-center p-5 bg-gray-200 h-full">
        <form id="updateForm" method="POST" action="{{ route('profesores.update', $profesor->id) }}" class="bg-white p-8 rounded-lg shadow-lg">
        @method('PUT')
            @csrf
            <div class="mb-4">
                <x-input-label for="nombre">Nombre</x-input-label>
                <input type="text" name="nombre" value="{{ $profesor->nombre }}" class="input-field">
                @error('nombre')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <x-input-label for="dni">DNI</x-input-label>
                <input type="text" name="dni" value="{{ $profesor->dni }}" class="input-field">
                @error('dni')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <x-input-label for="email">Email</x-input-label>
                <input type="email" name="email" value="{{ $profesor->email }}" class="input-field">
                @error('email')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-4">
                <x-input-label for="edad">Edad</x-input-label>
                <input type="text" name="edad" value="{{ $profesor->edad }}" class="input-field">
                @error('edad')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex justify-end">
                <button onclick="confirmUpdate()" class="btn btn-primary mr-2" type="button">Guardar</button>
                <a href="{{ route('profesores.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
    <script>
        function confirmUpdate() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Quieres guardar los cambios?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Guardar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('updateForm').submit();
                }
            });
        }
    </script>
</x-secciones.layout>
