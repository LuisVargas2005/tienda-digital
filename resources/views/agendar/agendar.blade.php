<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agendar reparación</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        @isset($step)
            @if ($step == 1)
                <form method="POST" action="{{ route('agendar.paso2') }}">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">1. Selecciona una categoría</h2>
                    @foreach ($categorias as $categoria)
                        <label class="block mb-2">
                            <input type="radio" name="categoria" value="{{ $categoria }}" required> {{ $categoria }}
                        </label>
                    @endforeach
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Siguiente</button>
                </form>
            @elseif ($step == 2)
                <form method="POST" action="{{ route('agendar.paso3') }}">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">2. Selecciona una marca</h2>
                    @foreach ($marcas as $marca)
                        <label class="block mb-2">
                            <input type="radio" name="marca" value="{{ $marca }}" required> {{ $marca }}
                        </label>
                    @endforeach
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Siguiente</button>
                </form>
            @elseif ($step == 3)
                <form method="POST" action="{{ route('agendar.paso4') }}">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">3. Selecciona el modelo</h2>
                    @foreach ($modelos as $modelo)
                        <label class="block mb-2">
                            <input type="radio" name="modelo" value="{{ $modelo }}" required> {{ $modelo }}
                        </label>
                    @endforeach
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Siguiente</button>
                </form>
            @elseif ($step == 4)
                <form method="POST" action="{{ route('agendar.paso5') }}">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">4. ¿Qué problemas presenta?</h2>
                    @foreach ($problemas as $problema)
                        <label class="block mb-2">
                            <input type="checkbox" name="problemas[]" value="{{ $problema }}"> {{ $problema }}
                        </label>
                    @endforeach
                    <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded">Siguiente</button>
                </form>
            @elseif ($step == 5)
                <form method="POST" action="{{ route('agendar.confirmar') }}">
                    @csrf
                    <h2 class="text-xl font-bold mb-4">5. Datos de contacto</h2>
                    <input type="text" name="nombre" placeholder="Nombre" required class="w-full mb-2 px-3 py-2 border rounded">
                    <input type="text" name="telefono" placeholder="Teléfono" required class="w-full mb-2 px-3 py-2 border rounded">
                    <input type="email" name="email" placeholder="Correo" required class="w-full mb-2 px-3 py-2 border rounded">
                    <textarea name="notas" placeholder="Notas adicionales" class="w-full mb-2 px-3 py-2 border rounded"></textarea>
                    <div class="mb-4">
                        <label><input type="radio" name="preferencia" value="SMS" required> SMS</label>
                        <label class="ml-4"><input type="radio" name="preferencia" value="Email"> Email</label>
                        <label class="ml-4"><input type="radio" name="preferencia" value="Phone"> Teléfono</label>
                    </div>
                    <button class="px-4 py-2 bg-green-600 text-white rounded">Confirmar</button>
                </form>
            @elseif ($step == 6)
                <div>
                    <h2 class="text-xl font-bold mb-4">Resumen</h2>
                    <ul class="mb-4">
                        <li><strong>Categoría:</strong> {{ session('categoria') }}</li>
                        <li><strong>Marca:</strong> {{ session('marca') }}</li>
                        <li><strong>Modelo:</strong> {{ session('modelo') }}</li>
                        <li><strong>Problemas:</strong> {{ implode(', ', session('problemas', [])) }}</li>
                        <li><strong>Nombre:</strong> {{ session('nombre') }}</li>
                        <li><strong>Teléfono:</strong> {{ session('telefono') }}</li>
                        <li><strong>Email:</strong> {{ session('email') }}</li>
                        <li><strong>Preferencia:</strong> {{ session('preferencia') }}</li>
                    </ul>
                    <a href="{{ url('/') }}" class="px-4 py-2 bg-gray-400 text-white rounded">Volver al inicio</a>

                </div>
            @endif
        @endisset
    </div>
</body>
</html>