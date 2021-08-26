<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('img/gamer.svg') }}" type="image/icon type">
    <title>joansaga.dev</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-negro items-center flex flex-col w-screen h-screen overflow-hidden">
    <div class="max-w-screen-2xl max-h-screen-xl w-full  h-full rounded-bl-3xl z-0
    bg-gradient-to-r from-celeste2 to-celeste transform -rotate-12 origin-top-left absolute top-0">
    </div>
    <div class="z-10 container mx-auto">
        <nav class="flex justify-between text-white py-4 ">
            <div class="select-none">
                <a href="{{ route('home') }}" class="text-3xl font-semibold">JOANSAGA</a>
            </div>
            <div class="flex flex-row gap-x-5 items-center select-none">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                    {{ __('home') }}
                </x-nav-link>
                <x-nav-link :href="route('habilidades')" :active="request()->routeIs('habilidades')">
                    {{ __('habilidades') }}
                </x-nav-link>
                <x-nav-link :href="route('proyectos')" :active="request()->routeIs('proyectos')">
                    {{ __('proyectos') }}
                </x-nav-link>
                <x-nav-link :href="route('servicios')" :active="request()->routeIs('servicios')">
                    {{ __('servicios') }}
                </x-nav-link>
                <x-nav-link :href="route('blog')" :active="request()->routeIs('blog')">
                    {{ __('blog') }}
                </x-nav-link>
            </div>
            <div class="flex flex-row gap-x-5 items-center text-xl">
                <a href="https://github.com/JOANSAGA" target="_blank"><i class="fab fa-github fa-lg"></i></a>
                <a href="https://www.linkedin.com/in/joansaga/" target="_blank"><i
                        class="fab fa-linkedin fa-lg"></i></a>
                <a href="https://wa.me/593963732218" target="_blank"><i class="fab fa-whatsapp fa-lg"></i></a>
            </div>
        </nav>
    </div>
    <main class="z-10 overflow-y-auto w-screen" id="app">
        <div class="container mx-auto">
            <div class="flex justify-center my-4">
                <div class="relative w-2/5 h-56 items-center flex">
                    <simple-card class="w-4/5">
                        <span class="text-xl">hola,</span>
                        <span class="text-xl"> mi nombre es</span>
                        <span class="text-3xl font-semibold"> johan Sánchez</span>
                        <span class="text-xl"> developer</span>
                    </simple-card>
                    <div class="absolute right-0 inset-y-0 ...">
                        <div class="w-56 h-56 bg-celeste2 rounded-full border-2 border-white overflow-hidden">
                            <img src="{{ asset('img/gamer.svg') }}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-white flex flex-col my-4 ">
                <span>Lenguajes utilizados:</span>
                <div class="flex flex-wrap gap-4 my-4">
                    <simple-card class="w-auto h-auto">
                        <span class="iconify" data-icon="cib:mysql" data-width="50"></span>
                    </simple-card>
                    <simple-card class="w-auto">
                        <span class="iconify" data-icon="logos:css-3" data-width="50"></span>
                    </simple-card>

                </div>
            </div>
            <div class="text-white flex flex-col my-4 ">
                <span>Proyectos:</span>
                <div class="flex flex-wrap gap-4 my-4">
                    <simple-card><span class="text-xl">hola,</span>
                        <span class="text-xl"> mi nombre es</span>
                        <span class="text-3xl font-semibold"> johan Sánchez</span>
                        <span class="text-xl"> developer</span>
                    </simple-card>
                    <div
                        class="border-white border-2 rounded-2xl p-4 flex-col flex text-white bg-opacity-50 bg-gray-400 select-none w-auto">
                        <span class="text-xl">hola,</span>
                        <span class="text-xl"> mi nombre es</span>
                        <span class="text-3xl font-semibold"> johan Sánchez</span>
                        <span class="text-xl"> developer</span>
                    </div>
                    <div
                        class="border-white border-2 rounded-2xl p-4 flex-col flex text-white bg-opacity-50 bg-gray-400 select-none w-auto">
                        <span class="text-xl">hola,</span>
                        <span class="text-xl"> mi nombre es</span>
                        <span class="text-3xl font-semibold"> johan Sánchez</span>
                        <span class="text-xl"> developer</span>
                    </div>
                    <div
                        class="border-white border-2 rounded-2xl p-4 flex-col flex text-white bg-opacity-50 bg-gray-400 select-none w-auto">
                        <span class="text-xl">hola,</span>
                        <span class="text-xl"> mi nombre es</span>
                        <span class="text-3xl font-semibold"> johan Sánchez</span>
                        <span class="text-xl"> developer</span>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

</html>
