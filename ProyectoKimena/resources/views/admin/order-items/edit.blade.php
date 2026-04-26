@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Editar Artículo de Pedido</h3>

    <form action="{{ route('order-items.update', $orderItem) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="order_id" class="block text-sm font-semibold text-gray-700 mb-2">Pedido *</label>
            <select id="order_id" name="order_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('order_id') border-red-500 @enderror" required>
                <option value="">-- Seleccionar --</option>
                @foreach($orders as $order)
                    <option value="{{ $order->id }}" @selected(old('order_id', $orderItem->order_id) == $order->id)>Pedido #{{ $order->id }} - Usuario: {{ $order->user->name ?? 'N/A' }}</option>
                @endforeach
            </select>
            @error('order_id')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="product_id" class="block text-sm font-semibold text-gray-700 mb-2">Producto *</label>
            <select id="product_id" name="product_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('product_id') border-red-500 @enderror" required>
                <option value="">-- Seleccionar --</option>
                @foreach($products as $product)
                    <option value="{{ $product->id }}" @selected(old('product_id', $orderItem->product_id) == $product->id)>{{ $product->name }} - ${{ number_format($product->price, 2) }}</option>
                @endforeach
            </select>
            @error('product_id')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="quantity" class="block text-sm font-semibold text-gray-700 mb-2">Cantidad *</label>
            <input type="number" id="quantity" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('quantity') border-red-500 @enderror" value="{{ old('quantity', $orderItem->quantity) }}" placeholder="1" min="1" required>
            @error('quantity')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="price" class="block text-sm font-semibold text-gray-700 mb-2">Precio *</label>
            <input type="number" id="price" name="price" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('price') border-red-500 @enderror" value="{{ old('price', $orderItem->price) }}" placeholder="0.00" required>
            @error('price')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Guardar Cambios
            </button>
            <a href="{{ route('order-items.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
