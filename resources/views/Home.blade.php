
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo COTS | Innovación Tecnológica</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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
            font-size: 4rem;
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

        @keyframes floatingY {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        @keyframes floatingX {
            0%, 100% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-10px);
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

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 1;
            }
            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
            100% {
                transform: scale(1);
                opacity: 1;
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

        .float-y {
            animation: floatingY 4s ease-in-out infinite;
        }

        .float-x {
            animation: floatingX 4s ease-in-out infinite;
        }

        .pulse {
            animation: pulse 2s infinite;
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
            background-color: transparent;
            padding: 20px 0;
        }

        .header.sticky {
            background-color: var(--white);
            box-shadow: var(--shadow);
            padding: 12px 0;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: var(--white);
            transition: var(--transition);
        }

        .sticky .logo {
            color: var(--primary);
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
            color: var(--white);
            font-weight: 500;
            padding: 10px 5px;
            position: relative;
        }

        .sticky .nav-link {
            color: var(--text-dark);
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

        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }

        .nav-link:hover,
        .nav-link.active {
            color: var(--primary-light);
        }

        .sticky .nav-link:hover,
        .sticky .nav-link.active {
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
            color: var(--white);
            cursor: pointer;
            z-index: 1001;
        }

        .sticky .menu-toggle {
            color: var(--primary);
        }

        /* Hero Section - Advanced Slider */
        .hero {
            position: relative;
            height: 100vh;
            background-color: var(--darker);
            overflow: hidden;
        }

        .hero-slider {
            width: 100%;
            height: 100%;
            position: relative;
        }

        .hero-slide {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            visibility: hidden;
            transition: opacity 1s ease, visibility 1s ease;
        }

        .hero-slide.active {
            opacity: 1;
            visibility: visible;
            z-index: 1;
        }

        .hero-image {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 8s ease;
        }

        .hero-slide.active .hero-image {
            transform: scale(1.1);
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: var(--gradient-overlay);
            z-index: 1;
        }

        .hero-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="rgba(255,255,255,0.03)" width="50" height="50" x="0" y="0"/><rect fill="rgba(255,255,255,0.03)" width="50" height="50" x="50" y="50"/></svg>');
            opacity: 0.5;
            z-index: 1;
        }

        .hero-content {
            position: relative;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
        }

        .hero-text {
            max-width: 800px;
            color: var(--white);
            text-align: center;
        }

        .hero-title {
            font-size: 4.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            color: var(--white);
            text-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .hero-slide.active .hero-title {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-subtitle {
            font-size: 1.5rem;
            margin-bottom: 2.5rem;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease 0.3s, transform 0.8s ease 0.3s;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-slide.active .hero-subtitle {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-btn-group {
            display: flex;
            gap: 20px;
            justify-content: center;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease 0.5s, transform 0.8s ease 0.5s;
        }

        .hero-slide.active .hero-btn-group {
            opacity: 1;
            transform: translateY(0);
        }

        .hero-btn {
            padding: 15px 35px;
            border-radius: 50px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
            font-size: 1rem;
            transition: var(--transition);
            min-width: 200px;
            justify-content: center;
        }

        .btn-primary {
            background: var(--white);
            color: var(--primary);
            box-shadow: var(--shadow-sharp);
        }

        .btn-primary:hover {
            background: var(--light);
            transform: translateY(-3px);
            box-shadow: var(--shadow-large);
        }

        .btn-outline {
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-outline:hover {
            background: var(--white);
            color: var(--primary);
            transform: translateY(-3px);
            box-shadow: var(--shadow-large);
        }

        /* Advanced Slider Controls */
        .slider-controls {
            position: absolute;
            width: 100%;
            bottom: 50px;
            left: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
            z-index: 10;
        }

        .slider-arrow {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(5px);
            color: var(--white);
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .slider-arrow:hover {
            background: rgba(255, 255, 255, 0.4);
            transform: translateY(-3px);
        }

        .slider-dots {
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.5);
            cursor: pointer;
            transition: var(--transition);
        }

        .slider-dot.active {
            background: var(--white);
            transform: scale(1.3);
        }

        .slider-progress-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: rgba(255, 255, 255, 0.2);
            z-index: 15;
        }

        .slider-progress {
            height: 100%;
            background: var(--primary);
            width: 0%;
            transition: width 0.1s linear;
        }

        .scroll-down {
            position: absolute;
            bottom: 120px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: var(--white);
            font-size: 0.9rem;
            animation: floatingY 2s ease-in-out infinite;
            opacity: 0.8;
            transition: var(--transition);
        }

        .scroll-down:hover {
            opacity: 1;
        }

        .scroll-down i {
            font-size: 1.8rem;
            margin-top: 8px;
        }

        /* About Section */
        .about {
            background-color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            top: -150px;
            right: -150px;
            width: 400px;
            height: 400px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .about::after {
            content: '';
            position: absolute;
            bottom: -100px;
            left: -100px;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 60px;
            position: relative;
        }

        .section-title {
            font-size: 2.8rem;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
            color: var(--dark);
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -12px;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-primary);
            border-radius: var(--border-radius-xs);
        }

        .section-subtitle {
            color: var(--text-light);
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .about-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 60px;
            align-items: center;
        }

        .about-text h3 {
            font-size: 2.2rem;
            margin-bottom: 25px;
            color: var(--dark);
        }

        .about-text p {
            margin-bottom: 20px;
            font-size: 1.05rem;
            color: var(--text-light);
        }

        .about-features {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
            margin-top: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .feature-icon {
            width: 45px;
            height: 45px;
            border-radius: 10px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 18px;
            flex-shrink: 0;
            box-shadow: var(--shadow);
        }

        .feature-text h4 {
            font-size: 1.1rem;
            margin-bottom: 5px;
            color: var(--dark);
        }

        .feature-text p {
            font-size: 0.9rem;
            color: var(--text-light);
            margin-bottom: 0;
        }

        .about-image {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow-large);
        }

        .about-img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: var(--border-radius);
            transition: var(--transition);
        }

        .about-image::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(26, 158, 176, 0.2), transparent);
            border-radius: var(--border-radius);
        }

        /* Services Section */
        .services {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .services::before {
            content: '';
            position: absolute;
            top: -200px;
            left: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .service-card {
            background: var(--white);
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-large);
        }

        .service-header {
            padding: 25px 25px 0;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            border-radius: 15px;
            background: var(--gradient-primary);
            background-size: 200% 200%;
            animation: gradientBg 5s ease infinite;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 28px;
            margin-bottom: 20px;
            box-shadow: var(--shadow);
        }

        .service-title {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .service-body {
            padding: 0 25px 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .service-text {
            margin-bottom: 25px;
            color: var(--text-light);
            flex-grow: 1;
        }

        .service-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            font-weight: 600;
            font-size: 0.95rem;
            border-bottom: 2px solid transparent;
            align-self: flex-start;
            transition: var(--transition);
            padding-bottom: 3px;
            margin-top: auto;
        }

        .service-link:hover {
            color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .service-link i {
            transition: var(--transition);
        }

        .service-link:hover i {
            transform: translateX(5px);
        }

        /* Mission Vision Section */
        .mission-vision {
            background-color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .mission-vision::after {
            content: '';
            position: absolute;
            bottom: -200px;
            right: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .mission-vision-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .mv-card {
            position: relative;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            padding: 40px;
            color: var(--white);
            height: 100%;
            display: flex;
            flex-direction: column;
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }

        .mission-card {
            background-image: url('https://images.unsplash.com/photo-1533750349088-cd871a92f312?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        }

        .vision-card {
            background-image: url('https://images.unsplash.com/photo-1507537297725-24a1c029d3ca?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
        }

        .mv-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(26, 158, 176, 0.9), rgba(106, 125, 179, 0.9));
            z-index: 1;
        }

        .mv-content {
            position: relative;
            z-index: 2;
        }

        .mv-title {
            font-size: 2rem;
            margin-bottom: 25px;
            color: var(--white);
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .mv-title i {
            font-size: 2rem;
        }

        .mv-text {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 30px;
            font-size: 1.05rem;
        }

        .mv-link {
            align-self: flex-start;
            color: var(--white);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border-bottom: 2px solid transparent;
            transition: var(--transition);
            padding-bottom: 3px;
            margin-top: auto;
        }

        .mv-link:hover {
            border-color: var(--white);
        }

        .mv-link i {
            transition: var(--transition);
        }

        .mv-link:hover i {
            transform: translateX(5px);
        }

        /* Access Platform Section */
        .platforms {
            background-color: var(--light);
            position: relative;
            overflow: hidden;
        }

        .platforms::before {
            content: '';
            position: absolute;
            top: -200px;
            right: -200px;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: var(--gradient-primary);
            opacity: 0.05;
        }

        .platforms-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .platform-card {
            background-color: var(--white);
            border-radius: var(--border-radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            transition: var(--transition);
            display: flex;
            height: 100%;
        }

        .platform-card:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-large);
        }

        .platform-icon {
            width: 180px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 60px;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .platform-icon::before {
            content: '';
            position: absolute;
            top: -20px;
            left: -20px;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
        }

        .platform-icon::after {
            content: '';
            position: absolute;
            bottom: -40px;
            right: -40px;
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.15);
        }

        .platform-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .platform-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        .platform-description {
            margin-bottom: 20px;
            color: var(--text-light);
            flex-grow: 1;
        }

        .platform-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--gradient-primary);
            color: var(--white);
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: var(--transition);
            box-shadow: var(--shadow);
            margin-top: auto;
            align-self: flex-start;
        }

        .platform-btn:hover {
            box-shadow: var(--shadow-large);
            transform: translateY(-3px);
        }

        /* CTA Section */
        .cta {
            background: var(--gradient-primary);
            background-size: 200% 200%;
            animation: gradientBg 10s ease infinite;
            color: var(--white);
            text-align: center;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }

        .cta::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('data:image/svg+xml,<svg width="52" height="26" viewBox="0 0 52 26" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="%23fff" fill-opacity="0.1"><path d="M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z" /></g></g></svg>');
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: var(--white);
        }

        .cta-text {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: rgba(255, 255, 255, 0.9);
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .cta-btn {
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1.1rem;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: var(--transition);
        }

        .btn-white {
            background: var(--white);
            color: var(--primary);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-white:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
        }

        .btn-transparent {
            border: 2px solid var(--white);
            color: var(--white);
        }

        .btn-transparent:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-5px);
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
        @media (max-width: 1200px) {
            h1, .hero-title {
                font-size: 3.8rem;
            }

            h2, .section-title, .cta-title {
                font-size: 2.5rem;
            }

            .platform-icon {
                width: 140px;
                font-size: 50px;
            }
        }

        @media (max-width: 992px) {
            section {
                padding: 80px 0;
            }

            h1, .hero-title {
                font-size: 3.2rem;
            }

            .hero-subtitle {
                font-size: 1.3rem;
            }

            h2, .section-title {
                font-size: 2.2rem;
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
                color: var(--text-dark);
                width: 100%;
                display: block;
            }

            .header-btn {
                margin: 20px 0 0;
                width: 100%;
                text-align: center;
                justify-content: center;
            }

            .about-grid,
            .mission-vision-grid,
            .platforms-grid {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .about-features {
                grid-template-columns: 1fr 1fr;
            }

            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 40px;
            }

            .platform-card {
                flex-direction: column;
            }

            .platform-icon {
                width: 100%;
                height: 150px;
            }

            .slider-controls {
                gap: 30px;
            }
        }

        @media (max-width: 768px) {
            h1, .hero-title {
                font-size: 2.5rem;
            }

            h2, .section-title, .cta-title {
                font-size: 2rem;
            }

            .hero-subtitle, .cta-text {
                font-size: 1.1rem;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .cta-buttons {
                flex-direction: column;
                gap: 15px;
                max-width: 300px;
                margin-left: auto;
                margin-right: auto;
            }

            .cta-btn {
                width: 100%;
                justify-content: center;
            }

            .hero-btn-group {
                flex-direction: column;
                max-width: 250px;
                margin-left: auto;
                margin-right: auto;
                gap: 15px;
            }

            .hero-btn {
                width: 100%;
                text-align: center;
                justify-content: center;
            }

            .about-features {
                grid-template-columns: 1fr;
            }

            .slider-controls {
                gap: 20px;
                bottom: 30px;
            }

            .slider-arrow {
                width: 40px;
                height: 40px;
                font-size: 1rem;
            }

            .footer-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            section {
                padding: 60px 0;
            }

            h1, .hero-title {
                font-size: 2.2rem;
            }

            h2, .section-title {
                font-size: 1.8rem;
            }

            .hero-subtitle {
                font-size: 1rem;
            }

            .hero-btn, .btn {
                padding: 12px 25px;
                font-size: 0.95rem;
            }

            .scroll-down {
                bottom: 100px;
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
                    <li class="nav-item"><a href="Politicas-de-seguridad" class="nav-link">Políticas</a></li>
                </ul>
                <a href="Contactanos" class="header-btn">Contáctanos <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </header>


    <section class="hero" id="hero">
        <div class="hero-slider" id="heroSlider">
            <!-- Slide 1 -->
            <div class="hero-slide active">
                <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=2070&q=80" alt="Innovación Tecnológica" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-pattern"></div>
                <div class="container hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">Transformamos el futuro<br>con tecnología</h1>
                        <p style="color: #f8f9faa2" class="hero-subtitle">Desarrollamos sistemas y aplicaciones web con la más alta tecnología para impulsar la eficiencia de su empresa.</p>
                        <div class="hero-btn-group">
                            <a href="Servicios" class="hero-btn btn-primary"><i class="fas fa-laptop-code"></i> Nuestros Servicios</a>
                            <a href="Contactanos" class="hero-btn btn-outline"><i class="fas fa-headset"></i> Solicitar Información</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?ixlib=rb-1.2.1&auto=format&fit=crop&w=2070&q=80" alt="Soluciones Personalizadas" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-pattern"></div>
                <div class="container hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">Soluciones tecnológicas<br>a su medida</h1>
                        <p style="color: #f8f9faa2" class="hero-subtitle">Creamos sistemas personalizados que se adaptan perfectamente a las necesidades específicas de su negocio.</p>
                        <div class="hero-btn-group">
                            <a href="Nosotros" class="hero-btn btn-primary"><i class="fas fa-users"></i> Conózcanos</a>
                            <a href="Contactanos" class="hero-btn btn-outline"><i class="fas fa-paper-plane"></i> Contáctenos</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide">
                <img src="https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-1.2.1&auto=format&fit=crop&w=2070&q=80" alt="Equipo Profesional" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-pattern"></div>
                <div class="container hero-content">
                    <div class="hero-text">
                        <h1 class="hero-title">Innovando desde 2016<br>para su crecimiento</h1>
                        <p style="color: #f8f9faa2" class="hero-subtitle">Contribuimos al desarrollo tecnológico con soluciones innovadoras que potencian el crecimiento empresarial.</p>
                        <div class="hero-btn-group">
                            <a href="Servicios#cots-nom" class="hero-btn btn-primary"><i class="fas fa-shield-alt"></i> COTS NOM-035</a>
                            <a href="Servicios#cots-clinico" class="hero-btn btn-outline"><i class="fas fa-heartbeat"></i> COTS Clínico</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slider Progress Bar -->
        <div class="slider-progress-container">
            <div class="slider-progress" id="sliderProgress"></div>
        </div>

        <!-- Advanced Slider Controls -->
        <div class="slider-controls">
            <div class="slider-arrow" id="sliderPrev">
                <i class="fas fa-arrow-left"></i>
            </div>
            <div class="slider-dots" id="sliderDots">
                <span class="slider-dot active" data-slide="0"></span>
                <span class="slider-dot" data-slide="1"></span>
                <span class="slider-dot" data-slide="2"></span>
            </div>
            <div class="slider-arrow" id="sliderNext">
                <i class="fas fa-arrow-right"></i>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title fade-in-up">Grupo COTS</h2>
                <p class="section-subtitle fade-in-up delay-200">Innovación tecnológica al servicio de empresas y organizaciones</p>
            </div>

            <div class="about-grid">
                <div class="about-text fade-in-left">
                    <h3>Desarrollamos soluciones tecnológicas innovadoras desde 2016</h3>
                    <p>Somos una empresa que inició en el año 2016, con planeación de sistemas en materia informática y de servicios profesionales para mejorar, eficientizar y conocer estadísticamente la información en sector público y sector privado en un área específica, que pueda coadyubar en tomas de decisiones a los involucrados.</p>
                    <p>En Grupo COTS nos dedicamos a crear tecnología de vanguardia que transforma operaciones y mejora la productividad. Nuestros sistemas están diseñados para facilitar la vida de usuarios y ayudar a organizaciones a convertirse en mejores entidades económicas y de servicios.</p>

                    <div class="about-features">
                        <div class="feature-item fade-in-up delay-300">
                            <div class="feature-icon">
                                <i class="fas fa-rocket"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Innovación</h4>
                                <p>Tecnología de vanguardia para soluciones efectivas</p>
                            </div>
                        </div>

                        <div class="feature-item fade-in-up delay-400">
                            <div class="feature-icon">
                                <i class="fas fa-cogs"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Eficiencia</h4>
                                <p>Optimización de procesos y recursos</p>
                            </div>
                        </div>

                        <div class="feature-item fade-in-up delay-500">
                            <div class="feature-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Resultados</h4>
                                <p>Soluciones orientadas a objetivos</p>
                            </div>
                        </div>

                        <div class="feature-item fade-in-up delay-600">
                            <div class="feature-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="feature-text">
                                <h4>Compromiso</h4>
                                <p>Aliados en su crecimiento digital</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="about-image float-y fade-in-right">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Equipo Grupo COTS" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title fade-in-up">Nuestros Servicios</h2>
                <p class="section-subtitle fade-in-up delay-200">Soluciones tecnológicas para impulsar su empresa</p>
            </div>

            <div class="services-grid">
                <!-- Service Card 1 -->
                <div class="service-card scale-up delay-300">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="service-title">COTS NOM-035</h3>
                    </div>
                    <div class="service-body">
                        <p class="service-text">Aplicación web con portal para empresas y empleados que facilita el cumplimiento de la Norma 035-STPS-2018, relacionada con los factores de riesgo psicosocial.</p>
                        <a href="Servicios#cots-nom" class="service-link">Más información <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="service-card scale-up delay-400">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h3 class="service-title">COTS Administrativo Educativo</h3>
                    </div>
                    <div class="service-body">
                        <p class="service-text">Sistema de control administrativo integral para instituciones educativas de todos los niveles, optimizando gestión de alumnos, profesores y recursos.</p>
                        <a href="Servicios#cots-educativo" class="service-link">Más información <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="service-card scale-up delay-500">
                    <div class="service-header">
                        <div class="service-icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <h3 class="service-title">COTS Clínico</h3>
                    </div>
                    <div class="service-body">
                        <p class="service-text">Software para una mejor experiencia de pacientes y proveedores de salud, con gestión eficiente de citas, historiales médicos y seguimiento de tratamientos.</p>
                        <a href="Servicios#cots-clinico" class="service-link">Más información <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision" id="mission-vision">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title fade-in-up">Nuestra Filosofía</h2>
                <p class="section-subtitle fade-in-up delay-200">Conoce los principios que guían nuestro trabajo diario</p>
            </div>

            <div class="mission-vision-grid">
                <!-- Mission -->
                <div class="mv-card mission-card fade-in-left">
                    <div class="mv-content">
                        <h3 class="mv-title"><i class="fas fa-bullseye"></i> Misión</h3>
                        <p class="mv-text">Ser la mejor empresa en desarrollo y soporte tecnológico para la población en general, así como para las entidades públicas y privadas; para desarrollar, investigar y aplicar nuestros conocimientos en las distintas actividades en México y el extranjero, en sistemas informáticos, aplicaciones web y la prestación de servicios relacionados.</p>
                        <a href="Nosotros" class="mv-link">Conocer más <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>

                <!-- Vision -->
                <div class="mv-card vision-card fade-in-right">
                    <div class="mv-content">
                        <h3 class="mv-title"><i class="fas fa-eye"></i> Visión</h3>
                        <p class="mv-text">Desarrollar con la más alta e innovadora tecnología, sistemas informáticos y aplicaciones web, para contribuir al desarrollo tecnológico en México y en el extranjero, facilitando a la población en general la vida, al sector privado y público la eficiencia en sus actividades para ser mejores entidades económicas y de servicios.</p>
                        <a href="Nosotros" class="mv-link">Conocer más <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content fade-in-up">
                <h2 class="cta-title">¿Listo para transformar su empresa?</h2>
                <p class="cta-text">Descubra cómo nuestras soluciones tecnológicas pueden optimizar sus operaciones y potenciar su crecimiento.</p>
                <div class="cta-buttons">
                    <a href="Servicios" class="cta-btn btn-white">Nuestros Servicios <i class="fas fa-arrow-right"></i></a>
                    <a href="Contactanos" class="cta-btn btn-transparent">Contáctenos <i class="fas fa-headset"></i></a>
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
                    <p class="footer-description">Empresa líder en desarrollo de sistemas informáticos y aplicaciones web con la más alta e innovadora tecnología para contribuir al desarrollo tecnológico en México y el extranjero.</p>
                    <div class="footer-contact">
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Arizona,Pima</p>
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

        // Header on scroll effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('header');
            if (window.scrollY > 100) {
                header.classList.add('sticky');
            } else {
                header.classList.remove('sticky');
            }
        });

        // Advanced Hero Slider
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.slider-dot');
        const sliderPrev = document.getElementById('sliderPrev');
        const sliderNext = document.getElementById('sliderNext');
        const sliderProgress = document.getElementById('sliderProgress');
        let currentSlide = 0;
        let slideInterval;
        const slideDuration = 6000; // 6 seconds per slide

        // Go to specific slide
        function goToSlide(index) {
            // Hide current slide
            slides[currentSlide].classList.remove('active');
            dots[currentSlide].classList.remove('active');

            // Show new slide
            currentSlide = index;
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');

            // Reset progress bar
            resetProgressBar();
        }

        // Next slide
        function nextSlide() {
            let nextIndex = currentSlide + 1;
            if (nextIndex >= slides.length) {
                nextIndex = 0;
            }
            goToSlide(nextIndex);
        }

        // Previous slide
        function prevSlide() {
            let prevIndex = currentSlide - 1;
            if (prevIndex < 0) {
                prevIndex = slides.length - 1;
            }
            goToSlide(prevIndex);
        }

        // Start slider
        function startSlider() {
            resetProgressBar();
            slideInterval = setInterval(() => {
                nextSlide();
            }, slideDuration);
        }

        // Reset progress bar
        function resetProgressBar() {
            sliderProgress.style.width = '0%';

            // Clear any existing interval for the progress bar
            if (window.progressBarInterval) {
                clearInterval(window.progressBarInterval);
            }

            // Start progress bar animation
            const startTime = Date.now();
            const endTime = startTime + slideDuration;

            window.progressBarInterval = setInterval(() => {
                const currentTime = Date.now();
                const elapsedTime = currentTime - startTime;
                const progress = Math.min(elapsedTime / slideDuration * 100, 100);
                sliderProgress.style.width = `${progress}%`;

                if (currentTime >= endTime) {
                    clearInterval(window.progressBarInterval);
                }
            }, 100);
        }

        // Event listeners for slider controls
        sliderNext.addEventListener('click', () => {
            clearInterval(slideInterval);
            nextSlide();
            startSlider();
        });

        sliderPrev.addEventListener('click', () => {
            clearInterval(slideInterval);
            prevSlide();
            startSlider();
        });

        // Dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                if (index !== currentSlide) {
                    clearInterval(slideInterval);
                    goToSlide(index);
                    startSlider();
                }
            });
        });

        // Start the slider on page load
        startSlider();

        // Pause slider on hover
        const heroSlider = document.getElementById('heroSlider');
        heroSlider.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });

        heroSlider.addEventListener('mouseleave', () => {
            startSlider();
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
                }
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
