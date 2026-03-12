<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Best IT Company in Lucknow - DigiCoders</title>
    <meta name="description"
        content="Our experienced team can give you a best estimation for technology and budget for your requirement. Contact us for internet marketing and more!">
    <?php include('include/headerlinks.php') ?>
     <script>
    function submitregform() {
        document.getElementById('submitBtn').disabled = false
    }
    </script>
    <style>
        .teams-contact-section {
            padding: 90px 0;
            background: #f6f8fc;
        }

        /* =================== SECTION TITLE =================== */
        .section-title {
            text-align: center;
            margin-bottom: 70px;
        }

        .section-title h2 {
            font-size: 2.1rem;
            font-weight: 700;
            color: #1f2937;
            position: relative;
        }

        .section-title h2::after {
            content: "";
            width: 60px;
            height: 3px;
            background: #2563eb;
            display: block;
            margin: 15px auto 0;
            border-radius: 3px;
        }

        .section-title p {
            margin-top: 25px;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            color: #6b7280;
            font-size: 1rem;
            line-height: 1.7;
        }

        /* =================== GRID =================== */
        .teams-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        /* =================== CARD =================== */
        .team-card {
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            transition: all 0.25s ease;
        }

        .team-card:hover {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transform: translateY(-4px);
        }

        /* =================== HEADER =================== */
        .team-header {
            padding: 12px;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 600;
            color: #374151;
            background: #f9fafb;
            border-bottom: 1px solid #e5e7eb;
        }

        /* =================== BANNER =================== */
        .team-banner {
            position: relative;
            padding: 24px;
            min-height: 100px;
        }

        .banner-bg {
            display: none;
        }

        /* =================== TEXT =================== */
        .team-title {
            font-size: 20px;
            font-weight: 700;
            color: #111827;
        }

        .team-subtitle {
            font-size: 15px;
            font-weight: 600;
            color: #2563eb;
        }

        /* =================== ICON =================== */
        .banner-image {
            position: absolute;
            right: 20px;
            top: 25px;
            width: 44px;
            height: 44px;
            background: #eff6ff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .banner-image i {
            font-size: 20px;
            color: #2563eb;
        }

        /* =================== CONTACT =================== */
        .team-contact {
            padding: 20px;
            border-top: 1px solid #e5e7eb;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .contact-column {
            text-align: center;
        }

        .phone-number {
            font-size: 15px;
            font-weight: 600;
            color: #111827;
            margin-bottom: 10px;
        }

        /* =================== BUTTONS =================== */
        .contact-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .btn-contact {
            width: 30px;
            height: 30px;
            border-radius: 6px;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            transition: 0.2s ease;
        }

        .btn-whatsapp {
            background: #0bc850ff;
        }

        .btn-call {
            background: #d81313ff;
        }

        .btn-contact:hover {
            opacity: 0.9;
        }

        /* =================== CONTACT INFO CARDS =================== */
        .conact-info-wrap {
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            background: #ffffff;
            transition: 0.25s ease;
        }

        .conact-info-wrap:hover {
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }

        .conact-info-wrap h4 i {
            font-size: 28px;
            color: #2563eb;
            margin-bottom: 8px;
        }

        /* =================== RESPONSIVE =================== */
        @media (max-width: 1200px) {
            .teams-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .teams-grid {
                grid-template-columns: 1fr;
            }

            .section-title h2 {
                font-size: 1.7rem;
            }
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
                        <h2 class="breadcrumb-title">Contact us</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Contact us </li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30">
                            <h3 class="heading">Obtaining further <br>information by droping a <br><span
                                    class="text-color-primary">message to our experienced</span> IT professionals.</h3>
                            <div class="sub-heading">We're available for 16 hours a day!</div>
                            <div class="sub-heading">Contact will require a detailed analysis and assessment of your
                                plan. Our experienced team can give you a best esitimation for technology and budget for
                                your requirement.</div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap">
                            <form id="contact" action="<?= base_url() ?>Home/SubmitForm/contactForm" method="post">
                                <?php
                                $csrf = array(
                                    'name' => $this->security->get_csrf_token_name(),
                                    'hash' => $this->security->get_csrf_hash()
                                );
                                ?>
                                <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" />
                                <div class="contact-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="Name" type="text" placeholder="Name *" required
                                                autocomplete="off">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="Email" type="email" placeholder="Email" autocomplete="off"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="Mobile" type="number" placeholder="Phone Number *"
                                                required="required" autocomplete="off" maxlength="10" min="10">
                                        </div>
                                        <div class="contact-inner">
                                            <select name="Enquiry" class="select-item" autocomplete="off">
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
                                    </div>
                                    <div class="contact-inner contact-message" autocomplete="off">
                                        <textarea name="Message" placeholder=" Please describe what you need."
                                            maxlength="250"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Security Verification <span class="text-danger">*</span></label>
                                        <div class="g-recaptcha"
                                            data-sitekey="6LfHIQcrAAAAALPXPP-R1SamLeZxPHGPA_xfMNOh" data-callback="submitregform">
                                        </div>
                                    </div>
                                    <div class=" submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" id="submitBtn" type="submit"><i
                                                class="fas fa-spinner fa-spin d-none" id="submitSpin"></i>&ensp;Send
                                            Your Message</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->
        <!--====================  Conact us info Start ====================-->
        <!-- <div class="contact-us-info-wrappaer section-space--pb_100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="conact-info-wrap mt-30 text-center">
                                <div class="card-body">
                                    <h4><i class="fa fa-map-marker"></i></h4>
                                    <h5 class="heading mb-20"> Address</h5>
                                    <ul class="conact-info__list">
                                        <li>2nd Floor, B-36, Sector O, Near Ram Ram Bank Chauraha, Aliganj, Lucknow,
                                            Uttar Pradesh, 226021</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="conact-info-wrap mt-30 text-center">
                                <div class="card-body">
                                    <h4><i class="fa fa-phone"></i></h4>
                                    <h5 class="heading mb-20"> Phone No.</h5>
                                    <ul class="conact-info__list">
                                        <li>
                                            <a href="tel:9198483820">9198483820</a>, <a
                                                href="tel:0522-4235604">0522-4235604</a>,
                                            <a href="tel:6394296293">6394296293</a>, <a
                                                href="tel:9140967607">9140967607</a>,


                                        </li>
                                    </ul><br /><br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="conact-info-wrap mt-30 text-center">
                                <div class="card-body">
                                    <h4><i class="fa fa-envelope"></i> </h4>
                                    <h5 class="heading mb-20">Email Address</h5>
                                    <ul class="conact-info__list">
                                        <li><a href="mailto:info@digicoders.in">info@digicoders.in</a></li>
                                        <li><a href="digicoderstech@gmail.com">digicoderstech@gmail.com</a></li>
                                    </ul><br /><br />
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> -->
        <!--====================  Conact us info End  ====================-->

        <!--====================  Teams Contact Section Start ====================-->
        <div class="teams-contact-section">
            <div class="container">
                <div class="section-title">
                    <h2>Contact Our Teams Directly</h2>
                    <p>Connect with our specialized teams for personalized assistance. Each team is dedicated to
                        providing exceptional support in their respective domains.</p>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="teams-grid">
                            <!-- Sales Team Card -->
                            <div class="team-card">
                                <div class="team-header">Sales Team</div>
                                <div class="team-banner">
                                    <div class="banner-bg sales"></div>
                                    <div class="banner-content">
                                        <div class="team-title">DigiCoders</div>
                                        <div class="team-subtitle sales">Sales Team</div>
                                    </div>
                                    <div class="banner-image">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-column">
                                        <div class="phone-number">9628092950</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092950" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092950" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-column">
                                        <div class="phone-number">9628092951</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092951" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092951" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- HR Team Card -->
                            <div class="team-card">
                                <div class="team-header">HR Team</div>
                                <div class="team-banner">
                                    <div class="banner-bg hr"></div>
                                    <div class="banner-content">
                                        <div class="team-title">DigiCoders</div>
                                        <div class="team-subtitle hr">HR Team</div>

                                    </div>
                                    <div class="banner-image">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-column">
                                        <div class="phone-number">9628092950</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092950" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092950" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-column">
                                        <div class="phone-number">9628092951</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092951" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092951" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Support Team Card -->
                            <div class="team-card">
                                <div class="team-header">Support Team</div>
                                <div class="team-banner">
                                    <div class="banner-bg support"></div>
                                    <div class="banner-content">
                                        <div class="team-title">DigiCoders</div>
                                        <div class="team-subtitle support">Support Team</div>

                                    </div>
                                    <div class="banner-image">
                                        <i class="fas fa-headset"></i>
                                    </div>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-column">
                                        <div class="phone-number">9628092950</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092950" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092950" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-column">
                                        <div class="phone-number">9628092951</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092951" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092951" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Admin Team Card -->
                            <div class="team-card">
                                <div class="team-header">Admin Team</div>
                                <div class="team-banner">
                                    <div class="banner-bg admin"></div>
                                    <div class="banner-content">
                                        <div class="team-title">DigiCoders</div>
                                        <div class="team-subtitle admin">Admin Team</div>
                                    </div>
                                    <div class="banner-image">
                                        <i class="fas fa-user-cog"></i>
                                    </div>
                                </div>
                                <div class="team-contact">
                                    <div class="contact-column">
                                        <div class="phone-number">9628092950</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092950" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092950" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="contact-column">
                                        <div class="phone-number">9628092951</div>
                                        <div class="contact-buttons">
                                            <a href="https://wa.me/919628092951" class="btn-contact btn-whatsapp">
                                                <i class="fab fa-whatsapp"></i>
                                            </a>
                                            <a href="tel:9628092951" class="btn-contact btn-call">
                                                <i class="fas fa-phone"></i>
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

        <br><br>
        <!--====================  Teams Contact Section End ====================-->

        <!-- Google Maps Embed -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.901356265081!2d80.93581361436486!3d26.87487496818921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd90f852511b%3A0xea3004cdf494ecbb!2sDigiCoders%20Technologies%20Private%20Limited!5e0!3m2!1sen!2sin!4v1596004752774!5m2!1sen!2sin"
                        width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>