<x-layouts.layout>
    <div class="flex justify-center items-center flex-col pt-5">
        <p class="text-black text-3xl">Creacion de un nuevo profesor</p>
        <form method="POST" action="{{ route('profesores.store') }}"
            class="bg-primary w-30v min-w-96 min-h-fit p-8 rounded">
            @csrf
            <div class="mb-4">
                <div class="flex justify-between items-center">
                    <x-input-label for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" id="nombre" value="{{old("nombre")}}">
                </div>
                @if ($errors->get('nombre'))
                    @foreach ($errors->get('nombre') as $error)
                        <div class="text-sm text-red-600 text-center">
                            <p>{{ $error }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-4">
                <div class="flex justify-between items-center">
                <x-input-label for="apellido">Apellido</x-input-label>
                <input type="text" name="apellido" id="apellido" value="{{old("apellido")}}">
                </div>
                @if ($errors->get('apellido'))
                    @foreach ($errors->get('apellido') as $error)
                        <div class="text-sm text-red-600 text-center">
                            <p>{{ $error }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-4">
                <div class="flex justify-between items-center">
                <x-input-label for="fecha_nacimiento">Fecha de nacimiento</x-input-label>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{old("fecha_nacimiento")}}">
                </div>
                @if ($errors->get('fecha_nacimiento'))
                    @foreach ($errors->get('fecha_nacimiento') as $error)
                        <div class="text-sm text-red-600 text-center">
                            <p>{{ $error }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="mb-6">
                <div class="flex justify-between items-center">
                <x-input-label for="direccion">Direccion</x-input-label>
                <input type="text" name="direccion" id="direccion" value="{{old("direccion")}}">
                </div>
                @if ($errors->get('direccion'))
                    @foreach ($errors->get('direccion') as $error)
                        <div class="text-sm text-red-600 text-center">
                            <p>{{ $error }}</p>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="flex justify-between">
                <input class="btn btn-success w-48" type="submit" value="Guardar" />
                <a class="btn btn-primary w-48" href="{{route('profesores.index')}}">Cancelar</a>
            </div>

        </form>
    </div>
</x-layouts.layout>
