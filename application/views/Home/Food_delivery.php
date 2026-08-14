<!DOCTYPE html>
<html lang="en">

<head>
    <title>Food Delivery App: Mobile App Development Company in Lucknow</title>
	<meta name="description" content="Contact us to know how we make decisions, set goals and provide direction in a professional environment and what kind of culture currently operates in our company Lucknow, India, UP. ">
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
                        <h2 class="breadcrumb-title">Food Delivery App</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Food Delivery App</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div class="site-wrapper-reveal">
        <!--=========== Service Projects Wrapper Start =============-->
        <div class="service-projects-wrapper section-space--pt_100 mb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 order-2 order-lg-1">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler">Ludo betting with Ludo king</h4>
                            <div class="text text-justify">LUDO KHILADI APP is an online platform for professional ludo players to play ludo with opponent. This is the first and only app in India that provides opportunities to play Ludo as well as earn without playing the game. Through this app you can earn 200 to 5000 rupees daily even without playing ludo game and you can earn even more by playing ludo. Hello friends, now you can play LUDO with your friends and professional LUDO KHILADI. (please make sure that.. LUDO is a skill based game not a luck by chance game... therefore LUDO is a legal game or LUDO KHILADI is a legal App.</div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-5 order-1 order-lg-2" style="margin-top:40px">
                        <img src="<?= base_url('public/assets/images/projects/ludo_khiladi1.jpeg') ?>" style="height:250px; width:520px" class="img-fluid leader-img" loading="lazy" title="leader-img" alt="leader-img" />
                    </div>
                </div>

                <br/><br/><br/>
                <div class="row">
                    <div class="col-lg-7 col-md-7 order-2 order-lg-2">
                        <div class="service-project-slide-info">
                            <h4 class="heading font-weight--reguler mb-10">Ludo Khiladi Game</h4>
                            <div class="text text-justify">Ludo is a strategy board game for two to four players, in which the players race their four tokens from start to finish according to the rolls of a single die. Like other cross and circle games, Ludo is derived from the Indian game Pachisi. The game and its variations are popular in many countries and under various names.Hello friends, now you can play LUDO with your friends and professional LUDO KHILADI. (please make sure that.. LUDO is a skill based game not a luck by chance game... therefore LUDO is a legal game or LUDO KHILADI is a legal App.</div>
                        </div>
                    </div>
                        <div class="col-lg-5 col-md-5 order-1 order-lg-1" style="margin-top:40px">
						 <img src="<?= base_url('public/assets/images/projects/ludo_khiladi.jpeg') ?>" style="height:250px; width:520px" class="img-fluid leader-img" loading="lazy" title="leader-img" alt="leader-img" />
                    </div>
                </div>
            </div>
        </div>
        <!--=========== Service Projects Wrapper End =============-->
    </div>
	
	
<!------------------form--------------------->

 <div class="contact-us-section-wrappaer section-space--ptb_100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-lg-6">
                    <div class="conact-us-wrap-one">
                        <h3 class="heading">ludo development company <span class="text-color-primary"> In Digicoder</span> In Lucknow</h3>

                        <div class="sub-heading">We’re available for 16 hours a day!<br>Contact will require a detailed analysis and assessment of your plan. Our experienced team can give you a best esitimation for technology and budget for your requirement.</div>

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
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
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
                                    <input name="Mobile" type="text" placeholder="Mobile Number *" required="required" maxlength="10" min="10">
                                </div>
                                <div class="contact-select">
                                    <!--<div class="form-item contact-inner">
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
                                    </div>-->
                                </div>
                                <div class="contact-inner contact-message">
                                    <textarea name="Message" placeholder="Please describe what you need." maxlength="250"></textarea>
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

<!--------------card---------------->
	<div class="site-wrapper-reveal">
        <!--===========  feature-large-images-wrapper  Start ====== section-space--ptb_100 =======-->
        <div class="feature-large-images-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="<?=  base_url() ?>Home/ContactUs" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img data-src="<?= base_url('public') ?>/assets/images/projects/snake.jpeg" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy img-fluid blog-img" style="height:300px" title="School Management Software" alt="School Management Software" />
                                                <!-- @*<img class="img-fluid" src="../../assets\images\box-image\blog-01-480x298.jpg" alt="">*@ -->
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Snake Game Development</h5>
                                            <!--<div class="text">
                                                9999/- INR
                                            </div>-->
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="<?=  base_url() ?>Home/ContactUs" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img data-src="<?= base_url('public') ?>/assets/images/projects/ludo1.jpg" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy img-fluid blog-img" style="height:300px" title="Hospital Management Software" alt="Hospital Management Software" />

                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Ludo Game Development</h5>
                                            <!--<div class="text">
                                                12999/- INR
                                            </div>-->
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                            <div class="col-lg-4 col-md-6 wow move-up">
                                <!-- ht-box-icon Start -->
                                <a href="<?=  base_url() ?>Home/ContactUs" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img data-src="<?= base_url('public') ?>/assets/images/projects/ludo2.jpg" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy img-fluid blog-img" style="height:300px" title="Pathology Software" alt="Pathology Software" />

                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading">Ludo Betting Development</h5>
                                            <!--<div class="text">
                                                8999/- INR
                                            </div>-->
                                        </div>
                                    </div>
                                </a>
                                <!-- ht-box-icon End -->
                            </div>
                 
    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
