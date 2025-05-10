<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/catalogo.css">
    <title>Catalogo</title>
</head>
<body>

    <?php echo $__env->make('partials.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Aquí se carga tu menú en todas las páginas -->

<!-- Sección de búsqueda -->
    <section class="search-section">
        <h2>Busca un producto</h2>
        <form class="search-form">
            <input type="text" placeholder="Buscar productos..." class="search-input">
            
            <select class="search-select" wire:model.live="category">
                <option value="">Todas las categorías</option>
         
            </select>
        </form>
    </section>

<!-- Aquí puedes agregar más contenido relacionado con el catálogo -->

    <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 ">
        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Camisa.jpg" alt="Producto 1" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Earthen Bottle</h3>
                <p class="text-sm text-gray-600 mb-2">Botella de cerámica artesanal</p>
                <p class="text-indigo-600 font-bold">$48</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Bermudas1.jpeg" alt="Producto 2" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Nomad Tumbler</h3>
                <p class="text-sm text-gray-600 mb-2">Vaso térmico portátil</p>
                <p class="text-indigo-600 font-bold">$35</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Camisa1.webp" alt="Producto 3" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Focus Paper Refill</h3>
                <p class="text-sm text-gray-600 mb-2">Recambio de papel para agenda</p>
                <p class="text-indigo-600 font-bold">$89</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/camisa2.webp" alt="Producto 4" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Machined Mechanical Pencil</h3>
                <p class="text-sm text-gray-600 mb-2">Lápiz mecánico de precisión</p>
                <p class="text-indigo-600 font-bold">$35</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/camisa3.jpg" alt="Producto 5" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Focus Card Tray</h3>
                <p class="text-sm text-gray-600 mb-2">Organizador de tarjetas de escritorio</p>
                <p class="text-indigo-600 font-bold">$64</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Camisa4.jpg" alt="Producto 6" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Focus Multi-Pack</h3>
                <p class="text-sm text-gray-600 mb-2">Paquete múltiple de accesorios</p>
                <p class="text-indigo-600 font-bold">$39</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Pantalonetas1.jpg" alt="Producto 7" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Brass Scissors</h3>
                <p class="text-sm text-gray-600 mb-2">Tijeras de latón decorativas</p>
                <p class="text-indigo-600 font-bold">$50</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hiddentransform hover:scale-105 hover:shadow-2xl transition duration-300">
            <img src="./assets/img/Pantalonetas2.jpg" alt="Producto 8" class="w-full h-96 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Focus Carry Pouch</h3>
                <p class="text-sm text-gray-600 mb-2">Funda de transporte multiusos</p>
                <p class="text-indigo-600 font-bold">$32</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Mi Tienda. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\Users\pc\Desktop\Tienda-Digital\livewire-filament\resources\views/layouts/catalogo.blade.php ENDPATH**/ ?>