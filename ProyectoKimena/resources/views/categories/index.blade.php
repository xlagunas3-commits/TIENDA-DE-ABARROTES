@extends('plantilla')

@section('title', 'Categorías - TiendaPlus')

@section('content')
<div class="bg-white rounded-2xl shadow-xl p-8">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
        <div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Categorías de Productos</h2>
            <p class="text-gray-600">Gestiona las categorías de tu tienda</p>
        </div>
        <a href="{{ route('categories.create') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg flex items-center space-x-2">
            <i class="fas fa-plus"></i>
            <span>Nueva Categoría</span>
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-50 border-l-4 border-green-400 p-4 mb-6 rounded-r-xl">
            <div class="flex items-center">
                <i class="fas fa-check-circle text-green-400 mr-3"></i>
                <p class="text-green-700">{{ session('success') }}</p>
            </div>
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-xl overflow-hidden">
            <thead class="bg-gradient-to-r from-slate-800 to-slate-700 text-white">
                <tr>
                    <th class="py-4 px-6 text-left font-semibold">ID</th>
                    <th class="py-4 px-6 text-left font-semibold">Nombre</th>
                    <th class="py-4 px-6 text-left font-semibold">Descripción</th>
                    <th class="py-4 px-6 text-left font-semibold">Productos</th>
                    <th class="py-4 px-6 text-left font-semibold">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($categories as $category)
                    <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors duration-200">
                        <td class="py-4 px-6 text-gray-800 font-medium">{{ $category->id }}</td>
                        <td class="py-4 px-6">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-primary-100 rounded-full flex items-center justify-center">
                                    <i class="fas fa-tag text-primary-600"></i>
                                </div>
                                <span class="font-semibold text-gray-800">{{ $category->name }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6 text-gray-600">{{ $category->description ?? 'Sin descripción' }}</td>
                        <td class="py-4 px-6">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">
                                {{ $category->products->count() }} productos
                            </span>
                        </td>
                        <td class="py-4 px-6">
                            <div class="flex space-x-2">
                                <a href="{{ route('categories.show', $category) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-1">
                                    <i class="fas fa-eye"></i>
                                    <span>Ver</span>
                                </a>
                                <a href="{{ route('categories.edit', $category) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-1">
                                    <i class="fas fa-edit"></i>
                                    <span>Editar</span>
                                </a>
                                <form action="{{ route('categories.destroy', $category) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg transition-all duration-300 transform hover:scale-105 flex items-center space-x-1" onclick="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                        <i class="fas fa-trash"></i>
                                        <span>Eliminar</span>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-12 px-6 text-center">
                            <div class="flex flex-col items-center">
                                <i class="fas fa-inbox text-6xl text-gray-300 mb-4"></i>
                                <h3 class="text-xl font-semibold text-gray-600 mb-2">No hay categorías</h3>
                                <p class="text-gray-500 mb-4">Comienza creando tu primera categoría</p>
                                <a href="{{ route('categories.create') }}" class="bg-primary-600 hover:bg-primary-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                                    Crear Primera Categoría
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection