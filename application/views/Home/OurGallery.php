<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="View our gallery to see activities such as adventure tours, team bonding, and employee engagement. Please contact us to discuss your website development needs.">
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
                        <h2 class="breadcrumb-title">Photo Gallery</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Photo Gallery</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <br />
    <br />

    <div class="gallery-section">
        <div class="container">
            <!-- gallery-wrapper Start -->
            <div class="gallery-wrapper">
                <div class="row">
                    <!-- single gallery Start -->
                    <!-- foreach looop -->
                    <?php
                     foreach($userdata as $gallery){
                    ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 mt-3">
                            <div class="popup-images">
                                <a class="single-gallery gallery-grid wow move-up" href="<?= base_url('public/uploads/gallery/').$gallery->image; ?>">

                                    <div class="single-gallery__item">
                                        <img class="lazy gallery-img lazy " style="object-fit:cover !important ; object-position:center;" src="<?= base_url('public') ?>/assets/images/loader1.jpg" data-src="<?= base_url('public/uploads/gallery/').$gallery->image; ?>" alt="digicoders-gallery" />
                                        <div class="ht-overlay"></div>
                                        <div class="overlay-icon">
                                            <i class="far fa-search"></i>
                                        </div>
                                    </div>


                                </a>
                            </div>
                        </div>
                        <?php
                     }
                        ?>
                    <!-- Foreach loop end -->
                    <!-- single gallery End -->
                </div>
            </div>
            <!-- gallery-wrapper End -->
        </div>
    </div>
    <br />




<?php include('include/footer.php') ?>
<?php include('include/jslinks.php') ?>
</body>
</html>