@extends('plantilla')

@section('title', 'Categorias - TiendaPlus')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-tags text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Categorias de <span class="text-yellow-300">Productos</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Explora nuestra tienda por secciones para encontrar rapido lo que necesitas.
        </p>
    </div>
</section>

<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl mb-16">
    <div class="text-center mb-12">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nuestras Categorias</h2>
        <p class="text-xl text-gray-600">Productos organizados para compras mas faciles</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="modern-card group bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-orange-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-apple-alt"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Frutas y Verduras</h3>
            <p class="text-gray-600 text-sm">Seleccion fresca para todos los dias.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-blue-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-cheese"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Lacteos</h3>
            <p class="text-gray-600 text-sm">Leche, queso, yogurt y basicos refrigerados.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-green-100 to-green-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-green-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-bread-slice"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Panaderia</h3>
            <p class="text-gray-600 text-sm">Pan dulce, pan salado y acompanamientos.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-purple-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-broom"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Limpieza</h3>
            <p class="text-gray-600 text-sm">Articulos para el hogar y cuidado diario.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-red-100 to-red-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-red-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-drumstick-bite"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Carnes</h3>
            <p class="text-gray-600 text-sm">Proteinas para tus comidas principales.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-yellow-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-cookie-bite"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Botanas</h3>
            <p class="text-gray-600 text-sm">Snacks, galletas y antojos para compartir.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-cyan-100 to-cyan-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-cyan-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-bottle-water"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Bebidas</h3>
            <p class="text-gray-600 text-sm">Agua, jugos, refrescos y bebidas familiares.</p>
        </div>

        <div class="modern-card group bg-gradient-to-br from-emerald-100 to-emerald-200 rounded-xl p-6 text-center">
            <div class="text-4xl mb-4 text-emerald-600 group-hover:scale-110 transition-transform duration-300">
                <i class="fas fa-seedling"></i>
            </div>
            <h3 class="font-semibold text-gray-800 mb-2">Abarrotes</h3>
            <p class="text-gray-600 text-sm">Arroz, frijol, aceite, azucar y basicos.</p>
        </div>
    </div>
</section>
@endsection
