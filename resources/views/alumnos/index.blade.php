<x-secciones.layout>
    <div class="p-2 flex justify-between items-center">
        @auth
            <div class="flex justify-center"> <!-- Agregado un margen inferior para separar el botón -->
                <a class="btn btn-primary" href="{{route("alumnos.create")}}">Nuevo alumno</a>
            </div>
        @endauth
        @guest <!-- Si el usuario no esta autenticado -->
                <div class="flex justify-center">
                    <a></a>
                </div>
        @endguest
        <h1 class="text-3xl font-bold text-red-600 text-center">Listado de alumnos</h1>
        <p>Página: <b>{{$alumnos->currentPage()}}</b> de <b>{{$alumnos->lastPage()}}</b></p>
    </div>
    <div>
        @if(session()->get("status"))
            <div id="statusMessage" role="alert" class="flex items-center justify-center m-2 bg-success border border-success text-black px-4 py-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                <span>{{session()->get("status")}}</span>
            </div>
        @endif
    </div>
    <div class="max-h-[60vh] overflow-y-auto min-h-screen">
        <table class="w-full border-collapse border border-gray-300">
            <thead class="text-lg text-white bg-gray-800 sticky top-0">
                <tr>
                    <th class="px-2 py-2">Nombre</th>
                    <th class="px-2 py-2">DNI</th>
                    <th class="px-2 py-2">Edad</th>
                    <th class="px-2 py-2">Email</th>
                    <th class="px-2 py-2">Tutor</th>
                    @auth
                        <th class="px-2 py-2">Editar</th>
                        <th class="px-2 py-2">Borrar</th>
                    @endauth
                </tr>
            </thead>
            <tbody class="text-base text-gray-700">
            @foreach($alumnos as $alumno)
                <tr class="border-b border-gray-300">
                    <td class="px-2 py-2 text-center">{{$alumno->nombre}}</td>
                    <td class="px-2 py-2 text-center">{{$alumno->dni}}</td>
                    <td class="px-2 py-2 text-center">{{$alumno->edad}}</td>
                    <td class="px-2 py-2 text-center">{{$alumno->email}}</td>
                    <td class="px-2 py-2 text-center">
                        @if($alumno->profesor)
                            {{ $alumno->profesor->nombre}}
                        @else
                            Sin tutor asignado
                        @endif
                    </td>
                    @auth
                        <td class="px-2 py-2 text-center">
                            <a href="{{route("alumnos.edit", $alumno->id)}}" class="text-blue-600 hover:text-blue-800 transition-colors duration-300 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>
                            </a>
                        </td>
                        <td class="px-2 py-2 text-center">
                            <form method="POST" action="{{ route('alumnos.destroy', $alumno->id) }}" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800 transition-colors duration-300 delete-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="flex justify-center mt-5">
            <div class="flex justify-center bg-white p-3">
                {{$alumnos->links()}}
            </div>
        </div>
    </div>
</x-secciones.layout>
<script>

    //Esperamos a que el contenido del DOM se cargue
    document.addEventListener('DOMContentLoaded', function() {
        const statusMessage = document.getElementById('statusMessage');
        if (statusMessage) {
            setTimeout(function() {
                statusMessage.style.display = 'none';
            }, 5000); // Alert success desaparece en 5 segundos
        }
    });

    // Modal de confirmación
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "No podrás revertir esto.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, borrar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
</script>
