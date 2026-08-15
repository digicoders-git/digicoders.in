<!-- Site Page Continer End -->
<!--====================  footer area ====================-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="footer-area-wrapper bg-gray ftbg" style="overflow-x: hidden;">

    <div class="servic-section">
        <h2 class="city-title">OUR SERVICES</h2>
        <div class="state-row">


            <?php
            $total_services = count($allservice);
            $s_count = 0;
            foreach ($allservice as $service):
                $s_count++;
                ?>

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

                <?php if ($s_count < $total_services): ?>
                    <span class="separator">|</span>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="cities-section">
        <h2 class="city-title">CITIES WE COVER</h2>

        <?php foreach ($states as $state): ?>
            <div class="state-row">
                <strong class="state-name"><?= $state->state_name ?></strong>

                <?php
                $total_cities = count($state->cities);
                $c_count = 0;
                foreach ($state->cities as $city):
                    $c_count++;
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

                    <?php if ($c_count < $total_cities): ?>
                        <span class="separator">|</span>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- reveal-footer -->
    <div class="footer-area pb-2">
        <div class="container">
            <section class="dg-office-section">
                <div class="dg-office-container">
                    <!-- Brand Logo Block -->
                    <div class="dg-office-block text-center">
                        <img src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                            data-src="<?= base_url('public') ?>/assets/images/DigiCoders Technologies Logo.jpg"
                            class="img-fluid footer-logo lazy" title="digicoderslogo" alt="digicoderslogo" />
                    </div>
                    <!-- Lucknow Office -->
                    <div class="dg-office-block">
                        <h3>LUCKNOW Head OFFICE</h3>
                        <p>2nd Floor, B-36, Sector O, Near Ram Ram Bank Chauraha, Aliganj, Lucknow, Uttar Pradesh,
                            226021</p>
                    </div>

                    <!-- Kanpur Office -->
                    <div class="dg-office-block">
                        <h3>KANPUR OFFICE</h3>
                        <p>1st Floor, 128/3/98, Shivaji Park (Near Rahul Petrol Pump Indian Oil), Yashoda Nagar, Kanpur,
                            Uttar Pradesh, 208011</p>
                    </div>

                    <!-- Gorakhpur Office -->
                    <div class="dg-office-block">
                        <h3>GORAKHPUR OFFICE</h3>
                        <p>INSIDE MAIN BUILDING, BUDDHA INSTITUTE OF TECHNOLOGY, CL-1, SECTOR-7, GIDA, GORAKHPUR, UP,
                            273209</p>
                    </div>
                </div>
            </section>

            <div class="row footer-widget-wrapper pt-4">
                <div class="col-lg-3 col-md-6 col-sm-6 footer-widget mb-30">
                    <h6 class="footer-widget__title mb-20">Contact US</h6>
                    <ul class="footer-widget__list">
                        <li><a href="tel:<?= $this->data['telephone_no'] ?>"
                                class="hover-style-link text-black font-weight--bold"><i
                                    class="fas fa-phone-alt mr-2 text-success"></i><?= $this->data['telephone_no'] ?></a>
                        </li>
                        <li><a href="tel:+916394296293" class="hover-style-link text-black font-weight--bold"><i
                                    class="fas fa-mobile-alt mr-2 text-success"></i>6394296293</a></li>
                        <li><a href="tel:+919140967607" class="hover-style-link text-black font-weight--bold"><i
                                    class="fas fa-mobile-alt mr-2 text-success"></i>9140967607</a></li>
                        <li><a href="tel:+919198483820" class="hover-style-link text-black font-weight--bold"><i
                                    class="fas fa-mobile-alt mr-2 text-success"></i>9198483820</a></li>
                        <li class="mt-2"><a href="mailto:<?= $this->data['email'] ?>" class="hover-style-link"><i
                                    class="fas fa-envelope mr-2 text-success"></i><?= $this->data['email'] ?></a></li>
                        <li><a href="mailto:digicoderstech@gmail.com" class="hover-style-link"><i
                                    class="fas fa-envelope mr-2 text-success"></i>digicoderstech@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-widget mb-30">
                    <h6 class="footer-widget__title mb-20">IT Services</h6>
                    <ul class="footer-widget__list">
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/SoftwareDevelopment">Software
                                Development</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/WebsiteDevelopment">Website
                                Development</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/MobileApplicationDevelopment">Mobile
                                App Development</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/DigitalMarketing">Digital
                                Marketing</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/GraphicsDesigning">Graphics
                                Designing</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/DomainAndHosting">Domain &amp;
                                Hosting</a></li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/PrivacyPolicies">Privacy Policy</a>
                        </li>
                        <li><a class="hover-style-link" href="<?= base_url() ?>Home/ShippingPolicy">Shipping &amp; Delivery Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-widget mb-30">
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
                        <li><a href="<?= base_url() ?>Home/RefundAndCancellation" class="hover-style-link">Refund &amp; Cancellation</a></li>
                        <li><a href="<?= base_url() ?>Home/ReturnPolicy" class="hover-style-link">Return Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 footer-widget mb-30">
                    <h6 class="footer-widget__title mb-20">Support</h6>
                    <ul class="footer-widget__list">
                        <li><a href="<?= base_url() ?>Home/RequestProposal" class="hover-style-link">Request a
                                Proposal</a></li>
                        <li><a href="tel:9198483820" class="hover-style-link">Talk to Expert</a></li>
                        <li><a href="<?= base_url() ?>Home/FAQs">Help &amp; FAQ</a></li>
                        <li><a href="<?= base_url() ?>Home/ContactUs" class="hover-style-link">Contact Us</a></li>
                        <li><a href="<?= base_url() ?>Home/Packages" class="hover-style-link">Pricing &amp; Packages</a>
                        </li>
                        <li><a href="<?= base_url() ?>Home/Blogs" class="hover-style-link">Blogs</a></li>
                        <li><a href="<?= base_url() ?>Home/DigiCodersInNews" class="hover-style-link">DigiCoders In
                                News</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom py-1">
                <div class="container">
                    <div class="row justify-content-center align-items-center logo-badges-row mb-2">
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/mca.png" alt="MCA" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/gem.png" alt="GeM" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/iso.png" alt="ISO" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/startupindia.png"
                                    alt="Startup India" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/msme.png" alt="MSME" />
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-2 text-center py-1">
                            <div class="logo-badge-item">
                                <img class="lazy footer-img img-fluid"
                                    src="<?= base_url('public') ?>/assets/images/loader1.jpg"
                                    data-src="<?= base_url('public') ?>/assets/images/icons/digital.png"
                                    alt="Digital India" />
                            </div>
                        </div>
                    </div>

                    <div class="row border-top pt-3">
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                            <div class="footer-legal-info">
                                <span class="legal-badge"><strong>Legal Name:</strong> DigiCoders Technologies Private
                                    Limited</span>
                                <span class="legal-badge"><strong>Company Type:</strong> Private Limited</span>
                                <span class="legal-badge"><strong>Date of Incorporation:</strong> 14-Feb-2019</span>
                                <span class="legal-badge"><strong>CIN:</strong> U72900UP2019PTC113696</span>
                                <span class="legal-badge"><strong>GSTIN:</strong> 09AAHCD1032D1Z6</span>
                                <span class="legal-badge"><strong>Registered Office:</strong> B-36, Sector-'O', Aliganj,
                                    Lucknow, 226024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright-area section-space--pb_30">
        <div class="container border-top pt-3">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-left col-sm-12 footer-icon mb-2 mb-md-0">
                    <span class="copyright-text">&copy; 2019 - <?= date("Y") ?> DigiCoders Technologies (P) Ltd. All
                        Rights Reserved.</span>
                </div>
                <div class="col-md-6 text-center text-md-right col-sm-12">
                    <ul
                        class="list ht-social-networks solid-rounded-icon footer-icon justify-content-center justify-content-md-end">
                        <li class="item">
                            <a href="https://www.whatsapp.com/channel/0029VaDTIxW5EjxzOyubYT3l"
                                target="_blank" aria-label="WhatsApp Channel" title="WhatsApp Channel"
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
                            <a href="https://www.facebook.com/DigiCodersTech/" target="_blank" rel="noopener"
                                aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-facebook-f link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.instagram.com/digicoderstech" target="_blank" rel="noopener"
                                aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-instagram link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.linkedin.com/company/digicoders/" target="_blank" rel="noopener"
                                aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-linkedin link-icon"></i>
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.youtube.com/@digicoders" target="_blank" rel="noopener"
                                aria-label="YouTube" title="YouTube" class="social-link hint--bounce hint--top hint--primary">
                                <i class="fab fa-youtube link-icon"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- <div id="footer2" class="footer-area-wrapper bg-gray ftbg">
   
    <div class="footer-area section-space--ptb_80">
        <div class="container">
        </div>
    </div>

    <div class="footer-copyright-area section-space--pb_30">
    </div>

