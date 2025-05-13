<!-- Header -->
        <nav class=" relative bg-white border-b border-gray-200 px-4 py-3 flex items-center ">
            <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Logo" class="h-6 w-6" />
        <!-- Logo y navegación -->
        <div class="flex-1 flex justify-center space-x-6">
            <div class="flex space-x-6 items-center">
            <a href="{{ url('/') }}" class="text-gray-600 hover:text-indigo-600">Inicio</a>
            <a href="{{ url('/contacto') }}" class="text-gray-600 hover:text-indigo-600">Contactanos</a>
            <a href="{{ url('/manual') }}" class="text-gray-600 hover:text-indigo-600">Manuela</a>

        <!-- Menú desplegable de Servicios -->
            <div class="relative group">
                <button class="text-gray-600 hover:text-indigo-600 focus:outline-none">Servicios</button>
                <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
                <a href="{{ url('/agendar') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Agendar</a>
                <a href="{{ url('/catalogo') }}" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Catálogo</a>
                <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Soporte</a>
                </div>
            </div>
            </div>
        </div>

    <!-- Iconos -->
        <div class="flex items-center space-x-4">
        <!-- Bell Icon -->
        <button>
            <svg class="h-5 w-5 text-gray-400 hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
        </button>

        <!-- Login Link -->
        <a href="{{ route('filament.dashboard.auth.login') }}" title="Iniciar sesión como administrador" class="text-gray-600 hover:text-indigo-600">Iniciar sesión</a>
        </div>
        </nav>