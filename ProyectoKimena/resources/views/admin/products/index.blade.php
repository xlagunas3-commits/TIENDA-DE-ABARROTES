@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-2xl font-semibold text-gray-800">Productos</h3>
    <a href="{{ route('products.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition">
        + Nuevo Producto
    </a>
</div>

<!-- Tabla de Productos -->
<div class="bg-white rounded-lg shadow overflow-x-auto">
    <table class="w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">ID</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Nombre</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Categoría</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Precio</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Stock</th>
                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-800">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse($products as $product)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $product->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 font-semibold">{{ $product->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $product->category->name ?? 'N/A' }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ '$' . number_format($product->price, 2) }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">
                        <span class="@if($product->stock < 10) text-red-600 font-semibold @else text-green-600 @endif">{{ $product->stock }}</span>
                    </td>
                    <td class="px-6 py-4 text-center text-sm">
                        <a href="{{ route('products.show', $product) }}" class="text-blue-600 hover:underline mr-2">Ver</a>
                        <a href="{{ route('products.edit', $product) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Confirmar eliminación?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">No hay productos disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Paginación -->
<div class="mt-6">
    {{ $products->links() }}
</div>
@endsection
