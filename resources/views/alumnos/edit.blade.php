<x-secciones.layout>
    <div class="bg-gray-200 min-h-screen">
        <h1 class="text-2xl font-bold text-center pt-5">Editar Alumno</h1>
        <div class="flex justify-center p-5">
            <form id="updateForm" method="POST" action="{{ route('alumnos.update', $alumno->id) }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    <x-input-label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" value="{{ $alumno->nombre }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('nombre')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="dni">DNI</x-input-label>
                    <input type="text" name="dni" value="{{ $alumno->dni }}" class="input-field">
                    @error('dni')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="email">Email</x-input-label>
                    <input type="email" name="email" value="{{ $alumno->email }}" class="input-field">
                    @error('email')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="edad">Edad</x-input-label>
                    <input type="text" name="edad" value="{{ $alumno->edad }}" class="input-field">
                    @error('edad')
                    <div class="text-sm text-red-600">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <x-input-label for="idProfesor">Tutor</x-input-label>
                    <select name="idProfesor" class="input-field">
                        <option value="">Sin tutor</option>
                        @foreach($profesores as $profesor)
                            <option value="{{ $profesor->id }}" {{ $alumno->idProfesor == $profesor->id ? 'selected' : '' }}>
                                {{ $profesor->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="flex justify-end">
                    <button onclick="confirmUpdate()" class="btn btn-primary mr-2" type="button">Guardar</button>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Cancelar</a>
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
