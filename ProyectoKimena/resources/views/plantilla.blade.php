<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Tienda de Abarrotes')</title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#fef2f2',
                            100: '#fee2e2',
                            500: '#ef4444',
                            600: '#dc2626',
                            700: '#b91c1c',
                            900: '#7f1d1d'
                        },
                        secondary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1'
                        }
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.3s ease-out',
                        'bounce-subtle': 'bounceSubtle 2s infinite'
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' }
                        },
                        slideUp: {
                            '0%': { transform: 'translateY(10px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' }
                        },
                        bounceSubtle: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-5px)' }
                        }
                    }
                }
            }
        }
    </script>

    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .glass-effect {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
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
                background: rgba(0, 0, 0, 0.9);
                backdrop-filter: blur(10px);
                padding: 1rem;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }
        }
        .modern-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .modern-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
    </style>

</head>

<body class="bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen font-sans">

<!-- HEADER -->
<header class="relative overflow-hidden">
    <!-- Background with gradient -->
    <div class="absolute inset-0 gradient-bg opacity-90"></div>
    <div class="absolute inset-0 bg-black opacity-20"></div>

    <nav class="relative z-10 container mx-auto flex justify-between items-center p-6">
        <div class="flex items-center space-x-3">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center shadow-lg">
                <i class="fas fa-shopping-cart text-primary-600 text-xl"></i>
            </div>
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white">TiendaPlus</h1>
                <p class="text-white/80 text-sm">Tu supermercado digital</p>
            </div>
        </div>

        <div class="hidden md:flex items-center space-x-8">
            <a href="{{ route('welcome') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-home"></i>
                <span>Inicio</span>
            </a>
            <a href="{{ route('categoria') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-tags"></i>
                <span>Categorías</span>
            </a>
            <a href="{{ route('productos.public') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-box"></i>
                <span>Productos</span>
            </a>
            <a href="{{ route('proveedores.public') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-truck"></i>
                <span>Proveedores</span>
            </a>
            <a href="{{ route('nosotros') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-store"></i>
                <span>Nosotros</span>
            </a>
            <a href="{{ route('contacto') }}" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                <i class="fas fa-envelope"></i>
                <span>Contacto</span>
            </a>
            @auth
                <a href="" class="text-white hover:text-yellow-300 transition-all duration-300 flex items-center space-x-2">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Mis Pedidos</span>
                </a>
                <div class="flex items-center space-x-2 text-white">
                    <i class="fas fa-user"></i>
                    <span>{{ Auth::user()->name }}</span>
                </div>
            @endauth
        </div>

        <button class="hamburger md:hidden text-white focus:outline-none p-2" onclick="toggleMenu()">
            <i class="fas fa-bars text-xl"></i>
        </button>
    </nav>

    <nav class="nav-links md:hidden relative z-10">
        <a href="{{ route('welcome') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-home"></i>
            <span>Inicio</span>
        </a>
        <a href="{{ route('categoria') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-tags"></i>
            <span>Categorías</span>
        </a>
        <a href="{{ route('productos.public') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-box"></i>
            <span>Productos</span>
        </a>
        <a href="{{ route('proveedores.public') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-truck"></i>
            <span>Proveedores</span>
        </a>
        <a href="{{ route('nosotros') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-store"></i>
            <span>Nosotros</span>
        </a>
        <a href="{{ route('contacto') }}" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
            <i class="fas fa-envelope"></i>
            <span>Contacto</span>
        </a>
        @auth
            <a href="" class="block py-3 px-4 hover:bg-white/10 transition-all duration-300 flex items-center space-x-3">
                <i class="fas fa-shopping-bag"></i>
                <span>Mis Pedidos</span>
            </a>
        @endauth
    </nav>
</header>

<!-- CONTENIDO PRINCIPAL -->
<main class="relative z-10 container mx-auto px-6 py-8">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="relative bg-slate-900 text-white">
    <div class="absolute inset-0 bg-gradient-to-r from-slate-800 to-slate-900"></div>
    <div class="relative z-10 container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center space-x-3 mb-4">
                    <div class="w-10 h-10 bg-primary-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-shopping-cart text-white"></i>
                    </div>
                    <h3 class="text-xl font-bold">TiendaPlus</h3>
                </div>
                <p class="text-slate-300 text-sm">
                    Tu tienda de abarrotes digital con los mejores productos y precios.
                </p>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2 text-slate-300">
                    <li><a href="{{ route('categoria') }}" class="hover:text-white transition-colors">Categorías</a></li>
                    <li><a href="{{ route('productos.public') }}" class="hover:text-white transition-colors">Productos</a></li>
                    <li><a href="{{ route('proveedores.public') }}" class="hover:text-white transition-colors">Proveedores</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Servicio al Cliente</h4>
                <ul class="space-y-2 text-slate-300">
                    <li><a href="#" class="hover:text-white transition-colors">Centro de Ayuda</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Envíos</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Devoluciones</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-semibold mb-4">Contacto</h4>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-phone"></i>
                        <span>+52 55 1234 5678</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-envelope"></i>
                        <span>info@tiendaplus.com</span>
                    </li>
                    <li class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ciudad de México, México</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-slate-700 mt-8 pt-8 text-center">
            <p class="text-slate-400 text-sm">
                © 2026 TiendaPlus. Todos los derechos reservados.
                <span class="block mt-2">Proyecto académico - ICASYS | Desarrollado con Laravel + TailwindCSS</span>
            </p>
        </div>
    </div>
</footer>

<script>
    function toggleMenu() {
        const nav = document.querySelector('.nav-links');
        nav.classList.toggle('open');
    }

    // Add fade-in animation to main content
    document.addEventListener('DOMContentLoaded', function() {
        const main = document.querySelector('main');
        main.classList.add('animate-fade-in');
    });
</script>

</body>
</html>

{{--
<!-- HEADER -->
<header class="bg-gradient-to-r from-vinodark to-vino text-white shadow-xl">
    <div class="container mx-auto flex justify-between items-center p-4">
        <h1 class="text-2xl md:text-3xl font-bold flex items-center">
            <span class="mr-2">🛒</span> Tienda de Abarrotes
        </h1>

        <nav class="hidden md:flex space-x-6 font-semibold">
            <a href="" class="hover:text-yellow-300 transition duration-300">Inicio</a>
            <a href="" class="hover:text-yellow-300 transition duration-300">Categorías</a>
            <a href="" class="hover:text-yellow-300 transition duration-300">Productos</a>
            <a href="" class="hover:text-yellow-300 transition duration-300">Proveedores</a>
            @auth
                <a href="{{ route('orders.index') }}" class="hover:text-yellow-300 transition duration-300">Mis Pedidos</a>
            @endauth
        </nav>

        <button class="hamburger md:hidden text-white focus:outline-none" onclick="toggleMenu()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <nav class="nav-links md:hidden">
        <a href="" class="block py-2 px-4 hover:bg-vino transition duration-300">Inicio</a>
        <a href="" class="block py-2 px-4 hover:bg-vino transition duration-300">Categorías</a>
        <a href="" class="block py-2 px-4 hover:bg-vino transition duration-300">Productos</a>
        <a href="" class="block py-2 px-4 hover:bg-vino transition duration-300">Proveedores</a>
        @auth
            <a href="" class="block py-2 px-4 hover:bg-vino transition duration-300">Mis Pedidos</a>
        @endauth
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
--}}
