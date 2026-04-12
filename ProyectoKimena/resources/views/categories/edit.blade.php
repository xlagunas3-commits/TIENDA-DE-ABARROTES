@extends('plantilla')

@section('title', 'Editar Categoría - Tienda de Abarrotes')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6 max-w-2xl mx-auto">
    <h2 class="text-3xl font-bold text-vinodark mb-6">Editar Categoría</h2>

    <form action="{{ route('categories.update', $category) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Nombre de la Categoría</label>
            <input type="text" id="name" name="name" value="{{ old('name', $category->name) }}" required
                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vino focus:border-transparent">
            @error('name')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Descripción</label>
            <textarea id="description" name="description" rows="4"
                      class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-vino focus:border-transparent">{{ old('description', $category->description) }}</textarea>
            @error('description')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-vino text-white px-6 py-2 rounded-lg hover:bg-vinodark transition duration-300">
                Actualizar Categoría
            </button>
            <a href="{{ route('categories.index') }}" class="bg-gray-500 text-white px-6 py-2 rounded-lg hover:bg-gray-600 transition duration-300">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection