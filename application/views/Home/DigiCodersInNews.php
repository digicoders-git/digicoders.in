<!DOCTYPE html>
<html lang="en">

<head>
    <title>News Website Development Company in Lucknow - DigiCoders</title>
	<meta name="description" content="Are you interested in web development news? Discover information about website development and IT companies in Lucknow, India.">
 
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
                        <h2 class="breadcrumb-title">DigiCoders in News</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">DigiCoders in News</li>
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
				 
                    <div class="col-lg-12">
                        <!-- gallery-warp Start -->
                        <div class="gallery-warp popup-images">
                            <!-- single gallery Start -->
							 <?php foreach ($newsdata as $news) { ?>
                            <a class="single-gallery gallery-grid wow move-up" href="<?= base_url('public/uploads/news/').$news->image ?>">
                                <!-- foreach loop start -->
                              
                                    <div class="single-gallery__item">
                                        <img src="<?= base_url('public') ?>/assets/images/loader1.jpg" data-src="<?= base_url('public/uploads/news/').$news->image ?>" class="news-img lazy" title="digicoders-news" alt="digicoders-news" style="height:700px"/>
                                        <div class="ht-overlay"></div>
                                        <div class="overlay-icon">
                                            <i class="far fa-search"></i>
                                        </div>
                                    </div>
                              
                                <!-- foreach loop end -->
                            </a>
							 <?php } ?>
                            <!-- single gallery End -->
                        </div>
                        <!-- gallery-warp End -->
                    </div>
                      
                   
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