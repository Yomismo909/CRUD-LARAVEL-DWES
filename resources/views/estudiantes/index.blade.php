<x-layouts.layout>
    <div class="overflow-x-auto h-full flex justify-center pb-16">
        <table class="table table-xs table-pin-rows table-pin-cols w-45v bg-slate-600">
            <thead>
                <caption class="text-black text-3xl">Listado de alumnos</caption>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido(s)</th>
                    <th>Fecha de nacimiento</th>
                    <th>Dirección</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estudiantes as $estudiante)
                    <tr>
                        <td>{{ $estudiante->nombre }}</td>
                        <td>{{ $estudiante->apellido }}</td>
                        <td>{{ $estudiante->fecha_nacimiento }}</td>
                        <td>{{ $estudiante->direccion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.layout>
