@extends('plantilla')

@section('title', 'Carrito - TiendaPlus')

@section('content')
<section class="bg-white rounded-2xl p-8 shadow-xl">
    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
        <div>
            <h1 class="text-4xl font-bold text-gray-800">Tu carrito</h1>
            <p class="text-gray-600 mt-2">Revisa los productos que agregaste y el total de tu compra.</p>
        </div>
        <div class="text-right">
            <span class="text-sm text-gray-500">Artículos:</span>
            <p class="text-3xl font-bold text-primary-600">{{ collect($cart)->sum('quantity') }}</p>
        </div>
    </div>

    @if(empty($cart))
        <div class="text-center py-20 px-6 rounded-2xl border border-dashed border-gray-300 bg-slate-50">
            <i class="fas fa-shopping-cart text-6xl text-gray-300 mb-6"></i>
            <h2 class="text-2xl font-bold text-gray-800 mb-2">Tu carrito está vacío</h2>
            <p class="text-gray-600 mb-6">Agrega productos al carrito desde la página de productos.</p>
            <a href="{{ route('productos.public') }}" class="inline-flex items-center justify-center bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-full font-semibold transition duration-300">
                <i class="fas fa-box mr-2"></i>Ver productos
            </a>
        </div>
    @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Producto</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Cantidad</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Precio</th>
                        <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Subtotal</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($cart as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-semibold text-gray-900">{{ $item['name'] }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-700">{{ $item['quantity'] }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm text-gray-700">${{ number_format($item['price'], 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-semibold text-gray-900">${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div class="rounded-2xl bg-slate-50 p-6 w-full md:w-auto">
                <p class="text-sm text-gray-500">Total estimado</p>
                <p class="text-3xl font-bold text-gray-900">${{ number_format($total, 2) }}</p>
            </div>
            <div class="w-full md:w-auto">
                <a href="{{ route('checkout') }}" class="inline-flex items-center justify-center w-full md:w-auto bg-primary-600 hover:bg-primary-700 text-white px-8 py-4 rounded-full font-semibold transition duration-300">
                    <i class="fas fa-credit-card mr-2"></i>Finalizar compra
                </a>
            </div>
        </div>
    @endif
</section>
@endsection
