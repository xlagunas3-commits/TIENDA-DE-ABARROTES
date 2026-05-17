@extends('plantilla')

@section('title', 'Proveedores - TiendaPlus')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-truck-loading text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Nuestros <span class="text-yellow-300">Proveedores</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Trabajamos con aliados responsables para mantener productos disponibles, frescos y seguros.
        </p>
    </div>
</section>

<section class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-leaf text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Productores Locales</h3>
        <p class="text-gray-600 leading-relaxed">Abastecimiento de frutas, verduras y productos frescos con entrega constante.</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-industry text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Distribuidores</h3>
        <p class="text-gray-600 leading-relaxed">Marcas y mayoristas que nos ayudan a ofrecer variedad en cada categoria.</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-handshake text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Alianzas</h3>
        <p class="text-gray-600 leading-relaxed">Relaciones comerciales confiables para mantener calidad y precios competitivos.</p>
    </div>
</section>

<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl">
    <div class="grid lg:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Quieres ser proveedor?</h2>
            <p class="text-lg text-gray-600 leading-relaxed mb-6">
                Buscamos proveedores comprometidos con la calidad, puntualidad y buen servicio.
            </p>
            <a href="{{ route('contacto') }}" class="inline-flex items-center bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105">
                <i class="fas fa-envelope mr-2"></i>Contactanos
            </a>
        </div>

        <div class="bg-gradient-to-r from-slate-800 to-slate-900 text-white rounded-2xl p-8">
            <h3 class="text-2xl font-bold mb-6">Criterios principales</h3>
            <ul class="space-y-4">
                <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-3"></i>Productos de calidad constante</li>
                <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-3"></i>Entregas puntuales</li>
                <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-3"></i>Precios competitivos</li>
                <li class="flex items-center"><i class="fas fa-check text-yellow-300 mr-3"></i>Comunicacion clara</li>
            </ul>
        </div>
    </div>
</section>
@endsection
