<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="DigiCoders is a leading software, website and app development company in Lucknow. Call us at 9198483820 for more information.
">
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
                        <h1 class="breadcrumb-title ">Products</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item">Products</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--===========  feature-large-images-wrapper  Start =============-->
        <div class="feature-large-images-wrapper section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
						 <?php
                               
                                foreach ($product as $data) {
                                ?>
                            <div class="col-lg-4 col-md-6 wow move-up"> 
                                <a href="<?=  base_url() ?>Home/ContactUs" class="ht-large-box-images style-03">
                                    <div class="large-image-box">
                                        <div class="box-image">
                                            <div class="default-image">
                                                <img data-src="<?= base_url('public/uploads/product/').$data->img ?>" src="<?= base_url('public') ?>/assets/images/loader2.jpg" class="lazy img-fluid blog-img" title="<?= $data->title ?>" alt="<?= $data->title ?>" />
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h5 class="heading"><?= $data->title ?></h5>
                                            <!-- <div class="text">
                                               <?= $data->price ?>/- INR
                                            </div> -->
                                        </div>
                                    </div>
                                </a>
                            </div>
							<?php 
							}
							?>
                          
                        </div>
                    </div>
                </div>
            </div>
				<div class="text-center">
		 <h5>Need Any Other Type Website/Software/Mobile App</h5><br>
		 <a href="<?= base_url() ?>Home/ContactUs" class="ht-btn  ht-btn-md ">Contact Us</a>
		
		</div>
        </div>
		
	
		
        <!--===========  feature-large-images-wrapper  End =============-->
        <!--========== Call to Action Area Start ============-->
        <div class="cta-image-area_one section-space--ptb_80 cta-bg-image_one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-8 col-lg-7">
                        <div class="cta-content md-text-center">
                            <h3 class="heading text-white">Assess your business potentials and find opportunities <span class="text-color-secondary">for bigger success</span></h3>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="cta-button-group--one text-center">
                            <a href="tel:9198483820" class="btn btn--white btn-one"><span class="btn-icon mr-2"><i class="far fa-comment-alt-dots"></i></span> Let's talk</a>
                            <a href="<?=  base_url() ?>Home/ContactUs" class="btn btn--secondary  btn-two"><span class="btn-icon mr-2"><i class="far fa-info-circle"></i></span> Get info</a>
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
