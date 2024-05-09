<x-layouts.layout>
    <div class="flex justify-center items-center flex-col pt-5">
        <p class="text-black text-3xl">Editar profesor</p>
        <form method='POST' action="{{ route('clases.update', $clase->id) }}"
            class="bg-primary w-30v min-w-96 min-h-fit p-8 rounded">
            @method('PUT')
            @csrf
            <div class="mb-4">
                <div class="flex justify-between items-center">
                    <x-input-label for="nombre">Nombre</x-input-label>
                    <input type="text" name="nombre" id="nombre" value="{{ $clase->nombre }}">
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
                    <x-input-label for="descripcion">Descripcion</x-input-label>
                    <input type="text" name="descripcion" id="descripcion" value="{{ $clase->descripcion }}">
                </div>
                @if ($errors->get('descripcion'))
                    @foreach ($errors->get('descripcion') as $error)
                        <div class="text-sm text-red-600 text-center">
                            <p>{{ $error }}</p>
                        </div>
                    @endforeach
                @endif
            </div>
            <div class="flex justify-between">
                <input class="btn btn-success w-48" type="submit" value="Guardar" />
                <a class="btn btn-primary w-48" href="{{ route('clases.index') }}">Cancelar</a>
            </div>

        </form>
    </div>
</x-layouts.layout>
