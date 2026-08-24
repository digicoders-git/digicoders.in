<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $city_name ?> | Development Services - DigiCoders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description" content="Professional IT training courses in <?= $city_name ?> by DigiCoders. Learn Web Development, Software Development, Mobile App Development and more.">
    
    <?php include('include/headerlinks.php') ?>
    
    <style>
       /* Main Container */
        .city-courses-section {

            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            min-height: 100vh;
        }

        .city-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* City Header */
        .city-header {
            text-align: center;
            margin-bottom: 50px;
            padding-bottom: 20px;
            border-bottom: 3px solid #0d6efd;
            position: relative;
        }

        .city-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .city-header h1 span {
            color: #0d6efd;
        }

        .city-breadcrumb {
            font-size: 1rem;
            color: #666;
            margin-top: 10px;
        }

        .city-breadcrumb a {
            color: #0d6efd;
            text-decoration: none;
        }

        .city-breadcrumb a:hover {
            text-decoration: underline;
        }

        /* Courses Grid */
        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .course-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            border: 1px solid rgba(13, 110, 253, 0.1);
        }

        .course-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
            border-color: #0d6efd;
        }

        .course-icon {
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
        }

        .course-content {
            padding: 25px;
        }

        .course-content h3 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 10px;
            line-height: 1.4;
        }

        .course-content p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .course-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .course-duration {
            color: #666;
            font-size: 0.9rem;
        }

        .course-duration i {
            color: #0d6efd;
            margin-right: 5px;
        }

        .course-link {
            color: #0d6efd;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .course-link:hover {
            color: #6610f2;
            gap: 8px;
        }

        /* Quick Info Section */
        .city-info-section {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .info-card {
            text-align: center;
            padding: 20px;
        }

        .info-card i {
            font-size: 2.5rem;
            color: #0d6efd;
            margin-bottom: 15px;
        }

        .info-card h4 {
            font-size: 1.2rem;
            font-weight: 600;
            color: #1a1a2e;
            margin-bottom: 10px;
        }

        .info-card p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        /* CTA Section */
        .cta-section {
            text-align: center;
            margin-top: 60px;
            padding: 40px;
            margin: 30px auto;
            max-width: 1200px;
            background: linear-gradient(135deg, #a4a6a9ff, #6610f2);
            border-radius: 15px;
            color: white;
        }

        .cta-section h2 {
            font-size: 2rem;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .cta-section p {
            font-size: 1.1rem;
            margin-bottom: 25px;
            opacity: 0.9;
            text-align: center;
        }

        .cta-button {
            display: inline-block;
            padding: 12px 35px;
            background: white;
            color: #0d6efd;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
            background: #f8f9fa;
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .city-header h1 {
                font-size: 2.2rem;
            }

            .courses-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 20px;
            }
        }

        @media (max-width: 768px) {
            .city-courses-section {
                padding: 40px 15px;
            }

            .city-header h1 {
                font-size: 1.8rem;
            }

            .courses-grid {
                grid-template-columns: 1fr;
                max-width: 500px;
                margin: 0 auto 40px;
            }

            .info-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .cta-section {
                padding: 30px 20px;
            }

            .cta-section h2 {
                font-size: 1.6rem;
            }

            .cta-section {
                padding: 30px 15px;
                margin: 20px 10px;
            }
        }

        @media (max-width: 576px) {
            .city-header h1 {
                font-size: 1.5rem;
            }

            .course-content {
                padding: 20px;
            }

            .course-content h3 {
                font-size: 1.15rem;
            }

            .city-header h1 {
                font-size: 1.4rem;
            }

            .cta-button {
                padding: 10px 25px;
                font-size: 0.9rem;
            }
        }

        .banner {
            position: relative;
            width: 100%;
            height: 380px;
            background: url('<?= base_url('') ?>public/assets/images/other/team-2025.jpg') center center / cover no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;

        }

        /* Dark overlay */
        .banner-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
            z-index: 1;
        }

        /* Content */
        .banner-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: #fff;
        }

        .banner-content h1 {
            font-size: 36px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 20px;
            color: white;
        }

        /* Buttons */
        .banner-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 5px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 15px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        /* Request Button */
        .btn-primary {
            background: #0d6efd;
            color: #fff;

        }

        .btn-primary:hover {
            background: #0b5ed7;
        }

        /* WhatsApp */
        .btn-whatsapp {
            background: #25D366;
            color: #fff;
            width: 44px;
            height: 44px;
            font-size: 18px;
        }

        /* Call */
        .btn-call {
            background: #dc3545;
            color: #fff;
            width: 44px;
            height: 44px;
            font-size: 18px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .banner {
                height: 300px;
            }

            .banner-content h1 {
                font-size: 26px;
            }
        }

        /* Hero Section - Image jaisa */
        .hero-section {
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.03) 0%, rgba(102, 16, 242, 0.03) 100%);
            padding: 60px 20px;
            position: relative;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }

        .iso-badge {
            display: inline-block;
            background: #198754;
            color: white;
            padding: 8px 20px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 30px;
        }

        .hero-title {
            font-size: 36px;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 20px;
            line-height: 1.3;
        }

        .hero-description {
            font-size: 18px;
            color: #666;
            max-width: 900px;
            margin: 0 auto 40px;
            line-height: 1.6;
            text-align: justify;
        }

        .vision-statement {
            background: var(--dark);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin: 40px auto;
            max-width: 600px;
            font-size: 20px;
            font-weight: 600;
            text-align: center;
        }


        /* Services Section Styles */
        .services-section {
            padding: 40px 20px;
            background: #fff;
            margin: 30px 0;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .social-media-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 20px;
            margin: 30px 0;
            border-radius: 10px;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 30px;
            color: #1a1a2e;
            padding-bottom: 10px;
            border-bottom: 2px solid #0d6efd;
        }

        .social-media-section .section-title {
            color: white;
            border-bottom-color: rgba(255, 255, 255, 0.3);
        }

        /* Shared Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .service-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #0d6efd;
            transition: all 0.3s ease;
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .social-media-section .service-item {
            background: rgba(255, 255, 255, 0.1);
            border-left-color: white;
        }

        .service-item:hover {
            background: #e9ecef;
            transform: translateX(5px);
        }

        .social-media-section .service-item:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .service-icon {
            font-size: 1.5rem;
            color: #0d6efd;
            padding: 10px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .social-media-section .service-icon {
            color: #667eea;
            background: white;
        }

        .service-content {
            flex: 1;
        }

        .service-content h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 5px;
            color: #1a1a2e;
        }

        .social-media-section .service-content h3 {
            color: white;
        }

        .service-content p {
            font-size: 0.9rem;
            color: #666;
            margin: 0;
        }

        .social-media-section .service-content p {
            color: rgba(255, 255, 255, 0.9);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 10px;
            }

            .service-item {
                flex-direction: column;
                text-align: center;
                padding: 15px 10px;
            }

            .service-icon {
                margin: 0 auto;
            }
        }

        .services-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Main Heading */
        .main-heading {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--dark);
            text-align: center;
            margin-bottom: 40px;
            padding-bottom: 15px;
            border-bottom: 3px solid var(--primary);
            position: relative;
        }

        .main-heading::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: var(--secondary);
        }

        /* Service Section */
        .service-section {
            margin-bottom: 60px;
            padding: 30px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            border-left: 5px solid var(--primary);
        }

        @media (max-width: 768px) {
            .service-section {
                padding: 20px 15px;
                margin-bottom: 30px;
            }
        }

        .service-number {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary);
            display: inline-block;
            margin-right: 15px;
            line-height: 1;
        }

        .service-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }

        .service-title-text {
            flex: 1;
            line-height: 1.3;
        }

        .warning-text {
            color: #dc3545;
            font-weight: 600;
            display: inline-block;
            margin-left: 10px;
            font-size: 1.1rem;
        }

        .service-description {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.8;
            margin-bottom: 25px;
            text-align: justify;
        }

        .highlight-text {
            font-weight: 700;
            color: var(--primary);
            background: rgba(13, 110, 253, 0.1);
            padding: 2px 5px;
            border-radius: 3px;
        }

        /* Ecommerce Grid - Image 1 jaisa */
        .ecommerce-intro {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark);
            margin: 25px 0 15px;
            padding-left: 10px;
            border-left: 3px solid var(--secondary);
        }

        .ecommerce-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }

        .ecommerce-item {
            background: var(--light);
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .ecommerce-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            border-color: var(--primary);
        }

        .ecommerce-icon {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .ecommerce-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
        }

        .ecommerce-note {
            font-size: 1.1rem;
            color: #444;
            line-height: 1.7;
            margin-top: 25px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        /* Mobile Apps Section - Image 2 jaisa */
        .mobile-intro {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark);
            margin: 25px 0 15px;
        }

        .mobile-apps-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 15px;
            margin: 25px 0;
        }

        .mobile-app-item {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e9ecef;
        }

        .mobile-app-item:hover {
            background: #e9ecef;
            transform: translateY(-3px);
        }

        .mobile-app-icon {
            font-size: 1.8rem;
            color: var(--secondary);
            margin-bottom: 8px;
        }

        .mobile-app-item h4 {
            font-size: 1rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
        }

        /* Digital Marketing Section - Image 3 jaisa */
        .digital-intro {
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--dark);
            margin: 25px 0 15px;
        }

        .digital-services {
            font-size: 1.1rem;
            color: #444;
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .sectors-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }

        .sector-item {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #dee2e6;
        }

        .sector-item:hover {
            background: #e9ecef;
            transform: translateY(-3px);
        }

        .sector-icon {
            font-size: 1.8rem;
            color: #28a745;
            margin-bottom: 10px;
        }

        .sector-item h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--dark);
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 1200px) {

            .ecommerce-grid,
            .sectors-grid {
                grid-template-columns: repeat(3, 1fr);
            }

            .mobile-apps-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        @media (max-width: 992px) {
            .main-heading {
                font-size: 2.2rem;
            }

            .service-title {
                font-size: 1.6rem;
                flex-direction: column;
                align-items: flex-start;
            }

            .warning-text {
                margin-left: 0;
                margin-top: 5px;
                font-size: 1rem;
            }

            .ecommerce-grid,
            .sectors-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .mobile-apps-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
           

            .services-container {
                padding: 10px;
            }

            .service-section {
                padding: 20px;
                margin-bottom: 40px;
            }

            .main-heading {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .service-number {
                font-size: 1.8rem;
            }

            .service-title {
                font-size: 1.4rem;
            }

            .service-description {
                font-size: 1rem;
            }

            .ecommerce-grid,
            .sectors-grid,
            .mobile-apps-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .ecommerce-item,
            .sector-item {
                padding: 15px;
                min-height: 100px;
            }
        }

        @media (max-width: 576px) {
            .main-heading {
                font-size: 1.8rem;
            }

            .service-title {
                font-size: 1.3rem;
            }

            .service-number {
                font-size: 1.6rem;
                margin-right: 10px;
            }

            .ecommerce-grid,
            .sectors-grid,
            .mobile-apps-grid {
                grid-template-columns: 1fr;
            }

            .ecommerce-item,
            .sector-item,
            .mobile-app-item {
                padding: 15px;
            }

            .ecommerce-item h4,
            .sector-item h4 {
                font-size: 1rem;
            }
        }

        @media (max-width: 400px) {
            .service-title {
                font-size: 1.2rem;
            }

            .service-description {
                font-size: 0.95rem;
            }

            .ecommerce-icon,
            .sector-icon,
            .mobile-app-icon {
                font-size: 1.5rem;
            }
        }

        .dg-service {
            padding: 60px 0;
            background: #f7f9fc;
        }

        /* CARD */
        .dg-service-card {
            max-width: 1200px;
            margin: auto;
            background: #fff;
            display: flex;
            gap: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            padding: 40px;
        }

        /* LEFT */
        .dg-service-left {
            flex: 1;
        }

        .dg-service-left h2 {
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 25px;
        }

        /* 🔥 TWO COLUMN WITH 100px GAP */
        .dg-two-column {
            list-style: none;
            padding: 0;
            margin: 0;

            display: grid;
            grid-template-columns: repeat(2, 1fr);
            column-gap: 100px;
            /* 🔥 YAHI 100px GAP */
            row-gap: 12px;
        }

        .dg-two-column li a {
            text-decoration: none;
            color: #000;
            font-size: 15px;
            font-weight: 500;
        }

        .dg-two-column li a:hover {
            color: #0d6efd;
            text-decoration: underline;
        }

        /* RIGHT */
        .dg-service-right {
            width: 260px;
            background: #f1f3f6;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 8px;
            padding: 25px;
        }

        .dg-service-right span {
            font-size: 14px;
            letter-spacing: 1px;
            color: #555;
            margin-bottom: 12px;
        }

        .dg-btn-call {
            background: #0d6efd;
            color: #fff;
            padding: 12px 22px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .dg-btn-call:hover {
            background: #084298;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .dg-service-card {
                flex-direction: column;
                padding: 25px;
            }

            .dg-two-column {
                grid-template-columns: 1fr;
                /* mobile pe single column */
                column-gap: 0;
            }

            .dg-service-right {
                width: 100%;
                margin-top: 20px;
                padding: 15px;
            }
        }

        .empowering-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 10px 50px;
        }

        @media (max-width: 768px) {
            .empowering-container {
                padding: 10px 15px;
            }
        }

        /* Section Styling */
        .empowering-section {
            margin-bottom: 80px;
        }

        .empowering-section h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 40px;
        }

        .empowering-section h2 {
            font-size: 2.8rem;
            font-weight: 700;
            color: #374151;
            margin-bottom: 40px;
        }

        .empowering-content-block {
            margin-bottom: 35px;
        }

        .empowering-content-block p {
            font-size: 1.15rem;
            color: #4b5563;
            line-height: 1.8;
            text-align: justify;
        }

        .empowering-content-block strong,
        .highlight {
            font-weight: 700;
            color: #1f2937;
        }

        .intro-text {
            font-weight: 600;
            color: #1f2937;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .empowering-container {
                padding: 50px 30px;
            }

            .empowering-section h1 {
                font-size: 2.5rem;
            }

            .empowering-section h2 {
                font-size: 2.3rem;
            }

            .empowering-content-block p {
                font-size: 1.1rem;
            }
        }

        @media (max-width: 768px) {
            .empowering-container {
                padding: 40px 20px;
            }

            .empowering-section {
                margin-bottom: 60px;
            }

            .empowering-section h1 {
                font-size: 2rem;
                margin-bottom: 30px;
            }

            .empowering-section h2 {
                font-size: 1.8rem;
                margin-bottom: 30px;
            }

            .empowering-content-block {
                margin-bottom: 25px;
            }

            .empowering-content-block p {
                font-size: 1rem;
            }
        }

        @media (max-width: 480px) {
            .empowering-container {
                padding: 30px 15px;
            }

            .empowering-section h1 {
                font-size: 1.6rem;
            }

            .empowering-section h2 {
                font-size: 1.5rem;
            }

            .empowering-content-block p {
                font-size: 0.95rem;
            }
        }

        /* ================= CARD BASE ================= */
        .single-item {
            animation: fadeUp 0.9s ease both;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .single-item .image-box-wrap {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .single-item .image-box-wrap:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.15);
        }

        /* ================= IMAGE (70%) ================= */
        .single-item .box-image {
            flex: 7;
            overflow: hidden;
        }

        .single-item .box-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .single-item .image-box-wrap:hover .box-image img {
            transform: scale(1.12);
        }

        .project-img-responsive {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .project-img-responsive {
                height: auto;
                min-height: 180px;
            }
        }

        /* ================= CONTENT (30%) ================= */
        .single-item .content {
            flex: 3;
            padding: 16px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        /* ================= TITLE ================= */
        .single-item .heading {
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 6px;
            position: relative;
            cursor: pointer;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* ================= TOOLTIP ================= */
        .single-item .heading::after {
            content: attr(data-title);
            position: absolute;
            bottom: 130%;
            left: 50%;
            transform: translateX(-50%) scale(0.95);

            min-width: 220px;
            max-width: 280px;
            background: rgba(0, 0, 0, 0.85);
            color: #fff;
            padding: 9px 14px;
            border-radius: 8px;
            font-size: 14px;
            line-height: 1.4;
            text-align: center;

            opacity: 0;
            visibility: hidden;
            transition: all 0.35s ease;
            z-index: 99;
        }

        .single-item .heading::before {
            content: "";
            position: absolute;
            bottom: 118%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 0.85) transparent transparent transparent;

            opacity: 0;
            visibility: hidden;
            transition: all 0.35s ease;
        }

        /* Desktop hover */
        .single-item .heading:hover::after,
        .single-item .heading:hover::before,
        .single-item .heading.tooltip-active::after,
        .single-item .heading.tooltip-active::before {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) scale(1);
        }

        /* ================= DATE ================= */
        .single-item .content .text {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 6px;
        }

        /* ================= TYPE BADGE ================= */
        .single-item .content h6 {
            display: inline-block;
            align-self: center;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
        }

        /* ================= MOBILE ================= */
        @media (max-width: 576px) {
            .single-item .box-image img {
                height: 100%;
            }

            .single-item .heading::after {
                max-width: 240px;
                font-size: 13px;
            }
        }

        /* ===== Milestone Section ===== */
        .dg-milestone {
            padding: 60px 15px;
            background: #f7f9fc;
            text-align: center;
        }

        .dg-container {
            max-width: 1200px;
            margin: auto;
        }

        .dg-section-title {
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .dg-section-subtitle {
            color: #555;
            margin-bottom: 40px;
        }

        /* ===== Milestone Cards ===== */
        .dg-milestone-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 25px;
        }

        .dg-milestone-card {
            background: #fff;
            padding: 35px 20px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .dg-milestone-card h3 {
            font-size: 36px;
            color: #0d6efd;
            margin-bottom: 10px;
        }

        .dg-milestone-card p {
            font-size: 16px;
            font-weight: 500;
        }

        .dg-milestone-card:hover {
            transform: translateY(-6px);
        }

        /* ===== Office Gallery Section ===== */
        .dg-office {
            padding: 60px 15px;
            background: #fff;
        }

        /* ===== Thumbnail Grid ===== */
        .dg-office-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        /* ===== Thumbnail Box (Clean Bootstrap Style) ===== */
        .dg-office-thumb {
            background: #ffffff;
            padding: 8px;
            border-radius: 14px;
            border: 1px solid #595959ff;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.7);
            overflow: hidden;
            transition: all 0.35s ease;
        }

        /* ===== Thumbnail Image ===== */
        .dg-office-thumb img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.35s ease;
        }

        /* ===== Hover Effects (Soft & Premium) ===== */
        .dg-office-thumb:hover {
            transform: translateY(-6px);
            box-shadow: 0 14px 32px rgba(0, 0, 0, 0.12);
        }

        .dg-office-thumb:hover img {
            transform: scale(1.05);
        }

        /* ===== Responsive ===== */
        @media (max-width: 992px) {
            .dg-milestone-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .dg-office-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .dg-milestone-grid {
                grid-template-columns: 1fr;
            }

            .dg-office-grid {
                grid-template-columns: 1fr;
            }

            .dg-section-title {
                font-size: 24px;
            }
        }

        .servicescontainer {
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 42px;
            color: #333;
            margin-bottom: 20px;
            font-weight: 600;
        }


        .service-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
        }

        .service-image {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }

        .service-content {
            padding: 30px;
            position: relative;
        }

        .redirect-icon {
            position: absolute;
            top: 25px;
            right: 25px;
            width: 40px;
            height: 40px;
            background: #f8f9fa;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #333;
            font-size: 18px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .redirect-icon:hover {
            background: #333;
            color: white;
            transform: rotate(45deg);
        }

        .service-title {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
            padding-right: 50px;
        }

        .service-subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 15px;
            font-weight: 500;
        }

        .service-description {
            font-size: 15px;
            color: #666;
            line-height: 1.7;
            margin-bottom: 25px;
            text-align: justify;
        }

        .service-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .btn {
            padding: 12px 28px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }


        .btn-primary:hover {
            background: #555;
        }

        .btn-icon {
            width: 45px;
            height: 45px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 18px;
        }

        .btn-whatsapp {
            background: #25D366;
            color: white;
        }

        .btn-whatsapp:hover {
            background: #1da851;
        }

        .btn-phone {
            background: #dc3545;
            color: white;
        }

        .btn-phone:hover {
            background: #c82333;
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .section-title h2 {
                font-size: 28px;
            }

            .service-card {
                margin-bottom: 20px;
            }

            .service-content {
                padding: 20px;
            }

            .service-title {
                font-size: 20px;
                padding-right: 40px;
            }

            .service-image {
                height: 200px;
            }
        }

        @media (max-width: 480px) {
            .section-title h2 {
                font-size: 24px;
            }

            .service-buttons {
                flex-wrap: wrap;
                gap: 8px;
            }

            .service-buttons .btn-primary {
                flex: 1 1 100%;
            }

            .service-buttons .btn-icon {
                flex: 1;
                height: 45px;
            }
        }
    </style>
