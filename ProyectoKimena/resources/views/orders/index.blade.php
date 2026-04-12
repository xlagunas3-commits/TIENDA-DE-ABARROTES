@extends('plantilla')

@section('title', 'Mis Pedidos - Tienda de Abarrotes')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-vinodark">Mis Pedidos</h2>
        <a href="{{ route('orders.create') }}" class="bg-vino text-white px-4 py-2 rounded-lg hover:bg-vinodark transition duration-300">
            + Nuevo Pedido
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead class="bg-vino text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Total</th>
                    <th class="py-3 px-4 text-left">Estado</th>
                    <th class="py-3 px-4 text-left">Fecha</th>
                    <th class="py-3 px-4 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($orders as $order)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $order->id }}</td>
                        <td class="py-3 px-4 font-semibold">${{ number_format($order->total, 2) }}</td>
                        <td class="py-3 px-4">
                            <span class="px-2 py-1 rounded text-sm {{ $order->status == 'delivered' ? 'bg-green-100 text-green-800' : ($order->status == 'pending' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800') }}">
                                {{ ucfirst($order->status) }}
                            </span>
                        </td>
                        <td class="py-3 px-4">{{ $order->created_at->format('d/m/Y') }}</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="{{ route('orders.show', $order) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition duration-300">Ver</a>
                            <a href="{{ route('orders.edit', $order) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition duration-300">Editar</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 px-4 text-center text-gray-500">
                            No tienes pedidos registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection