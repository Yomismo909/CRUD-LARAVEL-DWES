<x-layouts.layout>
    <div class="overflow-x-auto h-full flex items-center flex-col pb-16 ">
        <div class="w-full">
            <a href="{{ route('clases.create') }}" class="btn btn-success px-6 m-1 left-0">Crear clase</a>
        </div>
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
                        <td> {{ $clase->apellido_profesor }}, {{ $clase->nombre_profesor }}</td>

                        <td class="flex">
                            <a href="" class="btn btn-success px-1 mx-1">Ver</a>
                            <a href="{{ route('clases.edit', $clase->id) }}"
                                class="btn btn-warning px-1 mx-1">Editar</a>
                            <a href="{{ route('clases.destroy', $clase->id) }}"
                                class="btn btn-error px-1 mx-1">Borrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layouts.layout>
