<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
<?php echo $__env->make('partials.menu', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?> <!-- Aquí se carga tu menú en todas las páginas -->

<!-- Imagen de fondo -->
    <header class="relative h-96 bg-cover bg-center"
        style="background-image: url('https://via.placeholder.com/1200x400');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <h1 class="text-white text-3xl md:text-4xl font-bold text-center">Bienvenido a Mi Tienda</h1>
        </div>
    </header>

    

    <h1 class="text-center text-3xl font-bold mt-8">Explora Nuestros Servicios</h1>
        <p class="text-center text-gray-600 mt-4">Descubre lo que tenemos para ofrecerte.</p>

        <div class="w-62 py-6 px-12 grid grid-cols-1 md:grid-cols-2 gap-8 h-96">
            

            <!-- Contenedor 1 -->

            <div class="bg-white rounded-2xl shadow-lg transform hover:scale-105 hover:shadow-2xl transition duration-300 p-8 ">
                <h2 class="text-2xl font-bold mb-4 text-indigo-700">Catálogo de Productos</h2>
                <p class="text-gray-600 mb-6">Explora una amplia gama de productos seleccionados especialmente para ti.</p>
                <a href="<?php echo e(url('/catalogo')); ?>" class="inline-block bg-indigo-600 text-white px-5 py-3 rounded-lg hover:bg-indigo-700 transition">Ir al catálogo</a>
            </div>

            <!-- Contenedor 2 -->

            <div class="bg-white rounded-2xl shadow-lg transform hover:scale-105 hover:shadow-2xl transition duration-300 p-8">
                <h2 class="text-2xl font-bold mb-4 text-indigo-700">Contáctanos</h2>
                <p class="text-gray-600 mb-6">¿Tienes preguntas? Nuestro equipo está listo para ayudarte en lo que necesites.</p>
                <a href="<?php echo e(url('/agendar')); ?>" class="inline-block bg-indigo-600 text-white px-5 py-3 rounded-lg hover:bg-indigo-700 transition">Ir a Agendas</a>
            </div>

        </div>

<!-- Footer -->
    <footer class="bg-gray-800 text-white py-6 mt-8">
        <div class="max-w-6xl mx-auto px-4 text-center space-y-2">
        <p>© 2025 MiTienda. Todos los derechos reservados.</p>
        <p>Contacto: <a href="mailto:info@mitienda.shop" class="underline hover:text-indigo-300">info@mitienda.shop</a></p>
        </div>
    </footer>



    <script src="./assets/js/main.js" defer></script>
</body>
</html><?php /**PATH C:\Users\pc\Desktop\Tienda-Digital\Tienda-Digital\resources\views/app/frontend/index.blade.php ENDPATH**/ ?>