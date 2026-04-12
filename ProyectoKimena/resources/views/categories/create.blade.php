@extends('plantilla')

@section('title', 'Crear Categoría - TiendaPlus')

@section('content')
<div class="max-w-2xl mx-auto">
    <div class="bg-white rounded-2xl shadow-xl p-8">
        <div class="flex items-center space-x-3 mb-8">
            <div class="w-12 h-12 bg-primary-100 rounded-xl flex items-center justify-center">
                <i class="fas fa-plus text-primary-600 text-xl"></i>
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-800">Crear Nueva Categoría</h2>
                <p class="text-gray-600">Agrega una nueva categoría a tu tienda</p>
            </div>
        </div>

        <form action="{{ route('categories.store') }}" method="POST" class="space-y-6">
            @csrf

            <div class="space-y-2">
                <label for="name" class="block text-sm font-semibold text-gray-700">
                    <i class="fas fa-tag mr-2 text-primary-600"></i>Nombre de la Categoría
                </label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300"
                       placeholder="Ej: Lácteos, Frutas, Limpieza...">
                @error('name')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-sm font-semibold text-gray-700">
                    <i class="fas fa-align-left mr-2 text-primary-600"></i>Descripción
                </label>
                <textarea id="description" name="description" rows="4"
                          class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all duration-300 resize-none"
                          placeholder="Describe brevemente esta categoría...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="mt-2 text-sm text-red-600 flex items-center">
                        <i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}
                    </p>
                @enderror
            </div>

            <div class="flex flex-col sm:flex-row gap-4 pt-6">
                <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center justify-center space-x-2">
                    <i class="fas fa-save"></i>
                    <span>Crear Categoría</span>
                </button>
                <a href="{{ route('categories.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white px-8 py-3 rounded-xl font-semibold transition-all duration-300 flex items-center justify-center space-x-2">
                    <i class="fas fa-arrow-left"></i>
                    <span>Cancelar</span>
                </a>
            </div>
        </form>
    </div>
</div>
@endsection