<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <style>
        /* Estilo para la barra de información */
        @keyframes scroll {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        /* .animate-scroll {
            animation: scroll 2s linear infinite;
        } */

        /* Estilo para la barra fija */
        .info-bar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #000;
            color: white;
            z-index: 50;
            padding: 8px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Hacer que el contenido no se superponga a la barra de información */
        body {
            margin-top: 40px; /* Ajuste para dar espacio debajo de la barra fija */
        }

    </style>
    <div class="info-bar">
        <div class="animate-scroll whitespace-nowrap flex gap-8 px-4">
            <span class="text-sm">🌟 Inscripciones abiertas par nuevos pilotos!</span>
           {{--  <span class="text-sm">📢 Promoción especial: 20% de descuento en todos los planes hasta el 30 de noviembre.</span>
            <span class="text-sm">📞 Contáctanos al +123 456 7890 para más información.</span> --}}
        </div>
    </div>
    <nav class="bg-yellow-500 text-white shadow-lg fixed top-8 w-full z-50">

        <div class="container mx-auto py-4 flex justify-between items-center">
          <!-- Logo -->
          <img src="{{asset('storage/img/logo.png')}}" class="w-40" alt="">
      
          <!-- Desktop Menu -->
          <div class="hidden md:flex items-center space-x-6">
            <a href="#" class="hover:text-gray-600">Inicio</a>
            <a href="#" class="hover:text-gray-600">Servicios</a>
            <a href="#" class="hover:text-gray-600">Precios</a>
            <a href="#" class="hover:text-gray-600">Contacto</a>
            <button class="bg-cyan-600 px-4 py-2 rounded hover:bg-gray-500">Iniciar Sesión</button>
          </div>
      
          <!-- Mobile Menu Button -->
          <button id="menu-toggle" class="md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-50 text-black space-y-2 py-3 px-4">
          <a href="#" class="block hover:text-gray-600">Inicio</a>
          <a href="#" class="block hover:text-gray-600">Servicios</a>
          <a href="#" class="block hover:text-gray-600">Precios</a>
          <a href="#" class="block hover:text-gray-600">Contacto</a>
          <button class="w-full bg-cyan-600 px-4 py-2 rounded hover:bg-gray-500">Iniciar Sesión</button>
        </div>
    </nav>

    <div class="mt-16 bg-white">
        <!-- Bienvenida -->
        <section class="bg-gray-100 py-16">
            <div class="container mx-auto text-center">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">¡Bienvenido a Nuestra Plataforma!</h2>
                <p class="text-gray-600 text-lg">Descubre cómo podemos ayudarte a lograr tus objetivos con nuestras soluciones personalizadas.</p>
                <a href="#" class="mt-6 inline-block bg-cyan-600 text-white px-6 py-3 rounded hover:bg-cyan-500 transition">
                    Explorar Más
                </a>
            </div>
        </section>
    
        <section class="py-7">
            <div class="container mx-auto max-w-screen-lg">
                <h3 class="text-3xl font-bold text-gray-800 text-center mb-8">Nuestros Servicios</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 p-6">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Ipiales"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">Ipiales</h2>
                        <p class="text-gray-600">Por trayecto desde</p>
                        <p class="text-2xl font-bold text-green-600">COP 199.700</p>
                      </div>
                    </div>
                  
                    <!-- Card 2 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Valledupar"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">Valledupar</h2>
                        <p class="text-gray-600">Por trayecto desde</p>
                        <p class="text-2xl font-bold text-green-600">COP 240.300</p>
                      </div>
                    </div>
                  
                    <!-- Card 3 -->
                    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Ciudad de Panamá"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h2 class="text-xl font-bold text-gray-800">Ciudad de Panamá</h2>
                        <p class="text-gray-600">Por trayecto desde</p>
                        <p class="text-2xl font-bold text-green-600">COP 565.800</p>
                        <p class="text-sm text-gray-500">USD 127</p>
                      </div>
                    </div>
                  </div>
                  
            </div>
        </section>

        <section class="py-7">
    <div class="container mx-auto max-w-screen-lg px-4">
        <h3 class="text-3xl font-bold text-gray-800 text-center mb-8">Nuestros Servicios</h3>
        
        <div class="flex flex-col md:flex-row items-center bg-red-600 rounded-lg overflow-hidden p-4 md:p-0">
            <!-- Imagen -->
            <div class="md:w-1/2">
                <img
                    src="https://via.placeholder.com/600x400"
                    alt="Business Class"
                    class="w-full h-auto object-cover"
                />
            </div>
            <!-- Contenido -->
            <div class="md:w-1/2 text-white p-6 flex flex-col justify-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-2">eleva tu forma <br> <span class="block">de volar</span></h2>
                <p class="text-lg mb-4">
                    Nueva experiencia business class hacia y desde europa
                </p>
                <button class="bg-white text-red-600 font-semibold py-2 px-4 rounded-lg shadow hover:bg-gray-100">
                    Compra ya
                </button>
            </div>
        </div>
    </div>
</section>


        <section class="py-7">
            <div class="container mx-auto max-w-screen-lg">
                <h3 class="text-3xl font-bold text-gray-800 text-center mb-8">Nuestros Servicios</h3>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 p-6">
                    <!-- Card 1 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Inspírate"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Inspírate</h3>
                        <p class="text-gray-600 mt-2">
                          Explora nuestros destinos y planea tu próxima aventura. Sácale provecho a tu siguiente vuelo.
                        </p>
                      </div>
                    </div>
                  
                    <!-- Card 2 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Experiencia Avianca"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Experiencia Avianca</h3>
                        <p class="text-gray-600 mt-2">
                          ¡Listo para despegar! Descubre los servicios a bordo que te ofrecemos al volar con nosotros.
                        </p>
                      </div>
                    </div>
                  
                    <!-- Card 3 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Avianca Lifemiles"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Avianca Lifemiles</h3>
                        <p class="text-gray-600 mt-2">
                          Conoce nuestro programa de viajero frecuente y acumula millas con tus vuelos.
                        </p>
                      </div>
                    </div>
                  
                    <!-- Card 4 -->
                    <div class="bg-white shadow-md rounded-lg overflow-hidden">
                      <img
                        src="https://via.placeholder.com/400x200"
                        alt="Equipaje"
                        class="w-full h-48 object-cover"
                      />
                      <div class="p-4">
                        <h3 class="text-xl font-semibold text-gray-800">Equipaje</h3>
                        <p class="text-gray-600 mt-2">
                          Entérate de las condiciones que debes tener en cuenta al momento de preparar tu equipaje.
                        </p>
                      </div>
                    </div>
                  </div>
            </div>
        </section>

        
          
    
        <!-- Pie de Página -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="container mx-auto text-center">
                <p class="text-gray-400 text-sm">© 2024 Tu Empresa. Todos los derechos reservados.</p>
                <div class="flex justify-center space-x-4 mt-4">
                    <a href="#" class="text-gray-400 hover:text-white">Política de Privacidad</a>
                    <a href="#" class="text-gray-400 hover:text-white">Términos y Condiciones</a>
                    <a href="#" class="text-gray-400 hover:text-white">Contacto</a>
                </div>
            </div>
        </footer>
    </div>
    
    <script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
    </script>
   
      
</body>
</html>