@extends('layouts.admin')

@section('content')
<div class="max-w-4xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Detalles del Pedido #{{ $order->id }}</h3>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="grid grid-cols-2 gap-4 mb-6">
            <div>
                <p class="text-gray-600 text-sm">ID</p>
                <p class="text-lg font-semibold text-gray-800">{{ $order->id }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm">Usuario</p>
                <p class="text-lg font-semibold text-gray-800">{{ $order->user->name ?? 'N/A' }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm">Total</p>
                <p class="text-lg font-semibold text-gray-800">${{ number_format($order->total, 2) }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm">Estado</p>
                <span class="px-3 py-1 rounded-full text-white text-sm font-semibold
                    @if($order->status == 'pending') bg-yellow-500
                    @elseif($order->status == 'completed') bg-green-500
                    @else bg-red-500
                    @endif">
                    {{ ucfirst($order->status) }}
                </span>
            </div>

            <div>
                <p class="text-gray-600 text-sm">Creado</p>
                <p class="text-lg text-gray-800">{{ $order->created_at->format('d/m/Y H:i') }}</p>
            </div>

            <div>
                <p class="text-gray-600 text-sm">Actualizado</p>
                <p class="text-lg text-gray-800">{{ $order->updated_at->format('d/m/Y H:i') }}</p>
            </div>
        </div>
    </div>

    <!-- Artículos del Pedido -->
    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <h4 class="text-lg font-semibold text-gray-800 mb-4">Artículos del Pedido</h4>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Producto</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Cantidad</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Precio Unit.</th>
                        <th class="px-4 py-2 text-left text-sm font-semibold text-gray-800">Subtotal</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @forelse($order->orderItems as $item)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $item->product->name ?? 'Producto eliminado' }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $item->quantity }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">${{ number_format($item->price, 2) }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700 font-semibold">${{ number_format($item->quantity * $item->price, 2) }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-gray-500">No hay artículos en este pedido</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="flex gap-4">
        <a href="{{ route('orders.edit', $order) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-semibold transition">
            Editar
        </a>
        <a href="{{ route('orders.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
            Volver
        </a>
    </div>
</div>
@endsection
