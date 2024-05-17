<x-secciones.layout>
    <div class="bg-gray-200 min-h-screen">
        <h1 class="text-2xl font-bold text-center pt-5">Editar Profesor</h1>
        <div class="flex justify-center p-5">
            <form id="updateForm" method="POST" action="{{ route('profesores.update', $profesor->id) }}" class="bg-white p-8 rounded-lg shadow-lg">
            @method('PUT')
                @csrf
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" value="{{ $profesor->nombre }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nombre')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="dni">DNI</x-input-label>
                    <input type="text" name="dni" value="{{ $profesor->dni }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('dni')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="email">Email</x-input-label>
                    <input type="email" name="email" value="{{ $profesor->email }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('email')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="edad">Edad</x-input-label>
                    <input type="text" name="edad" value="{{ $profesor->edad }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('edad')
                    <p class="text-red-600 text-sm italic pt-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex justify-end">
                    <button onclick="confirmUpdate()" class="btn btn-primary mr-2" type="button">Guardar</button>
                    <a href="{{ route('profesores.index') }}" class="btn btn-secondary">Cancelar</a>
                </div>
            </form>
        </div>
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
