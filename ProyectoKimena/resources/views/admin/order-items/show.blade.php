@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Detalles del Artículo</h3>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="mb-4">
            <p class="text-gray-600 text-sm">ID</p>
            <p class="text-lg font-semibold text-gray-800">{{ $orderItem->id }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Pedido</p>
            <p class="text-lg font-semibold text-gray-800">#{{ $orderItem->order->id }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Producto</p>
            <p class="text-lg font-semibold text-gray-800">{{ $orderItem->product->name ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Cantidad</p>
            <p class="text-lg text-gray-800">{{ $orderItem->quantity }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Precio Unitario</p>
            <p class="text-lg text-gray-800">${{ number_format($orderItem->price, 2) }}</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 text-sm">Subtotal</p>
            <p class="text-lg font-semibold text-gray-800">${{ number_format($orderItem->quantity * $orderItem->price, 2) }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('order-items.edit', $orderItem) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Editar
            </a>
            <a href="{{ route('order-items.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection
