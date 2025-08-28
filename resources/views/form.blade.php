<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

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

    {{-- <style>
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
            url('{{ asset('images/back7.jpeg') }}');
            /* ¡Cambia esta URL por la tuya! */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

        }

    </style> --}}

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/styleHome.css'])
    @fluxAppearance



</head>
<body x-data="{ open: false }" @click.away="open = false" 
        style="margin: 0;
            padding: 0;
            font-family: 'Verdana', sans-serif;
            color: #ffffff;
            height: 100vh;
            width: 100vw;
            overflow: hidden;
            position: relative;
            /* Imagen de fondo en alta resolución con gradiente de transparencia */
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('{{ asset('images/back7.jpeg') }}');
            /* ¡Cambia esta URL por la tuya! */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;">


    <div class="overlay"></div>

    <div class="logo">
        <img src="{{ asset('images/logoTDG.png') }}" alt="Logo TuDrGroup" />
    </div>

    <nav class="navbar" style="position: absolute; top: 2.5rem; left: 2rem; z-index: 10;">
        <button @click.stop="open = !open" class="menu-toggle" aria-label="Toggle menu">
            <i class="fas" :class="{ 'fa-bars': !open, 'fa-times': open }"></i>
        </button>

        <div class="menu-desktop">
            <a href="{{ route('home') }}" wire:navigate>Inicio</a>
            <a href="https://www.tudrencasa.com/" class="menu-item" target="_blank">
                <i class="fas fa-heartbeat icon-sm"></i>
                <span>Asistencia de salud</span>
            </a>
            <a href="https://tudrenviajes.com/" class="menu-item" target="_blank">
                <i class="fas fa-plane icon-sm"></i>
                <span>Asistencia en viajes</span>
            </a>
            <a href="{{ route('guest.register') }}">Contáctenos</a>

        </div>

        <div class="menu-mobile" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 transform -translate-y-2" x-transition:enter-end="opacity-100 transform translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 transform translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-2" @click.stop x-cloak>
            <a href="#" @click="open = false">Inicio</a>
            <a href="https://www.tudrencasa.com/" @click="open = false" class="menu-item">
                <i class="fas fa-heartbeat icon-sm"></i>
                <span>Asistencia de salud</span>

            </a>
            <a href="https://tudrenviajes.com/" @click="open = false" class="menu-item">
                <i class="fas fa-plane icon-sm"></i>
                <span>Asistencia en viajes</span>

            </a>
            <a href="#" @click="open = false">Contáctenos</a>

        </div>
    </nav>

    @livewire('register-guest')

    <div class="socials">
        <a href="https://instagram.com/tuempresa" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://tiktok.com/@tuempresa" target="_blank"><i class="fab fa-tiktok"></i></a>
        <a href="https://facebook.com/tuempresa" target="_blank"><i class="fab fa-youtube"></i></a>
    </div>

    <div class="footer">
        <p>&copy; 2025 @TuDoctorGroup. Todos los derechos reservados.</p>
    </div>

    @livewireScripts
    @fluxScripts

    {{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> --}}
</body>
</html>

