<!-- Site Page Continer End -->
<!--====================  footer area ====================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="footer-area-wrapper bg-gray ftbg" style="overflow-x: hidden;">
    
 <div class="servic-section">
        <h2 class="city-title">OUR SERVICES</h2>
            <div class="state-row">
                

                <?php foreach ($allservice as $service): ?>

                    <?php
                        // slug clean: remove -in-city
                        $clean_slug = explode('-development-', $service->url_slug)[0];
                    ?>

                    <span class="city-item">
                        <a href="<?= base_url('services/' . $clean_slug) ?>">
                            <?= $service->service_name ?>
                        </a>

                        <div class="city-tooltip">
                            <div class="tooltip-text-wrapper">
                                <?php
                                $total = count($allservice);
                                foreach ($allservice as $index => $service) {
                                    echo $service->service_name . ' development ';
                                    if ($index < $total - 1) {
                                        echo ', ';
                                    }
                                }
                                ?>
                            </div>

                            <?php if (count($allservice) > 10): ?>
                                <div class="tooltip-more" onclick="this.previousElementSibling.classList.toggle('expand');
             this.innerText = this.innerText === 'More...' ? 'Less...' : 'More...';">
                                    More...
                                </div>
                            <?php endif; ?>
                        </div>

                    </span>

                    <span class="separator">|</span>
                <?php endforeach; ?>
            </div>
    </div>

    <div class="cities-section">
        <h2 class="city-title">CITY WE COVER</h2>

        <?php foreach ($states as $state): ?>
            <div class="state-row">
                <strong class="state-name"><?= $state->state_name ?></strong>

                <?php foreach ($state->cities as $city):
                    $citySlug = url_title($city->city_name, '-', true);
                    ?>
                    <span class="city-item">
                        <a href="<?= base_url('city/' . $citySlug) ?>">
                            <?= $city->city_name ?>
                        </a>

                        <div class="city-tooltip">
                            <div class="tooltip-text-wrapper">
                                <?php
                                $total = count($services);
                                foreach ($services as $index => $service) {
                                    echo $service->service_name . ' development in ' . $city->city_name;
                                    if ($index < $total - 1) {
                                        echo ', ';
                                    }
                                }
                                ?>
                            </div>

                            <?php if (count($services) > 10): ?>
                                <div class="tooltip-more" onclick="this.previousElementSibling.classList.toggle('expand');
             this.innerText = this.innerText === 'More...' ? 'Less...' : 'More...';">
                                    More...
                                </div>
                            <?php endif; ?>
                        </div>

                    </span>

                    <span class="separator">|</span>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>


    <!-- reveal-footer -->
    <div class="footer-area section-space--pb_60">
        <div class="container">


            <section class="dg-office-section">
                <div class="dg-office-container">
                    <!-- Delhi NCR Office -->
                    <div class="dg-office-block">
                        <img src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                            data-src="<?= base_url('public') ?>/assets/images/Digicoders-new-logo.png"
                            class="img-fluid footer-logo lazy" title="digicoders-logo" alt="digicoders-logo"
                            style="left:30%;" />
                    </div>

                    <!-- Gorakhpur Office -->
                    <div class="dg-office-block">
                        <h3>LUCKNOW OFFICE</h3>
                        <p>2nd Floor, B-36, Sector O, Near Ram Ram Bank Chauraha, Aliganj, Lucknow, Uttar Pradesh,
                            226021</p>
                    </div>

                    <!-- Kolkata Office -->
                    <div class="dg-office-block">
                        <h3>KANPUR OFFICE</h3>
                        <p>1st Floor, 128/3/98, Shivaji Park (Near Rahul Petrol Pump Indian Oil), Yashoda Nagar, Kanpur,
                            Uttar Pradesh, 208011</p>
                    </div>

                    <!-- Connect With Us -->
                    <div class="dg-office-block dg-connect-block">
                        <h3>CONNECT WITH US</h3>

                        <div class="dg-email-support">
                            <span class="dg-email-label">Email Support:</span>
                            <a href="mailto:<?= $this->data['email'] ?>"
                                class="hover-style-link"><?= $this->data['email'] ?></a>
                            <a href="mailto:digicoderstech@gmail.com"
                                class="hover-style-link">digicoderstech@gmail.com</a>
                        </div>

                        <!-- <div class="dg-follow-section">
                    <span class="dg-follow-label">FOLLOW ON</span>
                    <div class="dg-social-icons">
                        <a href="https://facebook.com/DigiCodersTech/" target="_blank" class="dg-social-icon" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://linkedin.com/company/digicoders/" target="_blank" class="dg-social-icon" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/digicoderstech/" target="_blank" class="dg-social-icon" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?phone=919628092950" target="_blank" class="dg-social-icon" aria-label="WhatsApp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div> -->
                    </div>
                </div>
            </section>
            <div class="row footer-widget-wrapper">
                <div class="col-lg-1 col-md-6 col-sm-6 footer-widget">
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 footer-widget">
                    <!-- <div class="footer-widget__logo mb-30">
                        <img src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                            data-src="<?= base_url('public') ?>/assets/images/Digicoders-new-logo.png"
                            class="img-fluid footer-logo lazy" title="digicoders-logo" alt="digicoders-logo" />
                    </div> -->
                    <ul class="footer-widget__list">
                        <!-- <li>2nd Floor, B-36, Sector O, Near Ram Ram Bank Chauraha, Aliganj, Lucknow, Uttar Pradesh,
                            226021</li> -->
                        <h6 class="footer-widget__title mb-20">Contact US</h6>

                        <!--<li><a href="tel:<?= $this->data['telephone_no'] ?>" class="hover-style-link text-black font-weight--bold"><?= $this->data['telephone_no'] ?></a></li>
                            <li><a href="tel:<?= $this->data['mobile_no'] ?>" class="hover-style-link text-black font-weight--bold"><?= $this->data['mobile_no'] ?></a></li>-->
                        <li><a href="tel:<?= $this->data['telephone_no'] ?>"
                                class="hover-style-link text-black font-weight--bold"><?= $this->data['telephone_no'] ?></a>
                        </li>

                        <li><a href="tel:+91 6394296293" class="hover-style-link text-black font-weight--bold">
                                6394296293</a></li>
                        <li><a href="tel:+91 9140967607" class="hover-style-link text-black font-weight--bold">
                                9140967607</a></li>
                        <!-- <li><a href="tel:+91 8081347355 , 8081329320"  class="hover-style-link text-black font-weight--bold">8081347355 , 8081329320</a></li> -->
                        <li><a href="tel:+919198483820"
                                class="hover-style-link text-black font-weight--bold">9198483820</a></li>




                        <!--<li><a href="https://www.digicoders.in/" class="hover-style-link text-color-primary">www.digicoders.in</a></li>-->
                    </ul>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-6 footer-widget">
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">IT Services</h6>
                    <ul class="footer-widget__list">
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/SoftwareDevelopment">Software
                                Development</></a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/WebsiteDevelopment">Website
                                Development</></a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/MobileApplicationDevelopment">Mobile
                                App Development</></a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/DigitalMarketing">Digital Marketing
                                </></a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/GraphicsDesigning">Graphics
                                Designing</></a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/DomainAndHosting">Domain &amp;
                                Hosting</></a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Quick Links</h6>
                    <ul class="footer-widget__list">
                        <li><a href="https://rzp.io/l/pa3Rlt0qI" target="_blank" class="hover-style-link">Pay Online</a>
                        </li>
                        <li><a href="<?= base_url() ?>Home/OurProjects" class="hover-style-link">Our Projects</a></li>
                        <li><a href="<?= base_url() ?>Home/OurGallery" class="hover-style-link">Photo Gallery</a></li>
                        <li><a href="<?= base_url() ?>Home/OurVideo" class="hover-style-link">Video Gallery</a></li>
                        <li><a href="<?= base_url() ?>Home/TermOfPayment" class="hover-style-link">Terms of Payment</a>
                        </li>
                        <li><a href="<?= base_url() ?>Home/TermsAndConditions" class="hover-style-link">Terms &amp;
                                Condition</a></li>
                        <li><a href="<?= base_url() ?>Home/RefundAndCancellation" class="hover-style-link">Refund &amp;
                                Cancellation</a></li>
                        <!-- <li><a href="https://play.google.com/store/apps/dev?id=8450884306441958410" target="_blank"
                                class="image_btn"><img class="img-fluid lazy"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/google-play-logo-featured.png"
                                    title="google-play" alt="google-play-logo"></a></li> -->
                        <li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="<?= base_url() ?>Home/RequestProposal" class="hover-style-link">Request a
                                Proposal</a></li>
                        <li><a href="tel:9198483820" class="hover-style-link">Talk to Exeprt</a></li>
                        <li><a href="<?= base_url() ?>Home/FAQs">Help & FAQ</a></li>
                        <li><a href="<?= base_url() ?>Home/ContactUs" class="hover-style-link">Contact Us</a></li>
                        <li><a href="<?= base_url() ?>Home/Packages" class="hover-style-link">Pricing &amp; Packages</a>
                        </li>
                        <li><a href="<?= base_url() ?>Home/Blogs" class="hover-style-link">Blogs</a></li>
                        <li><a href="<?= base_url() ?>Home/DigiCodersInNews" class="hover-style-link">DigiCoders In
                                News</a></li>
                        <!-- <li><a href="https://play.google.com/store/apps/dev?id=7031818221401680582" target="_blank"
                                class="image_btn"><img class="img-fluid lazy"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/google-play-logo-featured.png"
                                    title="google-play" alt="google-play-logo"></a></li> -->
                        <li>
                    </ul>
                </div>

            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/digicoders-MCA.jpeg"
                                alt="photos" style="height:60px;" /></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/digicoders-gem.jpeg"
                                alt="photos" style="height:60px;" /></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/digicoders-iso.jpeg"
                                alt="photos" style="height:60px;" /></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/startup-india-digicoders.jpeg"
                                alt="photos" style="height:60px;" /></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/digicoders-msme.jpeg"
                                alt="photos" style="height:60px;" /></div>
                        <div class="col-lg-2 col-md-6 col-sm-6 text-center  py-1"><img class="lazy object-fi"
                                src="<?= base_url('public') ?>/assets/images/Loader1.jpg"
                                data-src="<?= base_url('public') ?>/assets/images/icons/Digital-India-digicoders.jpeg"
                                alt="photos" style="height:60px;" /></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container border-top">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center  py-1"> <span style="font-weight: bold;">Legal
                        Name:</span> <span class=" mr-2"> DigiCoders Technologies Private Limited</span> <span
                        style="font-weight: bold;"> Company Type:</span> <span class=" mr-2"> Private Limited</span>
                    <span style="font-weight: bold;">Date of Incorporation:</span> <span class=" mr-2">
                        14-Feb-2019</span> <span style="font-weight: bold;"> CIN:</span> <span class=" mr-2">
                        U72900UP2019PTC113696</span> <span style="font-weight: bold;">GSTIN:</span> <span class=" mr-2">
                        09AAHCD1032D1Z6</span> <span style="font-weight: bold;">Registered Office Address:</span> <span
                        class=" "> B-36, Sector-'O', Aliganj, Lucknow, 226024</span>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright-area section-space--pb_30">
        <div class="container border-top">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left col-sm-12 footer-icon">
                    <span class="copyright-text">&copy; 2019 - <?= date("Y") ?> to DigiCoders Technologies (P) Ltd. All
                        Rights Reserved. </span>
                </div>
                <div class="col-md-6 text-center text-md-right col-sm-12">
                    <ul class="list ht-social-networks solid-rounded-icon footer-icon">
                        <li class="item">
                            <a href="https://api.whatsapp.com/send?phone=91<?= $this->data['mobile_no'] ?>&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                target="_blank" aria-label="WhatsApp"
                                class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-whatsapp link-icon"></i>
                            </a>
                        </li>

                        <li class="item">
                            <a href="https://twitter.com/DigiCodersTech/" target="_blank" rel="noopener"
                                aria-label="Twitter" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fa-brands fa-x-twitter link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://facebook.com/DigiCodersTech/" target="_blank" rel="noopener"
                                aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.instagram.com/digicoderstech/" target="_blank" rel="noopener"
                                aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://linkedin.com/company/digicoders/" target="_blank" rel="noopener"
                                aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>



