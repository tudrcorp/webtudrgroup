<!DOCTYPE html>
<html lang="es" class="h-screen overflow-hidden">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuidamos tu Salud y tu Viaje</title>

    <!--SEO-->
    <meta name="description" content="TuDoctorGroup cuida de tu salud y tus viajes con servicios médicos a domicilio y seguros de viaje. Cuidamos de ti, donde sea que estés.">
    <meta name="keywords" content="salud, viajes, seguros de viaje, asistencia médica, médico a domicilio, TuDoctorGroup, Tu Dren Casa, Tu Dren Viajes">
    <meta name="author" content="TuDoctorGroup">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.tudrengroup.com/">

    <meta property="og:title" content="Cuidamos tu Salud y tu Viaje">
    <meta property="og:description" content="TuDoctorGroup te ofrece servicios de salud a domicilio y seguros de viaje.">
    <meta property="og:image" content="{{ asset('images/social-share.jpg') }}">
    <meta property="og:url" content="https://www.tudrengroup.com/">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TuDoctorGroup">
    <meta name="twitter:creator" content="@TuDoctorGroup">
    <meta name="twitter:title" content="Cuidamos tu Salud y tu Viaje">
    <meta name="twitter:description" content="TuDoctorGroup te ofrece servicios de salud a domicilio y seguros de viaje.">
    <meta name="twitter:image" content="{{ asset('images/social-share.jpg') }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/logoWp3.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/logoWp3.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/logoWp3.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('images/logoWp3.png') }}">

    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: 'Verdana', sans-serif;
            color: #ffffff;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            position: relative;
            /* Imagen de fondo en alta resolución con gradiente de transparencia */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('{{ asset('images/back1.jpg') }}');
            /* ¡Cambia esta URL por la tuya! */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

        .fullscreen-video {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4);
            z-index: -1;
        }

        .logo {
            position: absolute;
            top: 2rem;
            right: 2rem;
            z-index: 10;
        }

        .logo img {
            height: 40px;
            filter: drop-shadow(0 0 4px rgba(0, 0, 0, 0.3));
        }

        /* Redes sociales */
        .socials {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            z-index: 10;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1.5rem;
        }

        .socials a {
            color: #ffffff;
            /* Color blanco más acentuado por defecto */
            font-size: 1.4rem;
            transition: color 0.3s ease, transform 0.3s ease, text-shadow 0.3s ease;
            /* Transiciones más suaves */
        }

        .socials a:hover {
            color: #ffffff;
            transform: scale(1.2);
            /* Efecto de agrandamiento más notable */
            text-shadow: 0 0 10px #ffffff;
            /* Sombra de brillo al pasar el cursor */
        }


        /* Footer */
        .footer {
            position: absolute;
            bottom: 1rem;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            text-align: center;
        }

        .footer p {
            margin: 0;
            font-family: 'Verdana', sans-serif;
            font-size: 0.9rem;
            color: #ffffff;
            /* Color blanco acentuado */
            letter-spacing: 2px;
            /* Espaciado entre letras para resaltar */
            text-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
            /* Sombra para mayor visibilidad */
        }


        /* --- MENÚ DE ESCRITORIO (visible en pantallas grandes) --- */
        /* --- MENÚ DE ESCRITORIO (visible en pantallas grandes) --- */
        .menu-desktop {
            display: flex;
            gap: 2.5rem;
        }

        .menu-desktop a {
            color: #ffffff;
            /* Color blanco acentuado por defecto */
            text-decoration: none;
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            position: relative;
            padding-bottom: 6px;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease, transform 0.3s ease, text-shadow 0.3s ease;
            /* Transiciones para el nuevo efecto */
        }

        .menu-desktop a .icon-sm {
            font-size: 0.85em;
            opacity: 0.9;
            min-width: 16px;
            text-align: center;
        }

        .menu-desktop a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1.5px;
            bottom: 0;
            left: 0;
            background-color: #ffffff;
            /* La línea también es blanca y resalta */
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .menu-desktop a:hover {
            transform: scale(1.05);
            /* Efecto de agrandamiento más sutil para el menú */
            text-shadow: 0 0 10px #ffffff;
            /* Sombra de brillo al pasar el cursor */
        }

        .menu-desktop a:hover::after {
            width: 100%;
        }


        /* --- BOTÓN HAMBURGUESA (solo en móvil) --- */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 0.5rem;
        }

        /* --- MENÚ MÓVIL (oculto por defecto) --- */
        .menu-mobile {
            position: absolute;
            top: 3.5rem;
            left: 0;
            background: rgba(0, 0, 0, 0.9);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            padding: 1rem 1.5rem;
            border-radius: 10px;
            flex-direction: column;
            gap: 1.2rem;
            width: 240px;
        }

        .menu-mobile a {
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1.5px;
            text-transform: uppercase;
            position: relative;
            padding: 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .menu-mobile a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1.5px;
            bottom: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.7);
            transition: width 0.3s ease;
            border-radius: 1px;
        }

        .menu-mobile a:hover::after {
            width: 100%;
            background-color: #ffffff;
        }

        /* --- RESPONSIVE: Móviles --- */
        @media (max-width: 1024px) {
            .menu-toggle {
                display: block;
            }

            .menu-desktop {
                display: none !important;
            }

            /* Esta regla ahora es innecesaria y puede ser eliminada
            .menu-mobile[style*='display: block'] {
                display: flex !important;
            }
            */
        }

        /* --- FORMULARIO PRINCIPAL --- */
        .content-form-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;

            padding: 1rem;
        }

        .form-main {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.18);
            width: 90%;
            max-width: 400px;
            padding: 2rem 1rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .form-main .main-logo {
            height: 80px;
            margin-bottom: 2rem;
            filter: drop-shadow(0 0 4px rgba(0, 0, 0, 0.3));
        }

        .form-main .form-group {
            width: 100%;
            margin-bottom: 1.2rem;
        }

        .form-main input {
            width: 100%;
            padding: 1rem;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 8px;
            font-size: 1rem;
            color: #ffffff;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .form-main input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .form-main input:focus {
            border-color: #ffffff;
        }

        .form-main .form-submit {
            width: 100%;
            padding: 1rem;
            background-color: #ffffff;
            border: none;
            border-radius: 8px;
            color: #000000;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .form-main .form-submit:hover {
            background-color: #f0f0f0;
            transform: translateY(-2px);
        }


        /* Ocultar mientras carga Alpine */
        [x-cloak] {
            display: none !important;
        }


    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance


