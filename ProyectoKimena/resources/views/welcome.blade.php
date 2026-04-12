@extends('plantilla')

@section('title', 'Inicio - TiendaPlus')

@section('content')
<!-- Hero Section -->
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-shopping-cart text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Bienvenido a <span class="text-yellow-300">TiendaPlus</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Tu supermercado digital con entrega rápida, productos frescos y los mejores precios
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('products.index') }}" class="bg-yellow-400 hover:bg-yellow-300 text-gray-900 px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300 transform hover:scale-105 shadow-lg">
                <i class="fas fa-shopping-bag mr-2"></i>Ver Productos
            </a>
            @auth
                <a href="{{ route('orders.index') }}" class="bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/30 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300">
                    <i class="fas fa-list mr-2"></i>Mis Pedidos
                </a>
            @else
                <a href="#" class="bg-white/20 hover:bg-white/30 backdrop-blur-sm border border-white/30 text-white px-8 py-4 rounded-full font-semibold text-lg transition-all duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i>Iniciar Sesión
                </a>
            @endauth
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-truck text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Entrega Rápida</h3>
        <p class="text-gray-600 leading-relaxed">
            Recibe tus productos en la puerta de tu casa en menos de 24 horas con nuestro servicio de entrega express.
        </p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-shield-alt text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Productos Frescos</h3>
        <p class="text-gray-600 leading-relaxed">
            Garantizamos la frescura y calidad de todos nuestros productos con proveedores certificados.
        </p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-tags text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Precios Bajos</h3>
        <p class="text-gray-600 leading-relaxed">
            Los mejores precios del mercado con ofertas exclusivas y descuentos especiales para nuestros clientes.
        </p>
    </div>
</section>

<!-- Categories Preview -->
<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nuestras Categorías</h2>
        <p class="text-xl text-gray-600">Descubre nuestra amplia variedad de productos organizados por categorías</p>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <div class="modern-card group bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl p-6 text-center cursor-pointer">
            <div class="text-4xl mb-4 text-orange-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-apple-alt"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Frutas & Verduras</h3>
        </div>

        <div class="modern-card group bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl p-6 text-center cursor-pointer">
            <div class="text-4xl mb-4 text-blue-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-cheese"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Lácteos</h3>
        </div>

        <div class="modern-card group bg-gradient-to-br from-green-100 to-green-200 rounded-xl p-6 text-center cursor-pointer">
            <div class="text-4xl mb-4 text-green-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-bread-slice"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Panadería</h3>
        </div>

        <div class="modern-card group bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl p-6 text-center cursor-pointer">
            <div class="text-4xl mb-4 text-purple-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-broom"></i>
            </div>
            <h3 class="font-semibold text-gray-800">Limpieza</h3>
        </div>
    </div>

    <div class="text-center mt-8">
        <a href="{{ route('categories.index') }}" class="inline-flex items-center bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-eye mr-2"></i>Ver Todas las Categorías
        </a>
    </div>
</section>

<!-- Stats Section -->
<section class="bg-gradient-to-r from-slate-800 to-slate-900 text-white rounded-2xl p-8 md:p-12">
    <div class="grid md:grid-cols-4 gap-8 text-center">
        <div class="animate-slide-up">
            <div class="text-4xl font-bold text-yellow-400 mb-2">500+</div>
            <div class="text-slate-300">Productos Disponibles</div>
        </div>
        <div class="animate-slide-up" style="animation-delay: 0.1s">
            <div class="text-4xl font-bold text-yellow-400 mb-2">50+</div>
            <div class="text-slate-300">Proveedores</div>
        </div>
        <div class="animate-slide-up" style="animation-delay: 0.2s">
            <div class="text-4xl font-bold text-yellow-400 mb-2">1000+</div>
            <div class="text-slate-300">Clientes Satisfechos</div>
        </div>
        <div class="animate-slide-up" style="animation-delay: 0.3s">
            <div class="text-4xl font-bold text-yellow-400 mb-2">24/7</div>
            <div class="text-slate-300">Servicio al Cliente</div>
        </div>
    </div>
</section>
@endsection