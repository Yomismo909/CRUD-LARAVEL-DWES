<x-layouts.layout>
    @guest
    <div class=" flex h-full w-full flex-col items-center">
        <p class="text-4xl pt-16">Bienvenido, al sistema de gestion de alumnado.</p>
        <p class="text-3xl pt-16">Para trabajar con esta herramienta, primero debes registrarte</p>
    </div>
    @endguest
    @auth
        <div class=" flex h-full w-full justify-center">
            <p class="text-3xl pt-16">Bienvenido, {{ auth()->user()->name }}</p>
        </div>
    @endauth
</x-layouts.layout>
