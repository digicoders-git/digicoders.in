<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kanpur Branch | DigiCoders Technologies Pvt. Ltd.</title>
    <meta name="description"
        content="Our Kanpur branch is dedicated to delivering innovative digital solutions and exceptional IT services to businesses across Kanpur and nearby regions.">
    <?php include('include/headerlinks.php') ?>

    <style>
        /* ==========================================================================
           100% Exact Match Styling for Kanpur Branch Page with Edge-to-Edge Hero Image
           ========================================================================== */

        body {
            font-family: 'Poppins', sans-serif !important;
            color: #334155;
            background-color: #ffffff;
        }

        .text-green {
            color: #10b981 !important;
        }

        .heading-accent-line {
            width: 36px;
            height: 4px;
            background: #10b981;
            border-radius: 2px;
            margin-bottom: 10px;
        }

        /* 1. Hero Section Edge-to-Edge Right Image (Light Theme) */
        .kanpur-hero-sec {
            position: relative !important;
            background: linear-gradient(135deg, #f8fafc 0%, #f0fdf4 45%, #e6f7ec 100%) !important;
            padding: 50px 0 45px 0 !important;
            color: #0f172a !important;
            overflow: hidden !important;
            min-height: 540px !important;
            display: flex !important;
            align-items: center !important;
        }

        .kanpur-hero-bg-img {
            position: absolute !important;
            top: 0 !important;
            right: 0 !important;
            width: 50% !important;
            height: 100% !important;
            z-index: 1 !important;
        }

        .kanpur-hero-overlay {
            display: none !important;
        }

        .kanpur-breadcrumb {
            font-size: 13px;
            color: #475569;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .kanpur-breadcrumb a {
            color: #475569;
            text-decoration: none;
        }

        .kanpur-breadcrumb a:hover {
            color: #046a38;
        }

        .kanpur-hero-title {
            font-size: 38px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            line-height: 1.2 !important;
            margin-bottom: 6px !important;
            letter-spacing: -0.5px !important;
        }

        .kanpur-hero-brand {
            font-size: 15px !important;
            font-weight: 700 !important;
            margin-bottom: 18px !important;
            display: flex !important;
            align-items: center !important;
            gap: 6px !important;
        }

        .brand-coders {
            color: #ea580c !important;
            font-weight: 800 !important;
        }

        .brand-tech {
            color: #046a38 !important;
            font-weight: 700 !important;
        }

        .kanpur-hero-desc {
            font-size: 14px !important;
            color: #475569 !important;
            line-height: 1.65 !important;
            max-width: 440px !important;
            margin-bottom: 22px !important;
        }

        .kanpur-contact-list {
            list-style: none !important;
            padding: 0 !important;
            margin: 0 0 24px 0 !important;
            display: flex !important;
            flex-direction: column !important;
            gap: 12px !important;
        }

        .kanpur-contact-item {
            display: flex !important;
            align-items: center !important;
            gap: 12px !important;
            font-size: 13.5px !important;
            color: #1e293b !important;
            font-weight: 600 !important;
        }

        .kanpur-c-icon {
            width: 32px !important;
            height: 32px !important;
            border-radius: 50% !important;
            background: #046a38 !important;
            color: #ffffff !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 13px !important;
            flex-shrink: 0 !important;
            box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2) !important;
        }

        /* Floating Branches Card on Top Right */
        .hero-floating-branch-card {
            display: inline-block !important;
            background: #ffffff !important;
            border-radius: 14px !important;
            padding: 12px !important;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
            width: 240px !important;
            text-align: left !important;
            position: absolute !important;
            top: -20px !important;
            right: 0 !important;
            z-index: 10 !important;
        }

        .branch-card-item-link {
            display: flex !important;
            align-items: center !important;
            gap: 10px !important;
            padding: 10px 14px !important;
            border-radius: 8px !important;
            color: #1e293b !important;
            font-size: 13.5px !important;
            font-weight: 600 !important;
            text-decoration: none !important;
            transition: all 0.2s ease !important;
            margin-bottom: 4px !important;
        }

        .branch-card-item-link:last-child {
            margin-bottom: 0 !important;
        }

        .branch-card-item-link:hover {
            background: #f1f5f9 !important;
            color: #046a38 !important;
        }

        .branch-card-item-link.active {
            background: #046a38 !important;
            color: #ffffff !important;
        }

        /* Hero Bottom Badges Bar */
        .kanpur-badges-bar {
            background: #ffffff !important;
            border: 1px solid #bbf7d0 !important;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05) !important;
            border-radius: 14px !important;
            padding: 12px 18px !important;
            margin-top: 20px !important;
            display: flex !important;
            align-items: center !important;
            justify-content: space-between !important;
            gap: 10px !important;
            max-width: 460px !important;
        }

        .kanpur-badge-item {
            display: flex !important;
            align-items: center !important;
            gap: 9px !important;
        }

        .kanpur-b-icon {
            width: 34px !important;
            height: 34px !important;
            border-radius: 50% !important;
            background: #ecfdf5 !important;
            color: #046a38 !important;
            border: 1px solid #a7f3d0 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 14px !important;
            flex-shrink: 0 !important;
        }

        .kanpur-b-title {
            font-size: 12px !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            margin: 0 !important;
            line-height: 1.2 !important;
            white-space: nowrap !important;
        }

        .kanpur-b-sub {
            font-size: 11px !important;
            color: #64748b !important;
            margin: 0 !important;
            white-space: nowrap !important;
        }

        /* 2. About Section */
        .sec-padding {
            padding: 65px 0 !important;
        }

        .bg-light-gray {
            background-color: #f8fafc !important;
        }

        .kanpur-sec-heading {
            font-size: 30px !important;
            font-weight: 800 !important;
            color: #0f172a !important;
            margin-bottom: 20px !important;
        }

        .kanpur-about-p {
            font-size: 14.5px !important;
            color: #64748b !important;
            line-height: 1.7 !important;
            margin-bottom: 16px !important;
        }

        /* 4 Stat Cards */
        .stat-card-box {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 24px 16px !important;
            text-align: center !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important;
            transition: transform 0.25s ease, box-shadow 0.25s ease !important;
            height: 100% !important;
        }

        .stat-card-box:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.07) !important;
        }

        .stat-circle-icon {
            width: 48px !important;
            height: 48px !important;
            border-radius: 50% !important;
            background: #ecfdf5 !important;
            color: #10b981 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 20px !important;
            margin: 0 auto 14px auto !important;
        }

        .stat-circle-icon.orange {
            background: #fff7ed !important;
            color: #f97316 !important;
        }

        .stat-num-val {
            font-size: 26px !important;
            font-weight: 800 !important;
            margin-bottom: 4px !important;
            line-height: 1.1 !important;
        }

        .stat-num-val.orange {
            color: #f97316 !important;
        }

        .stat-num-val.green {
            color: #10b981 !important;
        }

        .stat-num-val.gold {
            color: #d97706 !important;
        }

        .stat-label-text {
            font-size: 13px !important;
            color: #64748b !important;
            font-weight: 500 !important;
            margin: 0 !important;
        }

        /* 3. Services Section */
        .service-card-item {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 26px 20px !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02) !important;
            transition: all 0.3s ease !important;
            height: 100% !important;
        }

        .service-card-item:hover {
            transform: translateY(-5px) !important;
            box-shadow: 0 14px 35px rgba(0, 0, 0, 0.07) !important;
            border-color: #a7f3d0 !important;
        }

        .serv-icon-box {
            width: 44px !important;
            height: 44px !important;
            border-radius: 10px !important;
            background: #ecfdf5 !important;
            border: 1px solid #a7f3d0 !important;
            color: #10b981 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 20px !important;
            margin-bottom: 18px !important;
        }

        .serv-card-title {
            font-size: 17px !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            margin-bottom: 10px !important;
        }

        .serv-card-desc {
            font-size: 13.5px !important;
            color: #64748b !important;
            line-height: 1.6 !important;
            margin: 0 !important;
        }

        /* 4. Team Section */
        .team-card-item {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 24px 16px !important;
            text-align: center !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02) !important;
            transition: all 0.25s ease !important;
            height: 100% !important;
        }

        .team-card-item:hover {
            transform: translateY(-4px) !important;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06) !important;
        }

        .team-avatar-img {
            width: 90px !important;
            height: 90px !important;
            border-radius: 50% !important;
            object-fit: cover !important;
            margin: 0 auto 14px auto !important;
            border: 3px solid #f1f5f9 !important;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06) !important;
        }

        .team-name {
            font-size: 16px !important;
            font-weight: 700 !important;
            color: #0f172a !important;
            margin-bottom: 2px !important;
        }

        .team-role {
            font-size: 12.5px !important;
            color: #64748b !important;
            margin-bottom: 14px !important;
            font-weight: 500 !important;
        }

        .team-socials {
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
        }

        .team-s-icon {
            width: 26px !important;
            height: 26px !important;
            border-radius: 50% !important;
            background: #f1f5f9 !important;
            color: #475569 !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 11px !important;
            text-decoration: none !important;
            transition: all 0.2s ease !important;
        }

        .team-s-icon:hover {
            background: #10b981 !important;
            color: #ffffff !important;
        }

        /* 5. Get In Touch Section */
        .touch-info-box {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 28px 22px !important;
            height: 100% !important;
        }

        .touch-info-item {
            display: flex !important;
            align-items: flex-start !important;
            gap: 14px !important;
            margin-bottom: 22px !important;
        }

        .touch-info-item:last-child {
            margin-bottom: 0 !important;
        }

        .touch-icon-wrap {
            width: 38px !important;
            height: 38px !important;
            border-radius: 50% !important;
            background: #046a38 !important;
            color: #ffffff !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            font-size: 15px !important;
            flex-shrink: 0 !important;
        }

        .touch-label {
            font-size: 12px !important;
            text-transform: uppercase !important;
            letter-spacing: 0.5px !important;
            font-weight: 700 !important;
            color: #64748b !important;
            margin-bottom: 2px !important;
        }

        .touch-val {
            font-size: 13.5px !important;
            font-weight: 600 !important;
            color: #1e293b !important;
            line-height: 1.4 !important;
            margin: 0 !important;
        }

        .touch-form-box {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 28px !important;
            height: 100% !important;
        }

        .k-form-control {
            width: 100% !important;
            height: 44px !important;
            padding: 0 14px !important;
            border-radius: 8px !important;
            border: 1px solid #cbd5e1 !important;
            background: #ffffff !important;
            font-size: 13.5px !important;
            color: #0f172a !important;
            outline: none !important;
            margin-bottom: 16px !important;
            transition: border-color 0.2s ease !important;
        }

        .k-form-control:focus {
            border-color: #10b981 !important;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1) !important;
        }

        textarea.k-form-control {
            height: 100px !important;
            padding: 10px 14px !important;
            resize: vertical !important;
        }

        .k-btn-send {
            background: #046a38 !important;
            color: #ffffff !important;
            font-size: 15px !important;
            font-weight: 700 !important;
            height: 46px !important;
            border-radius: 8px !important;
            border: none !important;
            width: 100% !important;
            cursor: pointer !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 8px !important;
            transition: background 0.2s ease !important;
        }

        .k-btn-send:hover {
            background: #03522b !important;
        }

        .kanpur-map-card {
            background: #ffffff !important;
            border: 1px solid #e2e8f0 !important;
            border-radius: 16px !important;
            padding: 12px !important;
            height: 100% !important;
            position: relative !important;
        }

        .kanpur-map-frame {
            width: 100% !important;
            height: 100% !important;
            min-height: 320px !important;
            border: 0 !important;
            border-radius: 12px !important;
        }

        /* CTA Banner Section Styles */
        .cta-project-banner {
            background: linear-gradient(135deg, #094723 0%, #116834 60%, #dd520f 100%) !important;
            border-radius: 20px !important;
            padding: 22px 48px !important;
            margin-top: 55px !important;
            position: relative !important;
            overflow: hidden !important;
            box-shadow: 0 15px 40px rgba(9, 71, 35, 0.25) !important;
            color: #ffffff !important;
        }

        .cta-banner-title {
            font-size: 32px !important;
            font-weight: 800 !important;
            color: #ffffff !important;
            margin-bottom: 6px !important;
            line-height: 1.2 !important;
        }

        .cta-banner-sub {
            font-size: 15px !important;
            color: rgba(255, 255, 255, 0.9) !important;
            margin-bottom: 20px !important;
            font-weight: 400 !important;
        }

        .cta-consult-btn {
            background: #ffffff !important;
            color: #094723 !important;
            padding: 12px 24px !important;
            border-radius: 12px !important;
            font-size: 14.5px !important;
            font-weight: 700 !important;
            border: none !important;
            outline: none !important;
            display: inline-flex !important;
            align-items: center !important;
            gap: 10px !important;
            text-decoration: none !important;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15) !important;
            transition: transform 0.2s ease, box-shadow 0.2s ease !important;
            cursor: pointer !important;
        }

        .cta-consult-btn:hover {
            transform: translateY(-2px) !important;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2) !important;
            color: #094723 !important;
        }

        .cta-illustration-img {
            max-width: 100% !important;
            height: auto !important;
            max-height: 290px !important;
            object-fit: contain !important;
            margin-top: -30px !important;
            margin-bottom: -30px !important;
            transform: scale(1.18) !important;
            transform-origin: center right !important;
        }

        @media (max-width: 991px) {
            .kanpur-hero-title {
                font-size: 36px !important;
            }

            .kanpur-hero-bg-img {
                width: 100%;
                opacity: 0.25;
            }

            .kanpur-hero-overlay {
                background: rgba(7, 34, 26, 0.85) !important;
            }

            .hero-floating-branch-card {
                position: static;
                margin-top: 20px;
                width: 100%;
            }

            .cta-project-banner {
                padding: 24px 20px !important;
                text-align: center;
            }

            .cta-banner-title {
                font-size: 26px !important;
            }

            .cta-illustration-img {
                margin-top: 15px !important;
                margin-bottom: 0 !important;
                transform: scale(1) !important;
                max-height: 200px !important;
            }
        }
    </style>
