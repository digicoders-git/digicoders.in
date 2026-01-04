<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Client | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="See all our client projects in our client portfolio. Contact us today and we can give you a best estimate for your technology and budget.">
    <?php include('include/headerlinks.php') ?>
</head>

<body>
    <?php include('include/header.php') ?>

    <!-- @model IEnumerable<DigiCodersDevelopment.Models.ClientLogo>
@{
    ViewBag.Title = "Our Clients";
    Layout = "~/Views/_WesiteHomeLayout.cshtml";
} -->
<!-- @section Style{ -->
    <link href="~/Content/LightGallery/css/lightgallery.css" rel="stylesheet" />
    <style type="text/css">
        body {
            background-color: #152836
        }

        .demo-gallery > ul {
            margin-bottom: 0;
        }

            .demo-gallery > ul > li {
                float: left;
                margin-bottom: 15px;
                margin-right: 20px;
                width: 200px;
            }

                .demo-gallery > ul > li a {
                    border: 3px solid #FFF;
                    border-radius: 3px;
                    display: block;
                    overflow: hidden;
                    position: relative;
                    float: left;
                }

                    .demo-gallery > ul > li a > img {
                        -webkit-transition: -webkit-transform 0.15s ease 0s;
                        -moz-transition: -moz-transform 0.15s ease 0s;
                        -o-transition: -o-transform 0.15s ease 0s;
                        transition: transform 0.15s ease 0s;
                        -webkit-transform: scale3d(1, 1, 1);
                        transform: scale3d(1, 1, 1);
                        height: 100%;
                        width: 100%;
                    }

                    .demo-gallery > ul > li a:hover > img {
                        -webkit-transform: scale3d(1.1, 1.1, 1.1);
                        transform: scale3d(1.1, 1.1, 1.1);
                    }

                    .demo-gallery > ul > li a:hover .demo-gallery-poster > img {
                        opacity: 1;
                    }

                    .demo-gallery > ul > li a .demo-gallery-poster {
                        background-color: rgba(0, 0, 0, 0.1);
                        bottom: 0;
                        left: 0;
                        position: absolute;
                        right: 0;
                        top: 0;
                        -webkit-transition: background-color 0.15s ease 0s;
                        -o-transition: background-color 0.15s ease 0s;
                        transition: background-color 0.15s ease 0s;
                    }

                        .demo-gallery > ul > li a .demo-gallery-poster > img {
                            left: 50%;
                            margin-left: -10px;
                            margin-top: -10px;
                            opacity: 0;
                            position: absolute;
                            top: 50%;
                            -webkit-transition: opacity 0.3s ease 0s;
                            -o-transition: opacity 0.3s ease 0s;
                            transition: opacity 0.3s ease 0s;
                        }

                    .demo-gallery > ul > li a:hover .demo-gallery-poster {
                        background-color: rgba(0, 0, 0, 0.5);
                    }

        .demo-gallery .justified-gallery > a > img {
            -webkit-transition: -webkit-transform 0.15s ease 0s;
            -moz-transition: -moz-transform 0.15s ease 0s;
            -o-transition: -o-transform 0.15s ease 0s;
            transition: transform 0.15s ease 0s;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            height: 100%;
            width: 100%;
        }

        .demo-gallery .justified-gallery > a:hover > img {
            -webkit-transform: scale3d(1.1, 1.1, 1.1);
            transform: scale3d(1.1, 1.1, 1.1);
        }

        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
            opacity: 1;
        }

        .demo-gallery .justified-gallery > a .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.1);
            bottom: 0;
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            -webkit-transition: background-color 0.15s ease 0s;
            -o-transition: background-color 0.15s ease 0s;
            transition: background-color 0.15s ease 0s;
        }

            .demo-gallery .justified-gallery > a .demo-gallery-poster > img {
                left: 50%;
                margin-left: -10px;
                margin-top: -10px;
                opacity: 0;
                position: absolute;
                top: 50%;
                -webkit-transition: opacity 0.3s ease 0s;
                -o-transition: opacity 0.3s ease 0s;
                transition: opacity 0.3s ease 0s;
            }

        .demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .demo-gallery .video .demo-gallery-poster img {
            height: 48px;
            margin-left: -24px;
            margin-top: -24px;
            opacity: 0.8;
            width: 48px;
        }

        .demo-gallery.dark > ul > li a {
            border: 3px solid #04070a;
        }

        .home .demo-gallery {
            padding-bottom: 80px;
        }
    </style>
<!-- } -->
<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_box text-center">
                    <h2 class="breadcrumb-title">Our Clients</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/Home/Index">Home</a></li>
                        <li class="breadcrumb-item active">Our Clients</li>
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
    <div class="feature-images-wrapper bg-gray section-space--ptb_100">
        <div class="container">
            <div class="row">
                <?php
                foreach ($userdata as $client)
                {
                ?>
                    <div class="col-lg-2 pb-3 card">
                        <div class="p-4" style="min-height:80px !important;width:100%">
                            <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src=" <?= base_url('public/uploads/client/').$client->image; ?>" class="pt-4 " style="width:100%" />
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>

        </div>
    </div>
    <!--===========  feature-images-wrapper  End =============-->
</div>


<!-- @section scripts{
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

} -->


    <?php include('include/footer.php') ?>
    <?php include('include/jslinks.php') ?>
</body>

</html>

