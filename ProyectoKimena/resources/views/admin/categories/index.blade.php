@extends('layouts.admin')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h3 class="text-2xl font-semibold text-gray-800">Categorías</h3>
    <a href="{{ route('categories.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded font-semibold transition">
        + Nueva Categoría
    </a>
</div>

<!-- Tabla de Categorías -->
<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-200">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">ID</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Nombre</th>
                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800">Descripción</th>
                <th class="px-6 py-3 text-center text-sm font-semibold text-gray-800">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y">
            @forelse($categories as $category)
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 text-sm text-gray-700">{{ $category->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700 font-semibold">{{ $category->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-700">{{ Str::limit($category->description, 50) }}</td>
                    <td class="px-6 py-4 text-center text-sm">
                        <a href="{{ route('categories.show', $category) }}" class="text-blue-600 hover:underline mr-2">Ver</a>
                        <a href="{{ route('categories.edit', $category) }}" class="text-yellow-600 hover:underline mr-2">Editar</a>
                        <form action="{{ route('categories.destroy', $category) }}" method="POST" style="display:inline;" onsubmit="return confirm('¿Confirmar eliminación?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="px-6 py-4 text-center text-gray-500">No hay categorías disponibles</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Paginación -->
<div class="mt-6">
    {{ $categories->links() }}
</div>
@endsection
