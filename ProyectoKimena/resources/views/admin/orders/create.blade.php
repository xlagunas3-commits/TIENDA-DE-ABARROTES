@extends('layouts.admin')

@section('content')
<div class="max-w-2xl mx-auto">
    <h3 class="text-2xl font-semibold text-gray-800 mb-6">Nuevo Pedido</h3>

    <form action="{{ route('orders.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow">
        @csrf

        <div class="mb-4">
            <label for="user_id" class="block text-sm font-semibold text-gray-700 mb-2">Usuario *</label>
            <select id="user_id" name="user_id" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('user_id') border-red-500 @enderror" required>
                <option value="">-- Seleccionar --</option>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" @selected(old('user_id') == $user->id)>{{ $user->name }} ({{ $user->email }})</option>
                @endforeach
            </select>
            @error('user_id')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="total" class="block text-sm font-semibold text-gray-700 mb-2">Total *</label>
            <input type="number" id="total" name="total" step="0.01" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('total') border-red-500 @enderror" value="{{ old('total') }}" placeholder="0.00" required>
            @error('total')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-6">
            <label for="status" class="block text-sm font-semibold text-gray-700 mb-2">Estado *</label>
            <select id="status" name="status" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('status') border-red-500 @enderror" required>
                <option value="">-- Seleccionar --</option>
                <option value="pending" @selected(old('status') == 'pending')>Pendiente</option>
                <option value="completed" @selected(old('status') == 'completed')>Completado</option>
                <option value="cancelled" @selected(old('status') == 'cancelled')>Cancelado</option>
            </select>
            @error('status')
                <span class="text-red-600 text-sm mt-1">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex gap-4">
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition">
                Crear Pedido
            </button>
            <a href="{{ route('orders.index') }}" class="bg-gray-400 hover:bg-gray-500 text-white px-6 py-2 rounded-lg font-semibold transition">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
