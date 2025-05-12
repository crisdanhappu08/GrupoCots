# Página "Servicios" para Grupo COTS

Aquí tienes el código HTML para la página "Servicios" que presenta detalladamente cada una de las soluciones que ofrece la empresa, con animaciones y elementos interactivos:

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios | Grupo COTS</title>
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

        /* Services Intro Section */
        .services-intro {
            position: relative;
            overflow: hidden;
        }

        .services-intro::before {
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

        /* Service Item */
        .service-item {
            padding: 140px 0;
            position: relative;
        }

        .service-item:nth-child(even) {
            background-color: var(--light);
        }

        .service-item:nth-child(even)::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.04;
        }

        .service-item:nth-child(odd)::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.04;
        }

        .service-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 80px;
            align-items: center;
        }

        .service-item:nth-child(even) .service-grid {
            direction: rtl;
        }

        .service-item:nth-child(even) .service-content,
        .service-item:nth-child(even) .service-image {
            direction: ltr;
        }

        .service-icon {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 25px;
            font-size: 40px;
            background-image: var(--gradient);
            color: var(--white);
            box-shadow: 0 10px 30px rgba(26, 158, 176, 0.3);
        }

        .service-title {
            font-size: 2.5rem;
            margin-bottom: 25px;
            color: var(--dark);
            font-weight: 700;
        }

        .service-description {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: var(--gray);
        }

        .service-benefits {
            margin-bottom: 30px;
        }

        .service-benefits h3 {
            display: flex;
            align-items: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .service-benefits h3 i {
            margin-right: 15px;
        }

        .benefits-list {
            list-style: none;
        }

        .benefits-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            font-size: 1.05rem;
        }

        .benefits-list li i {
            color: var(--primary);
            margin-right: 15px;
            font-size: 1rem;
            margin-top: 5px;
        }

        .target-clients {
            margin-bottom: 40px;
            padding: 25px;
            background: var(--light);
            border-radius: 10px;
            border-left: 5px solid var(--primary);
        }

        .service-item:nth-child(even) .target-clients {
            background: var(--white);
        }

        .target-clients h3 {
            display: flex;
            align-items: center;
            font-size: 1.4rem;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .target-clients h3 i {
            margin-right: 15px;
        }

        .target-clients ul {
            list-style: none;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }

        .target-clients li {
            display: inline-flex;
            align-items: center;
            background: var(--white);
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: 500;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
        }

        .service-item:nth-child(even) .target-clients li {
            background: var(--light);
        }

        .target-clients li:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            background: var(--primary-light);
            color: var(--white);
        }

        .target-clients li i {
            margin-right: 10px;
            color: var(--primary);
        }

        .target-clients li:hover i {
            color: var(--white);
        }

        .service-buttons {
            display: flex;
            gap: 20px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            cursor: pointer;
            letter-spacing: 0.5px;
        }

        .btn-primary {
            background: var(--gradient);
            color: var(--white);
            box-shadow: 0 4px 15px rgba(26, 158, 176, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(26, 158, 176, 0.4);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }

        .btn-outline:hover {
            background: var(--primary);
            color: var(--white);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(26, 158, 176, 0.2);
        }

        .btn i {
            margin-right: 8px;
        }

        .service-image {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            height: 500px;
            transform: perspective(1000px) rotateY(0deg);
            transform-style: preserve-3d;
        }

        .service-item:nth-child(odd) .service-image {
            transform: perspective(1000px) rotateY(0deg);
        }

        .service-item:nth-child(even) .service-image {
            transform: perspective(1000px) rotateY(0deg);
        }

        .service-image:hover {
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .service-item:nth-child(odd) .service-image:hover {
            transform: perspective(1000px) rotateY(-5deg);
        }

        .service-item:nth-child(even) .service-image:hover {
            transform: perspective(1000px) rotateY(5deg);
        }

        .service-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .service-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(26, 158, 176, 0.2), rgba(106, 125, 179, 0.4));
            z-index: 1;
            opacity: 0.6;
            transition: var(--transition);
        }

        .service-image:hover::before {
            opacity: 0.8;
        }

        .service-image:hover img {
            transform: scale(1.05);
        }

        .demo-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.9);
            padding: 15px 30px;
            border-radius: 50px;
            color: var(--primary);
            font-weight: 600;
            display: flex;
            align-items: center;
            z-index: 2;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: var(--transition);
            opacity: 0;
        }

        .demo-overlay i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .service-image:hover .demo-overlay {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        /* Floating Animation */
        @keyframes floating {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0);
            }
        }

        .floating-animation {
            animation: floating 6s ease-in-out infinite;
        }

        /* Service Features */
        .service-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .feature-item {
            background: var(--white);
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        .service-item:nth-child(even) .feature-item {
            background: var(--light);
        }

        .feature-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: var(--gradient);
            z-index: -1;
            transition: var(--transition);
        }

        .feature-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .feature-item:hover::before {
            width: 100%;
            opacity: 0.1;
        }

        .feature-icon {
            font-size: 30px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 1.3rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .feature-description {
            color: var(--gray);
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* CTA Section */
        .cta-section {
            background: var(--gradient);
            color: var(--white);
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 120px 0;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect x="0" y="0" width="100" height="100" fill="rgba(255,255,255,0.05)"/><path d="M0 50 L50 0 L100 50 L50 100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
            z-index: 1;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 900px;
            margin: 0 auto;
        }

        .cta-content h2 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            font-weight: 800;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
            line-height: 1.2;
        }

        .cta-content p {
            font-size: 1.3rem;
            margin-bottom: 2.5rem;
        }

        .cta-btn {
            display: inline-flex;
            align-items: center;
            background: var(--white);
            color: var(--primary);
            padding: 18px 40px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 700;
            font-size: 1.2rem;
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .cta-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        }

        .cta-btn i {
            margin-left: 15px;
            transition: var(--transition);
        }

        .cta-btn:hover i {
            transform: translateX(5px);
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
            .service-title {
                font-size: 2.2rem;
            }
            .service-grid {
                gap: 50px;
            }
            .service-image {
                height: 450px;
            }
        }

        @media (max-width: 992px) {
            section {
                padding: 80px 0;
            }
            .service-item {
                padding: 100px 0;
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

            .service-grid {
                grid-template-columns: 1fr;
                gap: 50px;
            }

            .service-item:nth-child(even) .service-grid {
                direction: ltr;
            }

            .service-image {
                order: -1;
                height: 400px;
            }

            .service-features {
                grid-template-columns: 1fr;
            }

            .cta-content h2 {
                font-size: 2.8rem;
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
            .service-title {
                font-size: 2rem;
            }
            .service-benefits h3,
            .target-clients h3 {
                font-size: 1.3rem;
            }
            .service-buttons {
                flex-direction: column;
            }
            .btn {
                width: 100%;
                justify-content: center;
            }
            .cta-content h2 {
                font-size: 2.3rem;
            }
            .cta-content p {
                font-size: 1.1rem;
            }
            .cta-btn {
                padding: 15px 30px;
                font-size: 1.1rem;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }
            .service-item {
                padding: 80px 0;
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
            .service-title {
                font-size: 1.8rem;
            }
            .service-description {
                font-size: 1rem;
            }
            .service-image {
                height: 300px;
            }
            .target-clients ul {
                flex-direction: column;
                gap: 10px;
            }
            .target-clients li {
                width: 100%;
            }
            .cta-content h2 {
                font-size: 2rem;
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

        /* Additional Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInRight {
            from {
                opacity: 0;
                transform: translateX(-40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(40px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 1s ease forwards;
        }

        .animate-fadeInRight {
            animation: fadeInRight 1s ease forwards;
        }

        .animate-fadeInLeft {
            animation: fadeInLeft 1s ease forwards;
        }

        .animate-zoomIn {
            animation: zoomIn 1s ease forwards;
        }

        .animation-delay-100 {
            animation-delay: 0.1s;
        }

        .animation-delay-200 {
            animation-delay: 0.2s;
        }

        .animation-delay-300 {
            animation-delay: 0.3s;
        }

        .animation-delay-400 {
            animation-delay: 0.4s;
        }

        .animation-delay-500 {
            animation-delay: 0.5s;
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
                    <li><a href="Nosotros">Nosotros</a></li>
                    <li><a href="Servicios" class="active">Servicios</a></li>
                    <li><a href="estructura-organizacional">estructura-organizacional</a></li>
                    <li><a href="politicas.html">Políticas</a></li>
                </ul>
                <a href="contacto.html" class="contact-btn">Contáctanos <i class="fas fa-arrow-right"></i></a>
            </nav>
        </div>
    </header>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <div class="page-header-content" data-aos="fade-up">
                <h1>Nuestros Servicios</h1>
                <div class="breadcrumbs">
                    <a href="index.html">Inicio</a>
                    <span class="separator"><i class="fas fa-chevron-right"></i></span>
                    <span class="current">Servicios</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Intro -->
    <section class="services-intro">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2>Soluciones Tecnológicas a la Medida</h2>
                <p>En Grupo COTS ofrecemos una gama completa de servicios de alta calidad diseñados para cubrir las necesidades específicas de cada sector. Nuestras soluciones se caracterizan por su innovación, eficiencia y adaptabilidad a los requerimientos particulares de cada cliente.</p>
            </div>
        </div>
    </section>

    <!-- Service 1: COTS NOM-035 -->
    <section id="cots-nom" class="service-item">
        <div class="container">
            <div class="service-grid">
                <div class="service-content">
                    <div class="service-icon animate-fadeInUp">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h2 class="service-title animate-fadeInUp animation-delay-100">COTS NOM-035</h2>
                    <p class="service-description animate-fadeInUp animation-delay-200">Una aplicación Web que cuenta con un portal para empresas, sucursales y empleados con el objetivo de que estos logren apegarse a la Norma 035-STPS-2018, relacionada con la identificación, análisis y prevención de los factores de riesgo psicosocial en el trabajo.</p>

                    <div class="service-benefits animate-fadeInUp animation-delay-300">
                        <h3><i class="fas fa-check-circle"></i> Beneficios Principales</h3>
                        <ul class="benefits-list">
                            <li><i class="fas fa-check"></i> <span>Facilita el cumplimiento normativo obligatorio para empresas mexicanas</span></li>
                            <li><i class="fas fa-check"></i> <span>Permite la identificación oportuna de factores de riesgo psicosocial</span></li>
                            <li><i class="fas fa-check"></i> <span>Proporciona informes y estadísticas para la toma de decisiones</span></li>
                            <li><i class="fas fa-check"></i> <span>Implementa medidas preventivas y correctivas de manera eficiente</span></li>
                            <li><i class="fas fa-check"></i> <span>Mejora el entorno laboral y el bienestar de los colaboradores</span></li>
                        </ul>
                    </div>

                    <div class="target-clients animate-fadeInUp animation-delay-400">
                        <h3><i class="fas fa-users"></i> Clientes Objetivo</h3>
                        <p>Este servicio está especialmente diseñado para:</p>
                        <ul>
                            <li><i class="fas fa-building"></i> Empresas con más de 15 empleados</li>
                            <li><i class="fas fa-industry"></i> Industrias manufactureras</li>
                            <li><i class="fas fa-shopping-cart"></i> Comercios y servicios</li>
                            <li><i class="fas fa-hospital"></i> Instituciones de salud</li>
                            <li><i class="fas fa-graduation-cap"></i> Instituciones educativas</li>
                        </ul>
                    </div>

                    <div class="service-buttons animate-fadeInUp animation-delay-500">
                        <a href="contacto.html" class="btn btn-primary"><i class="fas fa-headset"></i> Solicitar Demo</a>
                        <a href="#" class="btn btn-outline"><i class="fas fa-info-circle"></i> Más Información</a>
                    </div>
                </div>

                <div class="service-image animate-fadeInRight">
                    <img src="https://images.unsplash.com/photo-1531538606174-0f90ff5dce83?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="COTS NOM-035 Dashboard">
                </div>
            </div>

            <div class="service-features">
                <div class="feature-item animate-zoomIn">
                    <div class="feature-icon">
                        <i class="fas fa-clipboard-check"></i>
                    </div>
                    <h4 class="feature-title">Cuestionarios Digitales</h4>
                    <p class="feature-description">Implementación digital de los cuestionarios requeridos por la NOM-035, con análisis automático de resultados.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-100">
                    <div class="feature-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <h4 class="feature-title">Informes y Estadísticas</h4>
                    <p class="feature-description">Generación de reportes estadísticos que permiten visualizar tendencias y áreas de oportunidad.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-200">
                    <div class="feature-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <h4 class="feature-title">Estructura Organizacional</h4>
                    <p class="feature-description">Gestión de sucursales y departamentos para una evaluación segmentada y precisa.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-300">
                    <div class="feature-icon">
                        <i class="fas fa-tasks"></i>
                    </div>
                    <h4 class="feature-title">Plan de Acción</h4>
                    <p class="feature-description">Herramientas para diseñar e implementar medidas correctivas basadas en los resultados obtenidos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 2: COTS Administrativo Educativo -->
    <section id="cots-educativo" class="service-item">
        <div class="container">
            <div class="service-grid">
                <div class="service-content">
                    <div class="service-icon animate-fadeInUp">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h2 class="service-title animate-fadeInUp animation-delay-100">COTS Administrativo Educativo</h2>
                    <p class="service-description animate-fadeInUp animation-delay-200">Un sistema de cómputo que le permite tener un control administrativo de todo lo que una escuela de cualquier tipo de educación necesita para llevar a cabo sus labores diarias, incluyendo gestión de alumnos, profesores, calificaciones, recursos y comunicación institucional.</p>

                    <div class="service-benefits animate-fadeInUp animation-delay-300">
                        <h3><i class="fas fa-check-circle"></i> Beneficios Principales</h3>
                        <ul class="benefits-list">
                            <li><i class="fas fa-check"></i> <span>Simplifica y optimiza los procesos administrativos</span></li>
                            <li><i class="fas fa-check"></i> <span>Centraliza toda la información académica y administrativa</span></li>
                            <li><i class="fas fa-check"></i> <span>Reduce errores y tiempos en la gestión escolar</span></li>
                            <li><i class="fas fa-check"></i> <span>Mejora la comunicación entre todos los actores educativos</span></li>
                            <li><i class="fas fa-check"></i> <span>Facilita la toma de decisiones estratégicas basadas en datos</span></li>
                        </ul>
                    </div>

                    <div class="target-clients animate-fadeInUp animation-delay-400">
                        <h3><i class="fas fa-users"></i> Clientes Objetivo</h3>
                        <p>Este sistema está especialmente diseñado para:</p>
                        <ul>
                            <li><i class="fas fa-child"></i> Escuelas de educación básica</li>
                            <li><i class="fas fa-user-graduate"></i> Instituciones de educación media</li>
                            <li><i class="fas fa-university"></i> Universidades</li>
                            <li><i class="fas fa-book"></i> Centros de capacitación</li>
                            <li><i class="fas fa-certificate"></i> Escuelas técnicas y especializadas</li>
                        </ul>
                    </div>

                    <div class="service-buttons animate-fadeInUp animation-delay-500">
                        <a href="contacto.html" class="btn btn-primary"><i class="fas fa-headset"></i> Solicitar Demo</a>
                        <a href="#" class="btn btn-outline"><i class="fas fa-info-circle"></i> Más Información</a>
                    </div>
                </div>

                <div class="service-image floating-animation">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="COTS Administrativo Educativo Dashboard">

                </div>
            </div>

            <div class="service-features">
                <div class="feature-item animate-zoomIn">
                    <div class="feature-icon">
                        <i class="fas fa-user-friends"></i>
                    </div>
                    <h4 class="feature-title">Gestión de Estudiantes</h4>
                    <p class="feature-description">Administración completa de expedientes, asistencia, calificaciones y seguimiento personalizado.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-100">
                    <div class="feature-icon">
                        <i class="fas fa-chalkboard-teacher"></i>
                    </div>
                    <h4 class="feature-title">Control Docente</h4>
                    <p class="feature-description">Asignación de materias, horarios, evaluación de desempeño y administración de recursos didácticos.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-200">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h4 class="feature-title">Gestión Financiera</h4>
                    <p class="feature-description">Control de colegiaturas, pagos, becas y generación de reportes financieros detallados.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-300">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h4 class="feature-title">Planificación Académica</h4>
                    <p class="feature-description">Creación y gestión de planes de estudio, calendario escolar y programación de actividades.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Service 3: COTS Clínico -->
    <section id="cots-clinico" class="service-item">
        <div class="container">
            <div class="service-grid">
                <div class="service-content">
                    <div class="service-icon animate-fadeInUp">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <h2 class="service-title animate-fadeInUp animation-delay-100">COTS Clínico</h2>
                    <p class="service-description animate-fadeInUp animation-delay-200">Un software orientado a facilitar una mejor experiencia para los pacientes y los proveedores de salud. Una aplicación Web fácil, segura y eficiente que optimiza la gestión de citas, historiales médicos y seguimiento de tratamientos, mejorando la calidad de atención y la eficiencia operativa de las instituciones de salud.</p>

                    <div class="service-benefits animate-fadeInUp animation-delay-300">
                        <h3><i class="fas fa-check-circle"></i> Beneficios Principales</h3>
                        <ul class="benefits-list">
                            <li><i class="fas fa-check"></i> <span>Optimiza la gestión de citas y reduce tiempos de espera</span></li>
                            <li><i class="fas fa-check"></i> <span>Mantiene historiales clínicos completos y seguros</span></li>
                            <li><i class="fas fa-check"></i> <span>Automatiza procesos administrativos y de facturación</span></li>
                            <li><i class="fas fa-check"></i> <span>Mejora la comunicación entre personal médico y pacientes</span></li>
                            <li><i class="fas fa-check"></i> <span>Garantiza la seguridad y confidencialidad de la información</span></li>
                        </ul>
                    </div>

                    <div class="target-clients animate-fadeInUp animation-delay-400">
                        <h3><i class="fas fa-users"></i> Clientes Objetivo</h3>
                        <p>Esta solución está especialmente diseñada para:</p>
                        <ul>
                            <li><i class="fas fa-clinic-medical"></i> Consultorios médicos</li>
                            <li><i class="fas fa-hospital"></i> Clínicas y hospitales</li>
                            <li><i class="fas fa-tooth"></i> Consultorios dentales</li>
                            <li><i class="fas fa-notes-medical"></i> Laboratorios clínicos</li>
                            <li><i class="fas fa-user-md"></i> Especialistas médicos</li>
                        </ul>
                    </div>

                    <div class="service-buttons animate-fadeInUp animation-delay-500">
                        <a href="contacto.html" class="btn btn-primary"><i class="fas fa-headset"></i> Solicitar Demo</a>
                        <a href="#" class="btn btn-outline"><i class="fas fa-info-circle"></i> Más Información</a>
                    </div>
                </div>

                <div class="service-image animate-fadeInLeft">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="COTS Clínico Dashboard">
                </div>
            </div>

            <div class="service-features">
                <div class="feature-item animate-zoomIn">
                    <div class="feature-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h4 class="feature-title">Gestión de Citas</h4>
                    <p class="feature-description">Sistema inteligente de agendamiento con recordatorios automáticos y optimización de horarios.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-100">
                    <div class="feature-icon">
                        <i class="fas fa-file-medical"></i>
                    </div>
                    <h4 class="feature-title">Historiales Clínicos Digitales</h4>
                    <p class="feature-description">Expedientes electrónicos completos con acceso seguro y trazabilidad de cambios.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-200">
                    <div class="feature-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h4 class="feature-title">Control de Tratamientos</h4>
                    <p class="feature-description">Seguimiento detallado de medicamentos, procedimientos y evolución de pacientes.</p>
                </div>

                <div class="feature-item animate-zoomIn animation-delay-300">
                    <div class="feature-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h4 class="feature-title">Reportes y Estadísticas</h4>
                    <p class="feature-description">Generación automática de informes clínicos y administrativos para la toma de decisiones.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <h2>¿Listo para transformar su organización?</h2>
                <p>Descubra cómo nuestras soluciones tecnológicas pueden optimizar sus procesos y mejorar su eficiencia operativa.</p>
                <a href="contacto.html" class="cta-btn">Solicitar una consulta <i class="fas fa-arrow-right"></i></a>
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

            // Scroll animations (on load)
            animateOnScroll();
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

            // Scroll animations
            animateOnScroll();
        });

        // Scroll animations function
        function animateOnScroll() {
            const elements = document.querySelectorAll('.animate-fadeInUp, .animate-fadeInRight, .animate-fadeInLeft, .animate-zoomIn');

            elements.forEach(element => {
                const elementTop = element.getBoundingClientRect().top;
                const windowHeight = window.innerHeight;

                if (elementTop < windowHeight - 100) {
                    element.style.opacity = '1';
                }
            });
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                if(this.getAttribute('href') !== '#') {
                    e.preventDefault();

                    const targetId = this.getAttribute('href');
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
                }
            });
        });

        // Add hover 3D effect to service images
        const serviceImages = document.querySelectorAll('.service-image');

        serviceImages.forEach(image => {
            image.addEventListener('mousemove', function(e) {
                const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
                const yAxis = (window.innerHeight / 2 - e.pageY) / 25;

                this.style.transform = `perspective(1000px) rotateY(${xAxis}deg) rotateX(${yAxis}deg)`;
            });

            image.addEventListener('mouseenter', function() {
                this.style.transition = 'none';
            });

            image.addEventListener('mouseleave', function() {
                this.style.transition = 'transform 0.5s ease';
                this.style.transform = 'perspective(1000px) rotateY(0deg) rotateX(0deg)';
            });
        });
    </script>
</body>
</html>
