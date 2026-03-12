<!DOCTYPE html>
<html lang="en">

<head>
    <title>Blogs | Best IT Company in Lucknow - DigiCoders</title>
    <meta name="description"
        content="Read our blog articles and know how to choose the best digital marketing company in Lucknow. Contact us for android app development and more in Lucknow.">
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
                        <h1 class="breadcrumb-title text-color-dark">Blogs</h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Blogs</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->
    <div class="site-wrapper-reveal">
        <!--===========  Projects wrapper Start =============-->
        <div class="projects-wrapper projectinfotechno-bg section-space--ptb_100">
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($blogdata as $data) {
                        ?>
                        <div class="col-sm-4">
                            <div class="projects-wrap style-01 wow move-up">
                                <div class="projects-image-box">
                                    <div class="projects-image">
                                        <img data-src="<?= base_url('public/uploads/Blog/') . $data->image; ?>"
                                            src="<?= base_url('public') ?>/assets/images/loader2.jpg"
                                            class="lazy img-fluid blog-img" alt="digicoders-blog-img" />
                                    </div>
                                    <div class="content">
                                        <div class="post-meta">
                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?= $data->date; ?>
                                            </div>
                                        </div>
                                        <h6 class="heading"><?= $data->title; ?></h6>
                                        <div class="post-categories"><?= $data->short_discription; ?></div>
                                        <div class="text">
                                            <?= $data->full_discription; ?>
                                        </div>
                                        <div class="box-projects-arrow">
                                        <a href="<?= site_url('Home/BlogsDetails/' . $data->id); ?>">
    <span class="button-text">Read More...</span>
    <i class="fa fa-long-arrow-right ml-1"></i>
</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--===========  Projects wrapper End =============-->
    </div>





    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