<div id="footer2" class="footer-area-wrapper bg-gray ftbg">
    <!-- reveal-footer -->
    <div class="footer-area section-space--ptb_80">
        <div class="container">
        </div>
    </div>

    <div class="footer-copyright-area section-space--pb_30">
    </div>

</div>

<!--====================  End of footer area  ====================-->

<!--====================  scroll top ====================-->
<a href="#" class="scroll-top" id="scroll-top" aria-label="top-up">
    <i class="arrow-top fal fa-long-arrow-up"></i>
    <i class="arrow-bottom fal fa-long-arrow-up"></i>
</a>
<!--====================  End of scroll top  ====================-->

<!--====================  mobile menu overlay ====================-->
<div class="mobile-menu-overlay" id="mobile-menu-overlay">
    <div class="mobile-menu-overlay__inner">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8">
                        <!-- logo -->
                        <div class="logo">
                            <a href="<?= base_url() ?>">
                                <img src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/Digicoders-new-logo.png"
                                    class="img-fluid lazy" title="digicoders-logo" alt="digicoders-logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-4">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content text-right">
                            <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="<?= base_url() ?>" aria-label="dropdown"><span>Home</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url() ?>"><span>DigiCoders</span></a></li>
                            <li><a href="http://www.thedigicoders.com/" target="_blank"><span>The DigiCoders</span></a>
                            </li>
                            <li><a href="https://www.digicoderstechnologies.com/" target="_blank"><span>DigiCoders
                                        Technologies</span></a></li>
                            <li><a href="https://www.codersadda.com/" target="_blank"><span>CodersAdda</span></a></li>
                            <li><a href="https://www.digitalcoders.in/" target="_blank"><span>DigitalCoders</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#" aria-label="dropdown"><span>About Company</span></a>
                        <ul class="sub-menu">
                            <li class="">
                                <a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About us</span></a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About
                                                DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutTheDigiCoders"><span>About The
                                                DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCodersTechnologies"><span>About
                                                DigiCoders Technologies</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutCodersAda"><span>About CodersAdda</span></a>
                                    </li>
                                    <li><a href="<?= base_url() ?>Home/AboutDigitalCoders"><span>About
                                                DigitalCoders</span></a></li>

                                </ul>
                            </li>
                            <li><a href="<?= base_url() ?>Home/Leadership"><span>Leadership</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurExperts"><span>Our experts</span></a></li>
                            <li><a href="<?= base_url() ?>Home/WhyChooseUs"><span>Why choose us</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurHistory"><span>Our history</span></a></li>
                            <li><a href="<?= base_url() ?>Home/FAQs"><span>FAQs</span></a></li>
                            <li><a href="<?= base_url() ?>Home/Career"><span>Career</span></a></li>


                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="#" aria-label="dropdown"><span>Our Services</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url() ?>Home/ITServices"><span>All Services</span></a></li>
                            <li><a href="<?= base_url() ?>Home/SoftwareDevelopment"><span>Software
                                        Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/WebsiteDevelopment"><span>Website Development</span></a>
                            </li>
                            <li><a href="<?= base_url() ?>Home/MobileApplicationDevelopment"><span>Mobile App
                                        Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/DigitalMarketing"><span>Digital Marketing</span></a></li>
                            <li><a href="<?= base_url() ?>Home/GraphicsDesigning"><span>Graphics Designing</span></a>
                            </li>
                            <li><a href="<?= base_url() ?>Home/DomainAndHosting"><span>Domain &amp; Hosting</span></a>
                            </li>
                            <li><a href="<?= base_url() ?>Home/ERPandCRMDevelopment"><span>ERP &amp; CRM
                                        Development</span></a></li>
                            <li><a href="<?= base_url() ?>Home/MaintenanceServices"><span>Maintenance
                                        Services</span></a></li>
                            <li><a href="<?= base_url() ?>Home/ITServices"><span>Other IT Services</span></a></li>
                        </ul>
                    </li>

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/OurProjects" aria-label="dropdown"><span>Our Portfolio</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url() ?>Home/OurProjects"><span>Our Projects</span></a></li>
                            <li><a href="<?= base_url() ?>Home/OurClient"><span>Our Clients</span></a></li>
                        </ul>
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
</div>
<!--====================  End of mobile menu overlay  ====================-->

