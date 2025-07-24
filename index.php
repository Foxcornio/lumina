<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lumina - Brillo que te define</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        /* Estilos personalizados para fuentes y contador del carrito */
        body {
            font-family: 'Lato', sans-serif;
            color: #333; /* Color de texto por defecto */
        }
        h1, h2, h3 {
            font-family: 'Playfair Display', serif;
        }
        /* Ajustes para el icono de carrito con contador */
        .cart-icon .cart-count {
            @apply absolute -top-1 -right-2 bg-red-500 text-white text-xs font-bold rounded-full h-4 w-4 flex items-center justify-center;
        }
    </style>
</head>
<body class="bg-gray-50 antialiased">
    <header class="bg-white shadow-sm py-4 px-6 flex justify-between items-center fixed w-full z-50">
        <div class="logo">
            <a href="/" class="text-2xl font-bold text-gray-800 hover:text-gray-900 transition duration-300">Lumina</a>
        </div>
        <nav class="main-nav hidden md:block">
            <ul class="flex space-x-6">
                <li><a href="index.php" class="text-gray-600 hover:text-gray-900 font-medium transition duration-300">Catálogo</a></li>
                <li><a href="aboutme.php" class="text-gray-600 hover:text-gray-900 font-medium transition duration-300">Sobre Nosotros</a></li>
                <li><a href="locations.php" class="text-gray-600 hover:text-gray-900 font-medium transition duration-300">Ubicaciones de Entrega</a></li>
                <li><a href="more.php" class="text-gray-600 hover:text-gray-900 font-medium transition duration-300">Otros Productos</a></li>
            </ul>
        </nav>
        <div class="header-icons flex items-center space-x-4">
            <a href="#" class="text-gray-600 hover:text-gray-900 text-xl">&#128269;</a> <a href="carrito.html" class="relative text-gray-600 hover:text-gray-900 text-xl">
                &#128722; <span class="cart-count">0</span>
            </a>
            <button class="md:hidden text-gray-600 hover:text-gray-900 text-2xl" aria-label="Abrir menú">
                &#9776; </button>
        </div>
    </header>

    <main class="pt-20"> <section class="hero-section relative h-96 md:h-screen flex items-center justify-center text-center overflow-hidden">
            <img src="src/assets/images/joyas.webp" alt="Joyas Brillantes" class="absolute inset-0 w-full h-full object-cover object-center filter brightness-75">
            <div class="hero-content relative z-10 text-white p-4 max-w-2xl">
                <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">Brillo que te define</h1>
                <p class="text-lg md:text-xl mb-8">Descubre nuestra exclusiva colección de piezas únicas.</p>
                <a href="index.php" class="inline-block bg-white text-gray-800 font-semibold py-3 px-8 rounded-full shadow-lg hover:bg-gray-200 transition duration-300 transform hover:scale-105">Explorar Catálogo</a>
            </div>
        </section>

        <section class="featured-products py-16 px-4 sm:px-6 lg:px-8 bg-white">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Nuestras Últimas Creaciones</h2>
            <div class="product-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8 max-w-6xl mx-auto">
                <div class="product-card bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="https://via.placeholder.com/400x300/F5F5DC/808080?text=Anillo+de+Zafiro" alt="Anillo de Zafiro" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Anillo de Zafiro</h3>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-2xl font-bold text-gray-900">$150.00</p>
                            <button class="bg-gray-800 text-white rounded-full p-3 hover:bg-gray-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                                &#128722; </button>
                        </div>
                    </div>
                </div>
                <div class="product-card bg-white rounded-lg shadow-lg overflow-hidden transform transition duration-300 hover:scale-105">
                    <img src="https://via.placeholder.com/400x300/F5F5DC/808080?text=Collar+de+Perlas" alt="Collar de Perlas Clásico" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2 text-gray-800">Collar de Perlas Clásico</h3>
                        <div class="flex justify-between items-center mt-4">
                            <p class="text-2xl font-bold text-gray-900">$220.50</p>
                            <button class="bg-gray-800 text-white rounded-full p-3 hover:bg-gray-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50">
                                &#128722; </button>
                        </div>
                    </div>
                </div>
                </div>
        </section>

        <section class="about-preview py-16 px-4 sm:px-6 lg:px-8 bg-gray-100">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Nuestra Historia</h2>
            <div class="about-content max-w-4xl mx-auto flex flex-col md:flex-row items-center md:space-x-8">
                <img src="https://via.placeholder.com/500x350/F5F5DC/808080?text=Nuestra+Empresa" alt="Nuestra Empresa" class="w-full md:w-1/2 rounded-lg shadow-md mb-8 md:mb-0">
                <div class="text-center md:text-left md:w-1/2">
                    <p class="text-lg leading-relaxed mb-6 text-gray-700">En Tu Joyería, creemos que cada pieza cuenta una historia. Desde nuestra fundación, nos dedicamos a la creación de joyas artesanales que celebran momentos especiales y perduran en el tiempo...</p>
                    <a href="sobre-nosotros.html" class="inline-block bg-gray-800 text-white font-semibold py-3 px-6 rounded-full hover:bg-gray-700 transition duration-300 transform hover:scale-105">Conoce Más</a>
                </div>
            </div>
        </section>

        <section class="testimonials py-16 px-4 sm:px-6 lg:px-8 bg-white">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">Lo que Dicen Nuestros Clientes</h2>
            <div class="testimonial-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <div class="testimonial-item bg-gray-50 p-6 rounded-lg shadow-sm">
                    <p class="italic text-gray-700 mb-4">"Absolutamente enamorada de mi nuevo collar. La calidad es excepcional."</p>
                    <span class="font-semibold text-gray-800">- María G.</span>
                </div>
                </div>
        </section>
    </main>

    <footer class="bg-gray-800 text-white py-12 px-4 sm:px-6 lg:px-8">
        <div class="footer-content max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="contact-info">
                <h3 class="text-xl font-semibold mb-4">Contacto</h3>
                <p class="mb-2">Dirección: Calle Falsa 123, Coacalco, México</p>
                <p class="mb-2">Teléfono: +52 55 1234 5678</p>
                <p class="mb-2">Email: info@lumina.foxcornio.com</p>
            </div>
            <div class="footer-links">
                <h3 class="text-xl font-semibold mb-4">Enlaces Útiles</h3>
                <ul>
                    <li class="mb-2"><a href="preguntas-frecuentes.html" class="hover:text-gray-300 transition duration-300">Preguntas Frecuentes</a></li>
                </ul>
            </div>
            <div class="social-media">
                <h3 class="text-xl font-semibold mb-4">Síguenos</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300 text-2xl" aria-label="Instagram">&#x1F4F8;</a> <a href="#" class="text-white hover:text-gray-300 transition duration-300 text-2xl" aria-label="Facebook">&#x1F4F0;</a> </div>
            </div>
        </div>
        <div class="copyright text-center text-gray-400 mt-10 border-t border-gray-700 pt-6">
            <p>&copy; 2025 Lumina. Todos los derechos reservados.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>