<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Expert | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="DigiCoders specializes in technological and IT-related services such as website development, mobile app development, digital marketing, graphics design etc.">
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
                        <h1 class="breadcrumb-title">Team Member</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">team member</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_40 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title section-space--mb_60">
                            <h3 class="heading">Our <span class="text-color-primary">experienced </span> experts</h3>
                            <p class="text mt-30">DigiCoders specializes in technological and IT-related services such as website development, mobile app development, digital marketing, graphics designing, domain & hosting, crm & erp development etc. </p>
                            <div class="sider-title-button-box mt-30">
                                <a href="<?= base_url() ?>/Home/Career" class="ht-btn ht-btn-md">Join us now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 ht-team-member-style-one">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">

                                            <img src="<?= base_url('public') ?>/assets/images/loader1.jpg" data-src="<?= base_url('public') ?>/assets/images/team/himanshu-kashyap-co-founder.png" style="height:auto" class="lazy img-fluid team-img" title="Er. Himanshu Kashyap" alt="Er. Himanshu Kashyap DigiCoders" />
                                        </div>
                                        <div class="team-info ">
                                            <h5 class="name">Er. Himanshu Kashyap </h5>
                                            <div class="position">Co - Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 wow move-up">
                                <div class="grid-item">
                                    <div class="ht-team-member">
                                        <div class="team-image">
                                            <img src="<?= base_url('public') ?>/assets/images/loader1.jpg" data-src="<?= base_url('public') ?>/assets/images/team/gopal-singh-co-founder.png" style="height:auto" class="lazy img-fluid team-img" title="Er. Gopal Singh" alt="Er. Gopal Singh" />
                                        </div>
                                        <div class="team-info ">
                                            <h5 class="name">Er. Gopal Singh </h5>
                                            <div class="position">Co - Founder</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============ Team Member Wrapper End =============== -->
        <!-- ============ Team Member Wrapper Start =============== -->
        <div class="team-member-wrapper section-space--pt_100 section-space--pb_70 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title section-space--mb_60 text-center">
                            <h3 class="heading">We pride ourselves on having a team <br> of <span class="text-color-primary">highly-skilled</span> experts</h3>
                        </div>
                    </div>
                </div>
                <div class="row ht-team-member-style-three">
                    <!-- foreach loop start -->
                    <?php
                    foreach ($userdata as $experts) {
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 wow move-up">
                            <div class="grid-item  mb-30">
                                <div class="ht-team-member">
                                    <div class="team-image">
                                        <img src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/expert/').$experts->image; ?>" class="img-fluid employee-img lazy" title="<?= htmlspecialchars($experts->name, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($experts->name, ENT_QUOTES) ?>" />
                                    </div>
                                    <div class="team-info text-center">
                                        <h5 class="name"><?= $experts->name ?></h5>
                                        <div class="position"><?= $experts->role ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <!-- foreach loop close -->
                </div>
				<br>
					<!-- <hr>
					<h3>Our Interns</h3>
				
				 <div class="container">
					 <div class="row">
					  <?php
                    foreach ($interndata as $interns) {
                    ?>
					
					 <div class="col-lg-3 col-md-6 col-sm-6 wow move-up">
                            <div class="grid-item  mb-30">
                                <div class="ht-team-member">
                                    <div class="team-image">
                                       <img src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/expert/').$interns->image; ?>" class="img-fluid employee-img lazy" title="<?= htmlspecialchars($interns->name, ENT_QUOTES) ?>" alt="<?= htmlspecialchars($interns->name, ENT_QUOTES) ?>" />
                                    </div>
                                    <div class="team-info text-center">
                                        <h5 class="name"><?= $interns->name ?></h5>
                                        <div class="position"><?= $interns->role ?></div>
                                    </div>
                                </div>
                            </div>
                 </div>
				 <?php
					}
					?>
				 
				 
				     </div>
					 
				</div> -->
            </div>
        </div>
        <!-- ============ Team Member Wrapper End =============== -->
    </div>





    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
