@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-2xl font-semibold text-gray-800">Pedidos</h3>
    <a href="{{ route('orders.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition">
        + Nuevo Pedido
    </a>
</div>

<!-- Tabla de Pedidos -->
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">ID</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Usuario</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Total</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Estado</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Fecha</th>
                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-800">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse($orders as $order)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $order->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 font-semibold">{{ $order->user->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">${{ number_format($order->total, 2) }}</td>
                    <td class="px-6 py-4 text-sm">
                        <span class="px-3 py-1 rounded-full text-white text-xs font-semibold
                            @if($order->status == 'pending') bg-yellow-500
                            @elseif($order->status == 'completed') bg-green-500
                            @else bg-red-500
                            @endif">
                            {{ ucfirst($order->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $order->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 text-center text-sm">
                        <a href="{{ route('orders.show', $order) }}" class="text-blue-600 hover:underline mr-2">Ver</a>
                        <a href="{{ route('orders.edit', $order) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Confirmar eliminación?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">No hay pedidos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Paginación -->
<div class="mt-6">
    {{ $orders->links() }}
</div>
@endsection
