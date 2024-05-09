<x-layouts.layout>
    <div class="overflow-x-auto h-full flex items-center flex-col pb-16 ">
        <div class="w-full">
            <a href="{{ route('profesores.create') }}" class="btn btn-success px-6 m-1 left-0">Crear profesor</a>
        </div>
        <table class="table table-xs table-pin-rows table-pin-cols w-45v bg-slate-600">
            <caption class="text-black text-3xl my-5">Listado de Profesores</caption>
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
                @foreach ($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->apellido }}</td>
                        <td>{{ $profesor->fecha_nacimiento }}</td>
                        <td>{{ $profesor->direccion }}</td>
                        <td class="flex">
                            <a href="" class="btn btn-success px-1 mx-1">Ver</a>
                            <a href="{{ route('profesores.edit', $profesor->id) }}"
                                class="btn btn-warning px-1 mx-1">Editar</a>
                            <a href="{{ route('profesores.destroy', $profesor->id) }}"
                                class="btn btn-error px-1 mx-1">Borrar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
