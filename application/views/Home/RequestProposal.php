<!DOCTYPE html>
<html lang="en">

<head>
    <title>Request For Proposal: Website Design & Development - DigiCoders</title>
	<meta name="description" content="We are DigiCoders, an internet marketing, website design, and app development company in Lucknow. Fill out the form to request a proposal and requirements for your project.">
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
                        <h2 class="breadcrumb-title">Request A Proposal</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Request A Proposal</li>
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
                        <div class="conact-us-wrap-one mb-30 heading">
                            <div class="card">
                                <img src="<?= base_url('public') ?>/assets/images/other/request-proposal2.jpg" class="proposal-img" title="request-proposal" alt="request-proposal" />
                            </div>
                            <!-- @*<h3 class="heading">Obtaining further <br>information by droping a <br><span class="text-color-primary">message to our experienced</span> IT professionals.</h3>
                            <div class="sub-heading">We’re available for 16 hours a day!</div>
                            <div class="sub-heading">Contact will require a detailed analysis and assessment of your plan. Our experienced team can give you a best esitimation for technology and budget for your requirement.</div>*@ -->
                        </div>
                    </div>

                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap">
                            <form   action="<?= base_url()?>Home/SubmitForm/proposalReq" method="post" id="proposal-form">
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
                                            <input name="Name" type="text" placeholder="Name *" required>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="Email" type="email" placeholder="Email *" required>
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                                                                        <input name="Mobile" type="number" placeholder="Phone Number *" required oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);">
                                        </div>
                                        <div class="contact-inner">
                                            <input name="Company" type="text" placeholder="Company Name *" required >
                                        </div>
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <input name="Job" type="text" placeholder="Job Title*" required="required" maxlength="50">
                                    </div>
                                    <div class="contact-inner contact-message">
                                        <textarea name="Message" placeholder="Your Message" required maxlength="250"></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit"><i class="fas fa-spinner fa-spin d-none"></i>&ensp;Send Your Message</button>
                                        <!-- @*<p class="form-messege"></p>*@ -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  Conact us Section End  ====================-->
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>


</body>

</html>
