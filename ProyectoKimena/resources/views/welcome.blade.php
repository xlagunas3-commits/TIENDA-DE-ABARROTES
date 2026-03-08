<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} - Abarrotes Premium</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <script src="https://cdn.tailwindcss.com"></script>
            <style>
                /* Definición de colores personalizados para Tailwind */
                :root {
                    --color-vino: #580c1f; /* Color Vino Profundo */
                    --color-negro-soft: #121212;
                }
            </style>
            jiji
        @endif
    </head>
    <body class="bg-white dark:bg-[#0a0a0a] text-[#1b1b18] font-sans antialiased">
        
        <nav class="w-full bg-black text-white px-6 py-4 flex justify-between items-center sticky top-0 z-50 shadow-lg">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-[#580c1f] rounded-lg flex items-center justify-center font-bold">LR</div>
                <span class="text-xl font-bold tracking-tight">LA <span class="text-[#580c1f]">RESERVA</span></span>
            </div>

            <div class="hidden md:flex gap-8 text-sm font-medium uppercase tracking-widest">
                <a href="#" class="hover:text-[#580c1f] transition">Pasillos</a>
                <a href="#" class="hover:text-[#580c1f] transition">Frescos</a>
                <a href="#" class="hover:text-[#580c1f] transition">Promociones</a>
            </div>

            <div class="flex items-center gap-4">
                @if (Route::has('login'))
                    <div class="text-sm">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="underline decoration-[#580c1f] underline-offset-4">Mi Cuenta</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:text-gray-400 transition">Entrar</a>
                        @endauth
                    </div>
                @endif
                <button class="bg-[#580c1f] text-white px-4 py-2 rounded-sm text-xs font-bold hover:bg-[#3d0815] transition">CARRITO (0)</button>
            </div>
        </nav>

        <section class="relative h-[70vh] flex items-center justify-center bg-black overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/60 to-transparent z-10"></div>
            <div class="absolute inset-0 opacity-50 bg-[url('https://images.unsplash.com/photo-1542838132-92c53300491e?q=80&w=2000')] bg-cover bg-center"></div>

            <div class="container mx-auto px-6 relative z-20 text-white">
                <span class="text-[#580c1f] font-bold tracking-[0.3em] uppercase mb-4 block">Calidad Artesanal</span>
                <h1 class="text-5xl md:text-7xl font-bold leading-tight mb-6">Lo mejor del campo <br>a tu <span class="italic text-gray-200">despensa.</span></h1>
                <div class="flex flex-wrap gap-4">
                    <button class="bg-[#580c1f] px-8 py-4 rounded-sm font-bold hover:scale-105 transition transform">ORDENAR AHORA</button>
                    <button class="border border-white px-8 py-4 rounded-sm font-bold hover:bg-white hover:text-black transition">VER CATÁLOGO</button>
                </div>
            </div>
        </section>

        <main class="container mx-auto py-20 px-6">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-4xl font-bold">Nuestras Categorías</h2>
                    <p class="text-gray-500 mt-2">Seleccionamos cada producto con estándares de alta cocina.</p>
                </div>
                <div class="h-1 w-24 bg-[#580c1f]"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="group relative h-80 bg-gray-200 overflow-hidden rounded-sm cursor-pointer">
                    <div class="absolute inset-0 bg-black/20 group-hover:bg-[#580c1f]/40 transition-all duration-500"></div>
                    <div class="absolute bottom-6 left-6 text-white z-10">
                        <h3 class="text-xl font-bold">Vinos & Licores</h3>
                        <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity">Explorar pasillo &rarr;</p>
                    </div>
                </div>
                <div class="md:col-span-2 h-80 bg-[#580c1f] p-10 flex flex-col justify-center text-white rounded-sm">
                    <h3 class="text-3xl font-bold mb-4">Frutas y Verduras de Temporada</h3>
                    <p class="text-gray-200 mb-6 max-w-sm">Recibimos productos frescos todas las mañanas directamente de productores locales.</p>
                    <a href="#" class="text-sm font-bold border-b-2 border-white w-fit pb-1">COMPRAR FRESCOS</a>
                </div>
                <div class="group relative h-80 bg-black overflow-hidden rounded-sm cursor-pointer">
                    <div class="absolute inset-0 bg-white/5 group-hover:bg-[#580c1f]/30 transition-all"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h3 class="text-xl font-bold text-white">Gourmet & Deli</h3>
                        <p class="text-xs opacity-0 group-hover:opacity-100 transition-opacity">Importaciones exclusivas</p>
                    </div>
                </div>
            </div>
        </main>

        <section class="bg-black py-16 px-6">
            <div class="container mx-auto border border-gray-800 p-12 flex flex-col items-center text-center rounded-sm">
                <h3 class="text-white text-3xl font-bold mb-4">¿Quieres ofertas exclusivas?</h3>
                <p class="text-gray-400 mb-8 max-w-md">Únete a nuestra lista de correos y recibe descuentos especiales cada semana en tus productos favoritos.</p>
                <form class="flex w-full max-w-md gap-2">
                    <input type="email" placeholder="tu@email.com" class="flex-1 bg-transparent border-b border-gray-700 text-white p-2 focus:border-[#580c1f] outline-none">
                    <button class="text-[#580c1f] font-bold uppercase tracking-tighter hover:text-white transition">Suscribirse</button>
                </form>
            </div>
        </section>

        <footer class="bg-white py-12 border-t border-gray-100">
            <div class="container mx-auto px-6 text-center text-gray-400 text-xs">
                <p class="mb-2">© 2024 {{ config('app.name') }} - TIENDA DE ABARROTES Kimena</p>
                <div class="flex justify-center gap-4">
                    <a href="#" class="hover:text-black">Privacidad</a>
                    <a href="#" class="hover:text-black">Términos</a>
                    <a href="#" class="hover:text-black">Envíos</a>
                </div>
            </div>
        </footer>

    </body>
</html>