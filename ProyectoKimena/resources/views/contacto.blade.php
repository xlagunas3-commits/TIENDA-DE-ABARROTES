@extends('plantilla')

@section('title', 'Contacto - TiendaPlus')

@section('content')
<section class="relative bg-gradient-to-br from-blue-600 via-purple-600 to-indigo-800 text-white rounded-2xl p-8 md:p-12 mb-12 overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -translate-y-32 translate-x-32"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-white/10 rounded-full translate-y-24 -translate-x-24"></div>

    <div class="relative z-10 max-w-4xl mx-auto text-center">
        <div class="animate-bounce-subtle mb-6">
            <i class="fas fa-headset text-6xl text-yellow-300 mb-4"></i>
        </div>
        <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
            Contacta a <span class="text-yellow-300">TiendaPlus</span>
        </h1>
        <p class="text-xl md:text-2xl mb-8 text-blue-100 leading-relaxed">
            Estamos listos para ayudarte con tus pedidos, entregas y dudas sobre nuestros productos.
        </p>
    </div>
</section>

<section class="grid lg:grid-cols-3 gap-8 mb-16">
    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-phone text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Telefono</h3>
        <p class="text-gray-600 leading-relaxed">+52 55 1234 5678</p>
        <p class="text-gray-500 text-sm mt-2">Atencion todos los dias</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-blue-400 to-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-envelope text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Correo</h3>
        <p class="text-gray-600 leading-relaxed">info@tiendaplus.com</p>
        <p class="text-gray-500 text-sm mt-2">Respuesta rapida a tus solicitudes</p>
    </div>

    <div class="modern-card bg-white rounded-2xl p-8 text-center shadow-xl">
        <div class="w-16 h-16 bg-gradient-to-br from-purple-400 to-purple-600 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-map-marker-alt text-white text-2xl"></i>
        </div>
        <h3 class="text-2xl font-bold text-gray-800 mb-4">Ubicacion</h3>
        <p class="text-gray-600 leading-relaxed">Ciudad de Mexico, Mexico</p>
        <p class="text-gray-500 text-sm mt-2">Entregas locales y servicio express</p>
    </div>
</section>

<section class="bg-white rounded-2xl p-8 md:p-12 shadow-xl">
    <div class="grid lg:grid-cols-2 gap-10 items-start">
        <div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">Envianos un mensaje</h2>
            <p class="text-lg text-gray-600 mb-8">Cuentanos que necesitas y nuestro equipo revisara tu solicitud.</p>

            <form class="space-y-5">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Nombre</label>
                    <input type="text" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:border-primary-600 focus:ring-2 focus:ring-primary-100 outline-none" placeholder="Tu nombre completo">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Correo electronico</label>
                    <input type="email" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:border-primary-600 focus:ring-2 focus:ring-primary-100 outline-none" placeholder="correo@ejemplo.com">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Mensaje</label>
                    <textarea rows="5" class="w-full rounded-xl border border-gray-200 px-4 py-3 focus:border-primary-600 focus:ring-2 focus:ring-primary-100 outline-none" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <button type="submit" class="bg-primary-600 hover:bg-primary-700 text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg">
                    <i class="fas fa-paper-plane mr-2"></i>Enviar Mensaje
                </button>
            </form>
        </div>

        <div class="bg-gradient-to-br from-slate-800 to-slate-900 text-white rounded-2xl p-8">
            <h3 class="text-2xl font-bold mb-6">Horario de atencion</h3>
            <div class="space-y-4">
                <div class="flex justify-between border-b border-white/10 pb-3">
                    <span>Lunes a Viernes</span>
                    <span class="text-yellow-300 font-semibold">8:00 - 20:00</span>
                </div>
                <div class="flex justify-between border-b border-white/10 pb-3">
                    <span>Sabado</span>
                    <span class="text-yellow-300 font-semibold">9:00 - 18:00</span>
                </div>
                <div class="flex justify-between">
                    <span>Domingo</span>
                    <span class="text-yellow-300 font-semibold">10:00 - 16:00</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
