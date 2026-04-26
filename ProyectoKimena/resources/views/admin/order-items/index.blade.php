@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-2xl font-semibold text-gray-800">Artículos de Pedidos</h3>
    <a href="{{ route('order-items.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition">
        + Nuevo Artículo
    </a>
</div>

<!-- Tabla de Artículos -->
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">ID</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Pedido</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Producto</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Cantidad</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Precio</th>
                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-800">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse($orderItems as $item)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 font-semibold">{{ $item->order->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->product->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $item->quantity }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">${{ number_format($item->price, 2) }}</td>
                    <td class="px-6 py-4 text-center text-sm">
                        <a href="{{ route('order-items.show', $item) }}" class="text-blue-600 hover:underline mr-2">Ver</a>
                        <a href="{{ route('order-items.edit', $item) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                        <form action="{{ route('order-items.destroy', $item) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Confirmar eliminación?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">No hay artículos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Paginación -->
<div class="mt-6">
    {{ $orderItems->links() }}
</div>
@endsection
