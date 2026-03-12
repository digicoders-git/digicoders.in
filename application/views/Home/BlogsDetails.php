<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $blog->title; ?> | DigiCoders</title>
    <meta name="description" content="Read the detailed blog article on <?= $blog->title; ?> by DigiCoders.">
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
                        <h1 class="breadcrumb-title text-color-dark"><?= $blog->title; ?></h1>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="../Home/Index">Home</a></li>
                            <li class="breadcrumb-item"><a href="../Home/Blogs">Blogs</a></li>
                            <li class="breadcrumb-item active">Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal">
        <!--===========  Blog Details Section Start =============-->
        <div class="blog-details-wrapper section-space--ptb_100">
            <div class="container">
                <h1><?= $blog->title; ?></h1>
                <p><strong>Date:</strong> <?= $blog->date; ?></p>
                <img src="<?= base_url('public/uploads/Blog/') . $blog->image; ?>" alt="Blog Image" class="img-fluid">
                <div class="blog-content">
                    <p><?= $blog->full_discription; ?></p>
                </div>
                <a href="<?= base_url('Home/Blogs'); ?>" class="text-primary">← Back to Blogs</a>
            </div>
        </div>
        <!--===========  Blog Details Section End =============-->
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>

