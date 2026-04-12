@extends('plantilla')

@section('title', 'Ver Categoría - Tienda de Abarrotes')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6 max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold text-vinodark mb-6">Detalles de la Categoría</h2>

    <div class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">ID</label>
            <p class="mt-1 text-lg">{{ $category->id }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Nombre</label>
            <p class="mt-1 text-lg font-semibold">{{ $category->name }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <p class="mt-1 text-lg">{{ $category->description ?? 'Sin descripción' }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Productos en esta categoría</label>
            <p class="mt-1 text-lg">{{ $category->products->count() }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Creado</label>
            <p class="mt-1 text-lg">{{ $category->created_at->format('d/m/Y H:i') }}</p>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Última actualización</label>
            <p class="mt-1 text-lg">{{ $category->updated_at->format('d/m/Y H:i') }}</p>
        </div>
    </div>

    <div class="mt-8 flex space-x-4">
        <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 text-white px-6 py-2 rounded-lg hover:bg-yellow-600 transition duration-300">
            Editar
        </a>
        <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
            Volver al Listado
        </a>
    </div>
</div>
@endsection