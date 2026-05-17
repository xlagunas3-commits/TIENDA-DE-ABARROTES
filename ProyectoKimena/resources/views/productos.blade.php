@extends('plantilla')

@section('title', 'Productos - TiendaPlus')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-box-open text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Productos <span class="text-yellow-300">Destacados</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Encuentra basicos para tu hogar, alimentos frescos y articulos de uso diario.
        </p>
    </div>
</section>

<section class="grid md:grid-cols-3 gap-8 mb-16">
    <div class="modern-card bg-white rounded-2xl p-8 shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-orange-400 to-orange-600 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-apple-alt text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Manzana Roja</h3>
        <p class="text-gray-600 mb-5">Fruta fresca seleccionada para consumo diario.</p>
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-primary-600">$35.00</span>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Disponible</span>
        </div>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-bottle-water text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Agua Natural</h3>
        <p class="text-gray-600 mb-5">Presentacion familiar para casa, negocio o escuela.</p>
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-primary-600">$18.00</span>
            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Disponible</span>
        </div>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mb-6">
            <i class="fas fa-bread-slice text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-3">Pan Integral</h3>
        <p class="text-gray-600 mb-5">Pan suave para desayunos, lonches y cenas rapidas.</p>
        <div class="flex items-center justify-between">
            <span class="text-2xl font-bold text-primary-600">$42.00</span>
            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Pocas piezas</span>
        </div>
    </div>
</section>

<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl">
    <div class="text-center mb-10">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Beneficios de comprar aqui</h2>
        <p class="text-xl text-gray-600">Productos pensados para una compra rapida y confiable</p>
    </div>

    <div class="grid md:grid-cols-4 gap-6">
        <div class="text-center">
            <i class="fas fa-check-circle text-4xl text-green-500 mb-4"></i>
            <h3 class="font-bold text-gray-800">Calidad</h3>
        </div>
        <div class="text-center">
            <i class="fas fa-tags text-4xl text-blue-500 mb-4"></i>
            <h3 class="font-bold text-gray-800">Buenos precios</h3>
        </div>
        <div class="text-center">
            <i class="fas fa-clock text-4xl text-purple-500 mb-4"></i>
            <h3 class="font-bold text-gray-800">Rapidez</h3>
        </div>
        <div class="text-center">
            <i class="fas fa-shield-alt text-4xl text-red-500 mb-4"></i>
            <h3 class="font-bold text-gray-800">Confianza</h3>
        </div>
    </div>
</section>
@endsection
