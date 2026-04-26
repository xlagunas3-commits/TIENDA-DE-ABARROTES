@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Detalles del Producto</h3>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="mb-4">
            <p class="text-gray-600 text-sm">ID</p>
            <p class="text-lg font-semibold text-gray-800">{{ $product->id }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Nombre</p>
            <p class="text-lg font-semibold text-gray-800">{{ $product->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Categoría</p>
            <p class="text-lg text-gray-800">{{ $product->category->name ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Descripción</p>
            <p class="text-lg text-gray-800">{{ $product->description ?? 'N/A' }}</p>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-4">
            <div>
                <p class="text-gray-600 text-sm">Precio</p>
                <p class="text-lg font-semibold text-gray-800">${{ number_format($product->price, 2) }}</p>
            </div>
            <div>
                <p class="text-gray-600 text-sm">Stock</p>
                <p class="text-lg font-semibold @if($product->stock < 10) text-red-600 @else text-green-600 @endif">{{ $product->stock }}</p>
            </div>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 text-sm">Actualizado</p>
            <p class="text-lg text-gray-800">{{ $product->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Editar
            </a>
            <a href="{{ route('products.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection
