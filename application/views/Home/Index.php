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
            display: flex;
            justify-content: center;
            /* 🔥 CENTER horizontally */
            align-items: center;
            /* 🔥 CENTER vertically */
            padding: 10px;
        }


        /* Owl Carousel */
        .owl-carousel #item-card {
            padding: 12px;
        }

        /* View More */
        .view-more-btn {
            display: inline-block;
            margin-top: 5px;
            font-weight: 600;
            color: #0d6efd;
            text-decoration: none;
        }

        .view-more-btn:hover {
            text-decoration: underline;
        }

        /* Project Card */
        .project-card {
            background: #fff;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
            transition: all 0.4s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.15);
        }

        /* Image */
        .project-image {
            overflow: hidden;
        }

        .project-image img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .project-card:hover .project-image img {
            transform: scale(1.12);
        }

        .project-content {
            padding: 16px;
            text-align: center;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .project-title {
            font-weight: 700;
            line-height: 1.3;
            margin-bottom: 6px;

            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;

        }

        .title-tooltip {
            position: relative;
            display: inline-block;
            cursor: pointer;
        }

        .tooltip-text {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            bottom: 120%;
            left: 50%;
            transform: translateX(-50%);
            width: 260px;

            background: rgba(0, 0, 0, 0.85);
            color: #fff;
            padding: 10px 14px;
            border-radius: 8px;
            font-size: 14px;
            line-height: 1.4;

            transition: all 0.3s ease;
            z-index: 10;
        }

        /* Tooltip Arrow */
        .tooltip-text::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            border-width: 6px;
            border-style: solid;
            border-color: rgba(0, 0, 0, 0.85) transparent transparent transparent;
        }

        /* Show Tooltip on Hover */
        .title-tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

        /* Date */
        .project-content .date {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }

        /* Badge */
        .project-content .badge {
            align-self: center;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 13px;
        }

        /* Tech Icons Redesign - Premium Edition */
        .rev_redraw-wrapper {
            background: linear-gradient(135deg, #f0f7ff 0%, #ffffff 100%);
            padding: 40px 0;
            position: relative;
            overflow: hidden;
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
            max-width: 90px;
            max-height: 90px;
            margin-bottom: 15px;
            filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.1));
            transition: transform 0.5s ease;
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

        //* ===============================
        TOP SLIDER – NO IMAGE CROP================================*/ .top-slider-section {
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
    </style>

</head>

<body>

    <?php include('include/header.php') ?>
    <!--============ Top Slider Start ============-->
    <div class="top-slider-section">
        <div class="container-fluid px-0">
            <div class="owl-carousel top-banner-carousel" id="top_banner_slider">
                <div class="item">
                    <img aria-busy="" src="<?= base_url('public') ?>/assets/images/bg/slider-1.jpg"
                        alt="DigiCoders - Best IT Company">
                </div>
                <div class="item">
                    <img src="<?= base_url('public') ?>/assets/images/bg/slider-2.jpg"
                        alt="Website Development Services">
                </div>
                <div class="item">
                    <img src="<?= base_url('public') ?>/assets/images/bg/slider-3.jpg" alt="Mobile App Development">
                </div>

            </div>
        </div>
    </div>
    <!--============ Top Slider End ============-->
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
                                <img class="img-fluid worldRotate lazy" data-src="<?= base_url('public') ?>/assets/images/Digicoders-Logo-with-tagline.png" src="<?= base_url('public') ?>/assets/images/hero/mitech-slider-cybersecurity-global-image.png" title="rounded image" alt="rounded image">
                            </div>
                            <div class="inner-img-two">
                                <img class="img-fluid  ml-5 lazy" src="<?= base_url('public') ?>/assets/images/Digicoders-Logo-with-tagline.png" data-src="<?= base_url('public') ?>/assets/images/team/team.png" title="team" alt="team">
                            </div> -->

    <!-- </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    </br>

    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p> 👉 This is our Official Website of Development Category Work - Do you want to our visit Training
                    segment website,
                    <a href="https://thedigicoders.com/" target="blank">
                        Click here
                    </a>
                </p>
            </div>
        </div>
    </div>

    <div>
        <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="left" style="color:green"
            loop="infinite">
            <b>WE ARE THE #1 IN UTTAR PRADESH TO DEVELOP & LAUNCH 1000+ PROJECTS IN LESS THAN 7 YEARS; &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp WE ARE A COMPANY LEADING BY YOUNG ENGINEER'S
                ENTREPRENEUR'S AND INNOVATIVE TEAM</b>
        </marquee>
    </div>

    <div class="page-content page-container pt-60" id="page-content">
        <div class="padding">
            <div class="row container-fluid">
                <div class="col-lg-12 grid-margin stretch-card">


                    <div class="owl-carousel" id="banner_slider">
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1.png"
                                alt="how we are">
                        </div>
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_2.png"
                                alt="how we are">
                        </div>
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1_P_c_3.png"
                                alt="how we are">
                        </div>
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1_Pic_4.png"
                                alt="how we are">
                        </div>
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead_Ad_1Pic 5.png"
                                alt="how we are">
                        </div>
                        <div class="item">
                            <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/banners/DigiCoders_Facebook_Lead Ad_1_Pic_6.png"
                                alt="how we are">
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <center>
        <h4>Expert Team of DigiCoders</h4>
        <a href="<?= base_url() ?>Home/OurExperts" class="text-primary">View More →</a>
    </center>

    <div class="container section-space--pt_20">
        <div class="owl-carousel expert-team-carousel owl-theme" id="expert_team">

            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/1.jpg" alt="Himanshu Sir">
            </div>

            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/2.jpg" alt="Gopal Sir">
            </div>

            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/3.jpg" alt="Hritik Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/4.jpg" alt="Ved Prakash Sir">
            </div>

            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/5.jpg" alt="Sumesh Sir">
            </div>

            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/6.jpg" alt="Abhishek Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/7.jpg" alt="Aditya Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/8.jpg" alt="Ritu Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/9.jpg" alt="Tanu Shree Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/10.jpg" alt="Divya Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/11.jpg" alt="Masoom Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/12.jpg" alt="Dinesh Rawat">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/13.jpg" alt="Gayatri Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/14.jpg" alt="Gaurav Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/15.jpg" alt="Madhuri Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/16.jpg" alt="Pushkal Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/17.jpg" alt="Devendra Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/18.jpg" alt="Roshani Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/19.jpg" alt="Vivek Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/20.jpg" alt="Saurabh Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/21.jpg" alt="Mayank Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/22.jpg" alt="Abhay Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/23.jpg" alt="Irsad Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/24.jpg" alt="Shiva Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/25.jpg" alt="Priti Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/26.jpg" alt="Ayaz Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/27.jpg" alt="Richa Maam">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/28.jpg" alt="Abhay Sir">
            </div>
            <div class="item">
                <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                    data-src="<?= base_url('public') ?>/assets/images/banners/29.jpg" alt="Anurag Sir">
            </div>
        </div>
    </div>


    <center class="mb-4">
        <h3 class="fw-bold">Our Recent Projects</h3>
        <a href="<?= base_url() ?>Home/OurProjects" class="view-more-btn">
            View More →
        </a>
    </center>

    <div class="page-content page-container">
        <div class="container">
            <div class="owl-carousel recent-project-carousel" id="recent_project">

                <?php foreach ($userdata as $projects) { ?>
                    <div class="item" id="item-card">
                        <div class="project-card">

                            <div class="project-image">
                                <img class="lazy" src="<?= base_url('public/assets/images/loader2.jpg') ?>"
                                    data-src="<?= base_url('public/uploads/projects/') . $projects->image ?>"
                                    alt="<?= $projects->title ?>">
                            </div>

                            <div class="project-content">

                                <!--  Tooltip Title -->
                                <div class="title-tooltip">
                                    <h5 class="project-title">
                                        <?= $projects->title ?>
                                    </h5>
                                    <span class="tooltip-text">
                                        <?= $projects->title ?>
                                    </span>
                                </div>

                                <p class="date">
                                    <?php
                                    $date = strtotime($projects->add_date);
                                    echo date('M Y', $date);
                                    ?>
                                </p>

                                <span class="badge"><?= $projects->type ?></span>
                            </div>

                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <!--===========  feature-large-images-wrapper  Start =============-->
    <div class="feature-large-images-wrapper section-space--ptb_100" style="padding: 0px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- section-title-wrap Start -->
                    <div class="section-title-wrap text-center section-space--mb_60">

                        <h3 class="heading">We provide all kinds of IT services that <br> will boost your <span
                                class="text-color-primary"> BUSINESS</span></h3>
                    </div>
                    <!-- section-title-wrap Start -->
                </div>
            </div>

            <div class="cybersecurity-about-box section-space--pb_100">
                <div class="row">
                    <div class="col-lg-4 offset-lg-1">
                        <div class="modern-number-01">
                            <h2 class="heading  mr-5"><span class="mark-text">10+</span>Years’ of Experienced Team</h2>
                            <h6 class="heading mt-30" id="meetourteam">Let's meet our team to know more.</h6>
                        </div>
                    </div>

                    <div class="col-lg-5 offset-lg-1">
                        <div class="cybersecurity-about-text">
                            <div class="text text-justify">DigiCoders, An organization where we totally focus on
                                business development of our clients. Our motto is to providing consulting and IT
                                Solutions for your business growth. We will pleased to serve you more and more from
                                DigiCoders. Want to know more about us </div>
                            <div class="button-text">
                                <a href="<?= base_url() ?>Home/AboutDigiCoders" class="btn-text">
                                    Discover now
                                    <span class="button-icon ml-1">
                                        <i class="fa-solid fa-arrow-right-long"></i>

                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <a href="<?= base_url() ?>Home/AboutDigiCoders" class="ht-large-box-images style-03">
                                <div class="large-image-box">
                                    <div class="box-image">
                                        <div class="default-image">
                                            <img class="img-fluid lazy"
                                                src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                                data-src="<?= base_url('public') ?>/assets/images/WhoWeAre.jpg"
                                                alt="how we are" style="max-height: 250px; width: 100%;">
                                        </div>
                                    </div>
                                    <div class="content pb-80">
                                        <h5 class="heading">Who we are?</h5>
                                        <div class="text">
                                            DigiCoders Technologies is a leading development services providers in
                                            Lucknow, Uttar Pradesh and North India.
                                        </div>
                                        <div class="box-images-arrow">
                                            <span class="button-text">Discover now</span>
                                            <i class="fa-solid fa-arrow-right-long"></i>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <a href="" class="ht-large-box-images style-03">
                                <div class="large-image-box">
                                    <div class="box-image">
                                        <div class="default-image">
                                            <img class="img-fluid  aboutdigicoders-img lazy"
                                                src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                                data-src="<?= base_url('public') ?>/assets/images/WhatWeDo.jpg"
                                                title="what we do" alt="what we do">
                                        </div>
                                    </div>
                                    <div class="content pb-80">
                                        <h5 class="heading">What We Do</h5>
                                        <div class="text">
                                            We provide all IT Solutions like Software, Website and Mobile Application
                                            Development and Training Programs.
                                        </div>
                                        <div class="box-images-arrow">
                                            <span class="button-text">Discover now</span>
                                            <i class="fa-solid fa-arrow-right-long"></i>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                        <div class="col-lg-4 col-md-6 wow move-up">
                            <!-- ht-box-icon Start -->
                            <a href="<?= base_url() ?>Home/" class="ht-large-box-images style-03">
                                <div class="large-image-box">
                                    <div class="box-image">
                                        <div class="default-image">
                                            <img class="aboutdigicoders-img lazy"
                                                src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                                data-src="<?= base_url('public') ?>/assets/images/HowWeDoIT.png"
                                                title="how we do" alt="how we do">
                                        </div>
                                    </div>
                                    <div class="content pb-80">
                                        <h5 class="heading">How We Do It</h5>
                                        <div class="text">
                                            At DigiCoders We are working with Young Engineer, Entrepreneur our Most
                                            innovative team.
                                        </div>
                                        <div class="box-images-arrow">
                                            <span class="button-text">Discover now</span>
                                            <i class="fa-solid fa-arrow-right-long"></i>

                                        </div>
                                    </div>
                                </div>
                            </a>
                            <!-- ht-box-icon End -->
                        </div>
                    </div>
                    <div class="section-under-heading text-center section-space--mt_20">Challenges are just
                        opportunities in disguise <a href="<?= base_url() ?>Home/ContactUs">Take the challenge!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  feature-large-images-wrapper  End =============-->
    <!--===========  feature-icon-wrapper  Start =============-->
    <div class="feature-icon-wrapper bg-gray section-space--ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-wrap text-center section-space--mb_40">
                        <h6 class="section-sub-title mb-20">An Umbrella Solution for All IT Needs</h6>
                        <h3 class="heading">Reach out to the world’s most <br><span class="text-color-primary"> reliable
                                IT services.</span></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="feature-list__two">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Software Development </h5>
                                            <div class="text">
                                                We provide custome software development for your business, Billing,
                                                Inventory and Every custom software
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/SoftwareDevelopment">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Website Development </h5>
                                            <div class="text">
                                                We provide website design &amp; development to make your business online
                                                to drive more customers and sales
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/WebsiteDevelopment">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Mobile App Development </h5>
                                            <div class="text">
                                                We provide Android &amp; iOS Application development, we can turn your
                                                idea into reality, Start your Startup with us
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/MobileApplicationDevelopment">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Digital Marketing </h5>
                                            <div class="text">
                                                We provide best digital marketing services to drive more trafic on your
                                                mobile app or website to boost your sales
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/DigitalMarketing">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Graphics Design </h5>
                                            <div class="text">
                                                We provide graphics design to stay touch with your customers using
                                                promotional banners, offers &amp; many more
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/GraphicsDesigning">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"> Domain &amp; Hosting </h5>
                                            <div class="text">
                                                We provide domain, hosting and a reliable server to never let your
                                                business down, start your startup with us
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/DomainAndHosting">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"> ERP &amp; CRM Development </h5>
                                            <div class="text">
                                                We provide ERP &amp; CRM to automate your business with fast execution
                                                and pricess strategies.
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/ERPandCRMDevelopment">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"> Maintenance Services </h5>
                                            <div class="text">
                                                We provide reliable annual maintenance services for your website,
                                                software, erp, crm or mobile application
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/MaintenanceServices">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-6 wow move-up">
                                <div class="ht-box-icon style-02 single-svg-icon-box">
                                    <div class="icon-box-wrap">
                                        <div class="icon">
                                            <i class="fa fa-globe fa-4x"></i>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"> Explore More Services </h5>
                                            <div class="text">
                                                We provide many more IT servies like training programs, internships, mlm
                                                software and many more, discover to know more.
                                            </div>
                                            <div class="feature-btn">
                                                <a href="<?= base_url() ?>Home/ITServices">
                                                    <span class="button-text">Discover now</span>
                                                    <i class="fa-solid fa-arrow-right-long"></i>

                                                </a>
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
    </div>
    <!--===========  feature-icon-wrapper  End =============-->
    <!--=========== fun fact Wrapper Start ==========-->
    <div class="fun-fact-wrapper bg-theme-default section-space--pb_30 section-space--pt_60">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count"><span class="counter">850</span>+</div>
                        <h6 class="fun-fact__text">Happy clients</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count"><span class="counter">1000</span>+</div>
                        <h6 class="fun-fact__text">Finished projects</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count"><span class="counter">50</span>+</div>
                        <h6 class="fun-fact__text">Skilled Experts</h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 wow move-up">
                    <div class="fun-fact--two text-center">
                        <div class="fun-fact__count"><span class="counter">100</span>+</div>
                        <h6 class="fun-fact__text">Products</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=========== fun fact Wrapper End ==========-->
    <!--========= Pricing Table Area Start ==========-->
    <div class="pricing-table-area section-space--pb_100 bg-gradient mt-40">
        <div class="pricing-table-title-area position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title-wrapper text-center section-space--mb_60 wow move-up">
                            <h6 class="section-sub-title mb-20">Pricing and Packages</h6>


                            <h3 class="section-title"><span><img class="img-fluid blog-img"
                                        src="<?= base_url('public') ?>/assets/images/offer2.gif" alt="offer"
                                        style="height:50px; width:50px"></span>6 Months free maintenance for <span
                                    class="text-color-primary">all IT services.</span> </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-table-content-area">
            <div class="container">
                <div class="row pricing-table-one">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Website Starter</h6>
                                <div class="pricing-table__image lazy">
                                    <img src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                        data-src="<?= base_url('public') ?>/assets/images/Digicoders-Logo-with-tagline.png"
                                        class="img-fluid lazy" title="Website Starter" alt="Website Starter">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">₹</h6>
                                    <h6 class="price">9999</h6>
                                    <h6 class="period">/onward</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="<?= base_url() ?>Home/RequestProposal"
                                        class="ht-btn ht-btn-md ht-btn--outline">Get this Offer!</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>1 Year Domain</li>
                                    <li>1 Year Hosting</li>
                                    <li>Dynamic Website</li>
                                    <li>Official Emails</li>
                                    <li>SEO</li>
                                    <li>Many More...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table pricing-table--popular wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__feature-mark">
                                <span>Most Popular</span>
                            </div>
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Mobile App Starter</h6>
                                <div class="pricing-table__image lazy">
                                    <img src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                        data-src="<?= base_url('public') ?>/assets/images/Digicoders-Logo-with-tagline.png"
                                        class="img-fluid lazy" title="Mobile App Starter" alt="Mobile App Starter">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">₹</h6>
                                    <h6 class="price">24999</h6>
                                    <h6 class="period">/onward</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="<?= base_url() ?>Home/RequestProposal" class="ht-btn  ht-btn-md ">Get this
                                        Offer!</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>E Commerce App</li>
                                    <li>Taxi Booking App</li>
                                    <li>Food Delivery App</li>
                                    <li>Gaming Tournaments App</li>
                                    <li>Service App</li>
                                    <li>MLM Application</li>
                                    <li>Many more...</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-4 pricing-table wow move-up">
                        <div class="pricing-table__inner">
                            <div class="pricing-table__header">
                                <h6 class="sub-title">Software Starter</h6>
                                <div class="pricing-table__image lazy">
                                    <img src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                        data-src="<?= base_url('public') ?>/assets/images/Digicoders-Logo-with-tagline.png"
                                        class="img-fluid lazy" title="Software Starter" alt="Software Starter">
                                </div>
                                <div class="pricing-table__price-wrap">
                                    <h6 class="currency">₹</h6>
                                    <h6 class="price">15999</h6>
                                    <h6 class="period">/onward</h6>
                                </div>
                            </div>
                            <div class="pricing-table__body">
                                <div class="pricing-table__footer">
                                    <a href="<?= base_url() ?>Home/RequestProposal"
                                        class="ht-btn ht-btn-md ht-btn--outline">Get this Offer!</a>
                                </div>
                                <ul class="pricing-table__list text-left">
                                    <li>Billing Software</li>
                                    <li>Inventory Software</li>
                                    <li>CRM &amp; ERP </li>
                                    <li>School Management ERP </li>
                                    <li>MLM Software</li>
                                    <li>Many More... </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <a href="<?= base_url() ?>Home/Packages" class="ht-btn  ht-btn-md">Explore All Packages <i
                                class="fa fa-long-arrow-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--========= Pricing Table Area End ==========-->
    <!--====================  Blog Section Start ====================-->
    <div class="blog-section-wrapper section-space--pt_100  section-space--pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 wow move-up">

                    <div
                        class="section-title section-title tablet-mb__60 section-space--mb_30 tablet-mt__0 small-mt__0 small-mb__60 mt-30">
                        <h6 class="section-sub-title mb-20">Blogs & news</h6>
                        <h3 class="heading">Interesting facts &amp; <span class="text-color-primary"> IT updates </span>
                        </h3>
                        <ul class="infotechno-blog-list mt-30">
                            <li>
                                <a href="<?= base_url() ?>Home/Blogs">How to choose best software company?</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Home/Blogs">How to choose technology for your project?</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Home/Blogs">Data &amp; Source Code security tpis!</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Home/Blogs">Steps to start promoting your startup.</a>
                            </li>
                            <li>
                                <a href="<?= base_url() ?>Home/Blogs">Latest tools for Digital Marketing.</a>
                            </li>
                        </ul>

                    </div>

                </div>

                <?php
                foreach ($blogdata as $data) {
                    ?>

                    <div class="col-lg-4 col-md-6 wow move-up">
                        <!--======= Single Blog Item Start ========-->
                        <div class="single-blog-item blog-grid">
                            <!-- Post Feature Start -->
                            <div class="post-feature blog-thumbnail">
                                <a href="<?= base_url() ?>Home/Blogs">
                                    <img class="img-fluid blog-img lazy"
                                        src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                        data-src="<?= base_url('public/uploads/Blog/') . $data->image; ?>"
                                        alt="Blog Images">
                                </a>
                            </div>
                            <!-- Post Feature End -->
                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info">
                                <div class="post-meta">
                                    <div class="post-date">
                                        <span class="far fa-calendar meta-icon"></span>
                                        <?= $data->date; ?>
                                    </div>
                                </div>

                                <h5 class="post-title font-weight--bold">
                                    <a href="<?= base_url() ?>Home/Blogs"><?= $data->title; ?></a>
                                </h5>

                                <div class="post-excerpt mt-15">
                                    <p><?= $data->full_discription; ?></p>
                                </div>
                                <div class="btn-text">
                                    <a href="<?= base_url() ?>Home/Blogs">Read more <i
                                            class="ml-1 button-icon fa-solid fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <!-- Post info End -->
                        </div>
                        <!--===== Single Blog Item End =========-->

                    </div>
                    <?php
                }
                ?>


            </div>
        </div>
    </div>
    <!--====================  Blog Section End  ====================-->
    <!--===========  rev_redraw-wrapper  Start =============-->
    <div class="rev_redraw-wrapper ">
        <div class="rev_redraw-inner-box  bg-gray-2  section-space--mt_40 section-space--mb_40  rev_redraw-space">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="redraw-content text-center">
                            <h3 class="font-weight--bold">Qualified Methods <span class="text-color-primary">at its
                                    best</span></h3>
                            <p class="redwaw-dec">We know how to use technology to change people's lives for the better,
                                powered by our expertise in modern stacks.</p>
                            <div class="bedraw-button">
                                <a href="<?= base_url() ?>/Home/ContactUs" class="ht-btn ht-btn-md"> Request Proposal
                                    for Free <i class="fa-solid fa-arrow-right-long"></i></a>
                            </div>
                        </div>

                        <div class="tech-grid">
                            <div class="tech-item wow zoomIn" data-wow-delay="0.1s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/. net.jpg" alt="DotNet">
                                <span>ASP.NET </span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.2s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/android.png" alt="Android">
                                <span>Android</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.3s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/java.png" alt="Java">
                                <span>Java</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.4s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/codeigniter.png"
                                    alt="CodeIgniter">
                                <span>CodeIgniter</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.5s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/php.png" alt="PHP">
                                <span>PHP</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.6s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/ios.png" alt="iOS">
                                <span>iOS App</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.7s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/mysql.png" alt="MySQL">
                                <span>MySQL</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.8s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/mern stack.png" alt="MERN Stack">
                                <span>MERN Stack</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="0.9s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/ui ux.png" alt="UI UX">
                                <span>UI/UX Design</span>
                            </div>
                            
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/laravel.png" alt="Laravel">
                                <span>Laravel</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/flutter.png" alt="Flutter">
                                <span>Flutter</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/django.jpg" alt="Django">
                                <span>Django</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/node js.png" alt="NodeJS">
                                <span>Node JS</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/rect native.png" alt="React Native">
                                <span>React Native</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/expresh js.jpg" alt="Express JS">
                                <span>Express JS</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/mongo db.png" alt="MongoDB">
                                <span>MongoDB</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/wordpress.png" alt="WordPress">
                                <span>WordPress</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/shopify.png" alt="Shopify">
                                <span>Shopify</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/c logo.png" alt="C">
                                <span>C</span>
                            </div>
                            <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                                <img src="<?= base_url('public') ?>/assets/images/tech_logo/c+.png" alt="C++">
                                <span>C++</span>
                            </div>
                           <div class="tech-item wow zoomIn" data-wow-delay="1.0s">
                            <img src="<?= base_url('public') ?>/assets/images/tech_logo/firebase.png" alt="Firebase">
                            <span>Firebase</span>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===========  rev_redraw-wrapper  End =============-->
    <!--====================  Conact us Section Start ====================-->
    <div class="contact-us-section-wrappaer section-space--ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading">Obtaining further information by <span class="text-color-primary">droping a
                                message </span> to our experienced IT professionals. </h3>

                        <div class="sub-heading">We’re available for 16 hours a day!<br>Contact will require a detailed
                            analysis and assessment of your plan. Our experienced team can give you a best esitimation
                            for technology and budget for your requirement.</div>

                    </div>
                </div>
                <!--Contact Form-->
                <div class="col-lg-6 col-lg-6">
                    <div class="contact-form-wrap">
                        <form id="contact" action="<?= base_url() ?>Home/SubmitForm/contactForm" method="post">
                            <?php
                            $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>"   />
                            <div class="contact-form">
                                <div class="contact-input">
                                    <div class="contact-inner">
                                        <input name="Name" type="text" placeholder="Name *" required="required">
                                    </div>
                                    <div class="contact-inner">
                                        <input name="Email" type="email" placeholder="Email *" required="required">
                                    </div>
                                </div>
                                <div class="contact-inner contact-message">
                                    <input name="Mobile" type="text" placeholder="Mobile Number *" required="required"
                                        maxlength="10" min="10">
                                </div>
                                <div class="contact-select">
                                    <div class="form-item contact-inner">
                                        <span class="inquiry">
                                            <select name="Enquiry" class="select-item">
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
                                        </span>
                                    </div>
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="Message" placeholder="Please describe what you need."
                                        maxlength="250"></textarea>
                                </div>
                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Get a free consultation</button>
                                    <p class="form-messege"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Partners Section -->
    <h2 style="text-align: center;">Our Clients</h2>
    <h6 style="text-align: center;"><a href="<?= base_url() ?>Home/OurClient">View More &rarr;</a></h6>
    <br>
    <section class="partners">
        <div class="elementor-element elementor-element-d3ef69b e-flex e-con-boxed e-con e-parent" data-id="d3ef69b"
            data-element_type="container">
            <div class="e-con-inner">
                <div class="elementor-element elementor-element-ac15ae1 elementor-widget elementor-widget-image-carousel"
                    data-id="ac15ae1" data-element_type="widget"
                    data-settings="{&quot;slides_to_show&quot;:&quot;4&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:3000,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500}"
                    data-widget_type="image-carousel.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-image-carousel-wrapper swiper" role="region"
                            aria-roledescription="carousel" aria-label="Image Carousel" dir="ltr">
                            <div class="elementor-image-carousel swiper-wrapper" aria-live="off">

                                <?php
                                foreach ($clientdata as $client) {
                                    ?>
                                    <div class="swiper-slide" role="group" aria-roledescription="slide">
                                        <figure class="swiper-slide-inner">
                                            <img class="swiper-slide-image lazy-img"
                                                src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                                data-src="<?= base_url('public/uploads/client/' . $client->image); ?>"
                                                alt="Client Logo">
                                        </figure>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <br><br>

    <!--====================  Conact us Section End  ====================-->
    <!--============ Contact Us Area Start =================-->
    <div class="contact-us-area infotechno-contact-us-bg section-space--pat_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="image">
                        <img class="img-fluid lazy" src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                            data-src="<?= base_url('public') ?>/assets/images/teamwork.png" title="contact us"
                            alt="contact us">
                    </div>
                </div>

                <div class="col-lg-4 ml-auto">
                    <div class="contact-info style-two text-left">

                        <div class="contact-info-title-wrap text-center">
                            <h3 class="heading  mb-10">4.9/5.0</h3>
                            <div class="ht-star-rating lg-style">
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="sub-text">by 1600+ customers over social media.</p>
                        </div>

                        <div class="contact-list-item">
                            <a href="tel:0522-4235604" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-phone"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Call for advice now!</h6>
                                            <div class="text">9198483820</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="mailto:info@digicoders.in" class="single-contact-list">
                                <div class="content-wrap">
                                    <div class="content">
                                        <div class="icon">
                                            <span class="fal fa-envelope"></span>
                                        </div>
                                        <div class="main-content">
                                            <h6 class="heading">Say hello</h6>
                                            <div class="text">info@digicoders.in</div>
                                            <br /><br />
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>



    <!--============ Contact Us Area End =================-->

    <?php include('include/footer.php') ?>
    <?php include('include/jslinks.php') ?>



    <!--<script>
    var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4, 
 
  
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true
});

    </script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#banner_slider').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            });

            $("#recent_project").owlCarousel({
                autoplay: true,
                autoplayTimeout: 2000,
                items: 3,
                loop: true,
                margin: 15,
                center: true,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });

            $('#expert_team').owlCarousel({
                loop: true,
                margin: 15,
                items: 4,
                autoplay: true,
                autoplayTimeout: 2500,
                autoplayHoverPause: true,
                smartSpeed: 800,
                dots: false,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    992: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            });

        });

        // ==================== SWIPER SLIDER ====================
        document.addEventListener("DOMContentLoaded", function () {
            new Swiper(".elementor-image-carousel-wrapper.swiper", {
                slidesPerView: 4,
                spaceBetween: 20,
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false
                },
                speed: 500,
                pauseOnMouseEnter: true,
                grabCursor: true,
                breakpoints: {
                    320: {
                        slidesPerView: 1
                    },
                    576: {
                        slidesPerView: 2
                    },
                    768: {
                        slidesPerView: 3
                    },
                    1024: {
                        slidesPerView: 4
                    }
                }
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const lazyImages = document.querySelectorAll("img.lazy-img");

            lazyImages.forEach(img => {
                const realSrc = img.getAttribute("data-src");
                if (realSrc) {
                    img.src = realSrc;
                }
            });
        });
    </script>
    <script>
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
                0: {
                    nav: false
                },
                768: {
                    nav: true
                }
            }
        });
    </script>


</body>

</html>