<!--====================  search overlay ====================-->
<div class="search-overlay" id="search-overlay">
    <div class="search-overlay__header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 ml-auto col-4">
                    <!-- search content -->
                    <div class="search-content text-right">
                        <span class="mobile-navigation-close-icon" id="search-close-trigger"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="search-overlay__inner">
        <div class="search-overlay__body">
            <div class="search-overlay__form">
                <form action="#">
                    <input type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</div>



<script>

    $().ready(function () {
        $("#callback").validate({
        });
    })

    $().ready(function () {
        $("#contact").validate({
        });
    })

    $().ready(function () {
        $("#request").validate({
        });
    })

    $().ready(function () {
        $("#career").validate({
        });
    })

    $(function () {
        $('.lazy').Lazy({

            bind: "scroll",
        });
    });

    $().ready(function () {
        $("#enquiry").validate({
        });
    })
</script>



<script>
    function hideShow(id) {
        var text = $("#" + id).text();
        // alert(text);
        if (text == "Show" || text == "Show") {
            $(".text12").text("Show");
            $("#" + id).text("Hide");
            $(".collapse1").removeClass("Show");
            $(".") + id.addClass("Show");
        }
        else {
            $(".text12").text("Show");
            if (text == "Show" || text == "Show") {
                $("#" + id).text("Hide");
            } else {
                $("#" + id).text("Show");
            }
        }
    }
