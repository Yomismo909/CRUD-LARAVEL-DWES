<x-layouts.layout>
    <div class="overflow-x-auto h-full flex items-center flex-col pb-16 ">
        <div class="w-full">
            <a href="{{ route('clases.create') }}" class="btn btn-success px-6 m-1 left-0">Crear clase</a>
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
            <thead>
                <caption class="text-black text-3xl my-5">Listado de Asignaturas</caption>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Profesor que la imparte</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clases as $clase)
                    <tr>
                        <td>{{ $clase->nombre }}</td>
                        <td>{{ $clase->descripcion }}</td>
                        <td>
                            @if ($clase->nombre_profesor != null)
                                {{ $clase->apellido_profesor }}, {{ $clase->nombre_profesor }}
                            @else
                                <p class="text-red-600"> Sin profesor asignado</p>
                            @endif
                        </td>

                        <td class="flex">
                            {{-- <a href="" class="btn btn-success px-1 mx-1">Ver</a> --}}
                            <a href="{{ route('clases.edit', $clase->id) }}"
                                class="btn btn-warning px-1 mx-1 my-4">Editar</a>
                            <form method='POST' action="{{ route('clases.destroy', $clase->id) }}">
                                @method('DELETE')
                                @csrf
                                <input class="btn btn-error px-1 mx-1 my-4" type="submit" value="Borrar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.layout>
