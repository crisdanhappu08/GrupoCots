<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros | Grupo COTS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary: #1a9eb0;
            --primary-light: #3eb8c9;
            --primary-dark: #0e7c8c;
            --secondary: #4f7f76;
            --tertiary: #6a7db3;
            --accent: #ff6b35;
            --light: #f8f9fa;
            --dark: #212529;
            --darker: #111215;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --white: #ffffff;
            --shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --gradient: linear-gradient(135deg, #1a9eb0, #6a7db3);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            color: var(--dark);
            background-color: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
            font-size: 16px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        section {
            padding: 100px 0;
            position: relative;
        }

        /* Typography */
        h1, h2, h3, h4, h5 {
            font-family: 'Montserrat', sans-serif;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        h1 {
            font-size: 3.5rem;
            font-weight: 800;
        }

        h2 {
            font-size: 2.8rem;
            font-weight: 700;
        }

        h3 {
            font-size: 1.8rem;
            font-weight: 600;
        }

        p {
            margin-bottom: 1.5rem;
        }

        /* Header & Navigation */
        header {
            background-color: var(--white);
            box-shadow: var(--shadow);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            transition: var(--transition);
        }

        header.scrolled {
            padding: 5px 0;
            box-shadow: 0 5px 30px rgba(0, 0, 0, 0.2);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
            transition: var(--transition);
        }

        .scrolled .header-container {
            padding: 10px 0;
        }

        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--dark);
        }

        .logo-grupo {
            font-weight: 300;
            letter-spacing: 2px;
            font-size: 1.8rem;
            margin-right: 5px;
            color: var(--dark);
        }

        .logo-cots {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 1.8rem;
            background-image: var(--gradient);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: gradient-shift 8s ease infinite;
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        nav {
            display: flex;
            align-items: center;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 2rem;
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            padding: 8px 0;
            font-size: 1rem;
        }

        nav ul li a:hover, nav ul li a.active {
            color: var(--primary);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            background: var(--gradient);
            left: 0;
            bottom: 0;
            transition: var(--transition);
        }

        nav ul li a:hover::after, nav ul li a.active::after {
            width: 100%;
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

        .contact-btn:hover {
            box-shadow: 0 6px 15px rgba(26, 158, 176, 0.4);
            transform: translateY(-2px);
        }

        .menu-toggle {
            display: none;
            font-size: 24px;
            cursor: pointer;
            color: var(--dark);
            z-index: 1001;
        }

        /* Page Header */
        .page-header {
            background: var(--gradient);
            padding: 150px 0 100px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect x="0" y="0" width="100" height="100" fill="rgba(255,255,255,0.05)"/><path d="M0 50 L50 0 L100 50 L50 100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
            background-size: 20px 20px;
            opacity: 0.7;
        }

        .page-header-content {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .page-header h1 {
            margin-bottom: 20px;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .breadcrumbs {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .breadcrumbs a {
            color: var(--white);
            text-decoration: none;
            opacity: 0.8;
            transition: var(--transition);
        }

        .breadcrumbs a:hover {
            opacity: 1;
        }

        .breadcrumbs .separator {
            opacity: 0.6;
            font-size: 0.9rem;
        }

        .breadcrumbs .current {
            opacity: 1;
            font-weight: 600;
        }

        /* History Section */
        .history-section {
            background-color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .history-section::before {
            content: '';
            position: absolute;
            top: -200px;
            left: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.04;
        }

        .section-header {
            text-align: center;
            margin-bottom: 70px;
            position: relative;
        }

        .section-header h2 {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
            z-index: 1;
        }

        .section-header h2::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--gradient);
            left: 50%;
            bottom: -15px;
            transform: translateX(-50%);
        }

        .section-header p {
            max-width: 900px;
            margin: 30px auto 0;
            font-size: 1.1rem;
            color: var(--gray);
        }

        .history-content {
            max-width: 900px;
            margin: 0 auto;
            font-size: 1.1rem;
            color: var(--dark);
            line-height: 1.8;
        }

        .history-highlight {
            background-color: var(--light);
            padding: 30px;
            border-left: 5px solid var(--primary);
            border-radius: 0 10px 10px 0;
            margin: 30px 0;
            box-shadow: var(--shadow);
            position: relative;
            overflow: hidden;
        }

        .history-highlight::before {
            content: '\f10d';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 2rem;
            opacity: 0.1;
            color: var(--primary);
        }

        .history-highlight p {
            font-style: italic;
            margin-bottom: 0;
        }

        /* Timeline */
        .timeline-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .timeline-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.05;
        }

        .timeline {
            position: relative;
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .timeline::after {
            content: '';
            position: absolute;
            width: 6px;
            background: var(--primary-light);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 3px;
        }

        .timeline-item {
            position: relative;
            width: 50%;
            padding: 0 50px 60px 0;
            clear: both;
        }

        .timeline-item:nth-child(even) {
            margin-left: auto;
            padding: 0 0 60px 50px;
        }

        .timeline-content {
            padding: 30px;
            background: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            position: relative;
            transition: var(--transition);
        }

        .timeline-content:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .timeline-date {
            position: absolute;
            width: 170px;
            background: var(--gradient);
            color: var(--white);
            text-align: center;
            padding: 8px 16px;
            border-radius: 20px;
            top: -15px;
            font-size: 1rem;
            font-weight: 600;
        }

        .timeline-item:nth-child(odd) .timeline-date {
            right: -85px;
        }

        .timeline-item:nth-child(even) .timeline-date {
            left: -85px;
        }

        .timeline-content h3 {
            font-size: 1.6rem;
            margin-bottom: 15px;
        }

        .timeline-icon {
            position: absolute;
            background: var(--white);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 20px;
            box-shadow: 0 0 0 6px var(--light), 0 0 0 12px var(--primary-light);
            z-index: 1;
        }

        .timeline-item:nth-child(odd) .timeline-icon {
            right: -25px;
        }

        .timeline-item:nth-child(even) .timeline-icon {
            left: -25px;
        }

        /* Mission Vision Values */
        .mission-vision-section {
            position: relative;
            overflow: hidden;
        }

        .mission-vision-section::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.05;
        }

        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            margin-bottom: 60px;
        }

        .mission-vision-card {
            padding: 40px;
            border-radius: 10px;
            position: relative;
            color: var(--white);
            overflow: hidden;
            min-height: 350px;
            display: flex;
            flex-direction: column;
        }

        .mission-vision-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 0.95;
            transition: var(--transition);
        }

        .mission-card::before {
            background: linear-gradient(135deg, #1a9eb0, #3eb8c9);
        }

        .vision-card::before {
            background: linear-gradient(135deg, #6a7db3, #4f7f76);
        }

        .mission-vision-card:hover::before {
            opacity: 1;
        }

        .mission-vision-card h3 {
            font-size: 2rem;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mission-vision-card p {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .values-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 30px;
        }

        .value-card {
            background: var(--white);
            border-radius: 10px;
            box-shadow: var(--shadow);
            padding: 30px;
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .value-icon {
            width: 70px;
            height: 70px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            color: var(--primary);
            font-size: 28px;
            transition: var(--transition);
        }

        .value-card:hover .value-icon {
            background: var(--gradient);
            color: var(--white);
            transform: rotateY(360deg);
        }

        .value-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .value-description {
            color: var(--gray);
            font-size: 1rem;
            line-height: 1.6;
        }

        /* Company Description */
        .company-description-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .company-description-section::before {
            content: '';
            position: absolute;
            bottom: -200px;
            left: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.05;
        }

        .company-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 50px;
            align-items: center;
        }

        .company-info h3 {
            font-size: 2rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 15px;
        }

        .company-info h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: var(--gradient);
        }

        .company-info p {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: var(--gray);
        }

        .company-features {
            list-style: none;
            margin-top: 30px;
        }

        .company-features li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 1.05rem;
        }

        .company-features li i {
            color: var(--primary);
            margin-right: 15px;
            background: var(--light);
            width: 25px;
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-top: 3px;
            flex-shrink: 0;
        }

        .company-gallery {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-template-rows: repeat(2, 1fr);
            gap: 20px;
            height: 450px;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: var(--shadow);
        }

        .gallery-item:first-child {
            grid-row: span 2;
        }

        .gallery-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05);
        }

        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 15px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            color: var(--white);
            transition: var(--transition);
            opacity: 0;
            transform: translateY(20px);
        }

        .gallery-item:hover .gallery-overlay {
            opacity: 1;
            transform: translateY(0);
        }

        .gallery-title {
            font-size: 1rem;
            margin-bottom: 5px;
            font-weight: 600;
        }

        a{text-decoration: none

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
        /* Responsive */
        @media (max-width: 1200px) {
            h1 {
                font-size: 3rem;
            }
            h2 {
                font-size: 2.5rem;
            }
            h3 {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 992px) {
            section {
                padding: 80px 0;
            }
            .menu-toggle {
                display: block;
            }
            nav {
                position: fixed;
                top: 0;
                right: -100%;
                width: 300px;
                height: 100vh;
                background: var(--white);
                flex-direction: column;
                align-items: flex-start;
                padding: 100px 30px 30px;
                box-shadow: -5px 0 20px rgba(0, 0, 0, 0.1);
                transition: var(--transition);
                z-index: 1000;
            }

            nav.active {
                right: 0;
            }

            nav ul {
                flex-direction: column;
                width: 100%;
            }

            nav ul li {
                margin: 15px 0;
                width: 100%;
            }

            .contact-btn {
                margin: 20px 0 0 0;
                width: 100%;
                justify-content: center;
            }

            .timeline::after {
                left: 40px;
            }

            .timeline-item {
                width: 100%;
                padding: 0 0 60px 80px;
            }

            .timeline-item:nth-child(even) {
                padding: 0 0 60px 80px;
            }

            .timeline-icon {
                left: 15px !important;
                right: auto !important;
            }

            .timeline-date {
                left: 80px !important;
                right: auto !important;
                top: -15px;
                width: auto;
                min-width: 120px;
            }

            .mission-vision-grid {
                grid-template-columns: 1fr;
            }

            .company-grid {
                grid-template-columns: 1fr;
            }

            .company-gallery {
                order: -1;
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
            }
            h2 {
                font-size: 2.2rem;
            }
            h3 {
                font-size: 1.6rem;
            }
            .page-header {
                padding: 120px 0 80px;
            }
            .values-section {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }
            h1 {
                font-size: 2.2rem;
            }
            h2 {
                font-size: 1.9rem;
            }
            h3 {
                font-size: 1.4rem;
            }
            .section-header {
                margin-bottom: 50px;
            }
            .history-content {
                font-size: 1rem;
            }
            .mission-vision-card {
                padding: 30px;
                min-height: auto;
            }
            .mission-vision-card h3 {
                font-size: 1.6rem;
            }
            .mission-vision-card p {
                font-size: 1rem;
            }
            .value-card {
                padding: 25px;
            }
            .value-icon {
                width: 60px;
                height: 60px;
                font-size: 24px;
            }
            .value-title {
                font-size: 1.3rem;
            }
            .company-gallery {
                height: 350px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
                gap: 40px;
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
</head>
<body>

    <!-- Header -->
    <header id="header">
        <div class="container header-container">
        <div class="language-dropdown">
    <button class="dropdown-toggle" onclick="toggleDropdown()">
        {{ __('messages.language') }} <i class="fas fa-globe"></i>
    </button>
    <div class="dropdown-menu" id="languageMenu">
        <a href="{{ url('es/Nosotros') }}">{{ __('messages.spanish') }} <span class="flag-icon flag-icon-es"></span></a>
        <a href="{{ url('en/Nosotros') }}">{{ __('messages.english') }} <span class="flag-icon flag-icon-us"></span></a> </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
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
            <nav id="mainNav">
                <ul class="nav-list">
                <li class="nav-item"><a href="Home" class="nav-link ">{{ __('messages.inicio') }}</a></li>
                <li class="nav-item"><a href="Nosotros" class="nav-link active">{{ __('messages.nosotros') }}</a></li>
                <li class="nav-item"><a href="Servicios" class="nav-link ">{{ __('messages.servicios') }}</a></li>
                <li class="nav-item"><a href="Estructura-organizacional" class="nav-link">{{ __('messages.estructura') }}</a></li>
                <li class="nav-item"><a href="Politicas-de-seguridad" class="nav-link">{{ __('messages.politicas') }}</a></li>
            </ul>
           <a href="Contactanos" class="header-btn active">{{ __('messages.contactanos') }} <i class="fas fa-arrow-right"></i></a>
            </nav>
        </div>
    </header>
   <!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content" data-aos="fade-up">
            <h1>{{ __('messages.about_us_title') }}</h1>
        </div>
    </div>
</section>

<!-- History Section -->
<section class="history-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ __('messages.our_history_title') }}</h2>
        </div>
        <div class="history-content" data-aos="fade-up">
            <p>{{ __('messages.our_history_paragraph_1') }}</p>
            <p>{{ __('messages.our_history_paragraph_2') }}</p>
            <div class="history-highlight" data-aos="fade-right">
                <p>{{ __('messages.our_history_paragraph_3') }}</p>
            </div>
            <p>{{ __('messages.our_history_paragraph_4') }}</p>
        </div>
    </div>
</section>

<!-- Timeline Section -->
<section class="timeline-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ __('messages.our_trajectory_title') }}</h2>
            <p>{{ __('messages.our_trajectory_description') }}</p>
        </div>
    </div>
</section>
           <div class="timeline">
    <!-- Timeline Item 1 -->
    <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-content">
            <div class="timeline-date">2016</div>
            <h3>{{ __('messages.timeline_title_2016') }}</h3>
            <p>{{ __('messages.timeline_desc_2016') }}</p>
        </div>
        <div class="timeline-icon">
            <i class="fas fa-flag"></i>
        </div>
    </div>

    <!-- Timeline Item 2 -->
    <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-content">
            <div class="timeline-date">2018</div>
            <h3>{{ __('messages.timeline_title_2018') }}</h3>
            <p>{{ __('messages.timeline_desc_2018') }}</p>
        </div>
        <div class="timeline-icon">
            <i class="fas fa-shield-alt"></i>
        </div>
    </div>

    <!-- Timeline Item 3 -->
    <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-content">
            <div class="timeline-date">2020</div>
            <h3>{{ __('messages.timeline_title_2020') }}</h3>
            <p>{{ __('messages.timeline_desc_2020') }}</p>
        </div>
        <div class="timeline-icon">
            <i class="fas fa-chart-line"></i>
        </div>
    </div>

    <!-- Timeline Item 4 -->
    <div class="timeline-item" data-aos="fade-left">
        <div class="timeline-content">
            <div class="timeline-date">2022</div>
            <h3>{{ __('messages.timeline_title_2022') }}</h3>
            <p>{{ __('messages.timeline_desc_2022') }}</p>
        </div>
        <div class="timeline-icon">
            <i class="fas fa-users"></i>
        </div>
    </div>

    <!-- Timeline Item 5 -->
    <div class="timeline-item" data-aos="fade-right">
        <div class="timeline-content">
            <div class="timeline-date">2025</div>
            <h3>{{ __('messages.timeline_title_2025') }}</h3>
            <p>{{ __('messages.timeline_desc_2025') }}</p>
        </div>
        <div class="timeline-icon">
            <i class="fas fa-rocket"></i>
        </div>
    </div>
</div>

    <!-- Mission & Vision Section -->
<section class="mission-vision-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ __('messages.mission_vision_title') }}</h2>
            <p>{{ __('messages.mission_vision_intro') }}</p>
        </div>

        <div class="mission-vision-grid">
            <!-- Mission -->
            <div class="mission-vision-card mission-card" data-aos="fade-right">
                <h3><i class="fas fa-bullseye"></i> {{ __('messages.mission_title') }}</h3>
                <p>{{ __('messages.mission_text') }}</p>
            </div>

            <!-- Vision -->
            <div class="mission-vision-card vision-card" data-aos="fade-left">
                <h3><i class="fas fa-eye"></i> {{ __('messages.vision_title') }}</h3>
                <p>{{ __('messages.vision_text') }}</p>
            </div>
        </div>

        <div class="section-header" data-aos="fade-up" style="margin-top: 30px">
            <h2>{{ __('messages.core_values_title') }}</h2>
            <p>{{ __('messages.values_intro') }}</p>
        </div>

        <div class="values-section">
            <!-- Value 1 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                <div class="value-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_innovation') }}</h3>
                <p class="value-description">{{ __('messages.value_innovation_text') }}</p>
            </div>

            <!-- Value 2 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                <div class="value-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_excellence') }}</h3>
                <p class="value-description">{{ __('messages.value_excellence_text') }}</p>
            </div>

            <!-- Value 3 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                <div class="value-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_commitment') }}</h3>
                <p class="value-description">{{ __('messages.value_commitment_text') }}</p>
            </div>

            <!-- Value 4 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                <div class="value-icon">
                    <i class="fas fa-globe-americas"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_development') }}</h3>
                <p class="value-description">{{ __('messages.value_development_text') }}</p>
            </div>

            <!-- Value 5 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                <div class="value-icon">
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_teamwork') }}</h3>
                <p class="value-description">{{ __('messages.value_teamwork_text') }}</p>
            </div>

            <!-- Value 6 -->
            <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                <div class="value-icon">
                    <i class="fas fa-balance-scale"></i>
                </div>
                <h3 class="value-title">{{ __('messages.value_integrity') }}</h3>
                <p class="value-description">{{ __('messages.value_integrity_text') }}</p>
            </div>
        </div>
    </div>
</section>

   <!-- Company Description -->
<section class="company-description-section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ __('messages.company_title') }}</h2>
            <p>{{ __('messages.company_intro') }}</p>
        </div>

        <div class="company-grid">
            <div class="company-info" data-aos="fade-right">
                <h3>{{ __('messages.company_physical_title') }}</h3>
                <p>{{ __('messages.company_physical_paragraph1') }}</p>
                <p>{{ __('messages.company_physical_paragraph2') }}</p>

                <ul class="company-features">
                    <li>
                        <i class="fas fa-building"></i>
                        <span>{{ __('messages.company_feature1') }}</span>
                    </li>
                    <li>
                        <i class="fas fa-server"></i>
                        <span>{{ __('messages.company_feature2') }}</span>
                    </li>
                    <li>
                        <i class="fas fa-network-wired"></i>
                        <span>{{ __('messages.company_feature3') }}</span>
                    </li>
                    <li>
                        <i class="fas fa-laptop-code"></i>
                        <span>{{ __('messages.company_feature4') }}</span>
                    </li>
                    <li>
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>{{ __('messages.company_feature5') }}</span>
                    </li>
                    <li>
                        <i class="fas fa-coffee"></i>
                        <span>{{ __('messages.company_feature6') }}</span>
                    </li>
                </ul>
            </div>

            <div class="company-gallery" data-aos="fade-left">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Oficinas Grupo COTS" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4 class="gallery-title">{{ __('messages.gallery_offices') }}</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sala de Reuniones" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4 class="gallery-title">{{ __('messages.gallery_meeting') }}</h4>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1571844307880-751c6d86f3f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Área de Desarrollo" class="gallery-img">
                    <div class="gallery-overlay">
                        <h4 class="gallery-title">{{ __('messages.gallery_development') }}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
    <!-- JavaScript Libraries -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });

        // Preloader
        window.addEventListener('load', function() {
            const preloader = document.getElementById('preloader');
            setTimeout(function() {
                preloader.style.opacity = '0';
                setTimeout(function() {
                    preloader.style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Mobile Navigation Toggle
        const menuToggle = document.getElementById('menuToggle');
        const mainNav = document.getElementById('mainNav');

        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            if(this.querySelector('i').classList.contains('fa-bars')) {
                this.querySelector('i').classList.remove('fa-bars');
                this.querySelector('i').classList.add('fa-times');
            } else {
                this.querySelector('i').classList.remove('fa-times');
                this.querySelector('i').classList.add('fa-bars');
            }
        });

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const headerHeight = document.getElementById('header').offsetHeight;
                    const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    if (mainNav.classList.contains('active')) {
                        mainNav.classList.remove('active');
                        menuToggle.querySelector('i').classList.remove('fa-times');
                        menuToggle.querySelector('i').classList.add('fa-bars');
                    }
                }
            });
        });
    </script>
</body>
</html>
