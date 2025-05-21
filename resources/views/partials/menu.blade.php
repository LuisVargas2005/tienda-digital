<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
</head>
<body>
<!-- Header -->
<nav class="fixed top-0 left-0 w-full bg-white border-b border-gray-200 px-10 py-5 flex items-center justify-between z-50">
    <!-- Logo -->
    <div class="flex items-center">
        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" class="h-6 w-6 mr-4" />
    </div>

    <!-- Navegación central -->
    <div class="flex justify-center space-x-6">
        <a href="{{ url('/') }}" class="text-gray-600 hover:text-indigo-600">Inicio</a>
        <a href="{{ url('/contacto') }}" class="text-gray-600 hover:text-indigo-600">Contactanos</a>
        <a href="{{ url('/manual') }}" class="text-gray-600 hover:text-indigo-600">Manuela</a>

        <!-- Menú desplegable Servicios -->
        <div class="relative">
            <button id="servicios-btn" class="text-gray-700 hover:text-blue-600 px-3 focus:outline-none">Servicios</button>
            <div
                id="servicios-menu"
                class="absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded-md shadow-lg hidden z-50">
                <a href="/servicio1" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Servicio 1</a>
                <a href="/servicio2" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Servicio 2</a>
                <a href="/servicio3" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Servicio 3</a>
            </div>
        </div>
    </div>

    <!-- Iconos a la derecha -->
    <div class="flex items-center space-x-4">
        <!-- Campana -->
        <button>
            <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        </button>

        <!-- Iniciar sesión -->
        <a href="{{ route('filament.dashboard.auth.login') }}" title="Iniciar sesión como administrador"
            class="text-gray-600 hover:text-indigo-600">Iniciar sesión</a>
    </div>
</nav>

        <script src="./assets/js/menu.js"></script>

</body>
</html>
