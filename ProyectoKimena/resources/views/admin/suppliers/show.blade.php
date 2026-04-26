@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Detalles del Proveedor</h3>

    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <div class="mb-4">
            <p class="text-gray-600 text-sm">ID</p>
            <p class="text-lg font-semibold text-gray-800">{{ $supplier->id }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Nombre</p>
            <p class="text-lg font-semibold text-gray-800">{{ $supplier->name }}</p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Email</p>
            <p class="text-lg text-blue-600"><a href="mailto:{{ $supplier->contact_email }}">{{ $supplier->contact_email }}</a></p>
        </div>

        <div class="mb-4">
            <p class="text-gray-600 text-sm">Teléfono</p>
            <p class="text-lg text-gray-800">{{ $supplier->phone }}</p>
        </div>

        <div class="mb-6">
            <p class="text-gray-600 text-sm">Dirección</p>
            <p class="text-lg text-gray-800">{{ $supplier->address ?? 'N/A' }}</p>
        </div>

        <div class="flex gap-4">
            <a href="{{ route('suppliers.edit', $supplier) }}" class="bg-yellow-600 hover:bg-yellow-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Editar
            </a>
            <a href="{{ route('suppliers.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Volver
            </a>
        </div>
    </div>
</div>
@endsection
