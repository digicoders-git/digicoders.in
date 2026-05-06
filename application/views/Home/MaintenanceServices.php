<!DOCTYPE html>
<html lang="en">

<head>
    <title>Website Maintenance Service | Best IT Company in Lucknow - DigiCoders</title>
    <meta name="description"
        content="We provide dedicated software maintenance and support services that let you concentrate on your core business functions.">
    <?php include('include/headerlinks.php') ?>
</head>

<body>
    <?php include('include/header.php') ?>


    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Maintenance Services</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Maintenance Services</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--====================  Blog Area Start ====================-->
        <div class="blog-pages-wrapper section-space--mt_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 order-lg-2 order-2">
                        <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">
                            <!-- === Sidebar Widget Start === -->
                            <div class="sidebar-widget widget-blog-recent-post wow move-up">
                                <h4 class="sidebar-widget-title">Other Services</h4>
                                <ul class="check-list">
                                    <li class="list-item">
                                        <a href="../Home/SoftwareDevelopment">Software Development</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/WebsiteDevelopment">Website Development</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/MobileApplicationDevelopment">Mobile Application
                                            Development</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/DigitalMarketing">Digital Marketing</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/GraphicsDesigning">Graphics Designing</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/DomainAndHosting">Domain & Hosting</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="../Home/ERPandCRMDevelopment">ERP & CRM Development</a>
                                    </li>
                                    <li class="list-item">
                                        <a href="MaintenanceServices">Maintenance Services</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-widget widget-images wow move-up">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <h3>Quick Enquiry</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="contact-form-wrap">
                                            <form id="quick-enquiry" action="<?= base_url() ?>Home/SubmitForm/quickEnq"
                                                method="post">
                                                <?php
                                                $csrf = array(
                                                    'name' => $this->security->get_csrf_token_name(),
                                                    'hash' => $this->security->get_csrf_hash()
                                                );
                                                ?>
                                                <input type="hidden" name="<?= $csrf['name']; ?>"
                                                    value="<?= $csrf['hash']; ?>"   />
                                                <div class="contact-form">
                                                    <div class="row contact-input justify-content-center">
                                                        <div class="contact-inner wid">
                                                            <input name="Name" type="text" placeholder="Name *"
                                                                required="required">
                                                        </div>
                                                    </div>
                                                    <div class="row contact-input">
                                                        <div class="contact-inner wid">
                                                            <input name="Mobile" type="number" maxlength="10" min="10"
                                                                placeholder="Phone Number *" required="required">
                                                        </div>
                                                    </div>
                                                    <div class="row contact-input justify-content-center">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="<?= RECAPTCHA_SITE_KEY ?>"></div>
                                                    </div>
                                                    <div class="submit-btn mt-15 row justify-content-center">
                                                        <button class="ht-btn ht-btn-md" type="submit"><i
                                                                class="fas fa-spinner fa-spin d-none"></i>&ensp;Submit
                                                            Query</button>
                                                        <p class="form-messege"></p>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- === Sidebar Widget End === -->
                        </div>
                    </div>
                    <div class="col-lg-8 order-lg-1 order-1">
                        <div class="main-blog-wrap">
                            <!--======= Single Blog Item Start ========-->
                            <div class="single-blog-item">
                                <!-- Post Feature Start -->
                                <div class="post-feature blog-thumbnail  wow move-up">
                                    <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                        data-src="<?= base_url('public') ?>/assets/images/services/maintenance.jpg"
                                        class="img-fluid" style="height:350px;width:100%" />
                                </div>
                                <!-- Post Feature End -->
                                <!-- Post info Start -->
                                <div class="post-info lg-blog-post-info  wow move-up">
                                    <h3 class="post-title">What Can We Do</h3>
                                    <div class="post-excerpt mt-15 text-justify">
                                        <p>Leverage our powerful software maintenance and support services around the
                                            globe, as we are able to deliver our solutions everywhere. We provide
                                            dedicated software maintenance and support services that let you concentrate
                                            on your core business functions. With our agile and seamless software
                                            maintenance and support services, your business will have what it needs to
                                            reach its full potential. Our experts provide you with effective long-term
                                            continual maintenance and real-time support services for all your software
                                            requirements.</p>
                                        <div class="entry-post-share-wra">
                                            <div class="row align-items-center">
                                                <h5 class="post-title p-2">Why Choose Us For Software Maintenance
                                                    Services</h5>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="list-group-wrap section-space--mb_60">
                                                        <div class="separator-list-wrap">
                                                            <ul class="check-list">
                                                                <li class="list-item">Performance Improvement</li>
                                                                <li class="list-item">Bug Fixing</li>
                                                                <li class="list-item">Removal of Outdated Functions</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="list-group-wrap section-space--mb_60">
                                                        <div class="separator-list-wrap">
                                                            <ul class="check-list">
                                                                <li class="list-item">Improves User Experience</li>
                                                                <li class="list-item">Cost Savings</li>
                                                                <li class="list-item">Improves Reliability</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Post info End -->
                            </div>
                            <!--===== Single Blog Item End =========-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Blog Area End  ====================--><br /><br />

        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">We Help Organisations to <span
                                    class="text-color-secondary">Manage Changes With DigiCoders <span
                                        class="text-white">Maintenance Services</span></span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="tel:9198483820" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i
                                        class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="../Home/ContactUs" class="btn btn--secondary  btn-two"><span
                                    class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== Call to Action Area End ============-->
    </div>




    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>