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

<section class="mb-16">
    <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-4 mb-8">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800">Catalogo de productos</h2>
            <p class="text-gray-600 mt-2">Todos los productos registrados en la base de datos.</p>
        </div>
        <span class="bg-white text-primary-600 px-5 py-3 rounded-xl shadow font-bold">
            {{ $products->count() }} productos
        </span>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($products as $product)
            <div class="modern-card bg-white rounded-2xl overflow-hidden shadow-xl">
                <div class="relative h-64 overflow-hidden">
                    <img src="{{ $product->image_url ?: 'https://via.placeholder.com/640x480.png?text=' . urlencode($product->name) }}" alt="{{ $product->name }}" class="w-full h-full object-cover object-center">
                </div>
                <div class="p-8">
                    <div class="space-y-3">
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">{{ $product->name }}</h3>
                            @if($product->category)
                                <p class="text-sm text-gray-500">Categoría: {{ $product->category->name }}</p>
                            @endif
                        </div>
                        <p class="text-gray-600">{{ $product->description ?? 'Descripción no disponible.' }}</p>
                    </div>

                <div class="mt-4 flex items-center justify-between gap-4">
                    <span class="text-2xl font-bold text-primary-600">
                        ${{ number_format($product->price, 2) }}
                    </span>

                    @if($product->stock > 10)
                        <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">Disponible</span>
                    @elseif($product->stock > 0)
                        <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium">Pocas piezas</span>
                    @else
                        <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">Agotado</span>
                    @endif
                </div>

                <div class="mt-6">
                    @if($product->stock > 0)
                        <form action="{{ route('cart.add', $product) }}" method="POST">
                            @csrf
                            <button type="submit" class="w-full bg-primary-600 hover:bg-primary-700 text-white px-5 py-3 rounded-xl font-semibold transition duration-300 flex items-center justify-center gap-2">
                                <i class="fas fa-cart-plus"></i>
                                <span>Agregar al carrito</span>
                            </button>
                        </form>
                    @else
                        <button type="button" class="w-full bg-gray-200 text-gray-500 px-5 py-3 rounded-xl font-semibold cursor-not-allowed flex items-center justify-center gap-2" disabled>
                            <i class="fas fa-ban"></i>
                            <span>No disponible</span>
                        </button>
                    @endif
                </div>

                <p class="text-sm text-gray-500 mt-4">Existencias: {{ $product->stock }}</p>
            </div>
        @empty
            <div class="md:col-span-2 lg:col-span-3 bg-white rounded-2xl p-10 shadow-xl text-center">
                <i class="fas fa-box-open text-5xl text-gray-300 mb-4"></i>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">No hay productos registrados</h3>
                <p class="text-gray-600">Cuando agregues productos desde el administrador, apareceran aqui.</p>
            </div>
        @endforelse
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
