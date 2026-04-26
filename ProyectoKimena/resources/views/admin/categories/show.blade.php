@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Detalles de la Categoría</h3>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="mb-4">
            <p class="text-gray-600 text-sm">ID</p>
            <p class="text-lg font-semibold text-gray-800">{{ $category->id }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Nombre</p>
            <p class="text-lg font-semibold text-gray-800">{{ $category->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Descripción</p>
            <p class="text-lg text-gray-800">{{ $category->description ?? 'N/A' }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Creado</p>
            <p class="text-lg text-gray-800">{{ $category->created_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 text-sm">Actualizado</p>
            <p class="text-lg text-gray-800">{{ $category->updated_at->format('d/m/Y H:i') }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Editar
            </a>
            <a href="{{ route('categories.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection
