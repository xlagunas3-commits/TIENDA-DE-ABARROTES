@extends('plantilla')

@section('title', 'Nosotros - TiendaPlus')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-store text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Somos <span class="text-yellow-300">TiendaPlus</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Una tienda de abarrotes digital creada para acercar productos frescos, buenos precios y atencion confiable.
        </p>
    </div>
</section>

<section class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-bullseye text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Mision</h3>
        <p class="text-gray-600 leading-relaxed">Facilitar la compra diaria de abarrotes con una experiencia rapida, clara y accesible.</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-eye text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Vision</h3>
        <p class="text-gray-600 leading-relaxed">Convertirnos en una opcion digital confiable para familias, negocios y comunidades locales.</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-heart text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Valores</h3>
        <p class="text-gray-600 leading-relaxed">Calidad, honestidad, servicio, responsabilidad y compromiso con nuestros clientes.</p>
    </div>
</section>

<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl mb-16">
    <div class="grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Nuestra historia</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-5">
                TiendaPlus nace como un proyecto pensado para modernizar la tienda de abarrotes tradicional, manteniendo la cercania y el trato amable que la caracteriza.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                Organizamos categorias, productos y proveedores para que comprar sea mas sencillo, ordenado y eficiente.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="bg-gradient-to-br from-orange-100 to-orange-200 rounded-xl p-6 text-center">
                <i class="fas fa-users text-4xl text-orange-600 mb-4"></i>
                <h3 class="font-bold text-gray-800">Clientes</h3>
                <p class="text-gray-600 text-sm mt-2">Atencion cercana y personalizada</p>
            </div>
            <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-xl p-6 text-center">
                <i class="fas fa-boxes-stacked text-4xl text-blue-600 mb-4"></i>
                <h3 class="font-bold text-gray-800">Inventario</h3>
                <p class="text-gray-600 text-sm mt-2">Productos organizados por categoria</p>
            </div>
            <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-xl p-6 text-center">
                <i class="fas fa-leaf text-4xl text-green-600 mb-4"></i>
                <h3 class="font-bold text-gray-800">Frescura</h3>
                <p class="text-gray-600 text-sm mt-2">Seleccion cuidadosa de productos</p>
            </div>
            <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-xl p-6 text-center">
                <i class="fas fa-handshake text-4xl text-purple-600 mb-4"></i>
                <h3 class="font-bold text-gray-800">Confianza</h3>
                <p class="text-gray-600 text-sm mt-2">Proveedores responsables</p>
            </div>
        </div>
    </div>
</section>
@endsection
