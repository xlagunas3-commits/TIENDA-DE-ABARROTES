@extends('layouts.admin')

@section('content')
<div class="mb-6">
    <h3 class="text-xl font-semibold text-gray-800 mb-4">Bienvenido al Panel de Administración</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <!-- Total Categories -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center">
                <span class="text-3xl">📁</span>
                <div class="ml-4">
                    <p class="text-gray-500 text-sm">Categorías</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Category::count() }}</p>
                </div>
            </div>
        </div>

        <!-- Total Products -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center">
                <span class="text-3xl">📦</span>
                <div class="ml-4">
                    <p class="text-gray-500 text-sm">Productos</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Product::count() }}</p>
                </div>
            </div>
        </div>

        <!-- Total Suppliers -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center">
                <span class="text-3xl">🚚</span>
                <div class="ml-4">
                    <p class="text-gray-500 text-sm">Proveedores</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Supplier::count() }}</p>
                </div>
            </div>
        </div>

        <!-- Total Orders -->
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center">
                <span class="text-3xl">📋</span>
                <div class="ml-4">
                    <p class="text-gray-500 text-sm">Pedidos</p>
                    <p class="text-2xl font-semibold text-gray-800">{{ \App\Models\Order::count() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Links -->
<div class="bg-white p-6 rounded-lg shadow mt-6">
    <h3 class="text-lg font-semibold text-gray-800 mb-4">Enlaces Rápidos</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="{{ route('categories.create') }}" class="text-blue-600 hover:underline">+ Agregar Nueva Categoría</a>
        <a href="{{ route('products.create') }}" class="text-blue-600 hover:underline">+ Agregar Nuevo Producto</a>
        <a href="{{ route('suppliers.create') }}" class="text-blue-600 hover:underline">+ Agregar Nuevo Proveedor</a>
        <a href="{{ route('orders.create') }}" class="text-blue-600 hover:underline">+ Crear Nuevo Pedido</a>
    </div>
</div>
@endsection
