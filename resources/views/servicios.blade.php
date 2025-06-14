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

/*boton*/
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
/**/
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
        <a href="{{ url('es/Servicios') }}">{{ __('messages.spanish') }} <span class="flag-icon flag-icon-es"></span></a>
        <a href="{{ url('en/Servicios') }}">{{ __('messages.english') }} <span class="flag-icon flag-icon-us"></span></a> </div>
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
                <li class="nav-item"><a href="Nosotros" class="nav-link">{{ __('messages.nosotros') }}</a></li>
                <li class="nav-item"><a href="Servicios" class="nav-link active">{{ __('messages.servicios') }}</a></li>
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
            <h1>{{ __('messages.services_title') }}</h1>
        </div>
    </div>
</section>

<!-- Services Intro -->
<section class="services-intro">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <h2>{{ __('messages.services_intro_title') }}</h2>
            <p>{{ __('messages.services_intro_text') }}</p>
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
                <h2 class="service-title animate-fadeInUp animation-delay-100">{{ __('messages.cots_nom035_title') }}</h2>
                <p class="service-description animate-fadeInUp animation-delay-200">{{ __('messages.cots_nom035_description') }}</p>

                <div class="service-benefits animate-fadeInUp animation-delay-300">
                    <h3><i class="fas fa-check-circle"></i> {{ __('messages.main_benefits') }}</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.nom035_benefit_1') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.nom035_benefit_2') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.nom035_benefit_3') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.nom035_benefit_4') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.nom035_benefit_5') }}</span></li>
                    </ul>
                </div>

                <div class="target-clients animate-fadeInUp animation-delay-400">
                    <h3><i class="fas fa-users"></i> {{ __('messages.target_clients') }}</h3>
                    <p>{{ __('messages.nom035_target_text') }}</p>
                    <ul>
                        <li><i class="fas fa-building"></i> {{ __('messages.nom035_client_1') }}</li>
                        <li><i class="fas fa-industry"></i> {{ __('messages.nom035_client_2') }}</li>
                        <li><i class="fas fa-shopping-cart"></i> {{ __('messages.nom035_client_3') }}</li>
                        <li><i class="fas fa-hospital"></i> {{ __('messages.nom035_client_4') }}</li>
                        <li><i class="fas fa-graduation-cap"></i> {{ __('messages.nom035_client_5') }}</li>
                    </ul>
                </div>

                <div class="service-buttons animate-fadeInUp animation-delay-500">
                    <a href="Contactanos" class="btn btn-primary"><i class="fas fa-headset"></i> {{ __('messages.request_demo') }}</a>
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
                <h4 class="feature-title">{{ __('messages.feature_nom_questionnaires') }}</h4>
                <p class="feature-description">{{ __('messages.feature_nom_questionnaires_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-100">
                <div class="feature-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_nom_reports') }}</h4>
                <p class="feature-description">{{ __('messages.feature_nom_reports_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-200">
                <div class="feature-icon">
                    <i class="fas fa-sitemap"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_nom_structure') }}</h4>
                <p class="feature-description">{{ __('messages.feature_nom_structure_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-300">
                <div class="feature-icon">
                    <i class="fas fa-tasks"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_nom_action_plan') }}</h4>
                <p class="feature-description">{{ __('messages.feature_nom_action_plan_desc') }}</p>
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
                <h2 class="service-title animate-fadeInUp animation-delay-100">{{ __('messages.cots_edu_title') }}</h2>
                <p class="service-description animate-fadeInUp animation-delay-200">{{ __('messages.cots_edu_description') }}</p>

                <div class="service-benefits animate-fadeInUp animation-delay-300">
                    <h3><i class="fas fa-check-circle"></i> {{ __('messages.main_benefits') }}</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.edu_benefit_1') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.edu_benefit_2') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.edu_benefit_3') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.edu_benefit_4') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.edu_benefit_5') }}</span></li>
                    </ul>
                </div>

                <div class="target-clients animate-fadeInUp animation-delay-400">
                    <h3><i class="fas fa-users"></i> {{ __('messages.target_clients') }}</h3>
                    <p>{{ __('messages.edu_target_text') }}</p>
                    <ul>
                        <li><i class="fas fa-child"></i> {{ __('messages.edu_client_1') }}</li>
                        <li><i class="fas fa-user-graduate"></i> {{ __('messages.edu_client_2') }}</li>
                        <li><i class="fas fa-university"></i> {{ __('messages.edu_client_3') }}</li>
                        <li><i class="fas fa-book"></i> {{ __('messages.edu_client_4') }}</li>
                        <li><i class="fas fa-certificate"></i> {{ __('messages.edu_client_5') }}</li>
                    </ul>
                </div>

                <div class="service-buttons animate-fadeInUp animation-delay-500">
                    <a href="Contactanos" class="btn btn-primary"><i class="fas fa-headset"></i> {{ __('messages.request_demo') }}</a>
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
                <h4 class="feature-title">{{ __('messages.feature_edu_students') }}</h4>
                <p class="feature-description">{{ __('messages.feature_edu_students_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-100">
                <div class="feature-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_edu_teachers') }}</h4>
                <p class="feature-description">{{ __('messages.feature_edu_teachers_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-200">
                <div class="feature-icon">
                    <i class="fas fa-file-invoice-dollar"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_edu_finance') }}</h4>
                <p class="feature-description">{{ __('messages.feature_edu_finance_desc') }}</p>
            </div>
            <div class="feature-item animate-zoomIn animation-delay-300">
                <div class="feature-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_edu_schedule') }}</h4>
                <p class="feature-description">{{ __('messages.feature_edu_schedule_desc') }}</p>
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
                <h2 class="service-title animate-fadeInUp animation-delay-100">{{ __('messages.cots_clinico_title') }}</h2>
                <p class="service-description animate-fadeInUp animation-delay-200">{{ __('messages.cots_clinico_description') }}</p>

                <div class="service-benefits animate-fadeInUp animation-delay-300">
                    <h3><i class="fas fa-check-circle"></i> {{ __('messages.benefits_title') ?? 'Beneficios Principales' }}</h3>
                    <ul class="benefits-list">
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.clinico_benefit_1') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.clinico_benefit_2') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.clinico_benefit_3') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.clinico_benefit_4') }}</span></li>
                        <li><i class="fas fa-check"></i> <span>{{ __('messages.clinico_benefit_5') }}</span></li>
                    </ul>
                </div>

                <div class="target-clients animate-fadeInUp animation-delay-400">
                    <h3><i class="fas fa-users"></i> {{ __('messages.target_clients_title') ?? 'Clientes Objetivo' }}</h3>
                    <p>{{ __('messages.clinico_target_text') }}</p>
                    <ul>
                        <li><i class="fas fa-clinic-medical"></i> {{ __('messages.clinico_client_1') }}</li>
                        <li><i class="fas fa-hospital"></i> {{ __('messages.clinico_client_2') }}</li>
                        <li><i class="fas fa-tooth"></i> {{ __('messages.clinico_client_3') }}</li>
                        <li><i class="fas fa-notes-medical"></i> {{ __('messages.clinico_client_4') }}</li>
                        <li><i class="fas fa-user-md"></i> {{ __('messages.clinico_client_5') }}</li>
                    </ul>
                </div>

                <div class="service-buttons animate-fadeInUp animation-delay-500">
                    <a href="Contacto" class="btn btn-primary"><i class="fas fa-headset"></i> {{ __('messages.cta_cots_clinico_button') }}</a>
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
                <h4 class="feature-title">{{ __('messages.feature_clinico_appointments') }}</h4>
                <p class="feature-description">{{ __('messages.feature_clinico_appointments_desc') }}</p>
            </div>

            <div class="feature-item animate-zoomIn animation-delay-100">
                <div class="feature-icon">
                    <i class="fas fa-file-medical"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_clinico_records') }}</h4>
                <p class="feature-description">{{ __('messages.feature_clinico_records_desc') }}</p>
            </div>

            <div class="feature-item animate-zoomIn animation-delay-200">
                <div class="feature-icon">
                    <i class="fas fa-pills"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_clinico_treatments') }}</h4>
                <p class="feature-description">{{ __('messages.feature_clinico_treatments_desc') }}</p>
            </div>

            <div class="feature-item animate-zoomIn animation-delay-300">
                <div class="feature-icon">
                    <i class="fas fa-chart-pie"></i>
                </div>
                <h4 class="feature-title">{{ __('messages.feature_clinico_reports') }}</h4>
                <p class="feature-description">{{ __('messages.feature_clinico_reports_desc') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-content" data-aos="zoom-in">
            <h2>{{ __('messages.cta_cots_clinico_title') }}</h2>
            <p>{{ __('messages.cta_cots_clinico_text') }}</p>
            <a href="Contactanos" class="cta-btn">{{ __('messages.cta_cots_clinico_button') }} <i class="fas fa-arrow-right"></i></a>
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
