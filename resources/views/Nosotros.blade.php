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

        .contact-btn {
            margin-left: 2rem;
            display: inline-flex;
            align-items: center;
            background: var(--gradient);
            color: var(--white);
            padding: 12px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            letter-spacing: 0.5px;
            transition: var(--transition);
            box-shadow: 0 4px 10px rgba(26, 158, 176, 0.3);
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

        /* Footer */
        footer {
            background-color: var(--darker);
            color: var(--light);
            position: relative;
            padding: 80px 0 20px;
        }

        .footer-top {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            color: var(--white);
            font-size: 1.3rem;
            margin-bottom: 30px;
            position: relative;
            padding-bottom: 15px;
            display: inline-block;
        }

        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: var(--gradient);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
        }

        .footer-links a i {
            margin-right: 10px;
            font-size: 0.9rem;
            color: var(--primary);
        }

        .footer-links a:hover {
            color: var(--white);
            transform: translateX(5px);
        }

        .contact-info div {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }

        .contact-info i {
            margin-right: 15px;
            color: var(--primary);
            font-size: 18px;
        }

        .contact-info p {
            margin: 0;
            color: rgba(255, 255, 255, 0.7);
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: var(--white);
            font-size: 18px;
            transition: var(--transition);
        }

        .social-link:hover {
            background: var(--gradient);
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
            margin: 0;
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
        }

        /* Preloader */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--white);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .loader {
            width: 80px;
            height: 80px;
            position: relative;
        }

        .loader:before, .loader:after {
            content: '';
            position: absolute;
            border-radius: 50%;
            animation: pulsOut 1.8s ease-in-out infinite;
            filter: drop-shadow(0 0 1rem rgba(26, 158, 176, 0.75));
        }

        .loader:before {
            width: 100%;
            height: 100%;
            background: rgba(26, 158, 176, 0.6);
            animation-delay: 0.35s;
        }

        .loader:after {
            width: 70%;
            height: 70%;
            background: rgba(106, 125, 179, 0.6);
            top: 15%;
            left: 15%;
            animation-delay: 0s;
        }

        @keyframes pulsOut {
            0% { transform: scale(0.2); opacity: 0.8; }
            50% { transform: scale(1); opacity: 0; }
            100% { transform: scale(0.2); opacity: 0; }
        }
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Header -->
    <header id="header">
        <div class="container header-container">
            <a href="index.html" class="logo">
                <span class="logo-grupo">GRUPO</span>
                <span class="logo-cots">COTS</span>
            </a>

            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>

            <nav id="mainNav">
                <ul>
                    <li><a href="home">Inicio</a></li>
                    <li><a href="Nosotros" class="active">Nosotros</a></li>
                    <li><a href="Servicios">Servicios</a></li>
                    <li><a href="estructura-organizacional">Estructura organizacional</a></li>
                    <li><a href="Contacto">Contacto</a></li>
                    <li><a href="Politicas">Políticas</a></li>
                </ul>
                <a href="contacto.html" class="contact-btn">Contáctanos <i class="fas fa-arrow-right"></i></a>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1>Sobre Nosotros</h1>
                <div class="breadcrumbs">
                    <a href="index.html">Inicio</a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <span class="current">Nosotros</span>
                </div>
            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Nuestra Historia</h2>
            </div>

            <div class="history-content" data-aos="fade-up">
                <p>Grupo COTS nace en el año 2016 con una visión clara: planificar y desarrollar sistemas informáticos y servicios profesionales que permitan mejorar, eficientizar y conocer estadísticamente la información tanto en el sector público como en el privado.</p>

                <p>Inicialmente nos enfocamos en áreas específicas, buscando siempre coadyuvar en la toma de decisiones de los involucrados mediante el uso de tecnología de vanguardia. Con el tiempo, y gracias al intercambio constante de ideas y conocimientos entre nuestro equipo, identificamos nuevas necesidades en diversos sectores para el desarrollo de sistemas.</p>

                <div class="history-highlight" data-aos="fade-right">
                    <p>Este descubrimiento nos ha llevado a conformar un equipo multidisciplinario, unido por el objetivo común de satisfacer necesidades tecnológicas y de servicios en diferentes industrias, siempre con los más altos estándares de calidad y profesionalismo.</p>
                </div>

                <p>A lo largo de estos años, hemos crecido de manera constante, expandiendo nuestro portafolio de servicios y soluciones para adaptarnos a las cambiantes demandas del mercado. Hoy, Grupo COTS se posiciona como una empresa líder en desarrollo de sistemas informáticos y aplicaciones web, comprometida con la innovación tecnológica y la satisfacción de sus clientes.</p>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Nuestra Trayectoria</h2>
                <p>Un recorrido por los momentos clave que han marcado la historia de Grupo COTS</p>
            </div>

            <div class="timeline">
                <!-- Timeline Item 1 -->
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-date">2016</div>
                        <h3>Fundación de la Empresa</h3>
                        <p>Iniciamos operaciones con un pequeño equipo enfocado en la planeación de sistemas informáticos para el sector público y privado.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-flag"></i>
                    </div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-date">2018</div>
                        <h3>Desarrollo de COTS NOM-035</h3>
                        <p>Lanzamos nuestra primera aplicación web enfocada en ayudar a las empresas a cumplir con la Norma 035-STPS-2018.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-date">2020</div>
                        <h3>Expansión de Servicios</h3>
                        <p>Desarrollamos COTS Administrativo Educativo y COTS Clínico, ampliando nuestro portafolio de soluciones a sectores clave.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="timeline-item" data-aos="fade-left">
                    <div class="timeline-content">
                        <div class="timeline-date">2022</div>
                        <h3>Consolidación en el Mercado</h3>
                        <p>Alcanzamos un importante número de clientes satisfechos y consolidamos nuestra presencia en el mercado tecnológico.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <!-- Timeline Item 5 -->
                <div class="timeline-item" data-aos="fade-right">
                    <div class="timeline-content">
                        <div class="timeline-date">2025</div>
                        <h3>Innovación Continua</h3>
                        <p>Continuamos expandiendo nuestros horizontes con nuevas tecnologías y soluciones de vanguardia para diversos sectores.</p>
                    </div>
                    <div class="timeline-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Misión, Visión y Valores</h2>
                <p>Conoce los pilares fundamentales que guían nuestras acciones y definen nuestra identidad corporativa</p>
            </div>

            <div class="mission-vision-grid">
                <!-- Mission -->
                <div class="mission-vision-card mission-card" data-aos="fade-right">
                    <h3><i class="fas fa-bullseye"></i> Nuestra Misión</h3>
                    <p>Ser la mejor empresa en desarrollo y soporte tecnológico para la población en general, así como para las entidades públicas y privadas; para desarrollar, investigar y aplicar nuestros conocimientos en las distintas actividades en México y el extranjero, en sistemas informáticos, aplicaciones web y la prestación de servicios relacionados.</p>
                </div>

                <!-- Vision -->
                <div class="mission-vision-card vision-card" data-aos="fade-left">
                    <h3><i class="fas fa-eye"></i> Nuestra Visión</h3>
                    <p>Desarrollar con la más alta e innovadora tecnología, sistemas informáticos y aplicaciones web, para contribuir al desarrollo tecnológico en México y en el extranjero, facilitando a la población en general la vida, al sector privado y al sector público la eficiencia en sus actividades para ser mejores entidades económicas y de servicios con el uso y apoyo de nuestros sistemas. Así también, facilitar a los usuarios sus actividades con nuestros servicios profesionales relacionados con la tecnología que desarrollamos.</p>
                </div>
            </div>

            <div class="section-header" data-aos="fade-up" style="margin-top: 30px">
                <h2>Nuestros Valores</h2>
                <p>Los principios que guían nuestro trabajo diario y definen la forma en que nos relacionamos con clientes y colaboradores</p>
            </div>

            <div class="values-section">
                <!-- Value 1 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="value-title">Innovación</h3>
                    <p class="value-description">Buscamos constantemente nuevas formas de mejorar nuestros sistemas y servicios, implementando tecnología de vanguardia para ofrecer soluciones óptimas.</p>
                </div>

                <!-- Value 2 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3 class="value-title">Excelencia</h3>
                    <p class="value-description">Nos comprometemos a entregar productos y servicios de la más alta calidad, superando las expectativas de nuestros clientes en cada proyecto.</p>
                </div>

                <!-- Value 3 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3 class="value-title">Compromiso</h3>
                    <p class="value-description">Trabajamos con dedicación y responsabilidad, cumpliendo nuestras promesas y estableciendo relaciones de confianza duraderas con nuestros clientes.</p>
                </div>

                <!-- Value 4 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-icon">
                        <i class="fas fa-globe-americas"></i>
                    </div>
                    <h3 class="value-title">Desarrollo</h3>
                    <p class="value-description">Contribuimos activamente al desarrollo tecnológico de México y el extranjero, impulsando la transformación digital de las organizaciones.</p>
                </div>

                <!-- Value 5 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="value-icon">
                        <i class="fas fa-users-cog"></i>
                    </div>
                    <h3 class="value-title">Trabajo en Equipo</h3>
                    <p class="value-description">Fomentamos la colaboración y el intercambio de ideas para lograr resultados sobresalientes, aprovechando las fortalezas de cada integrante.</p>
                </div>

                <!-- Value 6 -->
                <div class="value-card" data-aos="fade-up" data-aos-delay="600">
                    <div class="value-icon">
                        <i class="fas fa-balance-scale"></i>
                    </div>
                    <h3 class="value-title">Integridad</h3>
                    <p class="value-description">Actuamos con transparencia, honestidad y respeto en todas nuestras interacciones, manteniendo los más altos estándares éticos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Description -->
    <section class="company-description-section">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Nuestra Empresa</h2>
                <p>Conoce más sobre la infraestructura y organización de Grupo COTS</p>
            </div>

            <div class="company-grid">
                <div class="company-info" data-aos="fade-right">
                    <h3>Descripción Física</h3>
                    <p>Grupo COTS cuenta con modernas instalaciones diseñadas para fomentar la creatividad, colaboración e innovación tecnológica. Nuestras oficinas están estratégicamente ubicadas para brindar un servicio eficiente a nuestros clientes.</p>
                    <p>Disponemos de espacios de trabajo colaborativo, salas de reuniones equipadas con tecnología de vanguardia y áreas especializadas para el desarrollo de sistemas y pruebas de software.</p>

                    <ul class="company-features">
                        <li>
                            <i class="fas fa-building"></i>
                            <span>Oficinas modernas ubicadas en zonas estratégicas con fácil acceso</span>
                        </li>
                        <li>
                            <i class="fas fa-server"></i>
                            <span>Infraestructura tecnológica de última generación para el desarrollo de sistemas</span>
                        </li>
                        <li>
                            <i class="fas fa-network-wired"></i>
                            <span>Servidores de alto rendimiento y sistemas de respaldo de datos</span>
                        </li>
                        <li>
                            <i class="fas fa-laptop-code"></i>
                            <span>Laboratorios de desarrollo y pruebas de software</span>
                        </li>
                        <li>
                            <i class="fas fa-chalkboard-teacher"></i>
                            <span>Salas de capacitación y reuniones equipadas con tecnología audiovisual</span>
                        </li>
                        <li>
                            <i class="fas fa-coffee"></i>
                            <span>Espacios de descanso y colaboración para fomentar la creatividad</span>
                        </li>
                    </ul>
                </div>

                <div class="company-gallery" data-aos="fade-left">
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Oficinas Grupo COTS" class="gallery-img">
                        <div class="gallery-overlay">
                            <h4 class="gallery-title">Nuestras Oficinas</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sala de Reuniones" class="gallery-img">
                        <div class="gallery-overlay">
                            <h4 class="gallery-title">Sala de Reuniones</h4>
                        </div>
                    </div>
                    <div class="gallery-item">
                        <img src="https://images.unsplash.com/photo-1571844307880-751c6d86f3f3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Área de Desarrollo" class="gallery-img">
                        <div class="gallery-overlay">
                            <h4 class="gallery-title">Área de Desarrollo</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-top">
                <div class="footer-column">
                    <a href="index.html" class="logo">
                        <span class="logo-grupo">GRUPO</span>
                        <span class="logo-cots">COTS</span>
                    </a>
                    <p style="margin-top: 20px;">Empresa líder en desarrollo de sistemas informáticos y aplicaciones web con la más alta e innovadora tecnología para contribuir al desarrollo tecnológico en México y en el extranjero.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

               <div class="footer-links">
                    <h4>Enlaces Rápidos</h4>
                    <ul class="footer-nav">
                        <li><a href="home"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                        <li><a href="Nosotros"><i class="fas fa-chevron-right"></i> Nosotros</a></li>
                        <li><a href="Servicios"><i class="fas fa-chevron-right"></i> Servicios</a></li>
                        <li><a href="estructura-organizacional"><i class="fas fa-chevron-right"></i> estructura-organizacional</a></li>
                        <li><a href="Contacto"><i class="fas fa-chevron-right"></i> Contacto</a></li>
                        <li><a href="Politicas"><i class="fas fa-chevron-right"></i> Políticas</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Nuestros Servicios</h4>
                    <ul class="footer-nav">
                        <li><a href="Servicios"><i class="fas fa-chevron-right"></i> COTS NOM-035</a></li>
                        <li><a href="Servicios"><i class="fas fa-chevron-right"></i> COTS Administrativo Educativo</a></li>
                        <li><a href="Servicios"><i class="fas fa-chevron-right"></i> COTS Clínico</a></li>

                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <div class="contact-info">
                        <div>
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Ciudad de México, México</p>
                        </div>
                        <div>
                            <i class="fas fa-phone"></i>
                            <p>+52 55 1234 5678</p>
                        </div>
                        <div>
                            <i class="fas fa-envelope"></i>
                            <p>contacto@grupocots.com</p>
                        </div>
                        <div>
                            <i class="fas fa-globe"></i>
                            <p>grupocots.godaddysites.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Grupo COTS. Todos los derechos reservados.</p>
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