</head>

<body>

    <?php include('include/header.php') ?>

    <!-- 1. HERO SECTION WITH EXACT GREEN CURVED RIBBON PARTITION -->
    <section class="kanpur-hero-sec"
        style="position: relative; background: #ffffff; padding: 50px 0 45px 0; min-height: 540px; overflow: hidden; display: flex; align-items: center;">

        <!-- Desktop Right Side Image (Hidden on Mobile/Tablet) -->
        <div class="d-none d-lg-flex"
            style="position: absolute; top: 0; right: 0; width: 50%; height: 100%; z-index: 1; align-items: center; justify-content: center; padding: 20px 40px 20px 20px;">
            <img src="<?= base_url('public/assets/images/kanpur_hero_dashboard.jpg') ?>"
                alt="DigiCoders Kanpur Software Development & IT Dashboard"
                style="width: 100%; max-height: 90%; object-fit: contain; object-position: center center; filter: drop-shadow(0 15px 35px rgba(0,0,0,0.08));" />
        </div>

        <!-- Green Curved Ribbon Partition SVG (Hidden on Mobile/Tablet) -->
        <svg class="d-none d-lg-block"
            style="position: absolute; top: 0; right: 43%; width: 12%; height: 100%; z-index: 3; pointer-events: none;"
            viewBox="0 0 200 800" preserveAspectRatio="none">
            <defs>
                <linearGradient id="kanpurGreenRibbonGrad" x1="0%" y1="0%" x2="100%" y2="100%">
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
            <path d="M 20,0 Q 180,400 20,800 L 70,800 Q 230,400 70,0 Z" fill="url(#kanpurGreenRibbonGrad)" />
        </svg>

        <div class="container position-relative" style="z-index: 5;">
            <div class="row align-items-center">
                <!-- Left Side Content -->
                <div class="col-lg-5 col-md-12" style="max-width: 480px;">
                    <!-- Breadcrumb -->
                    <div class="kanpur-breadcrumb"
                        style="font-size: 13px; color: #475569; margin-bottom: 16px; display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
                        <a href="<?= base_url() ?>" style="color: #475569; text-decoration: none;">Home</a>
                        <i class="fas fa-chevron-right" style="font-size: 10px;"></i>
                        <span>Our Branches</span>
                        <i class="fas fa-chevron-right" style="font-size: 10px;"></i>
                        <span style="color: #046a38; font-weight: 600;">Kanpur</span>
                    </div>

                    <h1 style="font-size: 38px; font-weight: 800; color: #0f172a; line-height: 1.2; margin-bottom: 6px; letter-spacing: -0.5px;"
                        class="hero-branch-h1">
                        Kanpur <span style="color: #046a38;">Branch</span>
                    </h1>

                    <div
                        style="font-size: 15px; font-weight: 700; margin-bottom: 18px; display: flex; align-items: center; gap: 6px;">
                        <span style="color: #ea580c; font-weight: 800;">Digi{Coders}</span>
                        <span style="color: #046a38; font-weight: 700;">Technologies Pvt. Ltd.</span>
                    </div>

                    <p
                        style="font-size: 14px; color: #475569; line-height: 1.65; max-width: 440px; margin-bottom: 22px;">
                        Our Kanpur branch is dedicated to delivering innovative digital solutions and exceptional IT
                        services to businesses across Kanpur and nearby regions.
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
                            <span>340, S-Block, Near Annapoorna Hospital, Shehnai Chauraha,
                                Yashoda
                                Nagar, Kanpur, Uttar Pradesh - 208025</span>
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 12px; font-size: 13.5px; color: #1e293b; font-weight: 600;">
                            <div
                                style="width: 32px; height: 32px; border-radius: 50%; background: #046a38; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2);">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <span>+91 9198483820, +91 639 429 6293</span>
                        </li>
                        <li
                            style="display: flex; align-items: center; gap: 12px; font-size: 13.5px; color: #1e293b; font-weight: 600;">
                            <div
                                style="width: 32px; height: 32px; border-radius: 50%; background: #046a38; color: #ffffff; display: flex; align-items: center; justify-content: center; font-size: 13px; flex-shrink: 0; box-shadow: 0 4px 10px rgba(4, 106, 56, 0.2);">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>digicoderstech@gmail.com</span>
                        </li>
                    </ul>

                    <!-- Bottom Badges Bar (Sleek Horizontal Row) -->
                    <div
                        style="background: #ffffff; border: 1px solid #bbf7d0; box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05); border-radius: 14px; padding: 10px 12px; margin-top: 20px; display: flex; align-items: center; justify-content: space-between; gap: 6px; width: 100%; max-width: 480px;">
                        <div style="display: flex; align-items: center; gap: 6px;">
                            <div
                                style="width: 30px; height: 30px; border-radius: 50%; background: #ecfdf5; color: #046a38; border: 1px solid #a7f3d0; display: flex; align-items: center; justify-content: center; font-size: 12px; flex-shrink: 0;">
                                <i class="fas fa-shield-alt"></i>
                            </div>
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
                                <i class="fas fa-user-check"></i>
                            </div>
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
                                <i class="fas fa-bullseye"></i>
                            </div>
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
                        <img src="<?= base_url('public/assets/images/kanpur_hero_dashboard.jpg') ?>"
                            alt="DigiCoders Kanpur IT Services"
                            style="max-height: 280px; width: auto; max-width: 100%; object-fit: contain; border-radius: 12px; filter: drop-shadow(0 10px 25px rgba(0,0,0,0.08));" />
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 2. ABOUT OUR KANPUR BRANCH -->
    <section class="sec-padding" style="background: #ffffff;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Info -->
                <div class="col-lg-5 col-md-12 mb-4 mb-lg-0">
                    <h2 class="kanpur-sec-heading"
                        style="font-size: 32px !important; font-weight: 800 !important; margin-bottom: 8px !important;">
                        About Our <span style="color: #046a38;">Kanpur Branch</span>
                    </h2>
                    <!-- Orange Accent Line Below Title -->
                    <div
                        style="width: 32px; height: 3.5px; background: #f97316; border-radius: 2px; margin-bottom: 24px;">
                    </div>

                    <p class="kanpur-about-p">
                        Our Kanpur branch plays a key role in providing top-notch IT solutions, custom software
                        development, website development, mobile app development, and digital marketing services.
                    </p>
                    <p class="kanpur-about-p">
                        We are committed to helping businesses grow and achieve success through technology and
                        innovation.
                    </p>
                </div>

                <!-- Right 4 Stat Cards in 1 Row -->
                <div class="col-lg-7 col-md-12">
                    <div class="row g-3">
                        <!-- 1. 5+ Years -->
                        <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0">
                            <div class="stat-card-box">
                                <div class="stat-circle-icon"><i class="fas fa-history"></i></div>
                                <h3 class="stat-num-val orange">5+</h3>
                                <p class="stat-label-text">Years in Kanpur</p>
                            </div>
                        </div>

                        <!-- 2. 200+ Projects -->
                        <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0">
                            <div class="stat-card-box">
                                <div class="stat-circle-icon"><i class="fas fa-project-diagram"></i></div>
                                <h3 class="stat-num-val orange">200+</h3>
                                <p class="stat-label-text">Projects Delivered</p>
                            </div>
                        </div>

                        <!-- 3. 100+ Happy Clients -->
                        <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0">
                            <div class="stat-card-box">
                                <div class="stat-circle-icon"><i class="fas fa-smile"></i></div>
                                <h3 class="stat-num-val orange">100+</h3>
                                <p class="stat-label-text">Happy Clients</p>
                            </div>
                        </div>

                        <!-- 4. 25+ Expert Developers -->
                        <div class="col-lg-3 col-md-6 col-6 mb-3 mb-lg-0">
                            <div class="stat-card-box">
                                <div class="stat-circle-icon"><i class="fas fa-laptop-code"></i></div>
                                <h3 class="stat-num-val orange">25+</h3>
                                <p class="stat-label-text">Expert Developers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. OUR SERVICES IN KANPUR -->
    <section class="sec-padding" style="background: #ffffff;">
        <div class="container-fluid" style="max-width: 1320px;">
            <div class="text-center mb-5">
                <h2 class="kanpur-sec-heading"
                    style="font-size: 32px !important; font-weight: 800 !important; margin-bottom: 0 !important;">
                    Our Services <span style="color: #046a38;">in Kanpur</span>
                </h2>
            </div>

            <div class="row row-cols-lg-5 row-cols-md-3 row-cols-1 g-3">
                <!-- 1. Web Development -->
                <div class="col mb-3">
                    <div class="service-card-item">
                        <div class="serv-icon-box"><i class="fas fa-desktop"></i></div>
                        <h4 class="serv-card-title">Web Development</h4>
                        <p class="serv-card-desc">Modern, fast & responsive websites that grow your business.</p>
                    </div>
                </div>

                <!-- 2. Mobile App Development -->
                <div class="col mb-3">
                    <div class="service-card-item">
                        <div class="serv-icon-box"><i class="fas fa-mobile-alt"></i></div>
                        <h4 class="serv-card-title">Mobile App Development</h4>
                        <p class="serv-card-desc">Android & iOS apps that deliver seamless user experience.</p>
                    </div>
                </div>

                <!-- 3. CRM Solutions -->
                <div class="col mb-3">
                    <div class="service-card-item">
                        <div class="serv-icon-box"><i class="fas fa-project-diagram"></i></div>
                        <h4 class="serv-card-title">CRM Solutions</h4>
                        <p class="serv-card-desc">Smart CRM systems to manage leads, customers and sales.</p>
                    </div>
                </div>

                <!-- 4. Digital Marketing -->
                <div class="col mb-3">
                    <div class="service-card-item">
                        <div class="serv-icon-box"><i class="fas fa-bullhorn"></i></div>
                        <h4 class="serv-card-title">Digital Marketing</h4>
                        <p class="serv-card-desc">Boost your brand visibility and get more leads with our digital
                            strategies.</p>
                    </div>
                </div>

                <!-- 5. Software Development -->
                <div class="col mb-3">
                    <div class="service-card-item">
                        <div class="serv-icon-box"><i class="fas fa-code"></i></div>
                        <h4 class="serv-card-title">Software Development</h4>
                        <p class="serv-card-desc">Custom software solutions built for your unique business needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- ==========================================
         OUR RECENT PROJECTS
    =========================================== -->
        <!-- Swiper CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <style>
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
                                    <div class="project-card-item d-flex flex-column h-100 shadow-sm"
                                        style="border-radius: 6px; background: #fff; border: 1px solid #e2e8f0; overflow: hidden; transition: all 0.3s ease; width: 100%;">
                                        <div class="project-card-img-wrap"
                                            style="height: 180px; position: relative; overflow: hidden; background: #f1f5f9;">
                                            <img src="<?= base_url('public/uploads/projects/') . $projects->image ?>"
                                                alt="<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>"
                                                style="width: 100%; height: 100%; object-fit: cover;" loading="lazy" />
                                        </div>
                                        <div class="project-card-body p-3 d-flex flex-column flex-grow-1">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <span class="project-tag"
                                                    style="font-size: 11px; font-weight: 700; background: #ecfdf5; color: #046a38; padding: 4px 10px; border-radius: 6px; text-transform: uppercase;"><?= htmlspecialchars($projects->type) ?></span>
                                                <small class="text-muted" style="font-size: 12px; font-weight: 500;">
                                                    <?php
                                                    $date = !empty($projects->add_date) ? strtotime($projects->add_date) : false;
                                                    echo $date ? date('M Y', $date) : '';
                                                    ?>
                                                </small>
                                            </div>
                                            <h5 class="project-title fw-bold text-dark mb-3"
                                                style="font-size: 15px; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"
                                                title="<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>">
                                                <?= htmlspecialchars($projects->title) ?>
                                            </h5>

                                            <div class="mt-auto pt-2 d-flex align-items-center justify-content-between"
                                                style="gap: 6px;">
                                                <?php if ($is_link_active && !empty($projects->url)): ?>
                                                    <a href="<?= $projects->url ?>" target="_blank"
                                                        class="btn btn-sm flex-grow-1 d-inline-flex align-items-center justify-content-center"
                                                        style="border-radius: 6px; font-size: 11.5px; font-weight: 600; background: #046a38; color: #fff; border: none; padding: 4px 8px; text-decoration: none; gap: 5px; height: 32px; box-shadow: 0 2px 6px rgba(4, 106, 56, 0.15); transition: all 0.2s ease;">
                                                        <i class="fas fa-external-link-alt" style="font-size: 10px;"></i> Visit
                                                    </a>
                                                <?php endif; ?>
                                                <button
                                                    onclick="openProjectEnquiryModal('<?= $projects->id ?>', '<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>')"
                                                    class="btn btn-sm flex-grow-1 d-inline-flex align-items-center justify-content-center"
                                                    style="border-radius: 6px; font-size: 11.5px; font-weight: 600; background: linear-gradient(135deg, #2563eb, #1d4ed8); color: #fff; border: none; padding: 4px 8px; gap: 5px; height: 32px; box-shadow: 0 2px 6px rgba(37, 99, 235, 0.2); transition: all 0.2s ease;">
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
                        document.querySelectorAll('.project-swiper-container').forEach(function (container) {
                            if (container.swiper) {
                                try { container.swiper.destroy(true, true); } catch (e) { }
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

        <!-- 4. OUR TEAM IN KANPUR (SWIPER) -->
        <section class="py-5" style="background: #ffffff;">
            <div class="container py-3">
                <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                    <div>
                        <h2 class="kanpur-sec-heading mb-0">Our Team <span class="text-green">in Kanpur</span></h2>
                        <p class="text-muted small mb-0" style="font-size: 13px;">Experienced. Creative. Passionate.</p>
                    </div>
                    <a href="<?= base_url('Home/OurExperts') ?>" class="btn btn-outline-dark btn-sm text-nowrap"
                        style="font-weight: 700; border-radius: 8px; white-space: nowrap; flex-shrink: 0;">View All Experts <i
                            class="fas fa-arrow-right"></i></a>
                </div>

                <div class="swiper expert-swiper-container">
                    <div class="swiper-wrapper">
                        <?php 
                        $kanpur_team = [
                            ['name' => 'Anurag Bajpei', 'role' => 'Branch Head', 'image' => 'anurag-bajpei-branch-head-digicoders-kanpur.jpeg'],
                            ['name' => 'Aditya Sharma', 'role' => 'Full Stack Developer', 'image' => 'aditya-sharma-full-stack-developer-digicoders-kanpur.jpeg'],
                            ['name' => 'Saleem', 'role' => 'Full Stack Developer', 'image' => 'saleem-full-stack-developer-digicoders-kanpur.jpeg'],
                            ['name' => 'Kamini', 'role' => 'HR Executive', 'image' => 'kamini-hr-executive-digicoders-kanpur.jpeg'],
                            ['name' => 'Richa', 'role' => 'HR Executive', 'image' => 'richa-hr-executive-digicoders-kanpur.jpeg'],
                            ['name' => 'Shivani', 'role' => 'HR Executive', 'image' => 'shivani-hr-executive-digicoders-kanpur.jpeg']
                        ];
                        foreach ($kanpur_team as $member) { 
                        ?>
                            <div class="swiper-slide">
                                <div class="team-card-box d-flex flex-column h-100 w-100">
                                    <div class="team-avatar-wrap">
                                        <img src="<?= base_url('public/assets/images/team/kanpurteam/') . $member['image']; ?>" 
                                             alt="<?= htmlspecialchars($member['name'], ENT_QUOTES) ?>" 
                                             loading="lazy" />
                                    </div>
                                    <h5 class="team-name" title="<?= htmlspecialchars($member['name'], ENT_QUOTES) ?>"><?= htmlspecialchars($member['name']) ?></h5>
                                    <p class="team-role"><?= htmlspecialchars($member['role']) ?></p>
                                    <div class="team-socials mt-auto">
                                        <a href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?? '9198483820' ?>&text=Hello%20<?= urlencode($member['name']) ?>" target="_blank" aria-label="WhatsApp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                                        <a href="https://facebook.com/DigiCodersTech/" target="_blank" aria-label="Facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://www.instagram.com/digicoderstech/" target="_blank" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
                                        <a href="https://www.linkedin.com/company/digicoderstech" target="_blank" aria-label="LinkedIn" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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

        <!-- 5. GET IN TOUCH - KANPUR BRANCH -->
        <section class="sec-padding" style="background: #ffffff;">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="kanpur-sec-heading" style="font-size: 32px !important; font-weight: 800 !important;">
                        Get In Touch – <span style="color: #046a38;">Kanpur Branch</span>
                    </h2>
                </div>

                <div class="row g-4">
                    <!-- Col 1: Contact Info (50% Width) -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="touch-info-box">
                            <div class="touch-info-item">
                                <div class="touch-icon-wrap"><i class="fas fa-map-marker-alt"></i></div>
                                <div>
                                    <p class="touch-label">Address</p>
                                    <p class="touch-val">340, S-Block, Near Annapoorna Hospital, Shehnai Chauraha,
                                        Yashoda
                                        Nagar, Kanpur, Uttar Pradesh - 208025</p>
                                </div>
                            </div>

                            <div class="touch-info-item">
                                <div class="touch-icon-wrap"><i class="fas fa-phone-alt"></i></div>
                                <div>
                                    <p class="touch-label">Phone</p>
                                    <p class="touch-val">+91 9198483820 , +91 6394296293</p>
                                </div>
                            </div>

                            <div class="touch-info-item">
                                <div class="touch-icon-wrap"><i class="fas fa-envelope"></i></div>
                                <div>
                                    <p class="touch-label">Email</p>
                                    <p class="touch-val">digicoderstech@gmail.com</p>
                                </div>
                            </div>

                            <div class="touch-info-item">
                                <div class="touch-icon-wrap"><i class="fas fa-clock"></i></div>
                                <div>
                                    <p class="touch-label">Working Hours</p>
                                    <p class="touch-val">Mon - Sat: 10:00 AM - 7:00 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Col 2: Map Card (50% Width) -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="kanpur-map-card">
                            <iframe class="kanpur-map-frame"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3396.6310232277656!2d80.3252139!3d26.4092109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c47cc6b1e061f%3A0xc3429fe37a9666a7!2sDigiCoders%20Technologies%20-%20Kanpur!5e1!3m2!1sen!2sin!4v1785050550992!5m2!1sen!2sin"
                                allowfullscreen="" loading="lazy"
                                referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        </div>
                    </div>
                </div>

                <!-- 6. CTA BANNER SECTION (Have a Project in Mind?) -->
                <div class="cta-project-banner">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                            <h2 class="cta-banner-title">Have a Project in Mind?</h2>
                            <p class="cta-banner-sub">Let's discuss your idea and build something great together.</p>
                            <a href="javascript:void(0);" onclick="openProjectEnquiryModal('', 'Free Consultation Request')"
                                class="cta-consult-btn">
                                Get Free Consultation <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-12 text-center text-lg-end">
                            <img src="<?= base_url('public/assets/images/cta_project_illustration.png') ?>"
                                alt="Project Discussion Illustration" class="cta-illustration-img" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include('include/jslinks.php') ?>
        <?php include('include/project_enquiry_modal.php') ?>
        <?php include('include/footer.php') ?>

</body>

</html>