</script>

<!-- @RenderSection("scripts", false) -->
<!----request call back modal-------->
<!-- Modal -->

<!-- @if (TempData["popupkey"] == "CallBackRequestSuccess")
    {
        <script>
            swal("Call Back Request!", "Your Request Saved Successfully!", "success");
        </script>
    }
    @if (TempData["Msg"] == "This is Message")
    {
        <script>
            swal("Contact Request!", "Your Contact Request Saved Successfully!", "success");
        </script>
    }
    @if (TempData["Quick"] == "msg")
    {
        <script>
            swal("Enquiry Request!", "Your Quick Enquiry Request Saved Successfully!", "success");
        </script>
    }
    @if (TempData["Request"] == "Proposal")
    {
        <script>
            swal("Proposal Request!", "Your Proposal Request Saved Successfully!", "success");
        </script>
    }
    @if (TempData["Career"] == "Career")
    {
        <script>
            swal("Career Details!", "Your Career Details Saved Successfully!", "success");
        </script>
    } -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request Call Back</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('Home/SubmitForm/callBackReq') ?>" method="post" id="callBackRreq-form">
                    <div class="contact-form">
                        <div class="contact-input">
                            <div class="contact-inner">
                                <span>Name</span>
                                <input name="Name" type="text" placeholder="Name *" required>
                            </div>
                            <div class="contact-inner">
                                <span>Mobile</span>
                                <input name="Mobile" type="number" placeholder="Mobile *" required maxlength="10"
                                    min="10">
                            </div>
                        </div>
                        <div class="contact-input">
                            <div class="contact-inner">
                                <span>Date</span>
                                <input name="Date1" type="date" required>
                            </div>
                            <div class="contact-inner">
                                <span>Timing</span>
                                <select name="Timing" class="select-item">
                                    <option value="">Timing</option>
                                    <option>10AM- 12PM</option>
                                    <option>12PM- 2PM</option>
                                    <option>2PM- 4PM</option>
                                    <option>4PM- 7PM</option>
                                </select><br /><br /><br />
                            </div>
                        </div>

                    </div>
                    <div class="submit-btn mt-20">
                        <button class="ht-btn ht-btn-md" type="submit" id="btnsa">Submit</button>
                        <!-- @*<p class="form-messege"></p>*@ -->
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<!-------//request call back modal--->



<!--float button-->

<div id="feedback2">
    <a href="https://www.thedigicoders.com/Home/Registration" target="_blank" aria-label="left-align"><span
            class="pt-3">Register ForTraining</span></a>
</div>



<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/63bfbed047425128790d02ba/1gmig2oet';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
<script>
    document.querySelectorAll('.city-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const tooltip = item.querySelector('.city-tooltip');
            const rect = tooltip.getBoundingClientRect();

            if (rect.right > window.innerWidth) {
                tooltip.style.left = 'auto';
                tooltip.style.right = '110%';
            }
        });
    });
</script>