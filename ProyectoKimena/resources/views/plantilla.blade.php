<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Tienda de Abarrotes')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        vino: '#2e2425',
                        vinodark: '#4a080f'
                    }
                }
            }
        }
    </script>

    <style>
        .hamburger {
            display: none;
        }
        @media (max-width: 768px) {
            .hamburger {
                display: block;
            }
            .nav-links {
                display: none;
            }
            .nav-links.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #4a080f;
                padding: 1rem;
            }
        }
    </style>

</head>

<body class="bg-gradient-to-br from-gray-100 to-gray-200 flex flex-col min-h-screen font-sans">

<!-- HEADER -->
<header class="bg-gradient-to-r from-vinodark to-vino text-white shadow-xl">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-2xl md:text-3xl font-bold flex items-center">
            <span class="mr-2">🛒</span> Tienda de Abarrotes
        </h1>

        <nav class="hidden md:flex space-x-6 font-semibold">
            <a href="/" class="hover:text-yellow-300 transition duration-300">Inicio</a>
            <a href="#" class="hover:text-yellow-300 transition duration-300">Usuarios</a>
            <a href="#" class="hover:text-yellow-300 transition duration-300">Productos</a>
            <a href="#" class="hover:text-yellow-300 transition duration-300">Ventas</a>
        </nav>

        <button class="hamburger md:hidden text-white focus:outline-none" onclick="toggleMenu()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <nav class="nav-links md:hidden">
        <a href="/" class="block py-2 px-4 hover:bg-vino transition duration-300">Inicio</a>
        <a href="#" class="block py-2 px-4 hover:bg-vino transition duration-300">Usuarios</a>
        <a href="#" class="block py-2 px-4 hover:bg-vino transition duration-300">Productos</a>
        <a href="#" class="block py-2 px-4 hover:bg-vino transition duration-300">Ventas</a>
    </nav>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="flex-grow container mx-auto p-6 md:p-8">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-gradient-to-r from-black to-gray-900 text-white text-center p-6 mt-10">
    <div class="container mx-auto">
        <p class="text-lg font-semibold mb-2">
            Sistema de Tienda de Abarrotes
        </p>
        <p class="text-sm text-gray-400 mb-1">
            Proyecto académico - ICASYS
        </p>
        <p class="text-sm text-gray-400">
            Desarrollado con Laravel + TailwindCSS
        </p>
        <div class="mt-4 flex justify-center space-x-4">
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">Política de Privacidad</a>
            <a href="#" class="text-gray-400 hover:text-white transition duration-300">Términos de Servicio</a>
        </div>
    </div>
</footer>

<script>
    function toggleMenu() {
        const nav = document.querySelector('.nav-links');
        nav.classList.toggle('open');
    }
</script>

</body>
</html>