</div> -->

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
                                <img src="<?= base_url('public/assets/images/DigiCoders Technologies Logo.jpg') ?>"
                                    class="img-fluid header-logo-img" title="Digicoders Technologies"
                                    alt="Digicoders Technologies" />
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
                    <li>
                        <a href="<?= base_url() ?>"><span>Home</span></a>
                    </li>
                    <li class="has-children">
                        <a href="#" aria-label="dropdown"><span>About Company</span></a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About us</span></a>
                                <ul class="sub-menu">
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCoders"><span>About
                                                DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutTheDigiCoders"><span>About The
                                                DigiCoders</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutDigiCodersTechnologies"><span>About
                                                DigiCoders Technologies</span></a></li>
                                    <li><a href="<?= base_url() ?>Home/AboutCodersAdda"><span>About
                                                CodersAdda</span></a></li>
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

                    <li class="has-children">
                        <a href="<?= base_url() ?>Home/LucknowBranch" aria-label="dropdown"><span>Our
                                Branches</span></a>
                        <ul class="sub-menu">
                            <li><a href="<?= base_url() ?>Home/LucknowBranch"><span>Lucknow (Main Office)</span></a>
                            </li>
                            <li><a href="<?= base_url() ?>Home/KanpurBranch"><span>Kanpur Office</span></a></li>
                            <li><a href="<?= base_url() ?>Home/GorakhpurBranch"><span>Gorakhpur Office</span></a></li>
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
        if (typeof $.fn.Lazy !== 'undefined') {
            $('.lazy').Lazy({
                bind: "scroll",
            });
        }
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
                        <button class="ht-btn ht-btn-md" type="submit" id="btnsa"><i
                                class="fas fa-spinner fa-spin d-none"></i>&ensp;Submit</button>
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
            class="pt-3">Register For Training</span></a>
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