</head>

<body>

    <?php include('include/header.php') ?>
    <section class="banner">
    <div class="banner-overlay"></div>

    <div class="banner-content">
        <h1>OUR SERVICES IN <?= strtoupper($city_name) ?></h1>

        <div class="banner-buttons">
            <button data-toggle="modal" data-target="#exampleModal" class="btn btn-primary">Request a Quote</button>

                <a href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                    target="_blank" data-hover="WhatsApp" class="btn btn-whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>

            <a href="tel:+919198483820" class="btn btn-call">
                <i class="fas fa-phone"></i>
            </a>
        </div>
    </div>
</section>

    <div class="city-courses-section">
        <div class="city-container">
            
            <!-- City Header -->
            <div class="city-header">
                <h1>DigiCoders Software Development in <span><?= $city_name ?></span></h1>
                <p>Professional IT training programs designed to boost your career in <?= $city_name ?></p>
                <div class="city-breadcrumb">
                    <a href="<?= base_url() ?>">Home</a> &gt; 
                    <span><?= $city_name ?> Services</span>
                </div>
            </div>
             <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-container">
            <div class="iso-badge">ISO 9001:2015 Certified</div>
            
            <h1 class="hero-title">
                DigiCoders: Your Digital Transformation Partner - Empowering Businesses Across India
            </h1>
            
            <p class="hero-description">
                        Welcome to DigiCoders, an ISO 9001:2015 certified firm with a robust legacy of over 10 years in
                        the digital realm.
                        We are your trusted partner in navigating the complexities of the online world, offering a
                        comprehensive suite of
                        services designed to elevate your brand, expand your reach, and maximize your return on
                        investment (ROI).
                        From dynamic website design to cutting-edge mobile apps, strategic digital marketing, and custom
                        software solutions,
                we empower businesses across India to thrive in the digital age.
               
            </p>
           
        </div>
    </section>
           
              <div class="services-container">
        <!-- Main Heading -->
        <h1 class="main-heading">Services We Offer</h1>
        
        <!-- Service 1: Website Designing & Development -->
        <div class="service-section">
            <div class="service-title">
                <span class="service-number">1.</span>
                <div class="service-title-text">
                    Expert Website Designing & Development: 
                    <span class="warning-text">Need a website designed? Beware of cheap companies!</span>
                </div>
            </div>
            
            <p class="service-description">
                        DigiCoders, we believe a website is more than just an online presence – it's a powerful
                        lead-generating machine.
                        With <span class="highlight-text">10+ years of vast experience</span>, we specialize in crafting
                        bespoke, responsive,
                        and SEO-optimized websites that are not only visually stunning but also drive significant leads
                        and deliver great ROIs.
                        Whether you need a static showcase or a complex dynamic platform, our team ensures your website
                        stands out and performs.
            </p>
        </div>
        
        <!-- Service 2: Ecommerce Development -->
        <div class="service-section">
            <div class="service-title">
                <span class="service-number">2.</span>
                <div class="service-title-text">
                    Professional Ecommerce Development: Launch Your Online Store with Professional Ecommerce
                </div>
            </div>
            
            <p class="service-description">
                        <span class="highlight-text">Solutions!</span> The online marketplace offers unparalleled growth
                        opportunities.
                We have successfully developed numerous custom Ecommerce Portals and applications, 
                        helping businesses establish robust online sales channels. Our expertise spans diverse
                        industries, including:
            </p>
            
            <h3 class="ecommerce-intro">Our expertise includes:</h3>
            
            <div class="ecommerce-grid">
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <h4>Online Grocery Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-gem"></i>
                    </div>
                    <h4>Online Jewellery Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-pills"></i>
                    </div>
                    <h4>Online Medicine Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h4>Online Painting Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h4>Online Clothing Delivery</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <h4>Online Bakery Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Online Restaurant Stores</h4>
                </div>
                
                <div class="ecommerce-item">
                    <div class="ecommerce-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h4>Online Book Stores</h4>
                </div>
            </div>
            
            <p class="ecommerce-note">
                        We build secure, scalable, and user-friendly ecommerce platforms that seamlessly connect you
                        with your customers.
            </p>
        </div>
        
        <!-- Service 3: Mobile Apps Development -->
        <div class="service-section">
            <div class="service-title">
                <span class="service-number">3.</span>
                <div class="service-title-text">
                            Cutting-Edge Mobile Apps Development: Launch Your Shopping & Startup Mobile Apps with
                            DigiCoders!
                </div>
            </div>
            
            <p class="service-description">
                        In the mobile-first world, an app can be a game-changer. We specialize in developing innovative
                        and feature-rich
                        mobile applications that cater to a wide range of needs. Our successful app development
                        portfolio includes:
            </p>
            
            <h3 class="mobile-intro">Our App Development Portfolio:</h3>
            
            <div class="mobile-apps-grid">
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Startup Idea Mobile Apps</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <h4>Ecommerce Mobile Apps</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <h4>Gymx Gym App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h4>Washx Dry Cleaning App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h4>Pathx Pathology App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-user-md"></i>
                    </div>
                    <h4>Clinax Doctor Booking App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h4>Jobx Job App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h4>Turtle Elearning App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Yummy Restaurant App</h4>
                </div>
                
                <div class="mobile-app-item">
                    <div class="mobile-app-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4>Help Joy Home Service App</h4>
                </div>
            </div>
        </div>
        
        <!-- Service 4: Digital Marketing -->
        <div class="service-section">
            <div class="service-title">
                <span class="service-number">4.</span>
                <div class="service-title-text">
                    Results-Driven Digital Promotion (Digital Marketing)
                </div>
            </div>
            
            <p class="service-description">
                Gain maximum visibility and drive growth with our comprehensive digital marketing strategies. 
                We offer complete Facebook, Instagram & YouTube Marketing services designed to deliver targeted 
                Traffic, Leads, Sales & Online Branding for your business.
            </p>
            
            <h3 class="digital-intro">We serve a wide range of sectors, including:</h3>
            
            <div class="sectors-grid">
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-school"></i>
                    </div>
                    <h4>Schools & Pre-Schools</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4>Hospitals & Doctor Clinics</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-plane"></i>
                    </div>
                    <h4>Travel Agencies</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-calendar-alt"></i>
                    </div>
                    <h4>Event Companies</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h4>Photographers</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h4>NGOs</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-capsules"></i>
                    </div>
                    <h4>Pharma Companies</h4>
                </div>
                
                <div class="sector-item">
                    <div class="sector-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h4>Caterers</h4>
                </div>
            </div>
        </div>
    </div>
 </div>
 <div class="site-wrapper-reveal">
        <!--===========  feature-images-wrapper  Start =============-->
        <div class="feature-images-wrapper section-space--ptb_10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center">
                                <h3 class="heading">Reliable IT Services <br> provided by <span
                                        class="text-color-primary">
                                    DigiCoders.</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="container">
                    <div class="section-title">
                        <h2>What are You Searching for</h2>
                    </div>

                    <div class="services-grid">
                        <!-- Software Development Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/software-development.jpg"
                                alt="Software Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/SoftwareDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Software Development</h3>
                                <p class="service-subtitle">To let you manage your Business</p>
                                <p class="service-description">
                                        There are many software in the market which can spark your eyes with their
                                        beyond
                                        the thought features but what if that one basic feature is missing which is
                                        required
                                    to run your business. That is where Custom Software Development comes into the
                                        picture. It is to build something precisely for you. The coding will be
                                        according to
                                    your needs. The data will be yours.
                                </p>
                                <div class="service-buttons">
                                        <button data-toggle="modal" data-target="#exampleModal" aria-label="modal-btn"
                                            class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Website Development Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/website-design.jpg"
                                alt="Website Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/WebsiteDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Website Designing</h3>
                                <p class="service-subtitle">To give your Brand an Identity</p>
                                <p class="service-description">
                                        We create stunning Website design and bunch of features to make your website
                                        stand
                                        out of crowd for your startup or existing business. We create wide range of
                                        unique
                                        website which includes SEO compatibility, High Demand (HD)/4K images &
                                        Responsive
                                    design to fit and functions well on any device - desktop, tablet & mobile.
                                </p>
                                <div class="service-buttons">
                                        <button data-toggle="modal" data-target="#exampleModal" aria-label="modal-btn"
                                            class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ecommerce Designing Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/ecommerce.jpg"
                                alt="Ecommerce Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DigitalMarketing') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Ecommerce Designing</h3>
                                <p class="service-subtitle">To increase your sales Online</p>
                                <p class="service-description">
                                    E-Commerce website design for online selling your products and hassle-free in
                                    receiving payment. An individual reach is limited but an effective website can reach
                                    beyond the expectation. We offer you a complete ecommerce website development and
                                    best SEO services considering the user perspective to offer complete satisfaction.
                                    Startup to Enterprise.
                                </p>
                                <div class="service-buttons">
                                        <button data-toggle="modal" data-target="#exampleModal" aria-label="modal-btn"
                                            class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                      <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Application Development Card -->
                        <div class="service-card">
                        <img src="<?= base_url('public') ?>/assets/images/services/mobile-app.jpg"
                                alt="Mobile Application Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/MobileApplicationDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Mobile Application Development</h3>
                                <p class="service-subtitle">To reach your customers anywhere</p>
                                <p class="service-description">
                                    Mobile app development is the act or process by which a mobile app is developed for
                                    mobile devices. We create native and hybrid mobile applications for iOS and Android
                                    platforms with cutting-edge features and seamless user experience.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Digital Marketing Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/digital-marketing.jpg"
                                alt="Digital Marketing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DigitalMarketing') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Digital Marketing</h3>
                                <p class="service-subtitle">To grow your business online</p>
                                <p class="service-description">
                                    Digital marketing encompasses all marketing efforts that use an electronic device or
                                    the internet. We provide comprehensive digital marketing services including SEO,
                                    social media marketing, content marketing, email marketing, and PPC campaigns to
                                    boost your online presence and drive results.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                      <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphics Designing Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/graphic-design.jpg"
                                alt="Graphics Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/GraphicsDesigning') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Graphics Designing</h3>
                                <p class="service-subtitle">To make your brand visually appealing</p>
                                <p class="service-description">
                                    Graphic design is the process of visual communication and problem-solving through
                                    the use of typography, photography, and illustration. We create stunning visual
                                    identities, logos, brochures, social media graphics, and all types of design
                                    materials that make your brand stand out.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Domain and Hosting Card -->
                        <div class="service-card">
                          <img src="<?= base_url('public') ?>/assets/images/services/domain.jpg"
                                alt="Domain and Hosting" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DomainAndHosting') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Domain and Hosting</h3>
                                <p class="service-subtitle">To establish your online presence</p>
                                <p class="service-description">
                                    Domain name is the first face of a business when we talk digitally. Web hosting is a
                                    service that allows organizations and individuals to post a website or web page onto
                                    the Internet. We provide reliable domain registration and hosting services with
                                    99.9% uptime guarantee.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ERP and CRM Development Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/erp.jpg"
                                alt="ERP and CRM Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/ERPAndCRMDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">ERP and CRM Development</h3>
                                <p class="service-subtitle">To streamline your business operations</p>
                                <p class="service-description">
                                    ERP is an acronym for Enterprise Resource Planning. We develop custom ERP and CRM
                                    solutions that integrate all facets of your business operations including planning,
                                    purchasing, inventory, sales, marketing, finance, and human resources into one
                                    complete system.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Maintenance Services Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/maintenance.jpg"
                                alt="Maintenance Services" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/MaintenanceServices') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Maintenance Services</h3>
                                <p class="service-subtitle">To keep your systems running smoothly</p>
                                <p class="service-description">
                                    Leverage our powerful software maintenance and support services around the globe, as
                                    we are able to deliver our solutions everywhere. We provide regular updates, bug
                                    fixes, security patches, and technical support to ensure your applications run
                                    smoothly 24/7 and more.
                                </p>


                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-images-wrapper  End =============-->
    </div>
  
    <div class="site-wrapper-reveal">
         <center class="mb-4">
        <h3 class="fw-bold">Our Recent Projects</h3>
        <a href="<?= base_url() ?>Home/OurProjects" class="view-more-btn">
            View More →
        </a>
    </center>
        <!--===========  feature-images-wrapper  Start =============-->
        <div class="feature-images-wrapper bg-gray ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="feature-images__four">
                            <div class="row">
                                <!-- forecach  loop -->
                                <?php
                                foreach ($projects as $project)
                                {
                                    $is_link_active = (!isset($project->link_status) || $project->link_status == 'true' || $project->link_status == '1');
                                ?>
                                    <div class="single-item col-lg-4 col-md-6 mt-30 wow move-up">
                                        <div class="image-box-wrap" style="width:100%;">
                                            <div class="box-image" style="width:100%;">
                                                <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/projects/').$project->image; ?>" title="<?= htmlspecialchars($project->title) ?>" alt="<?= htmlspecialchars($project->title) ?>" style="height: 200px; width: 100%; object-fit: cover;" />
                                            </div>
                                            <div class="content ht-box-images style-04 text-center p-3">
                                                <h5 class="heading mb-2" title="<?= htmlspecialchars($project->title); ?>" data-title="<?= htmlspecialchars($project->title); ?>"><?= htmlspecialchars($project->title); ?></h5>
                                                <div class="text text-muted mb-2"><?php $date = strtotime($project->add_date); echo date('M Y', $date); ?></div>
                                                <div class="text mb-3">
                                                    <span class="badge bg-primary text-white"><?= htmlspecialchars($project->type); ?></span>
                                                </div>
                                                <?php if ($is_link_active && !empty($project->url)): ?>
                                                    <a href="<?= $project->url ?>" target="_blank" class="btn btn-sm btn-success rounded-pill px-3 py-1 text-white" style="font-size: 13px; font-weight: 600;">
                                                        <i class="fa fa-external-link me-1"></i> Visit
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- foreach loop end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!--===========  feature-images-wrapper  End =============-->
   </div>

       <section class="dg-milestone">
    <div class="dg-container">

        <h2 class="dg-section-title">Our Office & Work Culture</h2>
        <p class="dg-section-subtitle">
            A glimpse of our workspace and creative environment
        </p>

        <div class="dg-office-grid">

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus1.jpeg" alt="Office Image">
            </div>

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus2.jpeg" alt="Office Image">
            </div>

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus3.jpeg" alt="Office Image">
            </div>

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus4.jpeg" alt="Office Image">
            </div>

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus5.jpeg" alt="Office Image">
            </div>

            <div class="dg-office-thumb">
                <img src="<?= base_url('public') ?>/assets/images/campus/digicoders-campus6.jpg" alt="Office Image">
            </div>

        </div>

    </div>
</section>

    
<section class="dg-service">
    <div class="dg-service-card">

        <!-- LEFT -->
        <div class="dg-service-left">
            <h2>Website Designing And Development</h2>

            <ul class="dg-two-column">
                <?php if (!empty($webs)) : ?>
                    <?php foreach ($webs as $web) : ?>
                        <li>
                            <a href="<?= base_url($web->url_slug) ?>">
                                <?= $web->service_name ?> development in <?= $city_name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li>No services found</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="dg-service-right">
            <span>NEED HELP ?</span>
             <button  data-toggle="modal" data-target="#exampleModal" class="dg-btn-call">
                Request a quote
            </button>
        </div>

    </div>
    <br>
    <div class="dg-service-card">

        <!-- LEFT -->
        <div class="dg-service-left">
            <h2>Ecommerce Website Development</h2>

            <ul class="dg-two-column">
                <?php if (!empty($ecommerce)) : ?>
                    <?php foreach ($ecommerce as $row) : ?>
                        <li>
                            <a href="<?= base_url($row->url_slug) ?>">
                                <?= $row->service_name ?> development in <?= $city_name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li>No services found</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="dg-service-right">
            <span>NEED HELP ?</span>
              <button  data-toggle="modal" data-target="#exampleModal" class="dg-btn-call">
                Request a quote
            </button>
        </div>

    </div>
    <br>
    <div class="dg-service-card">

        <!-- LEFT -->
        <div class="dg-service-left">
            <h2>Mobile App Development</h2>

            <ul class="dg-two-column">
                <?php if (!empty($mobile_app)) : ?>
                    <?php foreach ($mobile_app as $row) : ?>
                        <li>
                            <a href="<?= base_url($row->url_slug) ?>">
                                <?= $row->service_name ?> development in <?= $city_name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li>No services found</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="dg-service-right">
            <span>NEED HELP ?</span>
            <button  data-toggle="modal" data-target="#exampleModal" class="dg-btn-call">
                Request a quote
            </button>
        </div>

    </div>
    <br>
    <div class="dg-service-card">

        <!-- LEFT -->
        <div class="dg-service-left">
            <h2>Software ERP Development</h2>

            <ul class="dg-two-column">
                <?php if (!empty($software)) : ?>
                    <?php foreach ($software as $row) : ?>
                        <li>
                            <a href="<?= base_url($row->url_slug) ?>">
                                <?= $row->service_name ?> development in <?= $city_name ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                <?php else : ?>
                    <li>No services found</li>
                <?php endif; ?>
            </ul>
        </div>

        <!-- RIGHT -->
        <div class="dg-service-right">
            <span>NEED HELP ?</span>
             <button  data-toggle="modal" data-target="#exampleModal" class="dg-btn-call">
                Request a quote
            </button>
        </div>

    </div>
    <br>
            <!-- CTA Section -->
<div class="cta-section">
    <h2>Build Your Project with Expert Developers !</h2>

    <p>
        Get professional project development services for college, startups, 
        and businesses. We deliver real-world, scalable and industry-ready solutions 
        using the latest technologies.
    </p>

    <a href="<?= base_url('Home/ContactUs') ?>" class="cta-button">
        <i class="fas fa-code"></i> Start Your Project
    </a>
</div>
</section>

       
        </div>
    
    
    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
    
    <script>
    // Add animation to course cards
    document.addEventListener('DOMContentLoaded', function() {
        const courseCards = document.querySelectorAll('.course-card');
        courseCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
    </script>

</body>
</html>
