@extends('plantilla')

@section('title', 'Proveedores - Tienda de Abarrotes')

@section('content')
<div class="bg-white rounded-lg shadow-lg p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-vinodark">Proveedores</h2>
        <a href="{{ route('suppliers.create') }}" class="bg-vino text-white px-4 py-2 rounded-lg hover:bg-vinodark transition duration-300">
            + Nuevo Proveedor
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-300 rounded-lg">
            <thead class="bg-vino text-white">
                <tr>
                    <th class="py-3 px-4 text-left">ID</th>
                    <th class="py-3 px-4 text-left">Nombre</th>
                    <th class="py-3 px-4 text-left">Email</th>
                    <th class="py-3 px-4 text-left">Teléfono</th>
                    <th class="py-3 px-4 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse($suppliers as $supplier)
                    <tr class="border-b border-gray-200 hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $supplier->id }}</td>
                        <td class="py-3 px-4 font-semibold">{{ $supplier->name }}</td>
                        <td class="py-3 px-4">{{ $supplier->contact_email ?? 'N/A' }}</td>
                        <td class="py-3 px-4">{{ $supplier->phone ?? 'N/A' }}</td>
                        <td class="py-3 px-4 space-x-2">
                            <a href="{{ route('suppliers.show', $supplier) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition duration-300">Ver</a>
                            <a href="{{ route('suppliers.edit', $supplier) }}" class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 transition duration-300">Editar</a>
                            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition duration-300" onclick="return confirm('¿Estás seguro de eliminar este proveedor?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 px-4 text-center text-gray-500">
                            No hay proveedores registrados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection