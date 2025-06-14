<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctenos | Grupo COTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary: #1a9eb0;
            --primary-light: #5bcadb;
            --primary-dark: #0a7c8c;
            --secondary: #6a7db3;
            --secondary-light: #8c9dd0;
            --secondary-dark: #515e8c;
            --accent: #f8b500;
            --accent-light: #ffd966;
            --light: #f8f9fa;
            --dark: #212529;
            --darker: #111215;
            --text-dark: #333;
            --text-light: #666;
            --gray: #6c757d;
            --white: #ffffff;
            --gradient-primary: linear-gradient(135deg, var(--primary), var(--secondary));
            --gradient-overlay: linear-gradient(rgba(26, 158, 176, 0.85), rgba(106, 125, 179, 0.85));
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            --shadow-large: 0 15px 40px rgba(0, 0, 0, 0.15);
            --shadow-sharp: 0 10px 30px rgba(0, 0, 0, 0.2);
            --border-radius: 15px;
            --border-radius-sm: 8px;
            --border-radius-xs: 4px;
        }

        /* Estilos generales */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: var(--text-dark);
            font-size: 16px;
            line-height: 1.6;
            overflow-x: hidden;
            background-color: var(--white);
        }

        a {
            text-decoration: none;
            color: inherit;
            transition: var(--transition);
        }

        ul {
            list-style: none;
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.2;
        }

        h2 {
            font-size: 2.8rem;
        }

        h3 {
            font-size: 2rem;
        }

        p {
            margin-bottom: 1.5rem;
            color: var(--text-light);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        section {
            padding: 100px 0;
            position: relative;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes scaleUp {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fade-in-up {
            animation: fadeInUp 1s ease forwards;
        }

        .fade-in-left {
            animation: fadeInLeft 1s ease forwards;
        }

        .fade-in-right {
            animation: fadeInRight 1s ease forwards;
        }

        .fade-in {
            animation: fadeIn 1s ease forwards;
        }

        .scale-up {
            animation: scaleUp 0.8s ease forwards;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        /* Header */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
            background-color: var(--white);
            box-shadow: var(--shadow);
            padding: 15px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: var(--primary);
            transition: var(--transition);
        }

        .logo-grupo {
            font-size: 1.8rem;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .logo-cots {
            font-size: 1.8rem;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-left: 5px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-list {
            display: flex;
        }

        .nav-item {
            margin: 0 15px;
            position: relative;
        }

        .nav-link {
            color: var(--text-dark);
            font-weight: 500;
            padding: 10px 5px;
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link:hover {
            color: var(--primary);
        }


        .header-btn {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: var(--white);
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            margin-left: 25px;
            box-shadow: var(--shadow);
            border: 2px solid transparent;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .header-btn:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-large);
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            color: var(--primary);
            cursor: pointer;
            z-index: 1001;
        }


        /* Page Banner */
        .page-banner {
            background-color: var(--primary);
            position: relative;
            color: var(--white);
            height: 400px;
            margin-top: 80px;
            overflow: hidden;
        }

        .page-banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .page-banner-icon {
            font-size: 3rem;
            width: 100px;
            height: 100px;
            display: inline-flex;
            border-radius: 50%;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            background-color: var(--white);
            color: var(--primary);
        }

        .page-banner h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .page-banner p {
            font-size: 1.2rem;
            max-width: 900px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.9);
        }

        .page-banner-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.15'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Contact Section */
        .contact-section {
            background-color: var(--white);
            padding: 80px 0;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
        }

        .contact-info h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: var(--dark);
            position: relative;
            display: inline-block;
        }

        .contact-info h2::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -12px;
            width: 80px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: var(--border-radius-xs);
        }

        .contact-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: var(--primary);
            margin-right: 20px;
            flex-shrink: 0;
        }

        .contact-text {
            flex: 1;
        }

        .contact-text h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
        }

        .contact-text p {
            margin-bottom: 0;
        }

        .contact-form form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .form-label {
            font-weight: 600;
            color: var(--text-dark);
        }

        .form-input {
            padding: 10px 15px;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius-xs);
            transition: var(--transition);
        }

        .form-input:focus {
            border-color: var(--primary);
            box-shadow: var(--shadow);
        }

        .form-textarea {
            height: 160px;
            resize: vertical;
            padding: 12px 15px;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius-xs);
            transition: var(--transition);
        }

        .form-textarea:focus {
            border-color: var(--primary);
            box-shadow: var(--shadow);
        }

        .form-button {
            padding: 12px 30px;
            border-radius: var(--border-radius);
            background: var(--gradient-primary);
            color: var(--white);
            font-weight: 600;
            border: none;
            cursor: pointer;
            box-shadow: var(--shadow);
            transition: var(--transition);
            align-self: flex-start;
        }

        .form-button:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-large);
        }

        /* Map Section */

        .map-container {
            position: relative;
            width: 100%;
            padding-bottom: 56.25%; /* Aspect ratio 16:9 */
            height: 0;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .arizona-map {
            background-color: var(--light);
            border-radius: var(--border-radius);
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 40px;
            position: relative;
            overflow: hidden;
        }

        .arizona-map-shape {
            fill: var(--primary-light);
            width: 100%;
            height: 1/1;
            opacity: 0.5;
            transition: transform 0.5s ease;
        }

        .arizona-map-text {
            color: var(--white);
            font-size: 2em;
            position: relative;
            z-index: 2;
            font-family: 'Montserrat', sans-serif;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        }

        .arizona-map:hover .arizona-map-shape {
            transform: scale(1.1);
        }


        /* Footer */
        .footer {
            background-color: var(--dark);
            color: var(--light);
            padding: 80px 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 1.5fr repeat(2, 1fr);
            gap: 50px;
            margin-bottom: 50px;
        }

        .footer-info h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            color: var(--white);
            display: flex;
            align-items: center;
        }

        .footer-description {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 30px;
        }

        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .contact-item {
            display: flex;
            gap: 15px;
            color: rgba(255, 255, 255, 0.7);
        }

        .contact-item i {
            color: var(--primary-light);
        }

        .footer-links h4 {
            font-size: 1.3rem;
            margin-bottom: 25px;
            color: var(--white);
            position: relative;
            padding-bottom: 10px;
            display: inline-block;
        }

        .footer-links h4::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            height: 3px;
            width: 50px;
            background: var(--primary);
        }

        .footer-nav {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-nav a {
            color: rgba(255, 255, 255, 0.7);
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .footer-nav a i {
            color: var(--primary-light);
            font-size: 0.8rem;
        }


        .footer-nav a:hover {
            color: var(--primary-light);
            transform: translateX(5px);
        }

        .footer-copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
        }


       /* Responsive Design */
       @media (max-width: 992px) {
            section {
                padding: 80px 0;
            }

            .contact-grid {
                grid-template-columns: 1fr;
            }

            .map-container {
                margin-bottom: 40px;
            }

            iframe {
                width: 100% !important;
            }

            .menu-toggle {
                display: block;
            }

            .nav-menu {
                position: fixed;
                top: 0;
                right: -100%;
                width: 280px;
                height: 100vh;
                background: var(--white);
                flex-direction: column;
                align-items: flex-start;
                justify-content: flex-start;
                padding: 120px 30px 30px;
                transition: var(--transition);
                box-shadow: var(--shadow-large);
                z-index: 999;
            }

            .nav-menu.active {
                right: 0;
            }

            .nav-list {
                flex-direction: column;
                width: 100%;
            }

            .nav-item {
                margin: 10px 0;
                width: 100%;
            }

            .nav-link {
                width: 100%;
                display: block;
            }

            .header-btn {
                margin: 20px 0 0;
                width: 100%;
                text-align: center;
                justify-content: center;
            }

            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }
                        .page-banner {
                height: 350px;
            }

            .page-banner h1 {
                font-size: 2.5rem;
            }
        }

        @media (max-width: 768px) {
            .page-banner {
                height: 300px;
            }

            .page-banner h1 {
                font-size: 2.2rem;
            }

            .contact-info h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }

            .contact-grid {
                gap: 30px;
            }

            .contact-form form {
                gap: 20px;
            }

            .form-label {
                font-size: 0.9rem;
            }
        }

   /* Language Dropdown -*/
.language-dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-toggle {
    background-color: transparent;
    border: none;
    color: var(--text-dark);
    cursor: pointer;
    font-weight: 500;
    font-size: 1rem;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px; /* Espacio reducido alrededor del texto */
    border-radius: 20px;
    transition: var(--transition);
    outline: none;
}

.dropdown-toggle:hover {
    background-color: var(--light); /* Color de fondo claro al pasar el mouse */
    color: var(--primary);
}

.dropdown-toggle i {

    font-size: 1.1em;

}

.dropdown-menu {
    display: none;
    position: absolute;
    min-width: 180px;
    background-color: var(--white);
    border-radius: var(--border-radius);
    box-shadow: 0 2px 8px rgba(0,0,0,0.15); /* Sombra suave y extendida */

    padding: 8px 0; /* Padding solo vertical */
    right: 0;   /* Alinea a la derecha */
    z-index: 10; /* Para que se muestre encima de otros elementos. */

    opacity: 0;
    transform: translateY(10px);
    pointer-events: none;   /* Evita clics accidentales. */
    transition: opacity 0.3s ease, transform 0.3s ease, pointer-events 0s ease; /* Transición suave */
}
.dropdown-menu.show {
    opacity: 1;  /* Hace visible el menú */
    transform: translateY(0);  /* Posición correcta */
    pointer-events: auto;  /* Habilita la interactividad */
    display: block;
}

.dropdown-menu a {
    color: var(--text-dark);

    padding: 10px 20px;


    text-decoration: none;

    display: flex;  /* Para alinear horizontalmente. */
    align-items: center;
    font-size: 1rem;
    transition: var(--transition);

    border-bottom: 1px solid #eee;
    gap: 12px;
}

.dropdown-menu a:hover {
    color: var(--primary);
    background-color: #f7f7f7; /* Color de fondo al pasar el mouse */

}
.dropdown-menu a:last-of-type {
    border-bottom: none;
}
.flag-icon {
        width: 20px;
        height: auto;
        margin-right: 8px;
       border-radius: 2px;

    }

/* Ajustes para pantallas pequeñas */
@media (max-width: 768px) {
    .dropdown-menu {
        min-width: 150px;
    }
    /* Posicionamiento relativo para que el menú se ajuste al tamaño del contenedor. */
    .language-dropdown {
        position: static;
        display: block;
        margin: 0;
    }
     .dropdown-menu {
         left: 0;  /* Alinea el menú desplegable con el borde izquierdo del boton. */
    }
}
</style>

<body>
  <!-- Header -->

<header class="header" id="header">
    <div class="container header-container">
<div class="language-dropdown">
    <button class="dropdown-toggle" onclick="toggleDropdown()">
        {{ __('messages.language') }} <i class="fas fa-globe"></i>
    </button>
    <div class="dropdown-menu" id="languageMenu">
        <a href="{{ url('es/Contactanos') }}">{{ __('messages.spanish') }} <span class="flag-icon flag-icon-es"></span></a>
        <a href="{{ url('en/Contactanos') }}">{{ __('messages.english') }} <span class="flag-icon flag-icon-us"></span></a> </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
<script>
    // ... (El mismo JavaScript que antes) ...
</script>

<script>
  function toggleDropdown() {
    document.getElementById('languageMenu').classList.toggle('show');
  }

  window.addEventListener('click', function (e) {
    const menu = document.getElementById('languageMenu');
    const toggle = document.querySelector('.dropdown-toggle');
    if (!toggle.contains(e.target) && !menu.contains(e.target)) {
      menu.classList.remove('show');
    }
  });
</script>
        <a href="Home" class="logo">
            <span class="logo-grupo">GRUPO</span>
            <span class="logo-cots">COTS</span>
        </a>
        <div class="menu-toggle" id="menuToggle">
            <i class="fas fa-bars"></i>
        </div>
        <div class="nav-menu" id="navMenu">
            <ul class="nav-list">
                <li class="nav-item"><a href="Home" class="nav-link active">{{ __('messages.inicio') }}</a></li>
                <li class="nav-item"><a href="Nosotros" class="nav-link">{{ __('messages.nosotros') }}</a></li>
                <li class="nav-item"><a href="Servicios" class="nav-link">{{ __('messages.servicios') }}</a></li>
                <li class="nav-item"><a href="Estructura-organizacional" class="nav-link">{{ __('messages.estructura') }}</a></li>
                <li class="nav-item"><a href="Politicas-de-seguridad" class="nav-link">{{ __('messages.politicas') }}</a></li>
            </ul>
            <a href="Contactanos" class="header-btn active">{{ __('messages.contactanos') }} <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</header>

<!-- Page Banner -->
<section class="page-banner">
    <div class="page-banner-bg"></div>
    <div class="page-banner-pattern"></div>
    <div class="container page-banner-content">
        <div class="page-banner-icon">
            <i class="fas fa-headset"></i>
        </div>
        <h1>{{ __('messages.contacto_titulo') }}</h1>
        <p>{{ __('messages.contacto_texto') }}</p>
    </div>
</section>


<!-- Contact Section -->

<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-info fade-in-up">
                <h2>{{ __('messages.contact_section_title') }}</h2>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>{{ __('messages.location_title') }}</h3>
                        <p>{{ __('messages.location_text') }}</p>
                    </div>
                </div>

                {{-- Teléfono desactivado por ahora --}}
                {{--
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Teléfono</h3>
                        <p>+1 928 750 4918</p>
                    </div>
                </div>
                --}}

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>{{ __('messages.email_title') }}</h3>
                        <p>{{ __('messages.email_text') }}</p>
                    </div>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-globe"></i>
                    </div>
                    <div class="contact-text">
                        <h3>{{ __('messages.website_title') }}</h3>
                        <p><a href="https://grupocots.godaddysites.com/" target="_blank" rel="noopener noreferrer">{{ __('messages.website_text') }}</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
        </div>
    </section>
    <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2654551.70118885!2d-114.70118885!3d34.1682186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872ba8b841f9978d%3A0x14f8c9a91ae3612a!2sArizona%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1690166014687!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="footer-grid">
            <div class="footer-info">
                <h3>
                    <span class="logo-grupo" style="color: #fff;">GRUPO</span>
                    <span class="logo-cots">COTS</span>
                </h3>
                <p class="footer-description">{{ __('messages.footer_description') }}</p>

                <div class="footer-contact">
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <p>{{ __('messages.footer_location') }}</p>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <p>{{ __('messages.footer_email') }}</p>
                    </div>

                    <div class="contact-item">
                        <i class="fas fa-globe"></i>
                        <p><a href="https://grupocots.godaddysites.com/" target="_blank" rel="noopener noreferrer">grupocots.com</a></p>
                    </div>
                </div>
            </div>

            <div class="footer-links">
                <h4>{{ __('messages.quick_links') }}</h4>
                <ul class="footer-nav">
                    <li><a href="Home"><i class="fas fa-chevron-right"></i> {{ __('messages.link_home') }}</a></li>
                    <li><a href="Nosotros"><i class="fas fa-chevron-right"></i> {{ __('messages.link_about') }}</a></li>
                    <li><a href="Servicios"><i class="fas fa-chevron-right"></i> {{ __('messages.link_services') }}</a></li>
                    <li><a href="Estructura-organizacional"><i class="fas fa-chevron-right"></i> {{ __('messages.link_structure') }}</a></li>
                    <li><a href="Contactanos"><i class="fas fa-chevron-right"></i> {{ __('messages.link_contact') }}</a></li>
                    <li><a href="Politicas-de-seguridad"><i class="fas fa-chevron-right"></i> {{ __('messages.link_policies') }}</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>{{ __('messages.our_services') }}</h4>
                <ul class="footer-nav">
                    <li><a href="Servicios#cots-nom"><i class="fas fa-chevron-right"></i> {{ __('messages.service_nom') }}</a></li>
                    <li><a href="Servicios#cots-educativo"><i class="fas fa-chevron-right"></i> {{ __('messages.service_edu') }}</a></li>
                    <li><a href="Servicios#cots-clinico"><i class="fas fa-chevron-right"></i> {{ __('messages.service_clinic') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-copyright">
            <p>&copy; 2025 Grupo COTS. {{ __('messages.rights_reserved') }}</p>
        </div>
    </div>
</footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });

        // Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            if (menuToggle.querySelector('i').classList.contains('fa-bars')) {
                menuToggle.querySelector('i').classList.remove('fa-bars');
                menuToggle.querySelector('i').classList.add('fa-times');
            } else {
                menuToggle.querySelector('i').classList.remove('fa-times');
                menuToggle.querySelector('i').classList.add('fa-bars');
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if(targetId !== '#') {
                    const targetElement = document.querySelector(targetId);
                    if (targetElement) {
                        const headerHeight = document.getElementById('header').offsetHeight;
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });

                         // Cerrar menú móvil después del clic
                        if (navMenu.classList.contains('active')) {
                            navMenu.classList.remove('active');
                            menuToggle.querySelector('i').classList.remove('fa-times');
                            menuToggle.querySelector('i').classList.add('fa-bars');
                        }
                    }
                }
            });
        });


        // Reveal Animations on Scroll
        function revealOnScroll() {
            const fadeElements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .fade-in, .scale-up');
            fadeElements.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        }

        window.addEventListener('scroll', revealOnScroll);
        window.addEventListener('DOMContentLoaded', () => {
            revealOnScroll(); // Ejecutar al cargar para elementos ya visibles
        });


    </script>
</body>
</html>
