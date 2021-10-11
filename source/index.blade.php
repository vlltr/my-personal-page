@extends('_layouts.main')

@section('body')
    <div class="p-6 flex items-center justify-center min-h-screen">
        <div class="md:flex">
            <div class="mt-6 md:ml-6 md:mt-0">
                <div class="h-32 w-32 md:64 md:64 mx-auto">
                    <img src="assets/img/mauricio-villatoro.jpg"
                        alt="Mauricio Villatoro" class="h-32 w-32 flex-shrink-0 rounded-full overflow-hidden shadow-lg">
                </div>

                <h1
                    class="mt-3 font-extrabold text-center text-transparent bg-clip-text bg-gradient-to-r from-gray-700 via-gray-900 to-black">
                    Mauricio Villatoro
                </h1>

                <div class="mt-6 max-w-2xl">
                    <div class="post">
                        <p class="font-light text-justify">Hey, Mi nombre es Mauricio 👋, pero puedes llamarme
                            <em>Mauro</em>.
                            Actualmente vivo en San Miguel, El Salvador.
                        </p>

                        <p class="font-light text-justify">Soy un Desarrollador Web 👨‍💻 que utiliza Laravel, Bootstrap,
                            Livewire,
                            y AlpineJS. Cuando no estoy escribiendo código me encontraras tomando café ☕ o levantando pesas.
                        </p>

                        <p class="font-light text-justify">También colaboro en un podcast llamado <a
                                href="https://anchor.fm/cafes-on" target="_blank">Cafés On</a>,
                            en donde hablamos de temas relacionados con la cultura pop, entretenimiento y en algunas
                            ocasiones sobre temas relacionados a la situación de nuestro país El Salvador.</p>

                        <p class="mt-3">
                            <a href="https://twitter.com/maurovlltr" target="_blank"
                                class="unstyled inline-block text-black border-0 hover:text-gray-700 focus:text-gray-700">
                                <i class="fa fa-twitter"></i>
                            </a>

                            <a href="https://github.com/vlltr" target="_blank"
                                class="ml-3 unstyled inline-block text-black border-0 hover:text-gray-700 focus:text-gray-700">
                                <i class="fa fa-github"></i>
                            </a>

                            <a href="https://instagram.com/maurovlltr" target="_blank"
                                class="ml-3 unstyled inline-block text-black border-0 hover:text-gray-700 focus:text-gray-700">
                                <i class="fa fa-instagram"></i>
                            </a>

                            <a href="https://music.apple.com/profile/vlltr" target="_blank"
                                class="ml-3 unstyled inline-block text-black border-0 hover:text-gray-700 focus:text-gray-700">
                                <i class="fa fa-music"></i>
                            </a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
