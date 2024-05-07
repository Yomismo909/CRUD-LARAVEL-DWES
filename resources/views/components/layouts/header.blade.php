<header class=" h-10v bg-primary flex px-3">
    <img src={{ asset('build/assets/images/cpifp-los-enlaces-2x.png') }} class="max-h-max py-4" alt="nigger">
    <nav class="w-full ml-20 ">
        @guest
            <ul class=" h-10v  flex justify-end items-center">
                <li class="px-5 text-xl bg-primary-light rounded p-1 m-1"><a href="login">Login</a></li>
                <li class="px-5 text-xl bg-primary-light rounded p-1 m-1"><a href="register">Register</a></li>
            </ul>
        @endguest
        @auth
            <div class="flex justify-between">
                <ul class=" h-10v flex items-center">
                    <li class="px-5 text-xl">
                        <a href="/">Menu</a>
                    </li>
                    <li class="px-5 text-xl">
                        <a href="estudiantes">Alumnos</a>
                    </li>
                    <li class="px-5 text-xl">
                        <a href="profesores">Profesores</a>
                    </li>
                    <li class="px-5 text-xl">
                        <a href="clases">Clases</a>
                    </li>
                </ul>
                <ul class=" h-10v  flex justify-end items-center">
                    <li class="px-5 text-xl">
                        <p>{{ auth()->user()->name }}</p>
                    </li>
                    <li class="px-5 text-xl">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input class="bg-primary-light rounded p-1" type="submit" value="Log Out">
                        </form>
                    </li>
                </ul>
            </div>

        @endauth
    </nav>
</header>
