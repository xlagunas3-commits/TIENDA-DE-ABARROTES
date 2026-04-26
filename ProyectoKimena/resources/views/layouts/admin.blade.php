<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - {{ $title ?? 'Dashboard' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-gray-900 text-white flex flex-col">
            <!-- Header del Sidebar -->
            <div class="p-6 border-b border-gray-700">
                <h1 class="text-2xl font-bold">Admin Panel</h1>
            </div>

            <!-- Navigation Menu -->
            <nav class="flex-1 px-4 py-6 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('admin.dashboard')) bg-gray-700 @endif">
                    📊 Dashboard
                </a>

                <hr class="my-4 border-gray-700">

                <!-- Categories -->
                <a href="{{ route('categories.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('categories.*')) bg-gray-700 @endif">
                    📁 Categorías
                </a>

                <!-- Products -->
                <a href="{{ route('products.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('products.*')) bg-gray-700 @endif">
                    📦 Productos
                </a>

                <!-- Suppliers -->
                <a href="{{ route('suppliers.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('suppliers.*')) bg-gray-700 @endif">
                    🚚 Proveedores
                </a>

                <!-- Orders -->
                <a href="{{ route('orders.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('orders.*')) bg-gray-700 @endif">
                    📋 Pedidos
                </a>

                <!-- Users -->
                <a href="{{ route('users.index') }}" class="block px-4 py-2 rounded hover:bg-gray-700 transition @if(request()->routeIs('users.*')) bg-gray-700 @endif">
                    👥 Usuarios
                </a>
            </nav>

            <!-- Footer del Sidebar -->
            <div class="p-4 border-t border-gray-700">
                <p class="text-sm text-gray-400">© 2026 Tienda de Abarrotes</p>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Navigation Bar -->
            <header class="bg-white border-b border-gray-200 px-6 py-4 flex justify-between items-center">
                <h2 class="text-2xl font-semibold text-gray-800">{{ $title ?? 'Dashboard' }}</h2>
                <div class="text-gray-600">
                    <span>{{ \Carbon\Carbon::now()->format('d/m/Y H:i') }}</span>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-y-auto p-6">
                @if ($errors->any())
                    <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
