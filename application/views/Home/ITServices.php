<!DOCTYPE html>
<html lang="en">

<head>
    <title>Other IT Services | Best IT Company in Lucknow - DigiCoders</title>
    <meta name="description"
        content="We provide Reliable IT Services internet marketing, mobile application development and more at an affordable price in India.">
    <?php include('include/headerlinks.php') ?>
    <style>
    

    .servicescontainer {
        max-width: 1400px;
        margin: 0 auto;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h2 {
        font-size: 42px;
        color: #333;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
        gap: 30px;
        margin-bottom: 40px;
    }

    .service-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.15);
    }

    .service-image {
        width: 430px;
        height: 250px;
        object-fit: cover;
    }

    .service-content {
        padding: 30px;
        position: relative;
    }

    .redirect-icon {
        position: absolute;
        top: 25px;
        right: 25px;
        width: 40px;
        height: 40px;
        background: #f8f9fa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        font-size: 18px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .redirect-icon:hover {
        background: #333;
        color: white;
        transform: rotate(45deg);
    }

    .service-title {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
        font-weight: 600;
        padding-right: 50px;
    }

    .service-subtitle {
        font-size: 14px;
        color: #666;
        margin-bottom: 15px;
        font-weight: 500;
    }

    .service-description {
        font-size: 15px;
        color: #666;
        line-height: 1.7;
        margin-bottom: 25px;
    }

    .service-buttons {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .btn {
        padding: 12px 28px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: #333;
        color: white;
    }

    .btn-primary:hover {
        background: #555;
    }

    .btn-icon {
        width: 45px;
        height: 45px;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
        font-size: 18px;
    }

    .btn-whatsapp {
        background: #25D366;
        color: white;
    }

    .btn-whatsapp:hover {
        background: #1da851;
    }

    .btn-phone {
        background: #dc3545;
        color: white;
    }

    .btn-phone:hover {
        background: #c82333;
    }

    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
        }

        .section-title h2 {
            font-size: 32px;
        }
    }
    </style>

</head>

<body>
    <?php include('include/header.php') ?>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="servicescontainer">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Our All Services</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Our All Services</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--===========  feature-images-wrapper  Start =============-->
        <div class="feature-images-wrapper section-space--ptb_100">
            <div class="servicescontainer">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- section-title-wrap Start -->
                        <div class="section-title-wrap text-center">
                            <h3 class="heading">Reliable IT Services <br> provided by <span class="text-color-primary">
                                    DigiCoders.</span></h3>
                        </div>
                        <!-- section-title-wrap Start -->
                    </div>
                </div>

                <div class="container">
                    <div class="section-title">
                        <h2>What are You Searching for</h2>
                    </div>

                    <div class="services-grid">
                        <!-- Software Development Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/software-development.jpg"
                                alt="Software Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/SoftwareDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Software Development</h3>
                                <p class="service-subtitle">To let you manage your Business</p>
                                <p class="service-description">
                                    There are many software in the market which can spark your eyes with their beyond
                                    the thought features but what if that one basic feature is missing which is required
                                    to run your business. That is where Custom Software Development comes into the
                                    picture. It is to build something precisely for you. The coding will be according to
                                    your needs. The data will be yours.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Website Development Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/website-design.jpg"
                                alt="Website Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/WebsiteDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Website Designing</h3>
                                <p class="service-subtitle">To give your Brand an Identity</p>
                                <p class="service-description">
                                    We create stunning Website design and bunch of features to make your website stand
                                    out of crowd for your startup or existing business. We create wide range of unique
                                    website which includes SEO compatibility, High Demand (HD)/4K images & Responsive
                                    design to fit and functions well on any device - desktop, tablet & mobile.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Ecommerce Designing Card -->
                        <div class="service-card">
                            <img src="<?= base_url('public') ?>/assets/images/services/ecommerce.jpg"
                                alt="Ecommerce Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DigitalMarketing') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Ecommerce Designing</h3>
                                <p class="service-subtitle">To increase your sales Online</p>
                                <p class="service-description">
                                    E-Commerce website design for online selling your products and hassle-free in
                                    receiving payment. An individual reach is limited but an effective website can reach
                                    beyond the expectation. We offer you a complete ecommerce website development and
                                    best SEO services considering the user perspective to offer complete satisfaction.
                                    Startup to Enterprise.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                      <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile Application Development Card -->
                        <div class="service-card">
                        <img src="<?= base_url('public') ?>/assets/images/services/mobile-app.jpg"
                                alt="Mobile Application Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/MobileApplicationDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Mobile Application Development</h3>
                                <p class="service-subtitle">To reach your customers anywhere</p>
                                <p class="service-description">
                                    Mobile app development is the act or process by which a mobile app is developed for
                                    mobile devices. We create native and hybrid mobile applications for iOS and Android
                                    platforms with cutting-edge features and seamless user experience.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Digital Marketing Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/digital-marketing.jpg"
                                alt="Digital Marketing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DigitalMarketing') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Digital Marketing</h3>
                                <p class="service-subtitle">To grow your business online</p>
                                <p class="service-description">
                                    Digital marketing encompasses all marketing efforts that use an electronic device or
                                    the internet. We provide comprehensive digital marketing services including SEO,
                                    social media marketing, content marketing, email marketing, and PPC campaigns to
                                    boost your online presence and drive results.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                      <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Graphics Designing Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/graphic-design.jpg"
                                alt="Graphics Designing" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/GraphicsDesigning') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Graphics Designing</h3>
                                <p class="service-subtitle">To make your brand visually appealing</p>
                                <p class="service-description">
                                    Graphic design is the process of visual communication and problem-solving through
                                    the use of typography, photography, and illustration. We create stunning visual
                                    identities, logos, brochures, social media graphics, and all types of design
                                    materials that make your brand stand out.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Domain and Hosting Card -->
                        <div class="service-card">
                          <img src="<?= base_url('public') ?>/assets/images/services/domain.jpg"
                                alt="Domain and Hosting" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/DomainAndHosting') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Domain and Hosting</h3>
                                <p class="service-subtitle">To establish your online presence</p>
                                <p class="service-description">
                                    Domain name is the first face of a business when we talk digitally. Web hosting is a
                                    service that allows organizations and individuals to post a website or web page onto
                                    the Internet. We provide reliable domain registration and hosting services with
                                    99.9% uptime guarantee.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ERP and CRM Development Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/erp.jpg"
                                alt="ERP and CRM Development" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/ERPAndCRMDevelopment') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">ERP and CRM Development</h3>
                                <p class="service-subtitle">To streamline your business operations</p>
                                <p class="service-description">
                                    ERP is an acronym for Enterprise Resource Planning. We develop custom ERP and CRM
                                    solutions that integrate all facets of your business operations including planning,
                                    purchasing, inventory, sales, marketing, finance, and human resources into one
                                    complete system.
                                </p>
                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Maintenance Services Card -->
                        <div class="service-card">
                           <img src="<?= base_url('public') ?>/assets/images/services/maintenance.jpg"
                                alt="Maintenance Services" class="service-image">
                            <div class="service-content">
                                <a href="<?= base_url('Home/MaintenanceServices') ?>" class="redirect-icon">
                                    <i class="fas fa-arrow-right"></i>
                                </a>
                                <h3 class="service-title">Maintenance Services</h3>
                                <p class="service-subtitle">To keep your systems running smoothly</p>
                                <p class="service-description">
                                    Leverage our powerful software maintenance and support services around the globe, as
                                    we are able to deliver our solutions everywhere. We provide regular updates, bug
                                    fixes, security patches, and technical support to ensure your applications run
                                    smoothly 24/7 and more.
                                </p>


                                <div class="service-buttons">
                                    <button data-toggle="modal" data-target="#exampleModal"
                                    aria-label="modal-btn" class="btn btn-primary">Request a Quote</button>
                                    <div class="btn-icon btn-whatsapp">
                                         <a class=" social-link hint--bounce hint--bottom-left" rel="noopener"
                                        aria-label="Whatsapp"
                                        href="https://api.whatsapp.com/send?phone=919198483820&text=Hello DigiCoders Technologies, I want to discuss about my project"
                                        data-hover="WhatsApp" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    </div>
                                    <div class="btn-icon btn-phone">
                                        <a href="tel:+919198483820"><i class="fas fa-phone"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--===========  feature-images-wrapper  End =============-->
    </div>

    <?php include('include/footer.php') ?>
    <?php include('include/jslinks.php') ?>
</body>

</html>