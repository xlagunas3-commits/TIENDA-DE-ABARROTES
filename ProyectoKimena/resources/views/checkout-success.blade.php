@extends('plantilla')

@section('title', 'Gracias por tu compra - TiendaPlus')

@section('content')
<section class="bg-white rounded-2xl p-8 shadow-xl">
    <div class="text-center mb-8">
        <h1 class="text-4xl font-bold text-gray-800">Gracias por tu compra</h1>
        <p class="text-gray-600 mt-3">Tu pedido se ha registrado correctamente. Pronto recibirás la confirmación.</p>
    </div>

    <div class="grid gap-8 lg:grid-cols-2">
        <div class="rounded-2xl border border-gray-200 p-8 bg-slate-50">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Detalles del pedido</h2>
            <div class="space-y-4 text-gray-700">
                <div>
                    <span class="block text-sm text-gray-500">Número de pedido</span>
                    <p class="font-semibold text-lg">#{{ $order->id }}</p>
                </div>

                <div>
                    <span class="block text-sm text-gray-500">Total</span>
                    <p class="font-semibold text-lg">${{ number_format($order->total, 2) }}</p>
                </div>

                <div>
                    <span class="block text-sm text-gray-500">Estado</span>
                    <p class="font-semibold text-lg capitalize">{{ $order->status }}</p>
                </div>

                <div>
                    <span class="block text-sm text-gray-500">Artículos</span>
                    <p class="font-semibold text-lg">{{ $order->orderItems->sum('quantity') }}</p>
                </div>
            </div>
        </div>

        <div class="rounded-2xl border border-gray-200 p-8 bg-white">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Resumen de productos</h2>
            <div class="space-y-4">
                @foreach($order->orderItems as $item)
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="font-semibold text-gray-800">{{ optional($item->product)->name ?? 'Producto eliminado' }}</p>
                            <p class="text-sm text-gray-500">Cantidad: {{ $item->quantity }}</p>
                        </div>
                        <p class="font-semibold text-gray-800">${{ number_format($item->price * $item->quantity, 2) }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex flex-col gap-3">
                <a href="{{ route('productos.public') }}" class="inline-flex items-center justify-center w-full bg-primary-600 hover:bg-primary-700 text-white px-8 py-4 rounded-full font-semibold transition duration-300">
                    Seguir comprando
                </a>
                <a href="{{ route('cart.index') }}" class="inline-flex items-center justify-center w-full border border-gray-300 hover:border-gray-400 text-gray-700 px-8 py-4 rounded-full font-semibold transition duration-300">
                    Ver carrito
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
