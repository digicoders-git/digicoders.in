<!---floating button  -->
<a class="whats-app"
    href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?>&text=Hello DigiCoders Technologies, I want to discuss about my project"
    target="_blank" rel="noopener" aria-label="float-button">
    <i class="fab fa-whatsapp my-float"></i>
</a>
<a class="mobile" href="tel:<?= $this->data['mobile_no'] ?>" aria-label="float-button" rel="noopener">
    <i class="fa fa-phone my-float1"></i>
</a>
<!---//floating buuton -->
<!-- Pre Loader For Webpage -->
<!-- <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div> -->
<!--====================  header area ====================-->
<div class="header-area bg-white header-sticky only-mobile-sticky topborder">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="header position-relative">
                    <!-- brand logo -->
                    <div class="header__logo">
                        <a href="<?= base_url() ?>">
                            <img src="<?= base_url('public') ?>/assets/images/Digicoders-new-logo.png" class="img-fluid"
                                title="digicoders-logo" alt="digicoders-logo" />
                        </a>
                    </div>

                    <div class="header-right flexible-image-slider-wrap">

                        <div class="header-right-inner" id="hidden-icon-wrapper">
                            <!-- Header Search Form -->
                            <div class="header-search-form d-md-none d-block">
                                <form action="#" class="search-form-top">
                                    <button type="button" class="search-submit">
                                        <i class="search-btn-icon fa fa-search"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Header Top Info -->
                            <div class="swiper-container header-top-info-slider-werap top-info-slider__container">
                                <div class="swiper-wrapper header-top-info-inner">
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Call Us</h6>
                                                <a href="tel:<?= $this->data['mobile_no'] ?>">
                                                    <div class="info-sub-title"><?php echo $this->data['mobile_no']; ?>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-map-marker-alt"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Aliganj</h6>
                                                <div class="info-sub-title">Lucknow, UP, India</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-map-marker-alt"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Yashoda Nagar</h6>
                                                <div class="info-sub-title">Kanpur, UP, India</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Call Us</h6>
                                                <a href="tel:9140967607 ">
                                                    <div class="info-sub-title">9140967607</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-clock"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">9:30AM - 7:30PM</h6>
                                                <div class="info-sub-title">Monday to Saturday</div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-comment-alt-lines"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Email Us</h6>
                                                <a href="<?= $this->data['email'] ?>">
                                                    <div class="info-sub-title"><?= $this->data['email'] ?></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-comment-alt-lines"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Email Us</h6>
                                                <a href="digicoderstech@gmail.com">
                                                    <div class="info-sub-title">digicoderstech@gmail.com</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Call Us</h6>
                                                <a href="tel:6394296293">
                                                    <div class="info-sub-title">6394296293</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="info-item">
                                            <div class="info-icon">
                                                <span class="fa fa-phone"></span>
                                            </div>
                                            <div class="info-content">
                                                <h6 class="info-title">Call Us</h6>
                                                <a href="tel:05224235604">
                                                    <div class="info-sub-title">05224235604</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Header Social Networks -->
                            <div class="header-social-networks style-icons">
                                <div class="inner">
                                    <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="social-icon fab fa-whatsapp"></i>
                                    </a>
                                    <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Facebook" href="https://facebook.com/DigiCodersTech/"
                                        data-hover="Facebook" target="_blank">
                                        <i class="social-icon fab fa-facebook-f"></i>
                                    </a>
                                    <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Instagram" href="https://www.instagram.com/digicoderstech/"
                                        data-hover="Instagram" target="_blank">
                                        <i class="social-icon fab fa-instagram"></i>
                                    </a>
                                    <a class="social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Linkedin" href="https://linkedin.com/company/digicoders/"
                                        data-hover="Linkedin" target="_blank">
                                        <i class="social-icon fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- mobile menu -->
                        <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger">
                            <i></i>
                        </div>
                        <!-- hidden icons menu -->
                        <div class="hidden-icons-menu d-block d-md-none" id="hidden-icon-trigger">
                            <a href="#" aria-label="right-align">
                                <i class="far fa-ellipsis-h-alt"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-bottom-wrap border-top d-md-block d-none header-sticky">
        <div class="container" style="width:1400px">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-bottom-inner">
                        <div class="header-bottom-left-wrap">
                            <!-- navigation menu -->
                            <div class="header__navigation d-none d-xl-block">
                                <nav class="navigation-menu">
                                    <ul>
                                        <li class="multilevel-submenu">
                                            <a href="<?= base_url() ?>"><span>Home</span></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url() ?>"><span>DigiCoders</span></a></li>
                                                <li><a href="https://www.thedigicoders.com/" target="_blank"><span>The
                                                            DigiCoders</span></a></li>
                                                <li><a href="https://www.digicoderstechnologies.com/"
                                                        target="_blank"><span>DigiCoders Technologies</span></a></li>
                                                <li><a href="https://www.codersadda.com/"
                                                        target="_blank"><span>CodersAdda</span></a></li>
                                                <li><a href="https://www.digitalcoders.in/"
                                                        target="_blank"><span>DigitalCoders</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About
                                                    Company</span></a>
                                            <ul class="submenu">
                                                <li class="">
                                                    <a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About
                                                            us</span></a>
                                                    <ul class="submenu">
                                                        <li><a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About
                                                                    DigiCoders</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/AboutTheDigiCoders"><span>About
                                                                    The DigiCoders</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/AboutDigiCodersTechnologies"><span>About
                                                                    DigiCoders Technologies</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/AboutCodersAdda"><span>About
                                                                    CodersAdda</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/AboutDigitalCoders"><span>About
                                                                    DigitalCoders</span></a></li>

                                                    </ul>
                                                </li>
                                                <li><a
                                                        href="<?= base_url() ?>Home/Leadership"><span>Leadership</span></a>
                                                </li>
                                                <li><a href="<?= base_url() ?>Home/OurExperts"><span>Our
                                                            experts</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/WhyChooseUs"><span>Why choose
                                                            us</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/OurHistory"><span>Our
                                                            history</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/FAQs"><span>FAQs</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/career"><span>Career</span></a></li>


                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="<?= base_url() ?>Home/ITServices"><span>Our Services</span></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url() ?>Home/ITServices"><span>All
                                                            Services</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/SoftwareDevelopment"><span>Software
                                                            Development</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/Our_Products"><span>Our
                                                            Products</span></a>
                                                    <ul class="submenu">
                                                        <!-- <li><a href="<?= base_url() ?>Home/Our_Products"><span>Ludo
                                                                    betting with Ludo king</span></a></li> -->
                                                        <!-- <li><a href="<?= base_url() ?>Home/#"><span>Ludo betting with
                                                                    built in ludo</span></a></li> -->
                                                        <!-- <li><a
                                                                href="<?= base_url() ?>Home/Cricket_fantasy_in_digicoder_in_lucknow"><span>Cricket
                                                                    fantasy</span></a></li> -->
                                                        <!-- <li><a
                                                                href="<?= base_url() ?>Home/multigame_plateform_in_digicoder_in_lucknow"><span>
                                                                    Multigame plateform</span></a></li> -->
                                                        <li><a href="<?= base_url() ?>Home/School_management_system_in_digicoder_in_lucknow"><span>School
                                                                    management Software</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/HRMS_in_digicoder_in_lucknow"><span>HRMS
                                                                    Software</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/CRM_in_digicoder_in_lucknow"><span>CRM
                                                                    Software</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/ERP_in_digicoder_in_lucknow"><span>ERP
                                                                    Software</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/lead_management_digicoder_in_lucknow"><span>Lead
                                                                    Management Software</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/fee_management_digicoder_in_lucknow"><span>Fee
                                                                    Management Software</span></a></li>
                                                        <li><a
                                                                href="<?= base_url() ?>Home/Food_delivery_App_in_digicoder_in_lucknow"><span>Food
                                                                    delivery apps</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/#"><span>Taxi - Cab booking
                                                                    app</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/#"><span>Grocery delivery
                                                                    app</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/#"><span>Ecommerce
                                                                    website</span></a></li>
                                                        <li><a href="<?= base_url() ?>Home/#"><span>Online courses and
                                                                    tests series app</span></a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url() ?>Home/WebsiteDevelopment"><span>Website
                                                            Development</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/MobileApplicationDevelopment"><span>Mobile
                                                            App Development</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/DigitalMarketing"><span>Digital
                                                            Marketing</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/GraphicsDesigning"><span>Graphics
                                                            Designing</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/DomainAndHosting"><span>Domain &amp;
                                                            Hosting</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/ERPandCRMDevelopment"><span>ERP &amp;
                                                            CRM Development</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/MaintenanceServices"><span>Maintenance
                                                            Services</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/ITServices"><span>Other IT
                                                            Services</span></a></li>
                                            </ul>
                                        </li>

                                        <li class="has-children has-children--multilevel-submenu">
                                            <a href="<?= base_url() ?>Home/OurProjects"><span>Our Portfolio</span></a>
                                            <ul class="submenu">
                                                <li><a href="<?= base_url() ?>Home/OurProjects"><span>Our
                                                            Projects</span></a></li>
                                                <li><a href="<?= base_url() ?>Home/OurClient"><span>Our
                                                            Clients</span></a></li>
                                            </ul>
                                        </li>
                                         <li>
                                            <a href="<?= base_url() ?>Home/DigiCodersInNews"><span>Media</span></a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url() ?>Home/Products"><span>Products</span></a>
                                        </li>

                                        <li>
                                            <a href="<?= base_url() ?>Home/Packages"><span>Packages</span></a>
                                        </li>

                                        <li>
                                            <a href="<?= base_url() ?>Home/Blogs"><span>Blogs</span></a>
                                        </li>
                                        <li><a href="<?= base_url() ?>Home/ContactUs"><span>Contact us</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-search-form mt-1 mb-1">
                            <div class="hero-button">
                                <button data-toggle="modal" data-target="#exampleModal" class="ht-btn ht-btn-md" >Request Call back</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>