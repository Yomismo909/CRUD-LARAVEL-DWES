<x-layouts.layout>
    <div class="overflow-x-auto h-full flex items-center flex-col pb-16 ">
        <div class="w-full">
            <a href="{{ route('estudiantes.create') }}" class="btn btn-success px-6 m-1 left-0">Crear estudiante</a>
        </div>
        @if (session()->get('status'))
            <div role="alert" class="alert alert-success w-25v ">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session()->get('status') }}</span>
            </div>
        @endif
        <table class="table table-xs table-pin-rows table-pin-cols w-45v bg-slate-600">
            <caption class="text-black text-3xl my-5">Listado de estudiantes</caption>
            <thead>

                <tr>
                    <th>Nombre</th>
                    <th>Apellido(s)</th>
                    <th>Fecha de nacimiento</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->fecha_nacimiento }}</td>
                        <td>{{ $estudiante->direccion }}</td>
                        <td class="flex">
                            {{-- <a href="" class="btn btn-success px-2 mx-1 my-4">Ver</a> --}}
                            <a href="{{ route('estudiantes.edit', $estudiante->id) }}"
                                class="btn btn-warning px-1 mx-1 my-4">Editar</a>
                            <form method='POST' action="{{ route('estudiantes.destroy', $estudiante->id) }}">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-error px-1 mx-1 my-4" type="submit" value="Borrar">
                            </form>

                            {{-- {{route('estudiantes.show')}}
                                 {{route('estudiantes.edit')}}
                                 {{route('estudiantes.destroy')}} --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</x-layouts.layout>
