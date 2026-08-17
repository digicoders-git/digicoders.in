<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Software Products & Ready-Made Solutions | DigiCoders</title>
    <meta name="description" content="Explore ready-made software products and mobile apps by DigiCoders: School Management, HRMS, CRM, ERP, Lead Management, Food Delivery, Taxi Booking & Ecommerce.">
    <?php include('include/headerlinks.php') ?>
    <style>
        .product-card-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 28px 24px;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            display: flex;
            flex-direction: column;
        }
        .product-card-item:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            border-color: #086AD8;
        }
        .product-icon-wrap {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            background: rgba(8, 106, 216, 0.08);
            color: #086AD8;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .product-title {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
        }
        .product-desc {
            font-size: 13.5px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .product-btn {
            color: #086AD8;
            font-weight: 700;
            font-size: 13.5px;
            text-decoration: none !important;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .product-btn:hover {
            color: #0056b3;
        }
    </style>
</head>

<body>
<?php include('include/header.php') ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Our Software Products</h2>
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/Index') ?>">Home</a></li>
                            <li class="breadcrumb-item active">Our Products</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <!-- Software Products Section -->
    <div class="site-wrapper-reveal section-space--ptb_80">
        <div class="container">
            <div class="row mb-5 text-center">
                <div class="col-lg-8 offset-lg-2">
                    <h3 class="heading">Ready-to-Deploy <span class="text-color-primary">Software & Mobile Apps</span></h3>
                    <p class="text" style="font-size: 15px; color: #64748b;">Customizable, scalable, and high-performance ready-made software products for startups and enterprises.</p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Product 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-school"></i></div>
                        <h4 class="product-title">School Management Software</h4>
                        <p class="product-desc">Complete ERP for schools & colleges: Student admissions, fee management, online exams, attendance, SMS alerts, and report cards.</p>
                        <a href="<?= base_url('Home/School_management_system_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-utensils"></i></div>
                        <h4 class="product-title">Food Delivery App Solution</h4>
                        <p class="product-desc">Swiggy/Zomato style 4-in-1 food delivery ecosystem: Customer Ordering App, Restaurant Partner, Delivery Boy & Central Admin.</p>
                        <a href="<?= base_url('Home/Food_delivery_App_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-taxi"></i></div>
                        <h4 class="product-title">Taxi & Cab Booking App</h4>
                        <p class="product-desc">Uber/Ola clone solution with live GPS tracking, dynamic fare calculation, driver earnings dashboard, and emergency SOS safety.</p>
                        <a href="<?= base_url('Home/Taxi_booking_app_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-users-cog"></i></div>
                        <h4 class="product-title">HRMS Software</h4>
                        <p class="product-desc">Comprehensive Human Resource Management: Employee attendance, payroll processing, leave management, and performance tracking.</p>
                        <a href="<?= base_url('Home/HRMS_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-briefcase"></i></div>
                        <h4 class="product-title">CRM Software</h4>
                        <p class="product-desc">Intelligent Customer Relationship Management: Lead tracking, sales pipelines, client follow-up reminders, and deal analytics.</p>
                        <a href="<?= base_url('Home/CRM_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-layer-group"></i></div>
                        <h4 class="product-title">Lead Management System</h4>
                        <p class="product-desc">Capture, track, and convert leads effectively with automated lead scoring, multi-channel integration, and nurturing workflows.</p>
                        <a href="<?= base_url('Home/lead_management_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-shopping-cart"></i></div>
                        <h4 class="product-title">Ecommerce Website & App</h4>
                        <p class="product-desc">Feature-rich online store platform with product catalog, cart checkout, payment gateways, order tracking, and inventory control.</p>
                        <a href="<?= base_url('Home/Ecommerce_website_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-truck-loading"></i></div>
                        <h4 class="product-title">Grocery Delivery App</h4>
                        <p class="product-desc">Blinkit/Instamart style instant grocery ordering solution with category management, store partner dashboard, and express delivery.</p>
                        <a href="<?= base_url('Home/Grocery_delivery_app_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="product-card-item">
                        <div class="product-icon-wrap"><i class="fa fa-graduation-cap"></i></div>
                        <h4 class="product-title">Online Courses & Tests App</h4>
                        <p class="product-desc">EdTech learning & test series platform with HD video streaming, NTA CBT style online test series, and live classes.</p>
                        <a href="<?= base_url('Home/Online_courses_app_in_digicoder_in_lucknow') ?>" class="product-btn">Explore Details <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Form Section -->
    <div class="contact-us-section-wrappaer section-space--ptb_80" style="background: #f8fafc;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading">Get a Custom <span class="text-color-primary">Software Proposal</span></h3>
                        <div class="sub-heading">Looking for a tailored software or mobile application? Contact our technical team today for a free consultation and project estimation.</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form-wrap">
                        <form id="contact" action="<?= base_url() ?>Home/SubmitForm/contactForm" method="post">
                            <?php
                            $csrf = array(
                                'name' => $this->security->get_csrf_token_name(),
                                'hash' => $this->security->get_csrf_hash()
                            );
                            ?>
                            <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
                                    <input name="Mobile" type="text" placeholder="Mobile Number *" required="required" maxlength="10" minlength="10">
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="Message" placeholder="Describe your software requirements." maxlength="250"></textarea>
                                </div>
                                <div class="submit-btn mt-20">
                                    <button class="ht-btn ht-btn-md" type="submit">Get Free Consultation</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>
</html>