</head>
<body x-data="{ open: false }" @click.away="open = false">
    <video autoplay muted loop playsinline class="fullscreen-video">
        <source src="{{ asset('images/video2.mp4') }}" type="video/mp4">
        Tu navegador no soporta videos HTML5.
    </video>

    <div class="overlay"></div>

    <div class="logo">
        <img src="{{ asset('images/logoTDG.png') }}" alt="Logo Empresa" />
    </div>

    <nav class="navbar" style="position: absolute; top: 2.5rem; left: 2rem; z-index: 10;">
        <button @click.stop="open = !open" class="menu-toggle" aria-label="Toggle menu">
            <i class="fas" :class="{ 'fa-bars': !open, 'fa-times': open }"></i>
        </button>

        <div class="menu-desktop">
            <a href="{{ route('home') }}" wire:navigate>HOME</a>
            <a href="https://www.tudrencasa.com/" class="menu-item" target="_blank">
                <i class="fas fa-heartbeat icon-sm"></i>
                <span>CUIDAMOS TU SALUD</span>
            </a>
            <a href="https://tudrenviajes.com/" class="menu-item" target="_blank">

                <i class="fas fa-plane icon-sm"></i>
                <span>CUIDAMOS TU VIAJE</span>
            </a>
            <a href="{{ route('form') }}">CONTÁCTENOS</a>
        </div>

        <div class="menu-mobile" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" @click.stop x-cloak>
            <a href="#" @click="open = false">HOME</a>
            <a href="https://www.tudrencasa.com/" @click="open = false" class="menu-item">
                <i class="fas fa-heartbeat icon-sm"></i>
                <span>CUIDAMOS TU SALUD</span>
            </a>
            <a href="https://tudrenviajes.com/" @click="open = false" class="menu-item">
                <i class="fas fa-plane icon-sm"></i>
                <span>CUIDAMOS TU VIAJE</span>
            </a>
            <a href="#" @click="open = false">CONTÁCTANOS</a>
        </div>
    </nav>

    <div class="content-form-container">
        <div class="form-main">

            <form action="#" method="POST" class="mt-5 flex flex-col gap-3">
                
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Información de contacto</flux:heading>
                        <flux:text class="mt-2">Debes completar el formulario!</flux:text>
                    </div>
    
                    <div class="space-y-6">
                        <flux:input label="Nombre y Apellido" type="text" placeholder="..." />
                        <flux:input label="Teléfono" type="email" placeholder="..." />
                        <flux:input label="Correo Electrónico" type="email" placeholder="..." />
                    </div>
    
                    <div class="space-y-2">
                        <flux:button variant="primary" class="w-full">Enviar</flux:button>
                        <flux:button variant="ghost" class="w-full">Sign up for a new account</flux:button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="socials">
        <a href="https://instagram.com/tuempresa" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://tiktok.com/@tuempresa" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://facebook.com/tuempresa" target="_blank"><i class="fab fa-facebook"></i></a>
    </div>

    <div class="footer">
        <p>&copy; 2025 @TuDoctorGroup. Todos los derechos reservados.</p>
    </div>

    @livewireScripts

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>

