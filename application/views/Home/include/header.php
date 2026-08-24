<!---floating button  -->
<a class="whats-app"
    href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?>&text=Hello DigiCoders Technologies, I want to discuss about my project"
    target="_blank" rel="noopener" aria-label="float-button">
    <i class="fab fa-whatsapp my-float"></i>
</a>
<a class="mobile" href="tel:<?= $this->data['mobile_no'] ?>" aria-label="float-button" rel="noopener">
    <i class="fa fa-phone my-float1"></i>
</a>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<!--====================  Top Announcement Bar (Fixed Banner) ====================-->
<?php $hiring_status = get_hiring_status(); ?>
<div class="hiring-ticker-wrapper">
    <div class="hiring-ticker-container">
        <span class="hiring-ticker-text">
            <?php if ($hiring_status == 'open'): ?>
                <i class="fas fa-briefcase hiring-icon" style="color: #00ff88;"></i> 
                <strong class="hiring-title" style="color: #00ff88;">We Are Hiring!</strong> Join our innovative team! Check available job positions on our Career Page: 
                <a href="<?= base_url('Home/career') ?>" class="hiring-linkedin-btn" style="background: #ffffff !important; color: #01964A !important; font-weight: 800 !important;">
                    <i class="fas fa-user-plus"></i> View Openings <i class="fas fa-arrow-right" style="font-size: 11px;"></i>
                </a>
            <?php else: ?>
                <i class="fas fa-bullhorn hiring-icon"></i> 
                <strong class="hiring-title">Currently we are not hiring!</strong> For future job updates & opportunities, follow us on our LinkedIn page: 
                <a href="https://www.linkedin.com/company/digicoders/" target="_blank" rel="noopener noreferrer" class="hiring-linkedin-btn">
                    <i class="fab fa-linkedin"></i> Follow on LinkedIn <i class="fas fa-arrow-right" style="font-size: 11px;"></i>
                </a>
            <?php endif; ?>
        </span>
    </div>
</div>

<!--====================  Top Bar Area ====================-->
<div class="topbar-wrapper">
    <div class="topbar-container">
        <!-- Left Item: Training Segment Link Button -->
        <div class="topbar-left-item">
            <i class="fas fa-graduation-cap text-primary"></i>
            <span class="d-none d-xl-inline" style="font-size: 12.5px;">Our Official Training Site | </span>
            <a href="https://thedigicoders.com/" target="_blank" class="topbar-training-btn" style="color: #086AD8 !important; font-size: 12.5px; font-weight: 800; text-decoration: none !important; display: inline-flex; align-items: center; gap: 4px;">
                Visit Now <i class="fas fa-arrow-right" style="font-size: 10px;"></i>
            </a>
        </div>

        <!-- Center Group: Contact & Locations (Swiper Continuous Auto-Slider) -->
        <div class="topbar-center-group">
            <div class="swiper-container topbar-swiper">
                <div class="swiper-wrapper">
                    <!-- Slide 1: Primary Call Us -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap call">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label">Call Us</span>
                                <a href="tel:+919198483820" class="info-val">
                                    +91 9198483820
                                </a>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>

                    <!-- Slide 2: Aliganj Location Box -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap loc-green">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label dark">Lucknow</span>
                                <span class="info-val sub">Aliganj, UP, India</span>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>

                    <!-- Slide 3: Yashoda Nagar Location Box -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap loc-blue">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label dark">Kanpur</span>
                                <span class="info-val sub">Yashoda Nagar, UP, India</span>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>
                    <!-- Slide 3: Yashoda Nagar Location Box -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap loc-blue">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label dark">Gorakhpur</span>
                                <span class="info-val sub">Gida, UP, India</span>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>

                    <!-- Slide 4: Secondary Call Us -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap call">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label">Call Us</span>
                                <a href="tel:+916394296293" class="info-val">
                                    +91 6394296293
                                </a>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>

                    <!-- Slide 5: Third Call Us -->
                    <div class="swiper-slide">
                        <div class="topbar-info-box">
                            <div class="info-icon-wrap call">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="info-text-wrap">
                                <span class="info-label">Call Us</span>
                                <a href="tel:+919140967607" class="info-val">
                                    +91 9140967607
                                </a>
                            </div>
                        </div>
                        <div class="topbar-divider"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Group: Social Media Circles -->
        <div class="topbar-social-group">
            <a href="https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l" target="_blank" class="social-circle wa" title="WhatsApp Channel">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.facebook.com/DigiCodersTech/" target="_blank" class="social-circle fb" title="Facebook">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://www.instagram.com/digicoderstech" target="_blank" class="social-circle insta" title="Instagram">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/digicoders/" target="_blank" class="social-circle in" title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.youtube.com/@digicoders" target="_blank" class="social-circle yt" title="YouTube">
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    </div>
</div>

<!--====================  Main Modern Sticky Header Card ====================-->
<header class="modern-header-area header-sticky">
    <div class="modern-header-card-container">
        <div class="modern-header-card">
            <!-- Brand Logo -->
            <div class="modern-logo-wrap">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url('public/assets/images/DigiCoders Technologies Logo.jpg') ?>"
                        class="img-fluid header-logo-img" title="Digicoders Technologies" alt="Digicoders Technologies" />
                </a>
            </div>

            <!-- Navigation Menu (Desktop) -->
            <nav class="navigation-menu d-none d-lg-block">
                <ul>
                    <li class="active">
                        <a href="<?= base_url() ?>">
                            <span>Home</span>
                        </a>
                    </li>

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/AboutDigiCoders">
                            <span>About Company</span>
                        </a>
                        <ul class="submenu">
                            <li class="has-children">
                                <a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About Us</span></a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutTheDigiCoders"><span>About The DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCodersTechnologies"><span>About DigiCoders Technologies</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutCodersAdda"><span>About CodersAdda</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutDigitalCoders"><span>About DigitalCoders</span></a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>Home/Leadership"><span>Leadership</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurExperts"><span>Our Experts</span></a></li>
                            <li><a href="<?= base_url() ?>Home/WhyChooseUs"><span>Why Choose Us</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurHistory"><span>Our History</span></a></li>
                            <li><a href="<?= base_url() ?>Home/FAQs"><span>FAQs</span></a></li>
                            <li><a href="<?= base_url() ?>Home/career"><span>Career</span></a></li>
                            <li><a href="<?= base_url() ?>Home/DigiCodersInNews"><span>Media &amp; News</span></a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/ITServices">
                            <span>Our Services</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url() ?>Home/ITServices"><span>All Services</span></a></li>
                            <li><a href="<?= base_url() ?>Home/SoftwareDevelopment"><span>Software Development</span></a></li>
                            <li class="has-children">
                                <a href="<?= base_url() ?>Home/Our_Products"><span>Our Products</span></a>
                                <ul class="submenu">
                                    <li><a href="<?= base_url() ?>Home/School_management_system_in_digicoder_in_lucknow"><span>School Management Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/HRMS_in_digicoder_in_lucknow"><span>HRMS Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/CRM_in_digicoder_in_lucknow"><span>CRM Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/ERP_in_digicoder_in_lucknow"><span>ERP Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/lead_management_digicoder_in_lucknow"><span>Lead Management Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/fee_management_digicoder_in_lucknow"><span>Fee Management Software</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/Food_delivery_App_in_digicoder_in_lucknow"><span>Food Delivery Apps</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/Taxi_booking_app_in_digicoder_in_lucknow"><span>Taxi - Cab Booking App</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/Grocery_delivery_app_in_digicoder_in_lucknow"><span>Grocery Delivery App</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/Ecommerce_website_in_digicoder_in_lucknow"><span>Ecommerce Website</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/Online_courses_app_in_digicoder_in_lucknow"><span>Online Courses & Tests App</span></a></li>
                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>Home/WebsiteDevelopment"><span>Website Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/MobileApplicationDevelopment"><span>Mobile App Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/DigitalMarketing"><span>Digital Marketing</span></a></li>
                            <li><a href="<?= base_url() ?>Home/GraphicsDesigning"><span>Graphics Designing</span></a></li>
                            <li><a href="<?= base_url() ?>Home/DomainAndHosting"><span>Domain &amp; Hosting</span></a></li>
                            <li><a href="<?= base_url() ?>Home/ERPandCRMDevelopment"><span>ERP &amp; CRM Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/MaintenanceServices"><span>Maintenance Services</span></a></li>
                            <li><a href="<?= base_url() ?>Home/ITServices"><span>Other IT Services</span></a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/OurProjects">
                            <span>Our Portfolio</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url() ?>Home/OurProjects"><span>Our Projects</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurClient"><span>Our Clients</span></a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/LucknowBranch">
                            <span>Branches</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="<?= base_url() ?>Home/LucknowBranch"><span>Lucknow (Head Office)</span></a></li>
                            <li><a href="<?= base_url() ?>Home/KanpurBranch"><span>Kanpur Office</span></a></li>
                            <li><a href="<?= base_url() ?>Home/GorakhpurBranch"><span>Gorakhpur Office</span></a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url() ?>Home/Products"><span>Products</span></a></li>
                    <li><a href="<?= base_url() ?>Home/Packages"><span>Packages</span></a></li>
                    <li><a href="<?= base_url('blogs') ?>"><span>Blogs</span></a></li>
                    <li><a href="<?= base_url() ?>Home/ContactUs"><span>Contact us</span></a></li>
                </ul>
            </nav>

            <!-- Right Side Header Action (CTA Button & Mobile Trigger) -->
            <div class="header-right-action">
                <button data-toggle="modal" data-target="#exampleModal" class="header-cta-btn">
                    <span class="btn-full-text d-none d-sm-inline">Request Call back</span>
                    <span class="btn-short-text d-inline d-sm-none">Call Back</span>
                    <i class="fas fa-arrow-right"></i>
                </button>

                <!-- Mobile Menu Trigger Icon -->
                <div class="mobile-menu-trigger-btn d-block d-lg-none" id="mobile-menu-trigger" title="Toggle Navigation">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>