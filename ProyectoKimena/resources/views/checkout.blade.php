@extends('plantilla')

@section('title', 'Pago - TiendaPlus')

@section('content')
<section class="bg-white rounded-2xl p-8 shadow-xl">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-4xl font-bold text-gray-800">Checkout</h1>
            <p class="text-gray-600 mt-2">Completa tus datos y confirma el pago de tu compra.</p>
        </div>
        <div class="text-right">
            <span class="text-sm text-gray-500">Total a pagar</span>
            <p class="text-3xl font-bold text-primary-600">${{ number_format($total, 2) }}</p>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-6 rounded-2xl border border-green-200 bg-green-50 p-4 text-green-800">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800">
            {{ session('error') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 p-4 text-red-800">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('checkout.confirm') }}">
        @csrf
        <div class="grid gap-8 lg:grid-cols-2">
            <div class="rounded-2xl border border-gray-200 p-8 bg-slate-50">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Detalles de facturación</h2>

                <div class="mb-4">
                    <label for="full_name" class="block text-sm font-semibold text-gray-700 mb-2">Nombre completo</label>
                    <input id="full_name" name="full_name" type="text" value="{{ old('full_name') }}" class="w-full rounded-2xl border border-gray-300 px-4 py-3 focus:ring-primary-600 focus:border-primary-600" placeholder="Juan Pérez">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Correo electrónico</label>
                    <input id="email" name="email" type="email" value="{{ old('email') }}" class="w-full rounded-2xl border border-gray-300 px-4 py-3 focus:ring-primary-600 focus:border-primary-600" placeholder="correo@ejemplo.com">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">Dirección</label>
                    <input id="address" name="address" type="text" value="{{ old('address') }}" class="w-full rounded-2xl border border-gray-300 px-4 py-3 focus:ring-primary-600 focus:border-primary-600" placeholder="Calle, número, colonia">
                </div>
                <div class="mb-4">
                    <label for="city" class="block text-sm font-semibold text-gray-700 mb-2">Ciudad</label>
                    <input id="city" name="city" type="text" value="{{ old('city') }}" class="w-full rounded-2xl border border-gray-300 px-4 py-3 focus:ring-primary-600 focus:border-primary-600" placeholder="Ciudad">
                </div>
                <div class="mb-4">
                    <label for="postal_code" class="block text-sm font-semibold text-gray-700 mb-2">Código postal</label>
                    <input id="postal_code" name="postal_code" type="text" value="{{ old('postal_code') }}" class="w-full rounded-2xl border border-gray-300 px-4 py-3 focus:ring-primary-600 focus:border-primary-600" placeholder="12345">
                </div>
            </div>

            <div class="rounded-2xl border border-gray-200 p-8 bg-white">
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Resumen de compra</h2>

                @if(empty($cart))
                    <p class="text-gray-600">No hay productos en el carrito.</p>
                @else
                    <div class="space-y-4">
                        @foreach($cart as $item)
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-semibold text-gray-800">{{ $item['name'] }}</p>
                                    <p class="text-sm text-gray-500">Cantidad: {{ $item['quantity'] }}</p>
                                </div>
                                <p class="font-semibold text-gray-800">${{ number_format($item['price'] * $item['quantity'], 2) }}</p>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-6 border-t border-gray-200 pt-6">
                        <div class="flex items-center justify-between text-gray-600 mb-3">
                            <span>Subtotal</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>
                        <div class="flex items-center justify-between text-gray-600 mb-3">
                            <span>Envío</span>
                            <span>Gratis</span>
                        </div>
                        <div class="flex items-center justify-between text-lg font-bold text-gray-900">
                            <span>Total</span>
                            <span>${{ number_format($total, 2) }}</span>
                        </div>
                    </div>

                    <button type="submit" class="mt-8 w-full bg-primary-600 hover:bg-primary-700 text-white px-8 py-4 rounded-full font-semibold transition duration-300">
                        <i class="fas fa-check-circle mr-2"></i>Pagar ahora
                    </button>
                @endif
            </div>
        </div>
    </form>
</section>
@endsection
