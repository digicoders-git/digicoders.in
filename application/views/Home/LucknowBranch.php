<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lucknow Main Office | DigiCoders Technologies</title>
    <meta name="description"
        content="Visit DigiCoders Technologies Head Office in Aliganj Lucknow. Top Software, Mobile App, Website Development & Training Company in Uttar Pradesh.">
    <?php include('include/headerlinks.php') ?>

    <style>
        /* 1. LUCKNOW HERO SECTION STYLES (100% MATCH TO ATTACHED SCREENSHOT) */
        .lucknow-main-hero {
            position: relative;
            background: #ffffff;
            padding: 60px 0 0 0;
            overflow: hidden;
        }

        /* Top Rocket Pill Badge */
        .hero-top-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #fff7ed;
            border: 1px solid #ffedd5;
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 700;
            color: #ea580c;
            margin-bottom: 22px;
        }

        .hero-top-badge i {
            color: #ea580c;
            font-size: 14px;
        }

        /* Main Heading */
        .lucknow-hero-h1 {
            font-size: 46px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.15;
            letter-spacing: -1px;
            margin-bottom: 18px;
        }

        .lucknow-hero-h1 .text-green {
            color: #046a38;
        }

        .lucknow-hero-h1 .text-orange {
            color: #ea580c;
        }

        /* Subtitle Paragraph */
        .lucknow-hero-p {
            font-size: 15px;
            color: #475569;
            line-height: 1.65;
            max-width: 520px;
            margin-bottom: 28px;
        }

        /* CTA Buttons Row */
        .hero-btn-group {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 35px;
        }

        .btn-green-solid {
            background: #046a38;
            color: #ffffff !important;
            padding: 13px 26px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(4, 106, 56, 0.25);
        }

        .btn-green-solid:hover {
            background: #03522b;
            transform: translateY(-2px);
        }

        .btn-outline-dark {
            background: #ffffff;
            color: #0f172a !important;
            border: 1px solid #cbd5e1;
            padding: 13px 24px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .btn-outline-dark:hover {
            border-color: #046a38;
            color: #046a38 !important;
            background: #f8fafc;
        }

        /* Hero Stats Mini Bar */
        .hero-mini-stats {
            display: flex;
            align-items: center;
            gap: 25px;
            padding-top: 15px;
            border-top: 1px solid #f1f5f9;
        }

        .mini-stat-item {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .mini-stat-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: #f0fdf4;
            color: #046a38;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            border: 1px solid #bbf7d0;
        }

        .mini-stat-num {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
            margin: 0;
            line-height: 1.1;
        }

        .mini-stat-lbl {
            font-size: 11px;
            color: #64748b;
            margin: 0;
        }

        /* Right Building Image Wrapper */
        .lucknow-building-wrapper {
            position: relative;
            z-index: 2;
        }

        .lucknow-building-backdrop {
            position: absolute;
            top: -20px;
            right: -20px;
            width: 90%;
            height: 90%;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            border-radius: 50%;
            z-index: -1;
        }

        .lucknow-building-img {
            width: 100%;
            border-radius: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
            object-fit: cover;
        }

        /* Floating Location Card on Building Image */
        .building-floating-card {
            position: absolute;
            bottom: 25px;
            left: -15px;
            background: #ffffff;
            border-radius: 14px;
            padding: 12px 18px;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
            display: flex;
            align-items: center;
            gap: 12px;
            border: 1px solid #f1f5f9;
            z-index: 5;
        }

        .building-card-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: #ffedd5;
            color: #ea580c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }

        .building-card-title {
            font-size: 14px;
            font-weight: 800;
            color: #0f172a;
            margin: 0;
        }

        .building-card-sub {
            font-size: 11.5px;
            color: #64748b;
            margin: 0;
        }

        /* Value Proposition Bottom Ribbon (Dark Bar) */
        .hero-value-ribbon {
            background: #091624;
            padding: 28px 0;
            margin-top: 50px;
        }

        .value-ribbon-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .value-ribbon-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: #10b981;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .value-ribbon-title {
            font-size: 14px;
            font-weight: 700;
            color: #ffffff;
            margin: 0 0 3px 0;
        }

        .value-ribbon-desc {
            font-size: 12px;
            color: #94a3b8;
            margin: 0;
            line-height: 1.4;
        }

        /* SECTION TITLE COMMON */
        .sec-title-center {
            text-align: center;
            margin-bottom: 45px;
        }

        .sec-main-h2 {
            font-size: 34px;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 8px;
        }

        .sec-main-h2 span {
            color: #046a38;
        }

        .sec-sub-p {
            font-size: 14px;
            color: #64748b;
            margin: 0;
        }

        /* SERVICES CARDS */
        .service-card-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 28px;
            height: 100%;
            transition: all 0.3s ease;
        }

        .service-card-box:hover {
            border-color: #046a38;
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.06);
        }

        .service-card-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: #ecfdf5;
            color: #046a38;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-bottom: 20px;
        }

        .service-card-h3 {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .service-card-p {
            font-size: 13.5px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        .service-card-link {
            font-size: 13px;
            font-weight: 700;
            color: #046a38;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        /* GREEN NUMBERS BANNER */
        .green-excellence-banner {
            background: linear-gradient(135deg, #046a38 0%, #03522b 100%);
            border-radius: 20px;
            padding: 40px 45px;
            color: #ffffff;
        }

        .excellence-stat-num {
            font-size: 32px;
            font-weight: 800;
            color: #ffffff;
            margin: 0;
        }

        .excellence-stat-lbl {
            font-size: 12.5px;
            color: #a7f3d0;
            margin: 0;
        }

        /* TECH BADGE PILL */
        .tech-pill-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: 700;
            font-size: 13px;
            color: #1e293b;
            transition: all 0.3s ease;
        }

        .tech-pill-item:hover {
            border-color: #046a38;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            transform: translateY(-3px);
        }

        .tech-pill-item i {
            font-size: 26px;
        }

        /* PROJECT CARDS */
        .project-card-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            transition: all 0.3s ease;
            height: 100%;
        }

        .project-card-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        }

        .project-card-img-wrap {
            height: 180px;
            background: #f1f5f9;
            position: relative;
        }

        .project-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .project-card-body {
            padding: 20px;
        }

        .project-tag {
            font-size: 11px;
            font-weight: 700;
            background: #ecfdf5;
            color: #046a38;
            padding: 4px 10px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .project-title {
            font-size: 16px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 6px;
        }

        .project-techs {
            font-size: 12px;
            color: #64748b;
        }

        /* EXPERT TEAM CARDS */
        .expert-swiper-container {
            width: 100%;
            position: relative;
            overflow: hidden;
            padding: 10px 0 20px 0 !important;
        }

        .expert-swiper-container .swiper-wrapper {
            display: flex !important;
            align-items: stretch;
        }

        .expert-swiper-container .swiper-slide {
            height: auto !important;
            display: flex !important;
            flex-direction: column;
            flex-shrink: 0 !important;
        }

        .team-card-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 20px 15px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .team-card-box:hover {
            border-color: #046a38;
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        .team-avatar-wrap {
            width: 105px;
            height: 105px;
            border-radius: 50%;
            margin: 0 auto 14px auto;
            overflow: hidden;
            border: 3px solid #ecfdf5;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(4, 106, 56, 0.08);
        }

        .team-avatar-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transform: scale(1.15);
            transition: transform 0.3s ease;
        }

        .team-card-box:hover .team-avatar-wrap img {
            transform: scale(1.25);
        }

        .team-name {
            font-size: 14.5px;
            font-weight: 800;
            color: #0f172a;
            margin: 0 0 4px 0;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .team-role {
            font-size: 11.5px;
            color: #64748b;
            margin-bottom: 14px;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .team-socials {
            display: flex;
            justify-content: center;
            gap: 8px;
        }

        .team-socials a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: #f8fafc;
            color: #64748b;
            border: 1px solid #e2e8f0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            text-decoration: none !important;
            transition: all 0.2s ease;
        }

        .team-socials a:hover {
            background: #046a38;
            color: #ffffff;
            border-color: #046a38;
        }

        /* TESTIMONIAL CARDS */
        .testi-card-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 25px;
            height: 100%;
            position: relative;
        }

        .testi-quote-icon {
            font-size: 32px;
            color: #bbf7d0;
            margin-bottom: 12px;
        }

        .testi-p {
            font-size: 13.5px;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .testi-user-wrap {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .testi-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testi-name {
            font-size: 14px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .testi-role {
            font-size: 11.5px;
            color: #64748b;
            margin: 0;
        }

        .testi-stars {
            color: #f59e0b;
            font-size: 12px;
            margin-top: 2px;
        }

        /* CONTACT SECTION */
        .contact-info-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 30px;
        }

        .c-info-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 20px;
        }

        .c-info-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #046a38;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .c-info-lbl {
            font-size: 12px;
            color: #64748b;
            margin: 0;
        }

        .c-info-val {
            font-size: 13.5px;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
            line-height: 1.4;
        }

        /* FORM */
        .contact-form-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 30px;
        }

        .form-control-custom {
            width: 100%;
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            padding: 12px 16px;
            font-size: 13.5px;
            color: #0f172a;
            margin-bottom: 16px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-control-custom:focus {
            border-color: #046a38;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(4, 106, 56, 0.1);
        }

        .btn-submit-green {
            width: 100%;
            background: #046a38;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            padding: 14px;
            font-weight: 700;
            font-size: 14.5px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .btn-submit-green:hover {
            background: #03522b;
        }

        /* BLOG CARDS */
        .blog-card-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            overflow: hidden;
            height: 100%;
            transition: all 0.3s ease;
            margin-bottom: 24px;
        }

        .blog-card-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        .blog-card-img {
            height: 160px;
            background: #cbd5e1;
        }

        .blog-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .blog-card-body {
            padding: 20px;
        }

        .blog-cat {
            font-size: 11px;
            font-weight: 700;
            color: #046a38;
            background: #ecfdf5;
            padding: 3px 10px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 8px;
        }

        .blog-title {
            font-size: 15px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .blog-date {
            font-size: 11.5px;
            color: #94a3b8;
        }
    </style>
</head>

<body>
    <?php include('include/header.php') ?>

    <!-- 1. HERO SECTION WITH EXACT GREEN CURVED RIBBON PARTITION & LUCKNOW RECEPTION IMAGE -->
    <section class="lucknow-hero-sec"
        style="position: relative; background: #ffffff; padding: 50px 0 45px 0; min-height: 540px; overflow: hidden; display: flex; align-items: center;">

        <!-- Desktop Right Side Background Image (Hidden on Mobile/Tablet) -->
        <div class="d-none d-lg-flex"
            style="position: absolute; top: 0; right: 0; width: 50%; height: 100%; z-index: 1;">
            <img src="<?= base_url('public/assets/images/lucknow_reception_office.jpg') ?>"
                alt="DigiCoders Technologies Lucknow Main Office"
                style="width: 100%; height: 100%; object-fit: cover; object-position: center left; clip-path: ellipse(90% 100% at 90% 50%);" />
        </div>

        <!-- Green Curved Ribbon Partition SVG (Hidden on Mobile/Tablet) -->
        <svg class="d-none d-lg-block"
            style="position: absolute; top: 0; right: 43%; width: 12%; height: 100%; z-index: 3; pointer-events: none;"
            viewBox="0 0 200 800" preserveAspectRatio="none">
            <defs>
                <linearGradient id="lucknowGreenRibbonGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#046a38" />
                    <stop offset="60%" stop-color="#0a884b" />
                    <stop offset="100%" stop-color="#10b981" />
                </linearGradient>
            </defs>

            <!-- Background Swirl Lines -->
            <path d="M-60,0 Q120,400 -60,800" fill="none" stroke="rgba(4, 106, 56, 0.15)" stroke-width="2" />
            <path d="M-20,0 Q160,400 -20,800" fill="none" stroke="rgba(4, 106, 56, 0.25)" stroke-width="2" />
            <circle cx="40" cy="180" r="18" fill="none" stroke="rgba(249, 115, 22, 0.4)" stroke-width="2" />
            <circle cx="110" cy="550" r="14" fill="none" stroke="rgba(4, 106, 56, 0.25)" stroke-width="2" />

            <!-- Main Curved Ribbon Path -->
            <path d="M 20,0 Q 180,400 20,800 L 70,800 Q 230,400 70,0 Z" fill="url(#lucknowGreenRibbonGrad)" />
        </svg>

        <div class="container position-relative" style="z-index: 5;">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-5 col-md-12" style="max-width: 480px;">
                    <!-- Breadcrumb -->
                    <div
                        style="font-size: 13px; color: #475569; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                        <a href="<?= base_url() ?>" style="color: #475569; text-decoration: none;">Home</a>
                        <i class="fas fa-chevron-right" style="font-size: 10px;"></i>
                        <span>Our Branches</span>
                        <i class="fas fa-chevron-right" style="font-size: 10px;"></i>
                        <span style="color: #046a38; font-weight: 600;">Lucknow (Main Office)</span>
                    </div>

                    <!-- Title -->
                    <h1 style="font-size: 38px; font-weight: 800; color: #0f172a; line-height: 1.2; margin-bottom: 6px; letter-spacing: -0.5px;"
                        class="hero-branch-h1">
                        Lucknow <span style="color: #046a38;">Main Office</span>
                    </h1>

                    <!-- Sub-brand -->
                    <div
                        style="font-size: 15px; font-weight: 700; margin-bottom: 18px; display: flex; align-items: center; gap: 6px;">
                        <span style="color: #ea580c; font-weight: 800;">Digi{Coders}</span>
                        <span style="color: #046a38; font-weight: 700;">Technologies Pvt. Ltd.</span>
                    </div>

                    <!-- Description -->
                    <p
                        style="font-size: 14px; color: #475569; line-height: 1.65; max-width: 440px; margin-bottom: 22px;">
                        Our Lucknow Main Office is the central hub of innovation, delivering cutting-edge software
                        solutions, mobile apps, enterprise IT services & industrial training.
                    </p>

                    <!-- Contact Info List with Solid Green Circular Icons -->
                    <ul
                        style="list-style: none; padding: 0; margin: 0 0 24px 0; display: flex; flex-direction: column; gap: 12px;">
                        <li
                            style="display: flex; align-items: center; gap: 12px; font-size: 13.5px; color: #1e293b; font-weight: 600;">
                            <div
                                style="width: 32px; height: 32px; border-radius: 50%; background: #046a38; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2);">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>2nd Floor, B-36, Sector O, Aliganj, Lucknow, UP - 226021</span>
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 12px; font-size: 13.5px; color: #1e293b; font-weight: 600;">
                            <div
                                style="width: 32px; height: 32px; border-radius: 50%; background: #046a38; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2);">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 919 848 3820 | 0522-4235604</span>
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 12px; font-size: 13.5px; color: #1e293b; font-weight: 600;">
                            <div
                                style="width: 32px; height: 32px; border-radius: 50%; background: #046a38; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2);">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>info@digicoders.in</span>
                        </li>
                    </ul>

                    <!-- Bottom Badges Bar (Sleek Horizontal Row) -->
                    <div
                        style="background: #ffffff; border: 1px solid #bbf7d0; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05); border-radius: 6px; padding: 10px 12px; margin-top: 20px; display: flex; align-items: center; justify-content: space-between; gap: 6px; width: 100%; max-width: 480px;">
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <div
                                style="width: 30px; height: 30px; border-radius: 50%; background: #ecfdf5; color: #046a38; border: 1px solid #a7f3d0; display: flex; align-items: center; justify-content: center; font-size: 12px; flex-shrink: 0;">
                                <i class="fas fa-shield-alt"></i></div>
                            <div>
                                <h5
                                    style="font-size: 11px; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.2; white-space: nowrap;">
                                    Local Support</h5>
                                <p style="font-size: 10px; color: #64748b; margin: 0; white-space: nowrap;">Quick
                                    Response</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 6px;">
                            <div
                                style="width: 30px; height: 30px; border-radius: 50%; background: #ecfdf5; color: #046a38; border: 1px solid #a7f3d0; display: flex; align-items: center; justify-content: center; font-size: 12px; flex-shrink: 0;">
                                <i class="fas fa-user-check"></i></div>
                            <div>
                                <h5
                                    style="font-size: 11px; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.2; white-space: nowrap;">
                                    Expert Team</h5>
                                <p style="font-size: 10px; color: #64748b; margin: 0; white-space: nowrap;">Skilled
                                    Staff</p>
                            </div>
                        </div>

                        <div style="display: flex; align-items: center; gap: 6px;">
                            <div
                                style="width: 30px; height: 30px; border-radius: 50%; background: #ecfdf5; color: #046a38; border: 1px solid #a7f3d0; display: flex; align-items: center; justify-content: center; font-size: 12px; flex-shrink: 0;">
                                <i class="fas fa-bullseye"></i></div>
                            <div>
                                <h5
                                    style="font-size: 11px; font-weight: 700; color: #0f172a; margin: 0; line-height: 1.2; white-space: nowrap;">
                                    Client Satisfaction</h5>
                                <p style="font-size: 10px; color: #64748b; margin: 0; white-space: nowrap;">Our Priority
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile & Tablet Wrapped Image Card (Visually Below Text on Screens < 992px) -->
                <div class="col-lg-7 col-md-12 d-lg-none mt-4">
                    <div
                        style="background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(12px); border: 1px solid #bbf7d0; border-radius: 20px; padding: 18px; box-shadow: 0 12px 30px rgba(4, 106, 56, 0.08); text-align: center;">
                        <img src="<?= base_url('public/assets/images/lucknow_reception_office.jpg') ?>"
                            alt="DigiCoders Lucknow Main Office"
                            style="max-height: 280px; width: auto; max-width: 100%; object-fit: cover; border-radius: 14px; filter: drop-shadow(0 10px 25px rgba(0,0,0,0.08));" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Dark Value Proposition Bottom Ribbon Bar -->
    <div class="hero-value-ribbon">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="value-ribbon-item">
                        <div class="value-ribbon-icon"><i class="fas fa-code"></i></div>
                        <div>
                            <h5 class="value-ribbon-title">End-to-End IT Solutions</h5>
                            <p class="value-ribbon-desc">From consulting to deployment we handle everything.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="value-ribbon-item">
                        <div class="value-ribbon-icon"><i class="fas fa-rocket"></i></div>
                        <div>
                            <h5 class="value-ribbon-title">Agile & Scalable</h5>
                            <p class="value-ribbon-desc">Solutions designed to grow with your business.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="value-ribbon-item">
                        <div class="value-ribbon-icon"><i class="fas fa-shield-alt"></i></div>
                        <div>
                            <h5 class="value-ribbon-title">Secure & Reliable</h5>
                            <p class="value-ribbon-desc">We ensure security, performance and reliability.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="value-ribbon-item">
                        <div class="value-ribbon-icon"><i class="fas fa-clock"></i></div>
                        <div>
                            <h5 class="value-ribbon-title">On-Time Delivery</h5>
                            <p class="value-ribbon-desc">We value your time and deliver on commitments.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!-- ==========================================
         2. OUR SERVICES IN LUCKNOW (100% MATCH TO REFERENCE IMAGE 2)
    =========================================== -->
    <section id="services" class="py-5" style="background: #ffffff;">
        <div class="container py-3">
            <div class="text-center mb-5">
                <h2 style="font-size: 32px; font-weight: 800; color: #0f172a; margin-bottom: 6px;">
                    Our Services <span style="color: #046a38;">in Lucknow</span>
                </h2>
            </div>

            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5">
                <!-- 1. Web Development -->
                <div class="col">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; height: 100%; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);"
                        onmouseover="this.style.borderColor='#046a38'; this.style.transform='translateY(-4px)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='none';">
                        <div
                            style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #046a38; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px;">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Web
                            Development</h4>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin: 0;">Modern, fast &
                            responsive websites that grow your business.</p>
                    </div>
                </div>

                <!-- 2. Mobile App Development -->
                <div class="col">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; height: 100%; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);"
                        onmouseover="this.style.borderColor='#046a38'; this.style.transform='translateY(-4px)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='none';">
                        <div
                            style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #046a38; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Mobile App
                            Development</h4>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin: 0;">Android & iOS apps
                            that deliver seamless user experience.</p>
                    </div>
                </div>

                <!-- 3. CRM Solutions -->
                <div class="col">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; height: 100%; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);"
                        onmouseover="this.style.borderColor='#046a38'; this.style.transform='translateY(-4px)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='none';">
                        <div
                            style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #046a38; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px;">
                            <i class="fas fa-users-cog"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">CRM Solutions
                        </h4>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin: 0;">Smart CRM systems to
                            manage leads, customers and sales.</p>
                    </div>
                </div>

                <!-- 4. Digital Marketing -->
                <div class="col">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; height: 100%; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);"
                        onmouseover="this.style.borderColor='#046a38'; this.style.transform='translateY(-4px)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='none';">
                        <div
                            style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #046a38; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px;">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Digital
                            Marketing</h4>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin: 0;">Boost your brand
                            visibility and get more leads with our digital strategies.</p>
                    </div>
                </div>

                <!-- 5. Software Development -->
                <div class="col">
                    <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 24px 20px; height: 100%; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.02);"
                        onmouseover="this.style.borderColor='#046a38'; this.style.transform='translateY(-4px)';"
                        onmouseout="this.style.borderColor='#e2e8f0'; this.style.transform='none';">
                        <div
                            style="width: 48px; height: 48px; border-radius: 12px; background: #ecfdf5; border: 1px solid #a7f3d0; color: #046a38; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px;">
                            <i class="fas fa-code"></i>
                        </div>
                        <h4 style="font-size: 15px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Software
                            Development</h4>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin: 0;">Custom software
                            solutions built for your unique business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         3. EXCELLENCE THROUGH NUMBERS GREEN BANNER (100% EXACT MATCH TO REFERENCE SCREENSHOT)
    =========================================== -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container">
            <div
                style="background: linear-gradient(90deg, #02381a 0%, #035227 24%, #046a38 55%, #035b30 100%); border-radius: 16px; padding: 35px 40px; position: relative; overflow: hidden; box-shadow: 0 15px 35px rgba(4, 106, 56, 0.15);">

                <!-- Background Subtle Diagonal Overlay -->
                <div
                    style="position: absolute; top: 0; left: 24%; width: 20px; height: 100%; background: rgba(255,255,255,0.03); transform: skewX(-18deg); z-index: 1;">
                </div>

                <div class="row align-items-center position-relative" style="z-index: 2;">
                    <!-- Left Title Block -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <h3
                            style="font-size: 24px; font-weight: 800; color: #ffffff; line-height: 1.25; margin-bottom: 20px;">
                            We Deliver Excellence <br>Through Numbers
                        </h3>
                        <a href="<?= base_url('Home/OurProjects') ?>"
                            style="background: #ffffff; color: #046a38; font-size: 12.5px; font-weight: 700; border-radius: 8px; padding: 10px 18px; text-decoration: none !important; display: inline-flex; align-items: center; gap: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); transition: all 0.3s ease;">
                            Explore Our Work <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>

                    <!-- Right Stats Grid with Vertical Borders and Orange Underline -->
                    <div class="col-lg-9 col-md-12">
                        <div class="row g-0">
                            <!-- 1. 10+ Years Experience -->
                            <div class="col-6 col-md-3"
                                style="border-right: 1px solid rgba(255, 255, 255, 0.15); padding: 0 20px;">
                                <div style="position: relative;">
                                    <div
                                        style="font-size: 40px; color: rgba(255,255,255,0.06); position: absolute; top: -10px; left: 0; pointer-events: none;">
                                        <i class="fas fa-award"></i></div>
                                    <h4
                                        style="font-size: 36px; font-weight: 800; color: #ffffff; margin-bottom: 6px; line-height: 1; display: inline-block; border-bottom: 2px solid #ea580c; padding-bottom: 4px;">
                                        10+</h4>
                                    <p
                                        style="font-size: 12px; color: rgba(255, 255, 255, 0.9); font-weight: 600; margin: 0; line-height: 1.3;">
                                        Years Experience</p>
                                </div>
                            </div>

                            <!-- 2. 500+ Projects Delivered -->
                            <div class="col-6 col-md-3"
                                style="border-right: 1px solid rgba(255, 255, 255, 0.15); padding: 0 20px;">
                                <div style="position: relative;">
                                    <div
                                        style="font-size: 40px; color: rgba(255,255,255,0.06); position: absolute; top: -10px; left: 0; pointer-events: none;">
                                        <i class="fas fa-box-open"></i></div>
                                    <h4
                                        style="font-size: 36px; font-weight: 800; color: #ffffff; margin-bottom: 6px; line-height: 1; display: inline-block; border-bottom: 2px solid #ea580c; padding-bottom: 4px;">
                                        500+</h4>
                                    <p
                                        style="font-size: 12px; color: rgba(255, 255, 255, 0.9); font-weight: 600; margin: 0; line-height: 1.3;">
                                        Projects Delivered</p>
                                </div>
                            </div>

                            <!-- 3. 150+ Happy Clients -->
                            <div class="col-6 col-md-3"
                                style="border-right: 1px solid rgba(255, 255, 255, 0.15); padding: 0 20px;">
                                <div style="position: relative;">
                                    <div
                                        style="font-size: 40px; color: rgba(255,255,255,0.06); position: absolute; top: -10px; left: 0; pointer-events: none;">
                                        <i class="fas fa-smile"></i></div>
                                    <h4
                                        style="font-size: 36px; font-weight: 800; color: #ffffff; margin-bottom: 6px; line-height: 1; display: inline-block; border-bottom: 2px solid #ea580c; padding-bottom: 4px;">
                                        150+</h4>
                                    <p
                                        style="font-size: 12px; color: rgba(255, 255, 255, 0.9); font-weight: 600; margin: 0; line-height: 1.3;">
                                        Happy Clients</p>
                                </div>
                            </div>

                            <!-- 4. 50+ Expert Developers -->
                            <div class="col-6 col-md-3" style="padding: 0 0 0 20px;">
                                <div style="position: relative;">
                                    <div
                                        style="font-size: 40px; color: rgba(255,255,255,0.06); position: absolute; top: -10px; left: 0; pointer-events: none;">
                                        <i class="fas fa-users-cog"></i></div>
                                    <h4
                                        style="font-size: 36px; font-weight: 800; color: #ffffff; margin-bottom: 6px; line-height: 1; display: inline-block; border-bottom: 2px solid #ea580c; padding-bottom: 4px;">
                                        50+</h4>
                                    <p
                                        style="font-size: 12px; color: rgba(255, 255, 255, 0.9); font-weight: 600; margin: 0; line-height: 1.3;">
                                        Expert Developers</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         4. TECHNOLOGIES WE WORK WITH (100% MATCH TO REFERENCE SCREENSHOT)
    =========================================== -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container">
            <div
                style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 35px 40px; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);">
                <div class="row align-items-center">
                    <!-- Left Title Block -->
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                        <h3
                            style="font-size: 24px; font-weight: 800; color: #0f172a; line-height: 1.25; margin-bottom: 10px;">
                            Technologies <br>We Work <span style="color: #046a38;">With</span>
                        </h3>
                        <p style="font-size: 12.5px; color: #64748b; line-height: 1.55; margin-bottom: 20px;">
                            We use the latest technologies to build secure & future-ready solutions.
                        </p>
                        <!-- <a href="<?= base_url('Home/Technologies') ?>"
                            style="background: #ffffff; color: #0f172a; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 12.5px; font-weight: 700; padding: 9px 18px; text-decoration: none !important; display: inline-flex; align-items: center; gap: 8px; transition: all 0.3s ease;"
                            onmouseover="this.style.borderColor='#046a38'; this.style.color='#046a38';"
                            onmouseout="this.style.borderColor='#cbd5e1'; this.style.color='#0f172a';">
                            View All Technologies <i class="fas fa-arrow-right" style="color: #046a38;"></i>
                        </a> -->
                    </div>

                    <!-- Right 8 Technology Cards in 1 Row -->
                    <div class="col-lg-9 col-md-12">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                            <!-- 1. Laravel -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#ff2d20';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fab fa-laravel" style="font-size: 32px; color: #ff2d20;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">Laravel</span>
                            </div>

                            <!-- 2. PHP -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#777bb4';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fab fa-php" style="font-size: 32px; color: #777bb4;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">PHP</span>
                            </div>

                            <!-- 3. React -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#61dafb';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fab fa-react" style="font-size: 32px; color: #61dafb;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">React</span>
                            </div>

                            <!-- 4. Node.js -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#339933';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fab fa-node-js" style="font-size: 32px; color: #339933;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">Node.js</span>
                            </div>

                            <!-- 5. Flutter -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#02569b';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fas fa-mobile-alt" style="font-size: 30px; color: #02569b;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">Flutter</span>
                            </div>

                            <!-- 6. Python -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#3776ab';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fab fa-python" style="font-size: 32px; color: #3776ab;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">Python</span>
                            </div>

                            <!-- 7. MySQL -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#4479a1';"
                                onmouseout="this.style.transform='none'; this.style.borderColor='#f1f5f9';">
                                <i class="fas fa-database" style="font-size: 30px; color: #4479a1;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">MySQL</span>
                            </div>

                            <!-- 8. Docker -->
                            <div style="background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px; width: 92px; height: 112px; box-shadow: 0 6px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 10px; padding: 12px 6px; transition: all 0.3s ease;"
                                onmouseover="this.style.transform='translateY(-4px)'; this.style.borderColor='#2496ed';"
                                onmouseout="this.style.borderColor='#f1f5f9'; this.style.transform='none';">
                                <i class="fab fa-docker" style="font-size: 32px; color: #2496ed;"></i>
                                <span
                                    style="font-size: 11.5px; font-weight: 700; color: #1e293b; text-align: center;">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         5. OUR RECENT PROJECTS
    =========================================== -->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .project-swiper-container {
            width: 100%;
            position: relative;
            overflow: hidden;
            padding: 10px 0 20px 0 !important;
        }

        .project-swiper-container .swiper-wrapper {
            display: flex !important;
            align-items: stretch;
            transition-timing-function: linear !important;
        }

        .project-swiper-container .swiper-slide {
            height: auto !important;
            display: flex !important;
            flex-direction: column;
            flex-shrink: 0 !important;
        }

        .project-swiper-container .swiper-pagination {
            display: none !important;
        }
    </style>

    <section class="py-5" style="background: #fafafa;">
        <div class="container py-3">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <h2 class="sec-main-h2 mb-0">Our Recent <span>Projects</span></h2>
                    <p class="sec-sub-p mb-0">Some of our awesome works</p>
                </div>
                <a href="<?= base_url('Home/OurProjects') ?>" class="btn btn-outline-dark btn-sm text-nowrap"
                    style="font-weight: 700; border-radius: 8px; white-space: nowrap; flex-shrink: 0;">View All Projects <i
                        class="fas fa-arrow-right"></i></a>
            </div>

            <div class="swiper project-swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    if (!empty($userdata)) {
                        foreach ($userdata as $projects) {
                            $is_link_active = (!isset($projects->link_status) || $projects->link_status == 'true' || $projects->link_status == '1');
                            ?>
                                <div class="swiper-slide">
                                    <div class="project-card-item d-flex flex-column h-100 shadow-sm" style="border-radius: 6px; background: #fff; border: 1px solid #e2e8f0; overflow: hidden; transition: all 0.3s ease; width: 100%;">
                                        <div class="project-card-img-wrap" style="height: 180px; position: relative; overflow: hidden; background: #f1f5f9;">
                                            <img src="<?= base_url('public/uploads/projects/') . $projects->image ?>"
                                                 alt="<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>" 
                                                 style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" />
                                        </div>
                                        <div class="project-card-body p-3 d-flex flex-column flex-grow-1">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="project-tag" style="font-size: 11px; font-weight: 700; background: #ecfdf5; color: #046a38; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;"><?= htmlspecialchars($projects->type) ?></span>
                                                <small class="text-muted" style="font-size: 12px; font-weight: 500;">
                                                    <?php
                                                    $date = !empty($projects->add_date) ? strtotime($projects->add_date) : false;
                                                    echo $date ? date('M Y', $date) : '';
                                                    ?>
                                                </small>
                                            </div>
                                            <h5 class="project-title fw-bold text-dark mb-3" style="font-size: 15px; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;" title="<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>">
                                                <?= htmlspecialchars($projects->title) ?>
                                            </h5>
                                    
                                            <div class="mt-auto pt-2 d-flex align-items-center justify-content-between" style="gap: 6px;">
                                                <?php if ($is_link_active && !empty($projects->url)): ?>
                                                        <a href="<?= $projects->url ?>" target="_blank" class="btn btn-sm flex-grow-1 d-inline-flex align-items-center justify-content-center" style="border-radius: 6px; font-size: 11.5px; font-weight: 600; background: #046a38; color: #fff; border: none; padding: 4px 8px; text-decoration: none; gap: 5px; height: 32px; box-shadow: 0 2px 6px rgba(4, 106, 56, 0.15); transition: all 0.2s ease;">
                                                            <i class="fas fa-external-link-alt" style="font-size: 10px;"></i> Visit
                                                        </a>
                                                <?php endif; ?>
                                                <button onclick="openProjectEnquiryModal('<?= $projects->id ?>', '<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>')" class="btn btn-sm flex-grow-1 d-inline-flex align-items-center justify-content-center" style="border-radius: 6px; font-size: 11.5px; font-weight: 600; background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #fff; border: none; padding: 4px 8px; gap: 5px; height: 32px; box-shadow: 0 2px 6px rgba(37, 99, 235, 0.2); transition: all 0.2s ease;">
                                                    <i class="fas fa-paper-plane" style="font-size: 10px;"></i> Enquiry
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        (function initProjectSwiper() {
            function runSwiper() {
                if (typeof Swiper !== 'undefined') {
                    document.querySelectorAll('.project-swiper-container').forEach(function(container) {
                        if (container.swiper) {
                            try { container.swiper.destroy(true, true); } catch(e) {}
                        }
                        new Swiper(container, {
                            slidesPerView: 4,
                            spaceBetween: 20,
                            loop: true,
                            speed: 4000,
                            autoplay: {
                                delay: 0,
                                disableOnInteraction: false,
                                pauseOnMouseEnter: true
                            },
                            breakpoints: {
                              
                                480: { slidesPerView: 1, spaceBetween: 15 },
                                768: { slidesPerView: 2, spaceBetween: 20 },
                                992: { slidesPerView: 3, spaceBetween: 20 },
                                1024: { slidesPerView: 4, spaceBetween: 20 }
                            }
                        });
                    });
                } else {
                    setTimeout(runSwiper, 100);
                }
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', runSwiper);
            } else {
                runSwiper();
            }
            window.addEventListener('load', runSwiper);
        })();
    </script>

    <!-- ==========================================
         6. OUR EXPERT TEAM (DYNAMIC SWIPER)
    =========================================== -->
    <section class="py-5" style="background: #ffffff;">
        <div class="container py-3">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <h2 class="sec-main-h2 mb-0">Our Expert <span>Team</span></h2>
                    <p class="sec-sub-p mb-0">Experienced. Creative. Passionate.</p>
                </div>
                <a href="<?= base_url('Home/OurExperts') ?>" class="btn btn-outline-dark btn-sm text-nowrap"
                    style="font-weight: 700; border-radius: 8px; white-space: nowrap; flex-shrink: 0;">View All Experts <i
                        class="fas fa-arrow-right"></i></a>
            </div>

            <div class="swiper expert-swiper-container">
                <div class="swiper-wrapper">
                    <?php 
                    if (!empty($expertdata)) {
                        foreach ($expertdata as $expert) { 
                    ?>
                        <div class="swiper-slide">
                            <div class="team-card-box d-flex flex-column h-100 w-100">
                                <div class="team-avatar-wrap">
                                    <img src="<?= base_url('public/uploads/expert/') . $expert->image; ?>" 
                                         alt="<?= htmlspecialchars($expert->name, ENT_QUOTES) ?>" 
                                         loading="lazy" />
                                </div>
                                <h5 class="team-name" title="<?= htmlspecialchars($expert->name, ENT_QUOTES) ?>"><?= htmlspecialchars($expert->name) ?></h5>
                                <p class="team-role"><?= htmlspecialchars($expert->role) ?></p>
                                <div class="team-socials mt-auto">
                                    <a href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?? '9198483820' ?>&text=Hello%20<?= urlencode($expert->name) ?>" target="_blank" aria-label="WhatsApp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.facebook.com/DigiCodersTech/" target="_blank" aria-label="Facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/digicoderstech" target="_blank" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/digicoders/" target="_blank" aria-label="LinkedIn" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.youtube.com/@digicoders" target="_blank" aria-label="YouTube" title="YouTube"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php 
                        } 
                    } 
                    ?>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function initExpertSwiper() {
            function runSwiper() {
                if (typeof Swiper !== 'undefined') {
                    document.querySelectorAll('.expert-swiper-container').forEach(function (container) {
                        if (container.swiper) {
                            try { container.swiper.destroy(true, true); } catch (e) { }
                        }
                        new Swiper(container, {
                            slidesPerView: 5,
                            spaceBetween: 20,
                            loop: true,
                            autoplay: {
                                delay: 3000,
                                disableOnInteraction: false,
                                pauseOnMouseEnter: true
                            },
                            breakpoints: {
                                0: { slidesPerView: 1.5, spaceBetween: 12 },
                                480: { slidesPerView: 2, spaceBetween: 15 },
                                768: { slidesPerView: 3, spaceBetween: 18 },
                                992: { slidesPerView: 4, spaceBetween: 20 },
                                1200: { slidesPerView: 5, spaceBetween: 20 }
                            }
                        });
                    });
                } else {
                    setTimeout(runSwiper, 100);
                }
            }
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', runSwiper);
            } else {
                runSwiper();
            }
            window.addEventListener('load', runSwiper);
        })();
    </script>

    <!-- ==========================================
         7. WHAT OUR CLIENTS SAY
    =========================================== -->
    <!-- <section class="py-5" style="background: #fafafa;">
        <div class="container py-3">
            <div class="sec-title-center">
                <h2 class="sec-main-h2">What Our <span>Clients Say</span></h2>
                <p class="sec-sub-p">Trusted by businesses worldwide</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testi-card-box">
                        <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-p">DigiCoders built an amazing CRM for our business. Their team is professional
                            and highly skilled.</p>
                        <div class="testi-user-wrap">
                            <img src="<?= base_url('public/assets/images/team_male1.png') ?>" alt="Rahul Mehta"
                                class="testi-avatar" />
                            <div>
                                <h5 class="testi-name">Rahul Mehta</h5>
                                <p class="testi-role">Director, Mehta Corporation</p>
                                <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testi-card-box">
                        <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-p">Excellent communication, on-time delivery and great support. Highly
                            recommended!</p>
                        <div class="testi-user-wrap">
                            <img src="<?= base_url('public/assets/images/team_female1.png') ?>" alt="Aisha Fatima"
                                class="testi-avatar" />
                            <div>
                                <h5 class="testi-name">Aisha Fatima</h5>
                                <p class="testi-role">CTO, HealthCare Plus</p>
                                <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="testi-card-box">
                        <div class="testi-quote-icon"><i class="fas fa-quote-left"></i></div>
                        <p class="testi-p">They transformed our idea into a powerful digital product. Great experience!
                        </p>
                        <div class="testi-user-wrap">
                            <img src="<?= base_url('public/assets/images/team_male1.png') ?>" alt="Vivek Patel"
                                class="testi-avatar" />
                            <div>
                                <h5 class="testi-name">Vivek Patel</h5>
                                <p class="testi-role">Founder, SuperMart</p>
                                <div class="testi-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ==========================================
         8. GET IN TOUCH (CONTACT & MAP SECTION WITHOUT FORM)
    =========================================== -->
    <section id="contact" class="py-5" style="background: #ffffff;">
        <div class="container py-3">
            <div class="row g-4">
                <!-- Left Address Info -->
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info-card" style="height: 100%;">
                        <h3 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 6px;">Get In <span style="color: #046a38;">Touch</span></h3>
                        <p style="font-size: 13.5px; color: #64748b; margin-bottom: 25px;">We'd love to hear from you</p>

                        <div class="c-info-item">
                            <div class="c-info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div>
                                <p class="c-info-lbl">Address</p>
                                <p class="c-info-val">2nd Floor, B-36, Sector O, Near Ram Ram Bank Chauraha, Aliganj, Lucknow, UP - 226021</p>
                            </div>
                        </div>

                        <div class="c-info-item">
                            <div class="c-info-icon"><i class="fas fa-phone-alt"></i></div>
                            <div>
                                <p class="c-info-lbl">Phone</p>
                                <p class="c-info-val">+91 919 848 3820 | 0522-4235604</p>
                            </div>
                        </div>

                        <div class="c-info-item">
                            <div class="c-info-icon"><i class="fas fa-envelope"></i></div>
                            <div>
                                <p class="c-info-lbl">Email</p>
                                <p class="c-info-val">info@digicoders.in</p>
                            </div>
                        </div>

                        <div class="c-info-item">
                            <div class="c-info-icon"><i class="fas fa-clock"></i></div>
                            <div>
                                <p class="c-info-lbl">Working Hours</p>
                                <p class="c-info-val">Mon - Sat: 10:00 AM - 7:00 PM</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Map Container -->
                <div class="col-lg-7 col-md-12">
                    <div style="border-radius: 20px; overflow: hidden; height: 100%; min-height: 380px; border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d211.37018978878302!2d80.9493697!3d26.9044997!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90f852511b%3A0xea3004cdf494ecbb!2sDigiCoders%20Technologies%20Private%20Limited%2C%20Best%20Software%2FWebsite%2FMobile%20App%20Development%20Company%20in%20Lucknow!5e1!3m2!1sen!2sin!4v1785160700575!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         9. LATEST INSIGHTS (BLOGS)
    =========================================== -->
    <!-- <section class="py-5" style="background: #fafafa;">
        <div class="container py-3">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <h2 class="sec-main-h2 mb-0">Latest <span>Insights</span></h2>
                    <p class="sec-sub-p mb-0">Read our latest blogs & industry news</p>
                </div>
                <a href="<?= base_url('Home/Blogs') ?>" class="btn btn-outline-dark btn-sm text-nowrap"
                    style="font-weight: 700; border-radius: 8px; white-space: nowrap; flex-shrink: 0;">View All Blogs <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card-item">
                        <div class="blog-card-img">
                            <img src="<?= base_url('public/assets/images/cta_project_illustration.png') ?>"
                                alt="Web Development Trends" />
                        </div>
                        <div class="blog-card-body">
                            <span class="blog-cat">Technology</span>
                            <h4 class="blog-title">Top 10 Web Development Trends in 2024</h4>
                            <p class="blog-date">May 18, 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card-item">
                        <div class="blog-card-img">
                            <img src="<?= base_url('public/assets/images/software_company_workspace_no_people.png') ?>"
                                alt="Custom CRM" />
                        </div>
                        <div class="blog-card-body">
                            <span class="blog-cat">Business</span>
                            <h4 class="blog-title">Why Your Business Needs a Custom CRM?</h4>
                            <p class="blog-date">May 15, 2024</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="blog-card-item">
                        <div class="blog-card-img">
                            <img src="<?= base_url('public/assets/images/digicoders_reception_office.png') ?>"
                                alt="Laravel Benefits" />
                        </div>
                        <div class="blog-card-body">
                            <span class="blog-cat">Development</span>
                            <h4 class="blog-title">Benefits of Laravel for Modern Web Applications</h4>
                            <p class="blog-date">May 09, 2024</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <?php include('include/jslinks.php') ?>
    <?php include('include/project_enquiry_modal.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>