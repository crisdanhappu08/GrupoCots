<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Políticas | Grupo COTS</title>
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

        @keyframes floatingIcon {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-8px);
            }
        }

        @keyframes gradientBg {
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

        .delay-500 {
            animation-delay: 0.5s;
        }

        .delay-600 {
            animation-delay: 0.6s;
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
            position: relative;
            background-color: var(--darker);
            padding: 180px 0 100px;
            overflow: hidden;
            text-align: center;
            color: var(--white);
        }

        .page-banner-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-overlay);
            z-index: 1;
        }

        .page-banner-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.15'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            z-index: 2;
            opacity: 0.5;
        }

        .page-banner-content {
            position: relative;
            z-index: 3;
        }

        .page-banner-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            color: var(--white);
            background: rgba(255, 255, 255, 0.1);
            width: 120px;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin: 0 auto 30px;
            position: relative;
            animation: floatingIcon 3s ease-in-out infinite;
        }

        .page-banner-icon::after {
            content: '';
            position: absolute;
            top: -8px;
            left: -8px;
            right: -8px;
            bottom: -8px;
            border: 2px dashed rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .page-banner h1 {
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 20px;
            color: var(--white);
        }

        .page-banner p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto 20px;
            color: rgba(255, 255, 255, 0.9);
        }

        /* Intro Section */
        .intro-section {
            background-color: var(--white);
            position: relative;
        }

        .intro-content {
            max-width: 900px;
            margin: 0 auto;
            text-align: center;
        }

        .intro-title {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: var(--dark);
            position: relative;
            display: inline-block;
        }

        .intro-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--gradient-primary);
            left: 50%;
            bottom: -15px;
            transform: translateX(-50%);
            border-radius: var(--border-radius-xs);
        }

        .intro-description {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--text-light);
            margin-bottom: 40px;
        }

        /* Policies Section */
        .policies-section {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .policies-section::before {
            content: '';
            position: absolute;
            top: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .policies-section::after {
            content: '';
            position: absolute;
            bottom: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .policies-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        .policy-card {
            background: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            margin-bottom: 40px;
            overflow: hidden;
            transition: var(--transition);
        }

        .policy-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-large);
        }

        .policy-header {
            background: var(--gradient-primary);
            background-size: 200% 200%;
            animation: gradientBg 5s ease infinite;
            color: var(--white);
            padding: 25px 30px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .policy-icon {
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            flex-shrink: 0;
        }

        .policy-title {
            margin: 0;
            font-size: 1.6rem;
        }

        .policy-body {
            padding: 30px;
        }

        .policy-description {
            margin-bottom: 20px;
            font-size: 1.05rem;
            color: var(--text-light);
            line-height: 1.8;
        }

        .policy-points {
            margin-top: 20px;
        }

        .policy-point {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            gap: 15px;
        }

        .policy-point:last-child {
            margin-bottom: 0;
        }

        .policy-point-icon {
            width: 30px;
            height: 30px;
            background: var(--primary-light);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            flex-shrink: 0;
            margin-top: 3px;
        }

        .policy-point-text {
            flex: 1;
            color: var(--text-light);
        }

        .policy-point-text p {
            margin-bottom: 0;
        }

        /* CTA Section */
        .cta-section {
            position: relative;
            background: var(--gradient-primary);
            color: var(--white);
            text-align: center;
            padding: 100px 0;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="52" height="26" viewBox="0 0 52 26" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23fff" fill-opacity="0.1"><path d="M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z" /></g></g></svg>');
            opacity: 0.4;
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            color: var(--white);
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 30px;
            color: rgba(255, 255, 255, 0.9);
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            background: var(--white);
            color: var(--primary);
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            gap: 10px;
        }

        .cta-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .cta-btn i {
            font-size: 1.2rem;
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

        /* Responsive Styles */
        @media (max-width: 992px) {
            section {
                padding: 80px 0;
            }

            .page-banner {
                padding: 150px 0 80px;
            }

            .page-banner h1 {
                font-size: 2.8rem;
            }

            .page-banner-icon {
                width: 100px;
                height: 100px;
                font-size: 3.5rem;
            }

            .intro-title {
                font-size: 2.2rem;
            }

            .policy-header {
                padding: 20px 25px;
            }

            .policy-icon {
                width: 50px;
                height: 50px;
                font-size: 24px;
            }

            .policy-title {
                font-size: 1.4rem;
            }

            .policy-body {
                padding: 25px;
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
        }

        @media (max-width: 768px) {
            .page-banner h1 {
                font-size: 2.5rem;
            }

            .page-banner p {
                font-size: 1.1rem;
            }

            .intro-title {
                font-size: 2rem;
            }

            .intro-description {
                font-size: 1rem;
            }

            .cta-title {
                font-size: 2rem;
            }

            .cta-text {
                font-size: 1.1rem;
            }

            .cta-btn {
                padding: 12px 30px;
                font-size: 1rem;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }

            .page-banner {
                padding: 140px 0 70px;
            }

            .page-banner h1 {
                font-size: 2.2rem;
            }

            .page-banner-icon {
                width: 80px;
                height: 80px;
                font-size: 2.8rem;
            }

            .intro-title {
                font-size: 1.8rem;
            }

            .policy-header {
                flex-direction: column;
                text-align: center;
                padding: 20px 15px;
            }

            .policy-title {
                font-size: 1.3rem;
            }

            .policy-body {
                padding: 20px 15px;
            }

            .policy-description {
                font-size: 1rem;
            }
        }

    </style>
</head>
<style>
  .contact-item a {
    color: blue;
    text-decoration: underline;
  }
</style>
<body>
    <!-- Header -->
    <header class="header" id="header">
        <div class="container header-container">
            <a href="home" class="logo">
                <span class="logo-grupo">GRUPO</span>
                <span class="logo-cots">COTS</span>
            </a>

            <div class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </div>

             <div class="nav-menu" id="navMenu">
                <ul class="nav-list">
                    <li class="nav-item"><a href="home" class="nav-link active">Inicio</a></li>
                    <li class="nav-item"><a href="Nosotros" class="nav-link">Nosotros</a></li>
                    <li class="nav-item"><a href="Servicios" class="nav-link">Servicios</a></li>
                    <li class="nav-item"><a href="estructura-organizacional" class="nav-link">estructura-organizacional</a></li>
                    <li class="nav-item"><a href="Politicas-de-seguridad" class="nav-link" class="active" >Políticas</a></li>
                </ul>
                <a href="Contactanos" class="header-btn">Contáctanos <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </header>

    <!-- Page Banner -->
    <section class="page-banner">
        <div class="page-banner-bg"></div>
        <div class="page-banner-pattern"></div>
        <div class="page-banner-content">
            <div class="page-banner-icon fade-in-up">
                <i class="fas fa-shield-alt"></i>
            </div>
            <h1 class="fade-in-up delay-200">Políticas de Seguridad</h1>
            <p class="fade-in-up delay-300">Nuestro compromiso con la protección y confidencialidad de la información</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="intro-section">
        <div class="container">
            <div class="intro-content">
                <h2 class="intro-title fade-in-up">Nuestro Compromiso</h2>
                <p class="intro-description fade-in-up delay-200">Grupo COTS se compromete a proteger la información, los datos personales y los sistemas tecnológicos involucrados en la operación de sus plataformas. Las siguientes políticas de seguridad reflejan este compromiso y nuestro esfuerzo por mantener los más altos estándares de protección y confidencialidad.</p>
            </div>
        </div>
    </section>

    <!-- Policies Section -->
    <section class="policies-section">
        <div class="container policies-container">
            <!-- Policy 1: Data Protection -->
            <div class="policy-card fade-in-up">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h3 class="policy-title">Protección de Datos Personales</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>La empresa garantiza que los datos personales recopilados a través de sus plataformas serán tratados de manera confidencial y conforme a la legislación aplicable.</p>
                            </div>
                        </div>
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Se limita el acceso a la información personal únicamente al personal autorizado y solo para fines estrictamente laborales o de atención a clientes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy 2: Confidentiality -->
            <div class="policy-card fade-in-up delay-100">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3 class="policy-title">Confidencialidad</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Toda la información proporcionada por los usuarios, clientes o instituciones es considerada confidencial.</p>
                            </div>
                        </div>
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>El personal de Grupo COTS está obligado a firmar acuerdos de confidencialidad y a seguir protocolos estrictos para el manejo de la información.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy 3: Technology Security -->
            <div class="policy-card fade-in-up delay-200">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="policy-title">Seguridad Tecnológica</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Se utilizan herramientas actualizadas y protocolos de seguridad para proteger los sistemas contra accesos no autorizados, ataques cibernéticos y pérdida de información.</p>
                            </div>
                        </div>
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Las plataformas desarrolladas cuentan con controles de autenticación, cifrado y respaldo de datos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy 4: Access Control -->
            <div class="policy-card fade-in-up delay-300">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-key"></i>
                    </div>
                    <h3 class="policy-title">Control de Accesos</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>El acceso a los sistemas y plataformas se otorga según el rol y perfil del usuario.</p>
                            </div>
                        </div>
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Los administradores y usuarios deben utilizar credenciales seguras, y el sistema requiere cambios periódicos de contraseñas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy 5: Updates and Maintenance -->
            <div class="policy-card fade-in-up delay-400">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-sync-alt"></i>
                    </div>
                    <h3 class="policy-title">Actualización y Mantenimiento</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Los sistemas informáticos y las aplicaciones web desarrolladas por Grupo COTS se actualizan periódicamente para mejorar su seguridad y funcionalidad.</p>
                            </div>
                        </div>
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Se realizan auditorías internas de seguridad y revisiones técnicas frecuentes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Policy 6: Platform Usage Responsibility -->
            <div class="policy-card fade-in-up delay-500">
                <div class="policy-header">
                    <div class="policy-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="policy-title">Responsabilidad en el Uso de la Plataforma</h3>
                </div>
                <div class="policy-body">
                    <div class="policy-points">
                        <div class="policy-point">
                            <div class="policy-point-icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="policy-point-text">
                                <p>Los usuarios deben hacer un uso adecuado de los sistemas y plataformas, absteniéndose de realizar acciones que comprometan la seguridad o el correcto funcionamiento de los mismos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content fade-in-up">
                <h2 class="cta-title">¿Tiene preguntas sobre nuestras políticas?</h2>
                <p class="cta-text">Estamos comprometidos con la transparencia. Contáctenos para obtener más información sobre nuestras políticas de seguridad.</p>
                <a href="Contactanos" class="cta-btn">Contactar ahora <i class="fas fa-arrow-right"></i></a>
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
                    <p class="footer-description">Empresa líder en desarrollo de sistemas informáticos y aplicaciones web con la más alta e innovadora tecnología para contribuir al desarrollo tecnológico en México y el extranjero.</p>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Arizona, Pima</p>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <p>+1 928 750 4918</p>
                        </div>
                       <!-- <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <p>contacto@grupocots.com</p>
                        </div>-->
                                        <div class="contact-item">
                            <i class="fas fa-globe"></i>
   <p><a href="https://grupocots.godaddysites.com/" target="_blank" rel="noopener noreferrer">grupocots.com</a></p>
</div>

                    </div>
                </div>

                 <div class="footer-links">
                    <h4>Enlaces Rápidos</h4>
                    <ul class="footer-nav">
                        <li><a href="home"><i class="fas fa-chevron-right"></i> Inicio</a></li>
                        <li><a href="Nosotros"><i class="fas fa-chevron-right"></i> Nosotros</a></li>
                        <li><a href="Servicios"><i class="fas fa-chevron-right"></i> Servicios</a></li>
                        <li><a href="estructura-organizacional"><i class="fas fa-chevron-right"></i> estructura-organizacional</a></li>
                        <li><a href="Contactanos"><i class="fas fa-chevron-right"></i> Contacto</a></li>
                        <li><a href="Politicas-de-seguridad"><i class="fas fa-chevron-right"></i> Políticas</a></li>
                    </ul>
                </div>

             <div class="footer-links">
                    <h4>Nuestros Servicios</h4>
                    <ul class="footer-nav">
                        <li><a href="Servicios#cots-nom"><i class="fas fa-chevron-right"></i> COTS NOM-035</a></li>
                        <li><a href="Servicios#cots-educativo"><i class="fas fa-chevron-right"></i> COTS Administrativo Educativo</a></li>
                        <li><a href="Servicios#cots-clinico"><i class="fas fa-chevron-right"></i> COTS Clínico</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-copyright">
                <p>&copy; 2025 Grupo COTS. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Menu Toggle
        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');

            // Change menu icon
            if (menuToggle.querySelector('i').classList.contains('fa-bars')) {
                menuToggle.querySelector('i').classList.remove('fa-bars');
                menuToggle.querySelector('i').classList.add('fa-times');
            } else {
                menuToggle.querySelector('i').classList.remove('fa-times');
                menuToggle.querySelector('i').classList.add('fa-bars');
            }
        });

        // Close menu when link is clicked
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
                menuToggle.querySelector('i').classList.remove('fa-times');
                menuToggle.querySelector('i').classList.add('fa-bars');
            });
        });

        // Reveal animations on scroll
        function revealOnScroll() {
            const elements = document.querySelectorAll('.fade-in-up, .fade-in-left, .fade-in-right, .fade-in, .scale-up');

            elements.forEach(element => {
                const windowHeight = window.innerHeight;
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    element.style.visibility = 'visible';
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0) translateX(0) scale(1)';
                }
            });
        }

        // Execute on page load
        window.addEventListener('DOMContentLoaded', () => {
            // Pre-set styles for animations
            document.querySelectorAll('.fade-in-up').forEach(el => {
                el.style.transform = 'translateY(20px)';
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease, visibility 0.6s ease';
            });

            document.querySelectorAll('.fade-in-left').forEach(el => {
                el.style.transform = 'translateX(-30px)';
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease, visibility 0.6s ease';
            });

            document.querySelectorAll('.fade-in-right').forEach(el => {
                el.style.transform = 'translateX(30px)';
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease, visibility 0.6s ease';
            });

            document.querySelectorAll('.fade-in').forEach(el => {
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
                el.style.transition = 'opacity 0.6s ease, visibility 0.6s ease';
            });

            document.querySelectorAll('.scale-up').forEach(el => {
                el.style.transform = 'scale(0.95)';
                el.style.opacity = '0';
                el.style.visibility = 'hidden';
                el.style.transition = 'opacity 0.6s ease, transform 0.6s ease, visibility 0.6s ease';
            });

            // Run reveal for elements in view on page load
            revealOnScroll();
        });

        // Reveal elements as they come into view during scroll
        window.addEventListener('scroll', revealOnScroll);


    </script>
</body>
</html>
