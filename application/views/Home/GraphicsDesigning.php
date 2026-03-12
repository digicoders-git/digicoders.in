<!DOCTYPE html>
<html lang="en">

<head>
    <title>Graphic Designing | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="We offer logo designing services to help organizations to expand their network through expert brand strategy and design in India.">
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
                    <h2 class="breadcrumb-title">Graphics Designing</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                        <li class="breadcrumb-item active">Graphics Designing</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end --><br/><br/>

<div class="site-wrapper-reveal">
    <!--====================  Blog Area Start ====================-->
    <div class="blog-pages-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-2 order-2">
                    <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">
                        <!-- === Sidebar Widget Start === -->
                        <div class="sidebar-widget widget-blog-recent-post wow move-up">
                            <h4 class="sidebar-widget-title">Other Services</h4>
                            <ul class="check-list">
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/SoftwareDevelopment">Software Development</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/WebsiteDevelopment">Website Development</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/MobileApplicationDevelopment">Mobile Application Development</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/DigitalMarketing">Digital Marketing</a>
                                </li>
                                <li class="list-item">
                                    <a href="GraphicsDesigning">Graphics Designing</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/DomainAndHosting">Domain & Hosting</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/ERPandCRMDevelopment">ERP & CRM Development</a>
                                </li>
                                <li class="list-item">
                                    <a href="<?= base_url() ?>/Home/MaintenanceServices">Maintenance Services</a>
                                </li>
                            </ul>
                        </div>
                        <!-- === Sidebar Widget End === -->
                        <!-- === Sidebar Widget Start === -->
                        <div class="sidebar-widget widget-images wow move-up">
                            <div class="card">
                                <div class="card-header text-center"><h3>Quick Enquiry</h3></div>
                                <div class="card-body">
                                    <div class="contact-form-wrap">
                                    <form id="quick-enquiry" action="<?= base_url() ?>Home/SubmitForm/quickEnq" method="post">
									 <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                            <div class="contact-form">
                                                <div class="row contact-input justify-content-center">
                                                    <div class="contact-inner wid">
                                                        <input name="Name" type="text" placeholder="Name *" required="required">
                                                    </div>
                                                </div>
                                                <div class="row contact-input">
                                                    <div class="contact-inner wid">
                                                        <input name="Mobile" type="number" maxlength="10" min="10" placeholder="Phone Number *" required="required">
                                                    </div>
                                                </div>
                                                <div class="submit-btn mt-15 row justify-content-center">
                                                    <button class="ht-btn ht-btn-md" type="submit">Submit Query</button>
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
                                <img data-src="<?= base_url('public') ?>/assets/images/graphics-design.jpg" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy img-fluid graphic-img" title="Graphic Designing" alt="Graphic Designing"/>
                             </div>
                            <!-- Post Feature End -->
                            <!-- Post info Start -->
                            <div class="post-info lg-blog-post-info  wow move-up">
                                <h3 class="post-title">What Can We Do</h3>
                                <div class="post-excerpt mt-15 text-justify">
                                    <p>Graphic design is the process of visual communication and problem-solving through the use of typography, photography and illustration. The field is considered a subset of visual communication and communication design, but sometimes the term "graphic design" is used synonymously. Graphic designers create and combine symbols, images and text to form visual representations of ideas and messages. </p>
                                         <blockquote>
                                        <p class="p1">They use typography, visual arts and page layout techniques to create visual compositions. Common uses of graphic design include corporate design (logos and branding), editorial design (magazines, newspapers and books), wayfinding or environmental design, advertising, web design, communication design, product packaging and signage.</p>
                                    </blockquote>                                  
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
    <!--====================  Blog Area End  ====================-->

    <section>
        <div class="container">
            <h5 class="post-title p-2 text-center">Features That We Provide In Graphics Designing</h5><br />
            <div class="row mbr-justify-content-center">
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/services/graphic-design.jpg" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="logo-design" alt="logo-design" />
                         </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Logo Designing</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">A Logo is a design symbolizing ones organization. It is a design that is used by an organization for its letterhead, advertising material, and signs as an emblem by which the organization can easily be recognized, also called logotype.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/banner-design.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="banner-design" alt="banner-design" />
                         </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                Banner Designing
                            </h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Banner design is a fundamental component of online branding. When marketing a business' products and services, catering to the visual component of the target audience's purchasing intent and behavior is a crucial factor.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/online-advertising.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="banner" alt="banner"/>
                         </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">
                                Web Banner Designing
                            </h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Web banner design is all about creating the most clickable banner ads possible. Banner ads are advertisement images embedded on web pages that showcase a product or brand and link to the advertiser's website.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/adobe.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Animated Logo" alt="Animated Logo" />
                         </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Animated Logo</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Logo animation is literally corporate identity in motion, a powerful advertising tool and fantastic eye catcher. We offer our clients animated logos that help them increase the recognizability of their brand, attract new customers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/3d.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Designing" alt="Designing" />
                        </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">2D and 3D Designing</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">There is one easy way to explain the difference between two-dimensional and three-dimensional design. While the 2D designs have only width and height, a 3D design has three dimensions – width, height and depth.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/animatedvideo.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Animated Video" alt="Animated Video" />
                        </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Animated Video</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Animated video is an engaging instrument that can help you tell your story more comprehensively. 65% of people are visual learners, and 90% of the information transmitted to the brain is visual.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/promotional.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Promotional Video" alt="Promotional Video" />
                        </div>
                        <div class="text-wrap vcenter pl-2">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Promotional Video</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">A promotional video or promo video is a video used for the express purpose of promoting a specific marketing initiative, sale, or event. Promos are often similar in style and tone to a teaser video, where you grab your audience's attention and draw them in to learn more.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/illusion.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Illustration" alt="Illustration" />
                        </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Illustration</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">An illustration is a decoration, interpretation or visual explanation of a text, concept or process, designed for integration in published media, such as posters, flyers, magazines, books, teaching materials, animations, video games and films.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/letter.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="News Letters" alt="News Letters" />
                        </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">News Letters</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">A newsletter is a printed or electronic report containing news concerning of the activities of a business or an organization that is sent to its members, customers, employees or other subscribers. Newsletters generally contain one main topic of interest to its recipients.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/mobileapp.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="App Design" alt="App Design" />
                          </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">App Design</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Image result for what is  App Design
Mobile app design encompasses both the user interface (UI) and user experience (UX). Designers are responsible for the overall style of the app, including things like the colour scheme, font selection, and the types of buttons and widgets the user will use.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/software-design.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Software Design" alt="Software Design" />
                        </div>
                        <div class="text-wrap vcenter pl-2">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Software Design</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Software design is the process by which an agent creates a specification of a software artifact, intended to accomplish goals, using a set of primitive components and subject to constraints.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <img data-src="<?= base_url('public') ?>/assets/images/other/migration.png" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy marketing-icon" title="Web Design" alt="Web Design" />
                         </div>
                        <div class="text-wrap vcenter pl-3">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Web Design</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">Web design encompasses many different skills and disciplines in the production and maintenance of websites. The different areas of web design include web graphic design; interface design.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----------->

    <!--========== Call to Action Area Start ============-->
    <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="cta-content md-text-center">
                        <h3 class="heading text-white">We Help Organisations to <span class="text-color-secondary">Manage Changes With DigiCoders <span class="text-white">Graphics Designing Services</span></span></h3>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="cta-button-group--one text-center">
                        <a href="tel:9198483820" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                        <a href="../Home/ContactUs" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
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


