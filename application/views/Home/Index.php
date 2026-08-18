<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Best IT Company in Lucknow - DigiCoders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="description"
        content="Our services include mobile app and website development, website design, internet marketing, and more. Call us at 9198483820 for all your website needs!">

    <?php include('include/headerlinks.php') ?>

    <?php if (!empty($sliderdata)): ?>
        <link rel="preload" as="image" href="<?= base_url('public') ?>/uploads/sliders/<?= $sliderdata[0]->image ?>"
            fetchpriority="high">
    <?php endif; ?>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <style>
        .expert-team-carousel .item img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
            border-radius: 12px;
        }

        #banner_slider {
            padding: 0 50px;
        }

        #banner_slider .item img {
            max-width: 100%;
            height: auto;
            object-fit: contain;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            #banner_slider {
                padding: 0px;
            }

            #banner_slider .item img {
                height: 400px;
            }
        }



        .expert-team-carousel .item {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
            display: block;
        }

        .expert-img-box {
            width: 100%;
            height: 210px;
            border-radius: 6px;
            overflow: hidden;
            background: #f8fafc;
            margin-bottom: 12px;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .expert-img-box {
                height: 260px !important;
            }
        }

        @media (max-width: 480px) {
            .expert-img-box {
                height: 320px !important;
            }
        }


        /* Owl Carousel */
        .owl-carousel #item-card {
            padding: 12px;
        }

        /* View More */
        /* ==========================================
           OUR RECENT PROJECTS SECTION (REDESIGN)
           ========================================== */
        .recent-projects-wrapper {
            padding: 50px 0;
            background: #ffffff;
        }

        .recent-projects-heading {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
        }

        .recent-projects-heading span.text-primary-blue {
            color: #0d6efd;
        }

        .recent-projects-subheading {
            color: #64748b;
            font-size: 15px;
            font-weight: 400;
        }

        .view-all-projects-link {
            color: #0d6efd;
            font-weight: 700;
            font-size: 15px;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.3s ease;
        }

        .view-all-projects-link:hover {
            color: #0b5ed7;
            transform: translateX(4px);
        }

        /* Project Card Styling */
        .project-card {
            background: #ffffff;
            border-radius: 6px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.9);
            transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(13, 110, 253, 0.12);
            border-color: rgba(13, 110, 253, 0.25);
        }

        .project-image {
            position: relative;
            overflow: hidden;
            height: 230px;
            background: #f8fafc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px;
        }

        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: transform 0.4s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.04);
        }

        .project-content {
            padding: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
            background: #ffffff;
            text-align: left;
        }

        .project-title {
            font-size: 19px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .project-type-badge {
            background: #f1f5f9;
            color: #64748b;
            font-size: 12px;
            font-weight: 500;
            padding: 4px 10px;
            border-radius: 6px;
            display: inline-block;
            margin-right: 4px;
            margin-bottom: 2px;
        }

        /* Inquiry & Visit Arrow Buttons (Solid Brand Colors: #E26324 for Inquiry, #01964A for Arrow) */
        .btn-project-inquiry {
            background: #E26324;
            color: #ffffff !important;
            border: none;
            border-radius: 8px;
            padding: 7px 16px;
            font-size: 13px;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            cursor: pointer;
            transition: all 0.25s ease;
            outline: none;
            line-height: 1;
            box-shadow: 0 4px 10px rgba(226, 99, 36, 0.3);
        }

        .btn-project-inquiry:hover {
            background: #c8531b;
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(226, 99, 36, 0.45);
        }

        .btn-project-visit-arrow {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #01964A;
            color: #ffffff !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            box-shadow: 0 4px 12px rgba(1, 150, 74, 0.35);
            transition: all 0.3s ease;
            text-decoration: none !important;
            flex-shrink: 0;
            border: none;
        }

        .btn-project-visit-arrow:hover {
            background: #017a3c;
            transform: scale(1.1) rotate(-10deg);
            box-shadow: 0 6px 16px rgba(1, 150, 74, 0.5);
        }

        /* ==========================================
           WHY CHOOSE DIGICODERS SECTION (REDESIGN)
           ========================================== */
        .why-choose-us-section {
            padding: 60px 0;
            background: #ffffff;
        }

        .why-choose-heading {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
        }

        .why-choose-heading span.text-primary-blue {
            color: #0d6efd;
        }

        .why-choose-subheading {
            color: #64748b;
            font-size: 14.5px;
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Left Side: Experience Showcase Card Redesign */
        .experience-showcase-card {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            padding: 28px 24px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            transition: all 0.35s ease;
            height: 100%;
        }

        .experience-showcase-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 35px rgba(13, 110, 253, 0.1);
            border-color: rgba(13, 110, 253, 0.3);
        }

        .exp-pill-tag {
            background: rgba(13, 110, 253, 0.08);
            color: #0d6efd;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 12px;
            border-radius: 6px;
            display: inline-block;
        }

        .exp-big-num {
            font-size: 82px;
            font-weight: 900;
            color: #c49a6c;
            line-height: 0.95;
            letter-spacing: -2px;
            display: block;
        }

        .exp-main-title {
            font-size: 23px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.25;
        }

        .exp-sub-title {
            font-size: 13.5px;
            font-weight: 600;
            color: #64748b;
        }

        .exp-body-text {
            font-size: 13px;
            color: #475569;
            line-height: 1.55;
        }

        .exp-features-row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            border-top: 1px solid #f1f5f9;
            padding-top: 16px;
            margin-top: auto;
        }

        .exp-feature-chip {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 6px;
            padding: 5px 12px;
            font-size: 12px;
            font-weight: 700;
            color: #1e293b;
            display: inline-flex;
            align-items: center;
        }

        /* CTA Banner Card (Right Banner) */
        .cta-banner-card {
            background: linear-gradient(135deg, #f0f7ff 0%, #e0f2fe 100%);
            border-radius: 6px;
            border: 1px solid #bae6fd;
            padding: 28px 24px;
            position: relative;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(13, 110, 253, 0.06);
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .cta-sparkle-icon {
            position: absolute;
            top: 18px;
            right: 22px;
            font-size: 14px;
            color: #0d6efd;
            opacity: 0.85;
        }

        .cta-banner-title {
            font-size: 21px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.35;
        }

        .cta-banner-title span.text-primary-blue {
            color: #0d6efd;
        }

        .cta-banner-text {
            font-size: 12.5px;
            color: #475569;
            line-height: 1.55;
        }

        .btn-cta-discover {
            background: #0d6efd;
            color: #ffffff !important;
            padding: 9px 22px;
            border-radius: 6px;
            font-size: 13.5px;
            font-weight: 700;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(13, 110, 253, 0.35);
            transition: all 0.3s ease;
            border: none;
        }

        .btn-cta-discover:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(13, 110, 253, 0.5);
        }

        .cta-banner-image-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        .cta-banner-img {
            max-height: 210px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            filter: drop-shadow(0 10px 15px rgba(13, 110, 253, 0.15));
            transition: transform 0.5s ease;
        }

        .cta-banner-card:hover .cta-banner-img {
            transform: scale(1.05) translateY(-3px);
        }

        /* ==========================================
           ABOUT / WHAT WE DO CARDS REDESIGN
           ========================================== */
        .about-info-card {
            background: #ffffff;
            border-radius: 0;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.02);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .about-card-image {
            width: 100%;
            position: relative;
            background: #086AD8;
            overflow: hidden;
        }

        .about-card-image img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: contain;
        }

        .about-card-body {
            padding: 22px 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .about-card-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.3;
        }

        .about-card-text {
            font-size: 13.5px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .about-card-footer {
            border-top: 1px solid #f1f5f9;
            padding-top: 14px;
            margin-top: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* ==========================================
           RELIABLE IT SERVICES (IMAGE 2 DESIGN REDESIGN)
           ========================================== */
        .services-section-wrapper {
            padding: 70px 0;
            background: #ffffff;
        }

        .services-grid-container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        @media (max-width: 1200px) {
            .services-grid-container {
                grid-template-columns: repeat(4, 1fr);
            }
        }
        @media (max-width: 992px) {
            .services-grid-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        @media (max-width: 768px) {
            .services-grid-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }
        @media (max-width: 480px) {
            .services-grid-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .service-box-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            padding: 28px 18px 22px 18px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            justify-content: space-between;
            height: 100%;
            position: relative;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .service-box-card:hover,
        .service-box-card.active {
            border-color: #cbd5e1;
            border-bottom: 3.5px solid #0056b3;
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.07);
        }

        .service-icon-box {
            width: 60px;
            height: 60px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: transform 0.3s ease;
        }

        .service-box-card:hover .service-icon-box {
            transform: scale(1.08);
        }

        .service-box-title {
            font-size: 15px;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.35;
            margin-bottom: 10px;
            text-align: center;
        }

        .service-box-text {
            font-size: 12.5px;
            color: #64748b;
            line-height: 1.55;
            margin-bottom: 14px;
            text-align: center;
            flex-grow: 1;
        }

        .service-box-footer {
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
            width: 100%;
            text-align: center;
            margin-top: auto;
        }

        .service-discover-link {
            font-size: 12.5px;
            font-weight: 700;
            color: #0056b3 !important;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            transition: all 0.25s ease;
        }

        .service-discover-link:hover {
            color: #004085 !important;
            transform: translateX(4px);
        }

        /* ==========================================
           FUN FACT / COUNTER BANNER REDESIGN
           ========================================== */
        .counter-banner-section {
            padding: 50px 0;
            background: transparent;
        }

        .counter-banner-box {
            background: linear-gradient(135deg, #086AD8 0%, #03489e 100%);
            border-radius: 6px;
            padding: 38px 30px;
            box-shadow: 0 15px 35px rgba(8, 106, 216, 0.22);
            position: relative;
            overflow: hidden;
        }

        .counter-banner-box::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -20%;
            width: 140%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 60%);
            pointer-events: none;
        }

        .counter-item-wrap {
            display: flex;
            align-items: center;
            position: relative;
            z-index: 2;
        }

        .counter-icon-circle {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: #ffffff;
            margin-right: 16px;
            flex-shrink: 0;
            backdrop-filter: blur(4px);
        }

        .counter-info-text {
            display: flex;
            flex-direction: column;
        }

        .counter-info-text .counter-num {
            font-size: 30px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.1;
            letter-spacing: -0.5px;
        }

        .counter-info-text .counter-title {
            font-size: 13px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.88);
            text-transform: capitalize;
            margin-top: 4px;
            margin-bottom: 0;
        }

        @media (max-width: 576px) {
            .counter-banner-box {
                padding: 22px 14px;
            }
            .counter-icon-circle {
                width: 40px;
                height: 40px;
                font-size: 16px;
                margin-right: 8px;
            }
            .counter-info-text .counter-num {
                font-size: 20px;
            }
            .counter-info-text .counter-title {
                font-size: 11px;
            }
        }

        /* ==========================================
           PRICING & PACKAGES REDESIGN (IMAGE 2 THEME)
           ========================================== */
        .pricing-section-wrapper {
            padding: 70px 0 40px 0;
            background: #ffffff;
        }

        .pricing-card-box {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e5e7eb;
            padding: 38px 28px 30px 28px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
            transition: all 0.35s ease;
        }

        .pricing-card-box:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .pricing-card-box.featured {
            border: 1px solid #d1d5db;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }

        .pricing-corner-ribbon {
            position: absolute;
            top: 20px;
            right: -36px;
            transform: rotate(45deg);
            background: linear-gradient(135deg, #c49a6c 0%, #a67c4e 100%);
            color: #ffffff;
            font-size: 9.5px;
            font-weight: 700;
            padding: 5px 36px;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
            z-index: 5;
            text-align: center;
            line-height: 1.2;
        }

        .pricing-subtitle {
            font-size: 13px;
            font-weight: 700;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            margin-bottom: 22px;
        }

        .pricing-icon-avatar {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px;
            border: 1px solid #e2e8f0;
            padding: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            transition: all 0.35s ease;
            overflow: hidden;
        }

        .pricing-card-box:hover .pricing-icon-avatar {
            background: #ffffff;
            border-color: #e2e8f0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
            transform: scale(1.03);
        }

        .pricing-icon-avatar img {
            max-width: 92%;
            max-height: 92%;
            object-fit: contain;
            border-radius: 50%;
            transition: transform 0.3s ease;
        }

        .pricing-brand-badge {
            background: #d1d5db;
            color: #374151;
            font-size: 13.5px;
            font-weight: 700;
            padding: 8px 16px;
            border-radius: 4px;
            font-family: system-ui, -apple-system, sans-serif;
            letter-spacing: -0.3px;
        }

        .pricing-price-amount {
            display: flex;
            align-items: baseline;
            justify-content: center;
            gap: 3px;
            margin-bottom: 22px;
        }

        .pricing-price-amount .currency {
            font-size: 20px;
            font-weight: 700;
            color: #1e293b;
            vertical-align: super;
        }

        .pricing-price-amount .price {
            font-size: 46px;
            font-weight: 800;
            color: #1e293b;
            letter-spacing: -1px;
            line-height: 1;
        }

        .pricing-price-amount .period {
            font-size: 13px;
            font-weight: 600;
            color: #64748b;
        }

        .btn-pricing-action {
            display: block;
            width: 100%;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: 700;
            text-align: center;
            text-decoration: none !important;
            transition: all 0.3s ease;
            background: #ffffff;
            color: #0d6efd !important;
            border: 1px solid #0d6efd;
        }

        .btn-pricing-action:hover {
            background: #0d6efd;
            color: #ffffff !important;
            box-shadow: 0 4px 14px rgba(13, 110, 253, 0.25);
        }

        .btn-pricing-action.featured {
            background: #0d6efd;
            color: #ffffff !important;
            border: 1px solid #0d6efd;
            box-shadow: 0 4px 14px rgba(13, 110, 253, 0.25);
        }

        .btn-pricing-action.featured:hover {
            background: #0b5ed7;
            box-shadow: 0 6px 18px rgba(13, 110, 253, 0.35);
        }

        .pricing-features-list {
            list-style: none;
            padding: 0;
            margin: 25px 0 0 0;
            text-align: left;
        }

        .pricing-features-list li {
            font-size: 13.5px;
            color: #475569;
            padding: 10px 0;
            border-bottom: 1px dashed #e2e8f0;
            font-weight: 500;
            display: flex;
            align-items: center;
        }

        .pricing-features-list li i {
            color: #c49a6c;
            font-size: 14px;
            margin-right: 12px;
        }

        .btn-explore-packages {
            display: inline-flex;
            align-items: center;
            padding: 10px 22px;
            background: linear-gradient(135deg, #0d6efd 0%, #086AD8 100%);
            color: #ffffff !important;
            font-size: 13.5px;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none !important;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.3);
            transition: all 0.3s ease;
        }

        .btn-explore-packages:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(13, 110, 253, 0.4);
        }

        .pricing-header-container {
            position: relative;
            text-align: center;
        }

        @media (min-width: 992px) {
            .pricing-top-right-action {
                position: absolute;
                top: 50%;
                right: 0;
                transform: translateY(-50%);
            }
        }

        /* ==========================================
           BLOG & LATEST INSIGHTS REDESIGN
           ========================================== */
        .blog-section-wrapper {
            padding: 30px 0 70px 0;
            background: #ffffff;
        }

        #blog_slider .owl-stage {
            display: flex;
        }

        #blog_slider .owl-item {
            display: flex;
            flex: 1 0 auto;
        }

        #blog_slider .item {
            width: 100%;
        }

        .blog-card-item {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.35s ease;
            position: relative;
        }

        .blog-card-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 36px rgba(13, 110, 253, 0.12);
            border-color: rgba(13, 110, 253, 0.3);
        }

        .blog-card-thumb {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 9;
            padding-top: 56.25%; /* 16:9 Aspect Ratio Fallback */
            overflow: hidden;
            background: #f1f5f9;
        }

        @supports (aspect-ratio: 16 / 9) {
            .blog-card-thumb {
                padding-top: 0;
            }
        }

        .blog-card-thumb a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .blog-card-thumb img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }

        .blog-card-item:hover .blog-card-thumb img {
            transform: scale(1.06);
        }

        .blog-cat-badge {
            position: absolute;
            bottom: 12px;
            left: 14px;
            background: #ffffff;
            color: #0d6efd;
            font-size: 11.5px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 6px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.12);
            z-index: 2;
        }

        .blog-card-content {
            padding: 22px 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .blog-card-meta {
            font-size: 12px;
            font-weight: 600;
            color: #94a3b8;
            text-align: right;
        }

        .blog-card-title {
            font-size: 17px;
            font-weight: 800;
            color: #0f172a;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .blog-card-title a {
            color: #0f172a !important;
            text-decoration: none !important;
            transition: color 0.3s ease;
        }

        .blog-card-title a:hover {
            color: #0d6efd !important;
        }

        .blog-card-text {
            font-size: 13px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 16px;
            flex-grow: 1;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .blog-card-footer {
            border-top: 1px solid #f1f5f9;
            padding-top: 12px;
            margin-top: auto;
        }

        /* ==========================================
           100% MATCH DARK TECH BANNER REDESIGN
           ========================================== */
        .dark-tech-section {
            padding: 60px 0;
            background: #ffffff;
        }

        .dark-tech-banner {
            background: linear-gradient(135deg, #030a26 0%, #05133b 50%, #020921 100%);
            border-radius: 6px;
            padding: 42px 36px;
            box-shadow: 0 15px 40px rgba(2, 9, 33, 0.35);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .dark-tech-banner::after {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(13, 110, 253, 0.25) 0%, transparent 70%);
            pointer-events: none;
        }

        .dark-tech-sub {
            font-size: 13px;
            font-weight: 700;
            color: #38bdf8;
            text-transform: capitalize;
            letter-spacing: 0.5px;
        }

        .dark-tech-heading {
            font-size: 26px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.2;
        }

        .dark-tech-desc {
            font-size: 12.5px;
            color: rgba(226, 232, 240, 0.75);
            line-height: 1.55;
        }

        .btn-dark-tech {
            background: #0d6efd;
            color: #ffffff !important;
            font-size: 12.5px;
            font-weight: 700;
            padding: 9px 20px;
            border-radius: 30px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none !important;
            box-shadow: 0 4px 14px rgba(13, 110, 253, 0.4);
            transition: all 0.3s ease;
        }

        .btn-dark-tech:hover {
            background: #0b5ed7;
            box-shadow: 0 6px 18px rgba(13, 110, 253, 0.55);
            transform: translateY(-2px);
        }

        .dark-tech-swiper {
            width: 100%;
            overflow: hidden;
        }

        .dark-tech-swiper .swiper-wrapper {
            display: flex;
            align-items: center;
            transition-timing-function: linear !important;
        }

        .dark-tech-swiper .swiper-slide {
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .dark-tech-slide-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 4px 2px;
            width: 100%;
            transition: transform 0.3s ease;
        }

        .dark-tech-slide-item:hover {
            transform: translateY(-4px);
        }

        .dark-tech-logo-wrap {
            width: 68px;
            height: 68px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.09);
            padding: 8px;
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.22);
            transition: all 0.3s ease;
        }

        .dark-tech-slide-item:hover .dark-tech-logo-wrap {
            background: rgba(255, 255, 255, 0.18);
            border-color: #38bdf8;
            box-shadow: 0 6px 20px rgba(56, 189, 248, 0.35);
        }

        .dark-tech-logo-wrap img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .dark-tech-name {
            font-size: 13px;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%;
            display: block;
        }

        @media (max-width: 576px) {
            .dark-tech-logo-wrap {
                width: 52px;
                height: 52px;
                border-radius: 12px;
                margin-bottom: 6px;
                padding: 6px;
            }
            .dark-tech-name {
                font-size: 11px;
            }
        }

        /* ==========================================
           PREMIUM CONTACT US SECTION REDESIGN
           ========================================== */
        .contact-us-section-wrappaer {
            padding: 90px 0;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
        }

        .contact-info-left-box {
            padding-right: 20px;
        }

        .contact-feature-list {
            margin-top: 25px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .contact-feature-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 12px 16px;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.02);
            transition: all 0.3s ease;
        }

        .contact-feature-item:hover {
            border-color: #0d6efd;
            transform: translateX(4px);
        }

        .contact-feature-icon {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            background: #eff6ff;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
        }

        .contact-feature-text {
            font-size: 13.5px;
            font-weight: 600;
            color: #334155;
            margin: 0;
        }

        .contact-form-card-box {
            background: #ffffff;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            padding: 36px 32px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
        }

        .contact-form-card-box:hover {
            box-shadow: 0 16px 36px rgba(13, 110, 253, 0.08);
        }

        .form-group-custom {
            margin-bottom: 18px;
        }

        .form-control-custom {
            width: 100%;
            height: 48px;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 6px;
            padding: 10px 16px;
            font-size: 14px;
            color: #0f172a;
            font-weight: 500;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-control-custom:focus {
            background: #ffffff;
            border-color: #0d6efd;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.12);
        }

        textarea.form-control-custom {
            height: 110px;
            resize: none;
            padding-top: 12px;
        }

        .select-control-custom {
            width: 100%;
            height: 48px;
            background: #f8fafc;
            border: 1.5px solid #e2e8f0;
            border-radius: 6px;
            padding: 10px 16px;
            font-size: 14px;
            color: #0f172a;
            font-weight: 500;
            transition: all 0.3s ease;
            outline: none;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%2364748b' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
        }

        .select-control-custom:focus {
            background-color: #ffffff;
            border-color: #0d6efd;
            box-shadow: 0 0 0 4px rgba(13, 110, 253, 0.12);
        }

        .btn-submit-consultation {
            width: 100%;
            height: 50px;
            background: linear-gradient(135deg, #0d6efd 0%, #086AD8 100%);
            color: #ffffff !important;
            font-size: 15px;
            font-weight: 700;
            border-radius: 6px;
            border: none;
            box-shadow: 0 4px 16px rgba(13, 110, 253, 0.35);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            cursor: pointer;
        }

        .btn-submit-consultation:hover {
            background: #0b5ed7;
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(13, 110, 253, 0.45);
        }

        /* ==========================================
           COMPACT & PREMIUM ADVICE / RATING BANNER
           ========================================== */
        .advice-rating-banner-wrapper {
            padding: 35px 0;
            background: #ffffff;
        }

        .advice-rating-card-box {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            padding: 24px 30px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.03);
            position: relative;
            overflow: hidden;
        }

        .advice-img-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            min-height: 240px;
        }

        .advice-img {
            width: 100%;
            max-height: 300px;
            object-fit: contain;
            transform: scale(1.75);
            transform-origin: center center;
        }

        .advice-content-wrap {
            padding-left: 25px;
            margin-left: auto;
        }

        .advice-rating-header {
            border-bottom: 1px solid #cbd5e1;
            padding-bottom: 12px;
        }

        .advice-rating-score {
            font-size: 32px;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.5px;
            line-height: 1;
        }

        .advice-star-rating {
            font-size: 18px;
            color: #f59e0b;
            display: flex;
            gap: 3px;
        }

        .advice-rating-sub {
            font-size: 13px;
            font-weight: 500;
            color: #64748b;
        }

        .advice-contact-grid {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-top: 14px;
        }

        .advice-contact-item {
            display: flex;
            align-items: center;
            gap: 14px;
            background: #ffffff;
            padding: 10px 16px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
            text-decoration: none !important;
            transition: all 0.3s ease;
        }

        .advice-contact-item:hover {
            /* hover effect disabled as requested */
        }

        .advice-icon-circle {
            width: 42px;
            height: 42px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            flex-shrink: 0;
        }

        .advice-icon-circle.call {
            background: #eff6ff;
            color: #0d6efd;
        }

        .advice-icon-circle.mail {
            background: #f0fdf4;
            color: #10b981;
        }

        .advice-contact-info {
            display: flex;
            flex-direction: column;
        }

        .advice-contact-label {
            font-size: 11px;
            font-weight: 700;
            color: #64748b;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .advice-contact-val {
            font-size: 16px;
            font-weight: 800;
            color: #0d6efd;
            line-height: 1.2;
        }

        @media (max-width: 768px) {
            .advice-rating-card-box {
                padding: 20px 16px;
            }
            .advice-img {
                max-height: 160px;
            }
            .advice-rating-score {
                font-size: 26px;
            }
            .advice-contact-val {
                font-size: 14.5px;
            }
        }

        .social-review-area {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
            margin: 0 !important;
        }

        .social-review-area .row {
            display: none !important;
        }

        .rev_redraw-wrapper::before,
        .rev_redraw-wrapper::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(0, 108, 216, 0.05) 0%, transparent 70%);
            z-index: 0;
        }

        .rev_redraw-wrapper::before {
            top: -100px;
            left: -100px;
        }

        .rev_redraw-wrapper::after {
            bottom: -100px;
            right: -100px;
        }

        .redraw-content h3 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .redwaw-dec {
            font-size: 20px;
            color: #555;
            margin-bottom: 40px;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 30px;
            margin-top: 60px;
            justify-items: center;
            position: relative;
            z-index: 1;
        }

        /* Glassmorphism Card Style */
        .tech-item {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 25px;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
            width: 150px;
            height: 150px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            animation: float 6s ease-in-out infinite;
        }

        /* Staggered Floating Animation */
        .tech-item:nth-child(even) {
            animation-delay: 1s;
        }

        .tech-item:nth-child(3n) {
            animation-delay: 2s;
        }

        .tech-item:nth-child(4n) {
            animation-delay: 3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-15px);
            }
        }

        .tech-item:hover {
            transform: translateY(-20px) scale(1.05) !important;
            background: #fff;
            box-shadow: 0 20px 40px rgba(0, 108, 216, 0.15);
            border: 1px solid rgba(0, 108, 216, 0.2);
            animation-play-state: paused;
        }

        .tech-item img {
            max-width: 70px;
            max-height: 70px;
            margin-bottom: 15px;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
            transition: transform 0.5s ease;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.15)
        }

        .tech-item:hover img {
            transform: rotate(10deg) scale(1.1);
        }

        .tech-item span {
            font-size: 14px;
            font-weight: 700;
            color: #222;
            display: block;
            transition: color 0.3s ease;
        }

        .tech-item:hover span {
            color: #006cd8;
        }

        @media (max-width: 768px) {
            .rev_redraw-wrapper {
                padding: 60px 0;
            }

            .tech-grid {
                grid-template-columns: repeat(3, 1fr);
                gap: 20px;
            }

            .tech-item {
                width: 110px;
                height: 110px;
                padding: 15px;
                border-radius: 18px;
            }

            .tech-item img {
                max-width: 45px;
                max-height: 45px;
                margin-bottom: 8px;
            }

            .tech-item span {
                font-size: 12px;
            }

            .redraw-content h3 {
                font-size: 30px;
            }
        }

        @media (max-width: 480px) {
            .tech-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }
        }

        /* ===============================
        TOP SLIDER – NO IMAGE CROP================================*/
        .top-slider-section {
            margin-top: 0;
            position: relative;
            z-index: 1;
        }

        .top-slider-section .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }



        /* Slider Item */
        .top-banner-carousel .item {
            position: relative;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: auto;
            /* IMPORTANT */
            overflow: hidden;
            /* Safe */
        }

        /* Image – FULL VISIBLE */
        .top-banner-carousel .item img {
            width: 100%;
            height: auto;
            /* MOST IMPORTANT */
            max-height: 600px;
            /* Control only max */
            object-fit: contain;
            /* NO CROP */
            object-position: center;
            display: block;
            margin: auto;
        }

        /* ===============================
   DESKTOP (992px+)
================================ */
        @media (min-width: 992px) {
            .top-banner-carousel .item img {
                max-height: 600px;
            }
        }

        /* ===============================
   TABLET (768px–991px)
================================ */
        @media (min-width: 768px) and (max-width: 991px) {
            .top-banner-carousel .item img {
                max-height: 500px;
            }
        }

        /* ===============================
   MOBILE (576px–767px)
================================ */
        @media (min-width: 576px) and (max-width: 767px) {
            .top-banner-carousel .item img {
                max-height: 420px;
                width: 100%;
            }
        }

        /* ===============================
   SMALL MOBILE (<576px)
================================ */
        @media (max-width: 575px) {
            .top-banner-carousel .item img {
                max-height: 320px;
                width: 100%;
            }
        }

        /* ===============================
   VERY SMALL DEVICES (<400px)
================================ */
        @media (max-width: 400px) {
            .top-banner-carousel .item img {
                max-height: 260px;
                width: 100%;
            }
        }

        /* ===============================
   NAVIGATION BUTTONS
================================ */
        .top-banner-carousel .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-50%);
            pointer-events: none;
            z-index: 10;
        }

        .top-banner-carousel .owl-nav button {
            position: absolute;
            color: #6f6f6fff !important;
            width: 40px;
            height: 40px;
            border-radius: 50% !important;
            display: flex !important;
            align-items: center;
            justify-content: center;
            pointer-events: all;
            transition: all 0.3s ease;
            border: none !important;

        }

        .top-banner-carousel .owl-nav button.owl-prev {
            left: 50px !important;
        }

        .top-banner-carousel .owl-nav button.owl-next {
            right: 50px !important;
        }

        .top-banner-carousel .owl-nav button:hover {
            color: #fff !important;
        }

        /* ===============================
   DOTS
================================ */
        .top-banner-carousel .owl-dots {
            position: absolute;
            bottom: 12px;
            width: 100%;
            text-align: center;
        }

        .top-banner-carousel .owl-dots .owl-dot span {
            background: rgba(255, 255, 255, 0.6) !important;
            width: 9px;
            height: 9px;
            margin: 4px;
        }

        .top-banner-carousel .owl-dots .owl-dot.active span {
            background: #0d6efd !important;
        }

        /* ==========================================
           CLIENT TRUST BANNER (AFTER HERO SECTION)
           ========================================== */
        .client-trust-banner {
            background: #ffffff;
            border-top: 1px solid rgba(226, 232, 240, 0.8);
            border-bottom: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            padding: 16px 0;
            position: relative;
            z-index: 10;
            overflow: hidden;
        }

        .client-trust-banner .banner-inner {
            display: flex;
            align-items: center;
            gap: 25px;
            max-width: 1320px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .client-trust-badge {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 6px;
            padding-right: 25px;
            border-right: 2px solid #e2e8f0;
            font-size: 15px;
            font-weight: 700;
            color: #1e293b;
            white-space: nowrap;
            letter-spacing: -0.2px;
        }

        .client-trust-badge span.highlight {
            color: #086ad8;
            font-weight: 800;
            font-size: 17px;
        }

        .client-marquee-wrapper {
            flex-grow: 1;
            overflow: hidden;
            position: relative;
            display: flex;
            align-items: center;
            mask-image: linear-gradient(to right, transparent, #000 4%, #000 96%, transparent);
            -webkit-mask-image: linear-gradient(to right, transparent, #000 4%, #000 96%, transparent);
        }

        .client-marquee-track {
            display: flex;
            align-items: center;
            gap: 45px;
            width: max-content;
            animation: clientMarquee 30s linear infinite;
        }

        .client-marquee-wrapper:hover .client-marquee-track {
            animation-play-state: paused;
        }

        .client-logo-item {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 38px;
            padding: 0 5px;
            transition: all 0.3s ease;
            filter: grayscale(15%) opacity(0.85);
        }

        .client-logo-item:hover {
            filter: grayscale(0%) opacity(1);
            transform: translateY(-2px) scale(1.06);
        }

        .client-logo-item img {
            max-height: 32px;
            width: auto;
            object-fit: contain;
        }

        .client-logo-item svg {
            height: 32px;
            width: auto;
        }

        @keyframes clientMarquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        /* Responsive */
        @media (max-width: 991px) {
            .client-trust-banner .banner-inner {
                flex-direction: column;
                gap: 12px;
                text-align: center;
            }

            .client-trust-badge {
                border-right: none;
                border-bottom: 2px solid #e2e8f0;
                padding-right: 0;
                padding-bottom: 10px;
                justify-content: center;
                width: 100%;
            }

            .client-marquee-wrapper {
                width: 100%;
            }

            .client-marquee-track {
                gap: 30px;
            }
        }

        @media (max-width: 576px) {
            .client-trust-badge {
                font-size: 13.5px;
            }

            .client-trust-badge span.highlight {
                font-size: 15px;
            }

            .client-logo-item {
                height: 30px;
            }

            .client-logo-item img,
            .client-logo-item svg {
                max-height: 25px;
                height: 25px;
            }
        }

        /* Achievement Banner Redesign (No Marquee) */
        .achievement-banner-card {
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border: 1px solid #bae6fd;
            border-radius: 6px;
            padding: 18px 24px;
            box-shadow: 0 4px 15px rgba(13, 110, 253, 0.05);
            transition: all 0.3s ease;
        }

        .achievement-banner-card:hover {
            box-shadow: 0 8px 22px rgba(13, 110, 253, 0.12);
            border-color: #7dd3fc;
        }

        .achievement-badge-pill {
            background: linear-gradient(135deg, #0d6efd 0%, #086AD8 100%);
            color: #ffffff;
            font-size: 12px;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 6px;
            white-space: nowrap;
            box-shadow: 0 3px 10px rgba(13, 110, 253, 0.25);
            display: inline-flex;
            align-items: center;
        }

        .achievement-banner-text {
            font-size: 15px;
            color: #0f172a;
            font-weight: 600;
            line-height: 1.55;
        }

        .achievement-banner-text .text-secondary-highlight {
            color: #0284c7;
            font-weight: 700;
        }

        @media (max-width: 768px) {
            .achievement-banner-text {
                font-size: 13.5px;
            }

            .achievement-banner-card {
                padding: 14px 16px;
            }
        }
    </style>

</head>

<body>

    <?php include('include/header.php') ?>
    <!--============ Top Slider Start ============-->
    <div class="top-slider-section">
        <div class="container-fluid px-0">
            <div class="owl-carousel top-banner-carousel" id="top_banner_slider">
                <?php
                $first = true;
                foreach ($sliderdata as $slider) {
                    ?>
                    <div class="item">
                        <img src="<?= base_url('public') ?>/uploads/sliders/<?= $slider->image ?>"
                            alt="<?= $slider->title ?>" <?php if ($first): ?> fetchpriority="high" loading="eager" <?php else: ?> loading="lazy" <?php endif; ?>>
                    </div>
                    <?php
                    $first = false;
                }
                ?>

            </div>
        </div>
    </div>
    <!--============ Top Slider End ============-->

    <!--============ Client Trust Banner Start ============-->
    <div class="client-trust-banner">
        <div class="banner-inner">
            <div class="client-trust-badge">
                Trusted by <span class="highlight">850+</span> Clients Worldwide
            </div>
            <div class="client-marquee-wrapper">
                <div class="client-marquee-track">
                    <?php
                    $renderBrandLogos = function () use ($clientdata) {
                        ?>


                        <?php if (!empty($clientdata)): ?>
                            <?php foreach ($clientdata as $c): ?>
                                <?php if (!empty($c->image)): ?>
                                    <div class="client-logo-item"
                                        title="<?= !empty($c->title) ? htmlspecialchars($c->title) : 'Client' ?>">
                                        <img src="<?= base_url('public/uploads/client/' . $c->image) ?>"
                                            alt="<?= !empty($c->title) ? htmlspecialchars($c->title) : 'Client Logo' ?>" loading="lazy">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php
                    };

                    // Render set 1 & set 2 for seamless infinite marquee loop
                    $renderBrandLogos();
                    $renderBrandLogos();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--============ Client Trust Banner End ============-->
    <!--============ Cybersecurity Hero Start ============-->
    <!-- <div class="cybersecurity-hero processing-hero-bg__color ">
        <div class="container-fluid">
            <div class="row align-items-center"> -->

    <!--baseline-->

    <!-- <div class="col-lg-6 col-md-7 col-sm-12">
                    <div class="cybersecurity-hero-text wow move-up">

                        <h6 id="hashtagteam">#TeamDigiCoders </h6>
                        <h1 class="font-weight--reguler mb-30" style="font-size:35px">A Company working with Young <span
                                class="text-color-primary">Engineer's</span>, <span
                                class="text-color-primary">Entrepreneur's </span> and <span
                                class="text-color-primary">Innovative Team. </span> </h1>

                        <div class="hero-button mt-30">
                            <a href="<?= base_url() ?>Home/ContactUs" class="ht-btn ht-btn-md" id="btn-mobile">Get
                                Quotation </a>
                            <a href="<?= base_url('public') ?>/assets/images/DigiCoders_2026_Company_Profile.pdf"
                                target="_blank" download onclick="OpenSocialModal()" class="ht-btn ht-btn-md"
                                style="background-color:green; margin:8px;" id="">Company Profile </a>
                        </div>

                    </div>

                </div> -->



    <!-- <div class="col-lg-6 col-md-5">
                    <div class="cybersecurity-hero-images-wrap wow move-up">
                        <div class="cybersecurity-hero-images section-space--mt_80">
                            <center> <a href="/Home/ContactUs" class="ht-btn ht-btn-md" id="btn-desktop">Get Quotation
                                </a> </center>

                            <div class="inner-img-one">
                                <img class="img-fluid worldRotate"
                                    src="<?= base_url('public') ?>/assets/images/hero/mitech-slider-cybersecurity-global-image.png"
                                    title="rounded image" alt="rounded image">
                            </div>

                            <div class="inner-img-two">
                                <img class="img-fluid  ml-5 lazy"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/team/team.png" title="team"
                                    alt="team">
                            </div> -->


    <!-- <div class="inner-img-one">
                                <img class="img-fluid worldRotate lazy" data-src="<?= base_url('public') ?>/assets/images/Digicoders Technology-with-tagline.png" src="<?= base_url('public') ?>/assets/images/hero/mitech-slider-cybersecurity-global-image.png" title="rounded image" alt="rounded image">
                            </div>
                            <div class="inner-img-two">
                                <img class="img-fluid  ml-5 lazy" src="<?= base_url('public') ?>/assets/images/Digicoders Technology-with-tagline.png" data-src="<?= base_url('public') ?>/assets/images/team/team.png" title="team" alt="team">
                            </div> -->

    <!-- </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </br>

    <!--===========  Achievement Showcase Banner Start =============-->
    <div class="achievement-banner-section py-2 my-3">
        <div class="container">
            <div class="achievement-banner-card">
                <div class="row align-items-center justify-content-center text-center">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-center flex-wrap" style="gap: 12px;">
                            <span class="achievement-badge-pill">
                                <i class="fas fa-trophy mr-1"></i> #1 IT Company in UP
                            </span>
                            <h5 class="achievement-banner-text mb-0">
                                <strong>Developed &amp; Launched 1000+ Projects</strong> in Less Than 10 Years
                                &nbsp;•&nbsp;
                                <span class="text-secondary-highlight">Led by Young Engineers &amp; Innovative
                                    Entrepreneurs</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Achievement Showcase Banner End =============-->
    <!--===========  Software Products Section Start =============-->
    <?php if (!empty($softwares)): ?>
        <div class="recent-projects-wrapper" id="software-products">
            <div class="container">
                <!-- Section Header -->
                <div class="recent-projects-header mb-4 text-center">
                    <h2 class="recent-projects-heading mb-1">
                        Our <span class="text-primary-blue">Software Solutions</span>
                    </h2>
                    <p class="recent-projects-subheading mb-0">Transform your business with powerful software
                        solutions developed by DigiCoders.</p>
                </div>

                <!-- Software Grid Cards -->
                <div class="row">
                    <?php foreach ($softwares as $sw): ?>
                        <div class="col-12 col-md-6 col-lg-4 mb-4">
                            <div class="project-card h-100">
                                <?php
                                $add_imgs = [];
                                if (!empty($sw->additional_images)) {
                                    $add_imgs = json_decode($sw->additional_images, true);
                                }
                                if (empty($add_imgs) && !empty($sw->image)) {
                                    $add_imgs[] = $sw->image; // Fallback
                                }
                                $main_display_img = !empty($add_imgs) ? $add_imgs[0] : 'placeholder.jpg';
                                ?>

                                <div class="project-image">
                                    <img id="main-img-<?= $sw->id ?>"
                                        src="<?= base_url('public/uploads/software/' . $main_display_img) ?>"
                                        alt="<?= htmlspecialchars($sw->title) ?>" loading="lazy">
                                </div>

                                <div class="project-content">
                                    <div class="project-title-wrap mb-2 text-center">
                                        <h5 class="project-title text-center" title="<?= htmlspecialchars($sw->title) ?>">
                                            <?= htmlspecialchars($sw->title) ?>
                                        </h5>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mt-3 pt-2"
                                        style="border-top: 1px solid #f1f5f9; gap: 8px;">
                                        <!-- Type Badge on Left -->
                                        <div class="project-badges-wrap">
                                            <span class="project-type-badge">Software</span>
                                        </div>

                                        <!-- Action Buttons (Book Demo + View Details Arrow) on Right -->
                                        <div class="project-actions-wrap d-flex align-items-center">
                                            <?php if (!empty($sw->book_demo_link)): ?>
                                                <a href="<?= $sw->book_demo_link ?>" target="_blank"
                                                    class="btn-project-inquiry">
                                                    Buy Now
                                                </a>
                                            <?php else: ?>
                                                <button type="button" class="btn-project-inquiry"
                                                    onclick="openBookDemoModal('<?= $sw->id ?>', '<?= htmlspecialchars($sw->title, ENT_QUOTES) ?>')"
                                                    title="Book a Free Demo">
                                                    Book Demo
                                                </button>
                                            <?php endif; ?>

                                            <a href="<?= base_url('Home/softwareDetails/' . $sw->slug) ?>"
                                                class="btn-project-visit-arrow ml-2" title="View Details">
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <style>
                    .custom-scrollbar::-webkit-scrollbar {
                        width: 4px;
                    }

                    .custom-scrollbar::-webkit-scrollbar-track {
                        background: #f1f1f1;
                        border-radius: 4px;
                    }

                    .custom-scrollbar::-webkit-scrollbar-thumb {
                        background: #c1c1c1;
                        border-radius: 4px;
                    }

                    .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                        background: #a8a8a8;
                    }
                </style>
                <!-- Global Book Demo Modal -->
                <div class="modal fade" id="bookDemoModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 99999 !important;">
                    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px; margin: 1.75rem auto;">
                        <div class="modal-content"
                            style="border-radius:6px; border:none; box-shadow:0 20px 50px rgba(0,0,0,0.15); overflow: hidden; position: relative;">
                            <div class="modal-header d-block text-center"
                                style="background: linear-gradient(135deg, #086AD8, #00C6FF); padding:25px 20px 20px; border:none; position: relative; border-radius: 6px 6px 0 0;">
                                <button type="button" class="close text-white" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close"
                                    style="position:absolute; top:15px; right:15px; background: rgba(255, 255, 255, 0.25); color: #ffffff; border: none; border-radius: 50%; width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center; font-size: 22px; line-height: 1; cursor: pointer; z-index: 20; outline: none; padding: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.15); opacity: 1;"
                                    onmouseover="this.style.background='rgba(255,255,255,0.45)'"
                                    onmouseout="this.style.background='rgba(255,255,255,0.25)'">
                                    <span aria-hidden="true" style="margin-top: -2px;">&times;</span>
                                </button>
                                <div class="w-100 text-center">
                                    <div
                                        style="width:54px; height:54px; background:rgba(255,255,255,0.2); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; margin: 0 auto 10px auto;">
                                        <i class="fa fa-calendar-check text-white" style="font-size:22px;"></i>
                                    </div>
                                    <h4 class="modal-title text-white"
                                        style="font-weight:700; font-size:20px; margin-bottom:4px; line-height:1.2;">Book a Free Demo</h4>
                                    <p class="text-white mb-0" style="opacity: 0.95; font-size: 13.5px; font-weight:500;">Experience our software in action!</p>
                                </div>
                            </div>
                            <div class="modal-body" style="padding: 25px 22px; background: #f8f9fa;">
                                <div id="bookDemoAlert" class="mb-3 text-center"
                                    style="font-weight:600; font-size:14px; display:none; padding:10px; border-radius:8px;">
                                </div>
                                <form id="bookDemoForm">
                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>"
                                        value="<?= $this->security->get_csrf_hash() ?>">
                                    <input type="hidden" name="software_name" id="book_software_name">

                                    <div class="form-group mb-3">
                                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-laptop-code"></i></span>
                                            </div>
                                            <select name="software_id" id="book_software_id" class="form-control" required
                                                style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #444; padding-left: 10px;">
                                                <option value="">Select Software</option>
                                                <?php foreach ($softwares as $sw): ?>
                                                    <option value="<?= $sw->id ?>"><?= $sw->title ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-user"></i></span>
                                            </div>
                                            <input type="text" name="name" class="form-control" required
                                                placeholder="Your Full Name"
                                                style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; padding-left: 10px;">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-phone-alt"></i></span>
                                            </div>
                                            <input type="text" name="mobile" class="form-control" required
                                                placeholder="Mobile Number" maxlength="10" minlength="10"
                                                style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; padding-left: 10px;">
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address (Optional)"
                                                style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; padding-left: 10px;">
                                        </div>
                                    </div>

                                    <div class="form-group mb-4">
                                        <textarea name="message" class="form-control" rows="2"
                                            placeholder="Any specific requirements?"
                                            style="border: 1px solid #cbd5e1; border-radius:10px; padding:12px 14px; background:#fff; box-shadow:none; resize:none; font-size:14px; color:#333;"></textarea>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn text-white" id="btnBookDemo"
                                            style="background: linear-gradient(135deg, #086AD8, #00C6FF); height: 48px; padding: 0 35px; border-radius: 6px; font-weight: 700; font-size: 15px; letter-spacing: 0.5px; border: none; box-shadow: 0 8px 18px rgba(8,106,216,0.3); transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center; min-width: 220px;">
                                            <span class="spinner-border spinner-border-sm d-none" id="bookDemoSpinner"
                                                role="status" aria-hidden="true" style="margin-right:8px;"></span>
                                            Confirm Booking
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function openBookDemoModal(softwareId, softwareName) {
                        $('#book_software_id').val(softwareId);
                        $('#book_software_name').val(softwareName);
                        $('#bookDemoModal').modal('show');
                    }

                    // Update hidden software name on change
                    document.getElementById('book_software_id').addEventListener('change', function () {
                        var name = this.options[this.selectedIndex].text;
                        document.getElementById('book_software_name').value = name;
                    });

                    // Handle form submission with Vanilla JS
                    document.getElementById('bookDemoForm').addEventListener('submit', function (e) {
                        e.preventDefault();

                        var form = this;
                        var btn = document.getElementById('btnBookDemo');
                        var spinner = document.getElementById('bookDemoSpinner');
                        var alertBox = document.getElementById('bookDemoAlert');

                        btn.disabled = true;
                        spinner.classList.remove('d-none');
                        alertBox.style.display = 'none';
                        alertBox.className = 'mt-3 text-center';
                        var formData = new FormData(form);
                        fetch("<?= base_url('Home/submitDemoRequest') ?>", {
                            method: "POST",
                            body: formData,
                            headers: {
                                "X-Requested-With": "XMLHttpRequest"
                            }
                        })
                            .then(response => response.json())
                            .then(data => {
                                btn.disabled = false;
                                spinner.classList.add('d-none');

                                if (data.status === 'success') {
                                    alertBox.classList.add('text-success');
                                    alertBox.textContent = data.message;
                                    alertBox.style.display = 'block';
                                    form.reset();

                                    setTimeout(function () {
                                        $('#bookDemoModal').modal('hide');
                                        alertBox.style.display = 'none';
                                    }, 3000);
                                } else {
                                    alertBox.classList.add('text-danger');
                                    alertBox.textContent = data.message;
                                    alertBox.style.display = 'block';
                                }
                            })
                            .catch(error => {
                                btn.disabled = false;
                                spinner.classList.add('d-none');
                                alertBox.classList.add('text-danger');
                                alertBox.textContent = "Something went wrong. Please try again.";
                                alertBox.style.display = 'block';
                            });
                    });
                </script>
            </div>
        </div>
    <?php endif; ?>
    <!--===========  Software Products Section End =============-->

    <!-- <div class="page-content page-container pt-60" id="page-content">
        <div class="padding">
            <div class="row container-fluid">
                <div class="col-lg-12 grid-margin stretch-card">


                    <div class="owl-carousel" id="banner_slider">
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1.png"
                                alt="how we are" loading="lazy">
                        </div>
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_2.png"
                                alt="how we are" loading="lazy">
                        </div>
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1_P_c_3.png"
                                alt="how we are" loading="lazy">
                        </div>
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1_Pic_4.png"
                                alt="how we are" loading="lazy">
                        </div>
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1Pic 5.png"
                                alt="how we are" loading="lazy">
                        </div>
                        <div class="item">
                            <img class="img-fluid"
                                src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead Ad_1_Pic_6.png"
                                alt="how we are" loading="lazy">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> -->

    <div class="section-space--ptb_60" style="background: #f8fafc;">
        <div class="container-fluid px-4 px-lg-5">
            <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap gap-2">
                <div>
                    <h2 class="sec-main-h2 mb-0" style="font-weight: 800; font-size: 30px; color: #0b132b;">
                        Expert Team at <span style="color: #086AD8;">DigiCoders</span>
                    </h2>
                    <p class="sec-sub-p mb-0" style="color: #64748b; font-size: 14px;">Experienced. Creative.
                        Passionate.</p>
                </div>
                <a href="<?= base_url('Home/OurExperts') ?>" class="btn btn-outline-dark btn-sm text-nowrap"
                    style="font-weight: 700; border-radius: 6px; white-space: nowrap; flex-shrink: 0;">View All Experts
                    <i class="fas fa-arrow-right"></i></a>
            </div>

            <div class="owl-carousel expert-team-carousel owl-theme" id="expert_team">
                <?php if (!empty($expertdata)):
                    foreach ($expertdata as $expert): ?>
                        <div class="item p-1" style="width: 100%; min-width: 0; box-sizing: border-box;">
                            <div
                                style="background: #ffffff; border-radius: 6px; border: 1px solid #e2e8f0; padding: 14px 12px; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: all 0.3s ease; height: 100%; width: 100%; min-width: 0; display: flex; flex-direction: column; align-items: center; box-sizing: border-box;">
                                <div class="expert-img-box">
                                    <img src="<?= base_url('public/uploads/expert/' . $expert->image) ?>"
                                        alt="<?= htmlspecialchars($expert->name, ENT_QUOTES) ?>"
                                        style="width: 100%; height: 100%; object-fit: cover; object-position: top center;"
                                        loading="lazy">
                                </div>
                                <h6 style="font-weight: 800; font-size: 15px; color: #086AD8; margin-bottom: 3px; line-height: 1.3; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; min-width: 0; box-sizing: border-box;"
                                    title="<?= htmlspecialchars($expert->name, ENT_QUOTES) ?>">
                                    <?= htmlspecialchars($expert->name) ?>
                                </h6>
                                <div style="font-size: 12px; color: #64748b; margin-bottom: 12px; font-weight: 500; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; width: 100%; min-width: 0; box-sizing: border-box;"
                                    title="<?= htmlspecialchars($expert->role, ENT_QUOTES) ?>">
                                    <?= htmlspecialchars($expert->role) ?>
                                </div>
                                <div class="d-flex align-items-center justify-content-center"
                                    style="gap: 6px; margin-top: auto; width: 100%;">
                                    <a href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?? '9198483820' ?>&text=Hello%20<?= urlencode($expert->name) ?>" target="_blank" rel="noopener"
                                        title="WhatsApp" aria-label="WhatsApp"
                                        style="width: 30px; height: 30px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; text-decoration: none;"><i
                                            class="fab fa-whatsapp"></i></a>
                                    <a href="https://www.facebook.com/DigiCodersTech/" target="_blank" rel="noopener"
                                        title="Facebook" aria-label="Facebook"
                                        style="width: 30px; height: 30px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; text-decoration: none;"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/digicoderstech" target="_blank" rel="noopener"
                                        title="Instagram" aria-label="Instagram"
                                        style="width: 30px; height: 30px; border-radius: 50%; background: #e0f2fe; color: #0284c7; display: inline-flex; align-items: center; justify-content: center; font-size: 12px; text-decoration: none;"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; else: ?>
                    <div class="item">
                        <p class="text-center text-muted">No experts found.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <!--============ Recent Projects Section Start ============-->
    <div class="recent-projects-wrapper">
        <div class="container">
            <!-- Section Header -->
            <div class="recent-projects-header mb-4">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8 text-center text-md-left">
                        <h2 class="recent-projects-heading mb-1">
                            Our Recent <span class="text-primary-blue">Projects</span>
                        </h2>
                        <p class="recent-projects-subheading mb-0">Some of our awesome works</p>
                    </div>
                    <div class="col-12 col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <a href="<?= base_url() ?>Home/OurProjects" class="view-all-projects-link">
                            View All Projects <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Project Cards Carousel -->
            <div class="owl-carousel recent-project-carousel" id="recent_project">
                <?php 
                $recent_projects_12 = !empty($userdata) ? array_slice($userdata, 0, 12) : [];
                foreach ($recent_projects_12 as $projects) {
                    $is_link_active = (!isset($projects->link_status) || $projects->link_status == 'true' || $projects->link_status == '1');
                    ?>
                    <div class="item py-2">
                        <div class="project-card">
                            <div class="project-image">
                                <img src="<?= base_url('public/uploads/projects/') . $projects->image ?>"
                                    alt="<?= htmlspecialchars($projects->title) ?>" loading="lazy">
                            </div>

                            <div class="project-content">
                                <div class="project-title-wrap mb-2">
                                    <h5 class="project-title" title="<?= htmlspecialchars($projects->title) ?>">
                                        <?= htmlspecialchars($projects->title) ?>
                                    </h5>
                                </div>

                                <div class="d-flex align-items-center justify-content-between mt-3 pt-2"
                                    style="border-top: 1px solid #f1f5f9; gap: 8px;">
                                    <!-- Type Badges on Left -->
                                    <div class="project-badges-wrap">
                                        <?php
                                        $raw_type = !empty($projects->type) ? $projects->type : 'Website';
                                        $badges = array_map('trim', explode(',', $raw_type));
                                        foreach ($badges as $badge_text):
                                            if (empty($badge_text))
                                                continue;
                                            ?>
                                            <span class="project-type-badge"><?= htmlspecialchars($badge_text) ?></span>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Action Buttons (Inquiry + Visit Arrow) on Right -->
                                    <div class="project-actions-wrap d-flex align-items-center">
                                        <button type="button" class="btn-project-inquiry"
                                            onclick="openProjectEnquiryModal('<?= $projects->id ?>', '<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>')"
                                            title="Enquire About This Project">
                                            Enquiry
                                        </button>

                                        <?php if ($is_link_active && !empty($projects->url)): ?>
                                            <a href="<?= $projects->url ?>" target="_blank" class="btn-project-visit-arrow ml-2"
                                                title="Visit Live Site">
                                                <i class="fa fa-arrow-right"></i>
                                            </a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <!-- View All Projects Bottom CTA Button -->
            <div class="text-center mt-4">
                <a href="<?= base_url() ?>Home/OurProjects" class="view-all-projects-link d-inline-flex align-items-center justify-content-center px-4 py-2" style="background: #e0f2fe; color: #0284c7; border-radius: 6px; font-weight: 700; text-decoration: none;">
                    View All Projects <i class="fa fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
    </div>
    <!--============ Recent Projects Section End ============-->

    <!--===========  Why Choose DigiCoders / Feature Section Start =============-->
    <div class="why-choose-us-section">
        <div class="container">
            <!-- Section Header -->
            <div class="section-title-wrap text-center mb-4">
                <h2 class="why-choose-heading">
                    Why Choose <span class="text-primary-blue">DigiCoders?</span>
                </h2>
                <p class="why-choose-subheading mb-0">
                    We combine creativity, technology and strategy to deliver outstanding results.
                </p>
            </div>

            <div class="row align-items-stretch">
                <!-- Left Side: 10+ Years Experience Showcase Box -->
                <div class="col-lg-6 col-xl-6 mb-4 mb-lg-0">
                    <div class="experience-showcase-card h-100">
                        <div class="exp-top-badge mb-3">
                            <span class="exp-pill-tag">
                                <i class="fa fa-award mr-1"></i> Industry Excellence
                            </span>
                        </div>

                        <div class="d-flex align-items-center mb-3">
                            <div class="exp-number-wrap">
                                <span class="exp-big-num">10+</span>
                            </div>
                            <div class="exp-text-wrap pl-3">
                                <h4 class="exp-main-title mb-1">Years of Experience</h4>
                                <p class="exp-sub-title mb-0">Delivering Cutting-Edge Tech Solutions</p>
                            </div>
                        </div>

                        <p class="exp-body-text mb-4">
                            DigiCoders Technologies is a trusted leader in custom software development, mobile app
                            innovation, and web engineering. Over the past decade, we have empowered hundreds of
                            businesses to scale faster with robust digital products.
                        </p>

                        <div class="exp-features-row">
                            <div class="exp-feature-chip">
                                <i class="fa fa-check-circle text-primary-blue mr-1"></i>
                                <span>10+ Yrs Experienced Team</span>
                            </div>
                            <div class="exp-feature-chip">
                                <i class="fa fa-check-circle text-primary-blue mr-1"></i>
                                <span>100% Client Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Side: CTA Banner Card -->
                <div class="col-lg-6 col-xl-6">
                    <div class="cta-banner-card">
                        <!-- Top Right Decorative Icon -->
                        <div class="cta-sparkle-icon">
                            <i class="fa fa-sparkles"></i>
                        </div>

                        <div class="row align-items-center">
                            <div class="col-12 col-sm-7 col-md-7">
                                <div class="cta-banner-content pr-lg-2">
                                    <h3 class="cta-banner-title mb-2">
                                        Let's <span class="text-primary-blue">Build Something</span><br>
                                        <span class="text-primary-blue">Amazing</span> Together
                                    </h3>
                                    <p class="cta-banner-text mb-3">
                                        DigiCoders, An organization where we totally focus on business development of
                                        our clients. Our motto is to providing consulting and IT Solutions for your
                                        business growth. We will pleased to serve you more and more from DigiCoders.
                                    </p>
                                    <a href="<?= base_url() ?>Home/AboutDigiCoders" class="btn-cta-discover">
                                        Discover Now <i class="fa fa-arrow-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-sm-5 col-md-5 text-center text-sm-right mt-3 mt-sm-0">
                                <div class="cta-banner-image-wrap">
                                    <img src="<?= base_url('public') ?>/assets/images/rocket-laptop.png"
                                        alt="DigiCoders Rocket Laptop Illustration" class="img-fluid cta-banner-img"
                                        loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Why Choose DigiCoders / Feature Section End =============-->
    <!--===========  Who We Are / What We Do / How We Do It Section Start =============-->
    <div class="about-features-wrapper section-space--ptb_60 bg-light">
        <div class="container">
            <div class="row align-items-stretch">
                <!-- Card 1: Who We Are -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="about-info-card h-100">
                        <div class="about-card-image">
                            <img src="<?= base_url('public') ?>/assets/images/WhoWeAre.jpg" alt="Who We Are"
                                loading="lazy">
                        </div>
                        <div class="about-card-body">
                            <div class="mb-2">
                                <span class="project-type-badge">About Us</span>
                            </div>
                            <h4 class="about-card-title mb-2">Who we are?</h4>
                            <p class="about-card-text">
                                DigiCoders Technologies is a leading development services providers in Lucknow, Uttar
                                Pradesh and North India.
                            </p>
                            <div class="about-card-footer">
                                <span class="text-muted font-weight-bold" style="font-size: 12px;">DigiCoders
                                    Info</span>
                                <a href="<?= base_url() ?>Home/AboutDigiCoders" class="btn-project-inquiry">
                                    Discover Now <i class="fa fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: What We Do -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="about-info-card h-100">
                        <div class="about-card-image">
                            <img src="<?= base_url('public') ?>/assets/images/WhatWeDo.jpg" alt="What We Do"
                                loading="lazy">
                        </div>
                        <div class="about-card-body">
                            <div class="mb-2">
                                <span class="project-type-badge">Services</span>
                            </div>
                            <h4 class="about-card-title mb-2">What We Do</h4>
                            <p class="about-card-text">
                                We provide all IT Solutions like Software, Website and Mobile Application Development
                                and Training Programs.
                            </p>
                            <div class="about-card-footer">
                                <span class="text-muted font-weight-bold" style="font-size: 12px;">IT Solutions</span>
                                <a href="<?= base_url() ?>Home/AboutDigiCoders" class="btn-project-inquiry">
                                    Discover Now <i class="fa fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: How We Do It -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="about-info-card h-100">
                        <div class="about-card-image">
                            <img src="<?= base_url('public') ?>/assets/images/HowWeDoIT.jpg" alt="How We Do It"
                                loading="lazy">
                        </div>
                        <div class="about-card-body">
                            <div class="mb-2">
                                <span class="project-type-badge">Process</span>
                            </div>
                            <h4 class="about-card-title mb-2">How We Do It</h4>
                            <p class="about-card-text">
                                At DigiCoders We are working with Young Engineer, Entrepreneur our Most innovative team.
                            </p>
                            <div class="about-card-footer">
                                <span class="text-muted font-weight-bold" style="font-size: 12px;">Our
                                    Workculture</span>
                                <a href="<?= base_url() ?>Home/AboutDigiCoders" class="btn-project-inquiry">
                                    Discover Now <i class="fa fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Challenge Banner -->
            <div class="section-under-heading text-center mt-3 p-3 bg-white"
                style="border-radius: 12px; border: 1px solid #e2e8f0; font-size: 14px; font-weight: 600; color: #475569;">
                Challenges are just opportunities in disguise.
                <a href="<?= base_url() ?>Home/ContactUs" class="text-primary-blue font-weight-bold ml-1"
                    style="color: #0d6efd;">
                    Take the challenge! <i class="fa fa-arrow-right ml-1"></i>
                </a>
            </div>
        </div>
    </div>
    <!--===========  Who We Are / What We Do / How We Do It Section End =============-->

    <!--===========  IT Services Section Start =============-->
    <!--===========  feature-icon-wrapper / IT Services Start =============-->
    <div class="services-section-wrapper">
        <div class="container">
            <!-- Section Header -->
            <div class="section-title-wrap text-center mb-5">
                <div class="mb-2">
                    <span class="exp-pill-tag">An Umbrella Solution for All IT Needs</span>
                </div>
                <h2 class="why-choose-heading">
                    Reach out to the world's most <br><span class="text-primary-blue">reliable IT services.</span>
                </h2>
            </div>

            <div class="services-grid-container">
                <!-- Service 1: Software Development (Active) -->
                <div class="service-box-card active">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6" y="10" width="52" height="34" rx="4" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <path d="M22 44L16 54H48L42 44" stroke="#0e69b5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14 54H50" stroke="#0e69b5" stroke-width="2.5" stroke-linecap="round"/>
                            <path d="M20 24L14 27L20 30" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M44 24L50 27L44 30" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M34 22L30 32" stroke="#0e69b5" stroke-width="2.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Software Development</h5>
                    <p class="service-box-text">
                        We provide custome software development for your business, Billing, Inventory and Every custom software
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/SoftwareDevelopment" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2: Website Development -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="6" y="10" width="52" height="40" rx="4" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <path d="M6 20H58" stroke="#0e69b5" stroke-width="2.5"/>
                            <circle cx="14" cy="15" r="2" fill="#f5a623"/>
                            <circle cx="20" cy="15" r="2" fill="#f5a623"/>
                            <circle cx="26" cy="15" r="2" fill="#f5a623"/>
                            <rect x="14" y="26" width="16" height="18" rx="2" stroke="#0e69b5" stroke-width="2"/>
                            <rect x="34" y="26" width="16" height="8" rx="2" stroke="#f5a623" stroke-width="2"/>
                            <rect x="34" y="38" width="16" height="6" rx="2" stroke="#0e69b5" stroke-width="2"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Website Development</h5>
                    <p class="service-box-text">
                        We provide website design &amp; development to make your business online to drive more customers and sales
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/WebsiteDevelopment" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3: Mobile App Development -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="18" y="8" width="28" height="48" rx="5" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <line x1="28" y1="13" x2="36" y2="13" stroke="#0e69b5" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="32" cy="50" r="2.5" fill="#0e69b5"/>
                            <rect x="23" y="19" width="18" height="14" rx="3" stroke="#f5a623" stroke-width="2" fill="#fff9ec"/>
                            <path d="M28 26L32 23L36 26" stroke="#f5a623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <rect x="23" y="36" width="8" height="8" rx="2" stroke="#0e69b5" stroke-width="2"/>
                            <rect x="33" y="36" width="8" height="8" rx="2" stroke="#f5a623" stroke-width="2"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Mobile App Development</h5>
                    <p class="service-box-text">
                        We provide Android &amp; iOS Application development, we can turn your idea into reality, Start your Startup with us
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/MobileApplicationDevelopment" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4: Digital Marketing -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 50H56" stroke="#0e69b5" stroke-width="2.5" stroke-linecap="round"/>
                            <rect x="14" y="34" width="8" height="16" rx="2" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <rect x="28" y="24" width="8" height="26" rx="2" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <rect x="42" y="14" width="8" height="36" rx="2" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <path d="M12 28L26 18L38 24L52 10" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M44 10H52V18" stroke="#f5a623" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="52" cy="10" r="3" fill="#f5a623"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Digital Marketing</h5>
                    <p class="service-box-text">
                        We provide best digital marketing services to drive more trafic on your mobile app or website to boost your sales
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/DigitalMarketing" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5: Graphics Design -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M32 10C18.745 10 8 20.745 8 34C8 42.5 12.5 48 20 48C23.5 48 25 45.5 25 43.5C25 41.5 24 40.5 24 39C24 37 25.5 36 27.5 36H34C46 36 56 30 56 18C56 13.5 44 10 32 10Z" stroke="#0e69b5" stroke-width="2.5" stroke-linejoin="round" fill="#f8fafc"/>
                            <circle cx="20" cy="22" r="3.5" fill="#f5a623"/>
                            <circle cx="32" cy="18" r="3.5" fill="#0e69b5"/>
                            <circle cx="44" cy="22" r="3.5" fill="#f5a623"/>
                            <circle cx="18" cy="32" r="3.5" fill="#0e69b5"/>
                            <circle cx="18" cy="42" r="3" stroke="#f5a623" stroke-width="2"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Graphics Design</h5>
                    <p class="service-box-text">
                        We provide graphics design to stay touch with your customers using promotional banners, offers &amp; many more
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/GraphicsDesigning" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6: Domain & Hosting -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="10" y="10" width="44" height="18" rx="3" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <rect x="10" y="34" width="44" height="18" rx="3" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <circle cx="18" cy="19" r="2.5" fill="#f5a623"/>
                            <circle cx="26" cy="19" r="2.5" fill="#0e69b5"/>
                            <circle cx="18" cy="43" r="2.5" fill="#f5a623"/>
                            <circle cx="26" cy="43" r="2.5" fill="#0e69b5"/>
                            <line x1="36" y1="19" x2="48" y2="19" stroke="#0e69b5" stroke-width="2" stroke-linecap="round"/>
                            <line x1="36" y1="43" x2="48" y2="43" stroke="#0e69b5" stroke-width="2" stroke-linecap="round"/>
                            <path d="M46 28C48 26 52 26 53 29C55 29 56 31 55 33C56 35 54 37 52 37H44C42 37 41 35 42 33C41 31 43 28 46 28Z" stroke="#f5a623" stroke-width="2" fill="#fff9ec"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Domain &amp; Hosting</h5>
                    <p class="service-box-text">
                        We provide domain, hosting and a reliable server to never let your business down, start your startup with us
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/DomainAndHosting" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 7: ERP & CRM Development -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 52V26L22 34V26L34 34V16H54V52H10Z" stroke="#0e69b5" stroke-width="2.5" stroke-linejoin="round" fill="#f8fafc"/>
                            <line x1="10" y1="52" x2="54" y2="52" stroke="#0e69b5" stroke-width="2.5"/>
                            <rect x="40" y="24" width="6" height="6" rx="1" fill="#0e69b5"/>
                            <rect x="40" y="34" width="6" height="6" rx="1" fill="#0e69b5"/>
                            <rect x="28" y="40" width="6" height="6" rx="1" fill="#0e69b5"/>
                            <rect x="16" y="40" width="6" height="6" rx="1" fill="#0e69b5"/>
                            <circle cx="44" cy="14" r="6" stroke="#f5a623" stroke-width="2" fill="#fff9ec"/>
                            <path d="M44 6V10M44 18V22M36 14H40M48 14H52" stroke="#f5a623" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">ERP &amp; CRM Development</h5>
                    <p class="service-box-text">
                        We provide ERP &amp; CRM to automate your business with fast execution and pricess strategies.
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/ERPandCRMDevelopment" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 8: Maintenance Services -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 22H36V46H8V22Z" stroke="#0e69b5" stroke-width="2.5" stroke-linejoin="round" fill="#f8fafc"/>
                            <path d="M36 30H46L54 38V46H36V30Z" stroke="#0e69b5" stroke-width="2.5" stroke-linejoin="round" fill="#f8fafc"/>
                            <circle cx="20" cy="46" r="5" stroke="#0e69b5" stroke-width="2.5" fill="#ffffff"/>
                            <circle cx="44" cy="46" r="5" stroke="#0e69b5" stroke-width="2.5" fill="#ffffff"/>
                            <path d="M22 26C22 26 26 25 28 28C28 32 26 35 22 37C18 35 16 32 16 28C18 25 22 26 22 26Z" stroke="#f5a623" stroke-width="2" fill="#fff9ec"/>
                            <path d="M19 31L21 33L25 29" stroke="#f5a623" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Maintenance Services</h5>
                    <p class="service-box-text">
                        We provide reliable annual maintenance services for your website, software, erp, crm or mobile application
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/MaintenanceServices" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 9: UI/UX Designing -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="10" width="48" height="36" rx="4" stroke="#0e69b5" stroke-width="2.5" fill="#f8fafc"/>
                            <path d="M8 20H56" stroke="#0e69b5" stroke-width="2"/>
                            <path d="M38 48L48 38L54 44L44 54L34 54L38 48Z" stroke="#f5a623" stroke-width="2.5" fill="#fff9ec" stroke-linejoin="round"/>
                            <path d="M44 42L48 46" stroke="#f5a623" stroke-width="2"/>
                            <rect x="14" y="26" width="12" height="14" rx="2" stroke="#0e69b5" stroke-width="2"/>
                            <circle cx="14" cy="15" r="1.5" fill="#f5a623"/>
                            <circle cx="19" cy="15" r="1.5" fill="#f5a623"/>
                            <circle cx="24" cy="15" r="1.5" fill="#f5a623"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">UI/UX Designing</h5>
                    <p class="service-box-text">
                        We provide modern UI/UX design services, wireframing &amp; prototyping for seamless mobile and web user experience
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/GraphicsDesigning" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 10: Explore More Services -->
                <div class="service-box-card">
                    <div class="service-icon-box">
                        <svg width="52" height="52" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 24L14 10H50L54 24" stroke="#0e69b5" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 24V52H54V24" stroke="#0e69b5" stroke-width="2.5" stroke-linejoin="round" fill="#f8fafc"/>
                            <path d="M10 24C12 24 13 22 15 22C17 22 18 24 20 24C22 24 23 22 25 22C27 22 28 24 30 24C32 24 33 22 35 22C37 22 38 24 40 24C42 24 43 22 45 22C47 22 48 24 50 24C52 24 53 22 54 24" stroke="#f5a623" stroke-width="2.5"/>
                            <rect x="24" y="34" width="16" height="18" rx="2" stroke="#0e69b5" stroke-width="2"/>
                            <circle cx="36" cy="43" r="1.5" fill="#f5a623"/>
                        </svg>
                    </div>
                    <h5 class="service-box-title">Explore More Services</h5>
                    <p class="service-box-text">
                        We provide many more IT servies like training programs, internships, mlm software and many more, discover to know more.
                    </p>
                    <div class="service-box-footer">
                        <a href="<?= base_url() ?>Home/ITServices" class="service-discover-link">
                            <span>Discover now</span> <i class="fa fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-icon-wrapper / IT Services End =============-->
    <!--===========  feature-icon-wrapper  End =============-->
    <!--=========== Fun Fact / Counter Banner Start ==========-->
    <div class="counter-banner-section">
        <div class="container">
            <div class="counter-banner-box">
                <div class="row align-items-center">
                    <!-- Stat 1: Happy Clients -->
                    <div class="col-6 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-item-wrap justify-content-lg-center">
                            <div class="counter-icon-circle">
                                <i class="fa fa-smile"></i>
                            </div>
                            <div class="counter-info-text">
                                <div class="counter-num"><span class="counter">850</span>+</div>
                                <h6 class="counter-title">Happy clients</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 2: Finished Projects -->
                    <div class="col-6 col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter-item-wrap justify-content-lg-center">
                            <div class="counter-icon-circle">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <div class="counter-info-text">
                                <div class="counter-num"><span class="counter">1000</span>+</div>
                                <h6 class="counter-title">Finished projects</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 3: Skilled Experts -->
                    <div class="col-6 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                        <div class="counter-item-wrap justify-content-lg-center">
                            <div class="counter-icon-circle">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="counter-info-text">
                                <div class="counter-num"><span class="counter">50</span>+</div>
                                <h6 class="counter-title">Skilled Experts</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 4: Products -->
                    <div class="col-6 col-sm-6 col-lg-3">
                        <div class="counter-item-wrap justify-content-lg-center">
                            <div class="counter-icon-circle">
                                <i class="fa fa-box-open"></i>
                            </div>
                            <div class="counter-info-text">
                                <div class="counter-num"><span class="counter">100</span>+</div>
                                <h6 class="counter-title">Products</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== Fun Fact / Counter Banner End ==========-->
    <!--========= Pricing Table Area Start ==========-->
    <div class="pricing-section-wrapper">
        <div class="container">
            <!-- Section Header -->
            <div class="pricing-header-container mb-5">
                <div class="mb-2">
                    <span class="exp-pill-tag">Pricing and Packages</span>
                </div>
                <h3 class="why-choose-heading mb-0">
                    <span><img class="img-fluid mr-2" src="<?= base_url('public') ?>/assets/images/offer2.gif"
                            alt="offer" style="height:38px; width:38px; vertical-align: middle;"></span>
                    6 Months free maintenance for <span class="text-primary-blue">all IT services.</span>
                </h3>
                <div class="pricing-top-right-action mt-3 mt-lg-0">
                    <a href="<?= base_url() ?>Home/Packages" class="btn-explore-packages">
                        Explore All Packages <i class="fa fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <div class="row align-items-stretch mb-3">
                <!-- Card 1: Website Starter -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-card-box h-100">
                        <div>
                            <h6 class="pricing-subtitle text-center">Website Starter</h6>
                            <div class="pricing-icon-avatar">
                                <img src="<?= base_url('public/assets/images/logo_circle.png') ?>" alt="DigiCoders Logo" loading="lazy">
                            </div>
                            <div class="pricing-price-amount">
                                <span class="currency">₹</span>
                                <span class="price">9999</span>
                                <span class="period">/onward</span>
                            </div>
                            <div class="mb-4">
                                <a href="<?= base_url() ?>Home/RequestProposal" class="btn-pricing-action">
                                    Get this Offer!
                                </a>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="fa fa-check"></i> 1 Year Domain</li>
                                <li><i class="fa fa-check"></i> 1 Year Hosting</li>
                                <li><i class="fa fa-check"></i> Dynamic Website</li>
                                <li><i class="fa fa-check"></i> Official 5 Emails</li>
                                <li><i class="fa fa-check"></i> Basic SEO</li>
                                <li><i class="fa fa-check"></i> Many More...</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Mobile App Starter (Most Popular - Image 2 Ribbon) -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-card-box featured h-100">
                        <div class="pricing-corner-ribbon">
                            MOST POPULAR
                        </div>
                        <div>
                            <h6 class="pricing-subtitle text-center">Mobile App Starter</h6>
                            <div class="pricing-icon-avatar">
                                <img src="<?= base_url('public/assets/images/logo_circle.png') ?>" alt="DigiCoders Logo" loading="lazy">
                            </div>
                            <div class="pricing-price-amount">
                                <span class="currency">₹</span>
                                <span class="price">24999</span>
                                <span class="period">/onward</span>
                            </div>
                            <div class="mb-4">
                                <a href="<?= base_url() ?>Home/RequestProposal" class="btn-pricing-action featured">
                                    Get this Offer!
                                </a>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="fa fa-check"></i> E Commerce App</li>
                                <li><i class="fa fa-check"></i> Taxi Booking App</li>
                                <li><i class="fa fa-check"></i> Food Delivery App</li>
                                <li><i class="fa fa-check"></i> Gaming Tournaments App</li>
                                <li><i class="fa fa-check"></i> Service App</li>
                                <li><i class="fa fa-check"></i> MLM Application</li>
                                <li><i class="fa fa-check"></i> Many more...</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Software Starter -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-card-box h-100">
                        <div>
                            <h6 class="pricing-subtitle text-center">Software Starter</h6>
                            <div class="pricing-icon-avatar">
                                <img src="<?= base_url('public/assets/images/logo_circle.png') ?>" alt="DigiCoders Logo" loading="lazy">
                            </div>
                            <div class="pricing-price-amount">
                                <span class="currency">₹</span>
                                <span class="price">15999</span>
                                <span class="period">/onward</span>
                            </div>
                            <div class="mb-4">
                                <a href="<?= base_url() ?>Home/RequestProposal" class="btn-pricing-action">
                                    Get this Offer!
                                </a>
                            </div>
                            <ul class="pricing-features-list">
                                <li><i class="fa fa-check"></i> Billing Software</li>
                                <li><i class="fa fa-check"></i> Inventory Software</li>
                                <li><i class="fa fa-check"></i> CRM &amp; ERP</li>
                                <li><i class="fa fa-check"></i> School Management ERP</li>
                                <li><i class="fa fa-check"></i> MLM Software</li>
                                <li><i class="fa fa-check"></i> Many More...</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Terms & Conditions Note -->
            <div class="text-left">
                <p class="mb-0" style="font-size: 13.5px; font-weight: 500; color: #475569;">
                    <strong>Note:</strong> * All terms and conditions apply
                </p>
            </div>
        </div>
    </div>
    <!--========= Pricing Table Area End ==========-->
    <!--====================  Blog Section Start ====================-->
    <div class="blog-section-wrapper">
        <div class="container">
            <!-- Header Row -->
            <div class="row align-items-end mb-4">
                <div class="col-md-8">
                    <h2 class="why-choose-heading mb-1">Latest Insights</h2>
                    <p class="why-choose-subheading mb-0" style="margin: 0;">Read our latest blogs &amp; industry news
                    </p>
                </div>
                <div class="col-md-4 text-md-right mt-3 mt-md-0">
                    <a href="<?= base_url() ?>Home/Blogs" class="service-discover-link font-weight-bold">
                        <span>View All Blogs</span> <i class="fa fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>

            <!-- Blog Slider Carousel -->
            <div class="owl-carousel owl-theme" id="blog_slider">
                <?php
                if (!empty($blogdata)) {
                    $categories = ['Technology', 'Business', 'Development', 'IT Updates'];
                    foreach ($blogdata as $index => $data) {
                        $category = $categories[$index % count($categories)];
                        $img_file = !empty($data->img) ? $data->img : $data->image;
                        $img_url = !empty($img_file) ? base_url('public/uploads/Blog/' . $img_file) : base_url('public/assets/images/blog-default.jpg');
                        $blog_slug = !empty($data->url) ? $data->url : $data->id;
                        $detail_url = base_url('blog/' . $blog_slug);
                        ?>
                        <div class="item py-2 h-100">
                            <div class="blog-card-item h-100">
                                <div class="blog-card-thumb">
                                    <a href="<?= $detail_url ?>">
                                        <img src="<?= $img_url ?>"
                                            alt="<?= htmlspecialchars($data->title ?? 'DigiCoders Blog', ENT_QUOTES, 'UTF-8'); ?>" loading="lazy">
                                    </a>
                                    <span class="blog-cat-badge"><?= $category; ?></span>
                                </div>
                                <div class="blog-card-content">
                                    <div class="blog-card-meta mb-2">
                                        <i class="far fa-calendar-alt mr-1"></i> <?= !empty($data->date) ? date('M d, Y', strtotime($data->date)) : date('M d, Y') ?>
                                    </div>
                                    <h5 class="blog-card-title mb-2">
                                        <a href="<?= $detail_url ?>"><?= htmlspecialchars($data->title ?? '', ENT_QUOTES, 'UTF-8'); ?></a>
                                    </h5>
                                    <p class="blog-card-text mb-3">
                                        <?= htmlspecialchars(mb_strimwidth(strip_tags($data->content ?? $data->full_discription ?? ''), 0, 120, '...'), ENT_QUOTES, 'UTF-8'); ?>
                                    </p>
                                    <div class="blog-card-footer">
                                        <a href="<?= $detail_url ?>" class="service-discover-link font-weight-bold">
                                            <span>Read More</span> <i class="fa fa-arrow-right ml-1"></i>
                                        </a>
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
    <!--====================  Blog Section End  ====================-->
    <!--===========  Dark Technologies Banner Section Start =============-->
    <div class="dark-tech-section">
        <div class="container">
            <div class="dark-tech-banner">
                <div class="row align-items-center">
                    <!-- Left Side: Header -->
                    <div class="col-lg-3 col-md-4 mb-4 mb-md-0">
                        <div class="dark-tech-left-content">
                            <span class="dark-tech-sub d-block mb-1">Technologies</span>
                            <h3 class="dark-tech-heading mb-2">We Work With</h3>
                            <p class="dark-tech-desc mb-0">
                                We use the latest technologies to build secure &amp; future-ready solutions.
                            </p>
                        </div>
                    </div>

                    <!-- Right Side: Swiper Continuous Marquee -->
                    <div class="col-lg-9 col-md-8">
                        <div class="swiper-container dark-tech-swiper"
                            style="padding: 10px 0; overflow: hidden; width: 100%;">
                            <div class="swiper-wrapper">
                                <!-- Tech 1: Laravel -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/30.jpg"
                                                alt="Laravel" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Laravel</span>
                                    </div>
                                </div>
                                <!-- Tech 2: React -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/27.jpg"
                                                alt="React" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">React</span>
                                    </div>
                                </div>
                                <!-- Tech 3: Flutter -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/25.jpg"
                                                alt="Flutter" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Flutter</span>
                                    </div>
                                </div>
                                <!-- Tech 4: Node.js -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/51.jpg"
                                                alt="Node.js" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Node.js</span>
                                    </div>
                                </div>
                                <!-- Tech 5: Python -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/20.jpg"
                                                alt="Python" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Python</span>
                                    </div>
                                </div>
                                <!-- Tech 6: MySQL -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/35.jpg"
                                                alt="MySQL" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">MySQL</span>
                                    </div>
                                </div>
                                <!-- Tech 7: ASP.NET -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/2.jpg"
                                                alt="ASP.NET" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">ASP.NET</span>
                                    </div>
                                </div>
                                <!-- Tech 8: Android -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/7.jpg"
                                                alt="Android" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Android</span>
                                    </div>
                                </div>
                                <!-- Tech 9: Java -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/28.jpg"
                                                alt="Java" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Java</span>
                                    </div>
                                </div>
                                <!-- Tech 10: CodeIgniter -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/15.jpg"
                                                alt="CodeIgniter" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">CodeIgniter</span>
                                    </div>
                                </div>
                                <!-- Tech 11: PHP -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/40.jpg"
                                                alt="PHP" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">PHP</span>
                                    </div>
                                </div>
                                <!-- Tech 12: MERN Stack -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/31.jpg"
                                                alt="MERN Stack" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">MERN Stack</span>
                                    </div>
                                </div>
                                <!-- Tech 13: UI/UX Design -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/50.jpg"
                                                alt="UI UX" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">UI/UX Design</span>
                                    </div>
                                </div>
                                <!-- Tech 14: PostgreSQL -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/41.jpg"
                                                alt="PostgreSQL" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">PostgreSQL</span>
                                    </div>
                                </div>
                                <!-- Tech 15: Express JS -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/22.jpg"
                                                alt="Express JS" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Express JS</span>
                                    </div>
                                </div>
                                <!-- Tech 16: MongoDB -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/33.jpg"
                                                alt="MongoDB" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">MongoDB</span>
                                    </div>
                                </div>
                                <!-- Tech 17: WordPress -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/1.jpg"
                                                alt="WordPress" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">WordPress</span>
                                    </div>
                                </div>
                                <!-- Tech 18: Shopify -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/46.jpg"
                                                alt="Shopify" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Shopify</span>
                                    </div>
                                </div>
                                <!-- Tech 19: Firebase -->
                                <div class="swiper-slide">
                                    <div class="dark-tech-slide-item">
                                        <div class="dark-tech-logo-wrap">
                                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/24.jpg"
                                                alt="Firebase" loading="lazy">
                                        </div>
                                        <span class="dark-tech-name">Firebase</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Dark Technologies Banner Section End =============-->
    <!--====================  Contact Us Section Start ====================-->
    <div class="contact-us-section-wrappaer">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Info Box -->
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="contact-info-left-box">
                        <div class="mb-2">
                            <span class="exp-pill-tag"><i class="fa fa-envelope-open mr-1"></i> Drop Us A Message</span>
                        </div>
                        <h2 class="why-choose-heading mb-3" style="font-size: 32px; line-height: 1.3;">
                            Obtaining further information by <span class="text-primary-blue">dropping a message</span>
                            to our experienced IT professionals.
                        </h2>
                        <p class="why-choose-subheading mb-4" style="font-size: 14.5px; line-height: 1.6;">
                            Contact will require a detailed analysis and assessment of your plan. Our experienced team
                            can give you the best estimation for technology and budget for your requirement.
                        </p>

                        <div class="contact-feature-list">
                            <div class="contact-feature-item">
                                <div class="contact-feature-icon">
                                    <i class="fa fa-clock"></i>
                                </div>
                                <div class="contact-feature-text">
                                    Available 16 Hours a Day for Support &amp; Consultation
                                </div>
                            </div>
                            <div class="contact-feature-item">
                                <div class="contact-feature-icon">
                                    <i class="fa fa-chart-line"></i>
                                </div>
                                <div class="contact-feature-text">
                                    Free Project Scope Analysis &amp; Technical Estimation
                                </div>
                            </div>
                            <div class="contact-feature-item">
                                <div class="contact-feature-icon">
                                    <i class="fa fa-shield-alt"></i>
                                </div>
                                <div class="contact-feature-text">
                                    100% Data &amp; Source Code Security Guaranteed
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    function submitregform() {
                        var btn = document.getElementById('submitbtn');
                        if (btn) btn.disabled = false;
                    }
                </script>

                <!-- Right Contact Form Box -->
                <div class="col-lg-6">
                    <div class="contact-form-card-box">
                        <h4 class="font-weight-bold mb-3" style="color: #0f172a; font-size: 20px;">Send Us A Message
                        </h4>
                        <form id="contact" action="<?= base_url() ?>Home/SubmitForm/contactForm" method="post">
                            <?php
                            $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />

                            <div class="form-row">
                                <div class="col-md-6 form-group-custom">
                                    <input name="Name" type="text" class="form-control-custom" placeholder="Name *"
                                        required="required">
                                </div>
                                <div class="col-md-6 form-group-custom">
                                    <input name="Email" type="email" class="form-control-custom" placeholder="Email *"
                                        required="required">
                                </div>
                            </div>

                            <div class="form-group-custom">
                                <input name="Mobile" type="text" class="form-control-custom"
                                    placeholder="Mobile Number *" required="required" maxlength="10" minlength="10">
                            </div>

                            <div class="form-group-custom">
                                <select name="Enquiry" class="select-control-custom">
                                    <option value="">Your Enquiry for</option>
                                    <option>For Website Development</option>
                                    <option>For Software Development</option>
                                    <option>For Mobile Application Development</option>
                                    <option>For Graphics Designing</option>
                                    <option>For Digital Marketing</option>
                                    <option>For Domain &amp; Hosting</option>
                                    <option>For ERP &amp; CRM</option>
                                    <option>For Training Programs</option>
                                    <option>Any Other</option>
                                </select>
                            </div>

                            <div class="form-group-custom">
                                <textarea name="Message" class="form-control-custom"
                                    placeholder="Please describe what you need." maxlength="250"></textarea>
                            </div>

                            <div class="form-group-custom mb-3">
                                <label class="font-weight-bold mb-1" style="font-size: 13px; color: #475569;">Security
                                    Verification <span class="text-danger">*</span></label>
                                <div class="g-recaptcha" data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"
                                    data-callback="submitregform"></div>
                            </div>

                            <div>
                                <button class="btn-submit-consultation" type="submit" id="submitbtn">
                                    <i class="fas fa-paper-plane mr-1"></i> Get a free consultation
                                </button>
                                <p class="form-messege mt-2 mb-0"></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  Contact Us Section End  ====================-->
    <!--============ Advice & Rating Contact Banner Start ============-->
    <div class="advice-rating-banner-wrapper">
        <div class="container">
            <div class="advice-rating-card-box">
                <div class="row align-items-center">
                    <!-- Left: Illustration Image -->
                    <div class="col-lg-6 col-md-6 text-center mb-4 mb-md-0">
                        <div class="advice-img-wrap">
                            <img src="<?= base_url('public') ?>/assets/images/Business Meeting Lottie Animation.svg" alt="DigiCoders Team Advice" class="img-fluid advice-img" loading="lazy">
                        </div>
                    </div>

                    <!-- Right: Rating & Direct Contact -->
                    <div class="col-lg-6 col-md-6">
                        <div class="advice-content-wrap">
                            <!-- Rating Box -->
                            <div class="advice-rating-header mb-3">
                                <div class="d-flex align-items-center flex-wrap gap-2 mb-1">
                                    <h3 class="advice-rating-score mb-0">4.9/5.0</h3>
                                    <div class="advice-star-rating ml-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                                <p class="advice-rating-sub mb-0">Rated by 1600+ customers over social media</p>
                            </div>

                            <!-- Direct Contact Links -->
                            <div class="advice-contact-grid">
                                <!-- Phone -->
                                <div class="advice-contact-item">
                                    <div class="advice-icon-circle call">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="advice-contact-info">
                                        <span class="advice-contact-label">CALL FOR ADVICE NOW!</span>
                                        <div class="advice-contact-val d-flex flex-wrap align-items-center" style="gap: 10px;">
                                            <a href="tel:+919198483820" style="color: inherit; text-decoration: none;">+91 9198483820</a>
                                            <span style="color: #cbd5e1; font-weight: 400; margin: 0 6px;">|</span>
                                            <a href="tel:+916394296293" style="color: inherit; text-decoration: none;">+91 6394296293</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="advice-contact-item">
                                    <div class="advice-icon-circle mail">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="advice-contact-info">
                                        <span class="advice-contact-label">SAY HELLO</span>
                                        <div class="advice-contact-val d-flex flex-wrap align-items-center" style="font-size: 14px; gap: 10px;">
                                            <a href="mailto:info@digicoders.in" style="color: inherit; text-decoration: none;">info@digicoders.in</a>
                                            <span style="color: #cbd5e1; font-weight: 400; margin: 0 6px;">|</span>
                                            <a href="mailto:digicoderstech@gmail.com" style="color: inherit; text-decoration: none;">digicoderstech@gmail.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--============ Advice & Rating Contact Banner End ============-->
    <!--===========  Social Review Section Start =============-->
    <div class="social-review-area section-space--ptb_60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="taggbox" style="width:100%;height:100%;overflow:auto;" data-widget-id="314856"
                        data-website="1" data-show-header="false" data-header="false"></div>
                    <script src="https://widget.taggbox.com/embed.min.js" type="text/javascript"></script>
                </div>
            </div>
        </div>
    </div>
    <!--===========  Social Review Section End =============-->


    <!--============ Contact Us Area End =================-->

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        function initDarkTechSwiper() {
            if (typeof Swiper !== 'undefined' && document.querySelector('.dark-tech-swiper')) {
                var el = document.querySelector('.dark-tech-swiper');
                if (el.swiper) return;
                new Swiper('.dark-tech-swiper', {
                    slidesPerView: 8,
                    spaceBetween: 12,
                    loop: true,
                    speed: 3000,
                    autoplay: {
                        delay: 0,
                        disableOnInteraction: false,
                        pauseOnMouseEnter: true,
                    },
                    allowTouchMove: true,
                    observer: true,
                    observeParents: true,
                    breakpoints: {
                        0: { slidesPerView: 2.8, spaceBetween: 10 },
                        480: { slidesPerView: 3.5, spaceBetween: 10 },
                        576: { slidesPerView: 4.5, spaceBetween: 12 },
                        768: { slidesPerView: 6, spaceBetween: 12 },
                        992: { slidesPerView: 7, spaceBetween: 14 },
                        1200: { slidesPerView: 8, spaceBetween: 15 }
                    }
                });
            } else {
                setTimeout(initDarkTechSwiper, 150);
            }
        }
        if (document.readyState === 'complete') {
            initDarkTechSwiper();
        } else {
            window.addEventListener('load', initDarkTechSwiper);
            document.addEventListener('DOMContentLoaded', initDarkTechSwiper);
        }

        $(document).ready(function () {

            if (typeof $.fn.owlCarousel !== 'undefined') {
                if ($('#banner_slider').length) {
                    $('#banner_slider').owlCarousel({
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        nav: false,
                        dots: true,
                        responsive: {
                            0: { items: 1 },
                            600: { items: 2 },
                            1000: { items: 4 }
                        }
                    });
                }
                if ($('#recent_project').length) {
                    $("#recent_project").owlCarousel({
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        items: 4,
                        loop: true,
                        margin: 20,
                        center: false,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1, margin: 15 },
                            576: { items: 2, margin: 15 },
                            992: { items: 3, margin: 20 },
                            1200: { items: 4, margin: 20 }
                        }
                    });
                }
                if ($('#expert_team').length) {
                    $('#expert_team').owlCarousel({
                        loop: true,
                        margin: 15,
                        items: 6,
                        autoplay: true,
                        autoplayTimeout: 2500,
                        autoplayHoverPause: true,
                        smartSpeed: 800,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1 },
                            480: { items: 2 },
                            768: { items: 3 },
                            992: { items: 4 },
                            1200: { items: 5 },
                            1400: { items: 6 }
                        }
                    });
                }
                if ($('#top_banner_slider').length) {
                    $('#top_banner_slider').owlCarousel({
                        loop: true,
                        margin: 0,
                        autoplay: true,
                        autoplayTimeout: 2000,
                        autoplayHoverPause: true,
                        nav: true,
                        dots: true,
                        animateOut: 'fadeOut',
                        animateIn: 'fadeIn',
                        smartSpeed: 1000,
                        items: 1,
                        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
                        responsive: {
                            0: { nav: false },
                            768: { nav: true }
                        }
                    });
                }
                if ($('#blog_slider').length) {
                    $('#blog_slider').owlCarousel({
                        loop: true,
                        margin: 20,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        dots: false,
                        nav: false,
                        responsive: {
                            0: { items: 1, margin: 15 },
                            576: { items: 2, margin: 15 },
                            992: { items: 3, margin: 20 },
                            1200: { items: 3, margin: 20 }
                        }
                    });
                }
            }
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lazyImages = document.querySelectorAll("img.lazy-img, img.lazy");

            lazyImages.forEach(img => {
                const realSrc = img.getAttribute("data-src");
                if (realSrc) {
                    img.src = realSrc;
                }
            });
        });
    </script>

    <!-- Global Project Enquiry Modal -->
    <div class="modal fade" id="projectEnquiryModal" tabindex="-1" role="dialog" aria-hidden="true"
        style="z-index: 99999 !important;">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 440px; margin: 1.75rem auto;">
            <div class="modal-content"
                style="border-radius:20px; border:none; box-shadow:0 25px 60px rgba(0,0,0,0.25); overflow: hidden; position: relative;">

                <!-- Modal Header -->
                <div class="modal-header d-block text-center"
                    style="background: linear-gradient(135deg, #086AD8, #00C6FF); padding: 25px 20px 20px 20px; border: none; position: relative; border-radius: 20px 20px 0 0;">
                    <button type="button" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close"
                        style="position: absolute; top: 14px; right: 14px; background: rgba(255, 255, 255, 0.25); color: #ffffff; border: none; border-radius: 50%; width: 34px; height: 34px; display: inline-flex; align-items: center; justify-content: center; font-size: 22px; line-height: 1; cursor: pointer; z-index: 20; outline: none; padding: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.15);"
                        onmouseover="this.style.background='rgba(255,255,255,0.45)'"
                        onmouseout="this.style.background='rgba(255,255,255,0.25)'">
                        <span aria-hidden="true" style="margin-top: -2px;">&times;</span>
                    </button>
                    <div class="w-100 text-center">
                        <div
                            style="width:54px; height:54px; background:rgba(255,255,255,0.2); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; margin: 0 auto 10px auto;">
                            <i class="fa fa-paper-plane text-white" style="font-size:22px;"></i>
                        </div>
                        <h4 class="modal-title text-white"
                            style="font-weight:700; font-size:20px; margin-bottom:4px; line-height:1.2;">Project Enquiry
                        </h4>
                        <p class="text-white mb-0" id="modal_project_name_display"
                            style="opacity: 0.95; font-size: 13.5px; font-weight:600;"></p>
                    </div>
                </div>

                <!-- Modal Body -->
                <div class="modal-body" style="padding: 25px 22px; background: #f8f9fa;">
                    <div id="projectEnquiryAlert" class="mb-3 text-center"
                        style="font-weight:600; font-size:14px; display:none; padding:10px; border-radius:8px;"></div>
                    <form id="projectEnquiryForm" action="javascript:void(0);" onsubmit="return false;">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>"
                            value="<?= $this->security->get_csrf_hash() ?>">
                        <input type="hidden" name="project_id" id="modal_project_id">
                        <input type="hidden" name="project_name" id="modal_project_name">

                        <div class="form-group mb-3">
                            <div class="input-group"
                                style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                <div class="input-group-prepend"
                                    style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                    <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required
                                    style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group"
                                style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                <div class="input-group-prepend"
                                    style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                    <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email Address"
                                    required
                                    style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group"
                                style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                                <div class="input-group-prepend"
                                    style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                    <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-phone"></i></span>
                                </div>
                                <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number"
                                    required pattern="[0-9]{10}" maxlength="10"
                                    style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <textarea name="message" class="form-control" rows="3"
                                placeholder="Tell us about your project requirements..." required
                                style="border: 1px solid #cbd5e1; border-radius: 10px; background: #fff; box-shadow: none; font-size: 14px; color: #333; padding: 10px 14px;"></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" id="btnProjectEnquirySubmit" class="btn text-white"
                                style="background: linear-gradient(135deg, #086AD8, #00C6FF); border-radius:6px; height:48px; padding: 0 35px; font-weight:700; font-size:15px; letter-spacing:0.5px; box-shadow: 0 8px 18px rgba(8,106,216,0.3); border:none; transition: all 0.3s ease; display: inline-flex; align-items: center; justify-content: center; min-width: 220px;">
                                Send Enquiry <i class="fa fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openProjectEnquiryModal(id, title) {
            id = id || '';
            title = title || 'Project Enquiry';
            if (typeof $ !== 'undefined' && $('#projectEnquiryAlert').length) {
                $('#projectEnquiryAlert').hide();
                if ($('#projectEnquiryForm').length) {
                    $('#projectEnquiryForm')[0].reset();
                }
                $('#modal_project_id').val(id);
                $('#modal_project_name').val(title);
                $('#modal_project_name_display').text(title);
                $('#projectEnquiryModal').modal('show');
            } else if (typeof jQuery !== 'undefined') {
                jQuery('#projectEnquiryAlert').hide();
                if (jQuery('#projectEnquiryForm').length) {
                    jQuery('#projectEnquiryForm')[0].reset();
                }
                jQuery('#modal_project_id').val(id);
                jQuery('#modal_project_name').val(title);
                jQuery('#modal_project_name_display').text(title);
                jQuery('#projectEnquiryModal').modal('show');
            }
        }

        (function initProjectEnquiryForm() {
            if (typeof jQuery === 'undefined') {
                setTimeout(initProjectEnquiryForm, 50);
                return;
            }
            jQuery(document).ready(function ($) {
                $(document).off('submit', '#projectEnquiryForm').on('submit', '#projectEnquiryForm', function (e) {
                    e.preventDefault();
                    var btn = $('#btnProjectEnquirySubmit');
                    var originalText = btn.html();
                    btn.html('<i class="fa fa-spinner fa-spin"></i> Submitting...').prop('disabled', true);

                    var rawUrl = '<?= site_url('Home/submitProjectEnquiry') ?>';
                    var targetUrl = rawUrl;
                    try {
                        if (rawUrl.indexOf('://') !== -1) {
                            var parsed = new URL(rawUrl);
                            targetUrl = parsed.pathname + parsed.search;
                        }
                    } catch (err) {
                        targetUrl = rawUrl;
                    }

                    $.ajax({
                        url: targetUrl,
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function (response) {
                            btn.html(originalText).prop('disabled', false);
                            var res = {};
                            try {
                                res = (typeof response === 'object') ? response : JSON.parse(response);
                            } catch (e) {
                                res = { status: 'error', msg: 'Invalid response from server' };
                            }
                            var alertBox = $('#projectEnquiryAlert');
                            if (res && res.status == 'success') {
                                alertBox.removeClass('alert-danger alert-warning').addClass('alert alert-success').html('<i class="fa fa-check-circle mr-1"></i> ' + res.msg).show();
                                $('#projectEnquiryForm')[0].reset();
                                setTimeout(function () {
                                    alertBox.hide();
                                    $('#projectEnquiryModal').modal('hide');
                                }, 3000);
                            } else {
                                var errMsg = (res && res.msg) ? res.msg : 'Failed to submit enquiry. Please try again.';
                                alertBox.removeClass('alert-success alert-warning').addClass('alert alert-danger').html('<i class="fa fa-exclamation-triangle mr-1"></i> ' + errMsg).show();
                            }
                        },
                        error: function (xhr, status, error) {
                            btn.html(originalText).prop('disabled', false);
                            var alertBox = $('#projectEnquiryAlert');
                            var serverMsg = 'Something went wrong. Please try again.';
                            try {
                                if (xhr.responseText) {
                                    var errJson = JSON.parse(xhr.responseText);
                                    if (errJson && errJson.msg) {
                                        serverMsg = errJson.msg;
                                    }
                                }
                            } catch(e) {}
                            alertBox.removeClass('alert-success alert-warning').addClass('alert alert-danger').html('<i class="fa fa-exclamation-circle mr-1"></i> ' + serverMsg).show();
                        }
                    });
                    return false;
                });
            });
        })();
    </script>
</body>

</html>