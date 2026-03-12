<!DOCTYPE html>
<html lang="en">

<head>
    <title>Our Projects | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="We provide a wide range of app and web development services in Lucknow, India. Browse our all projects and see our development work.">
    <?php include('include/headerlinks.php') ?>
    <style>
/* ================= CARD BASE ================= */
.single-item {
    animation: fadeUp 0.9s ease both;
}

@keyframes fadeUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.single-item .image-box-wrap {
    background: #fff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.single-item .image-box-wrap:hover {
    transform: translateY(-10px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.15);
}

/* ================= IMAGE (70%) ================= */
.single-item .box-image {
    flex: 7;
    overflow: hidden;
}

.single-item .box-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.6s ease;
}

.single-item .image-box-wrap:hover .box-image img {
    transform: scale(1.12);
}

/* ================= CONTENT (30%) ================= */
.single-item .content {
    flex: 3;
    padding: 16px;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* ================= TITLE ================= */
.single-item .heading {
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 6px;
    position: relative;
    cursor: pointer;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

/* ================= TOOLTIP ================= */
.single-item .heading::after {
    content: attr(data-title);
    position: absolute;
    bottom: 130%;
    left: 50%;
    transform: translateX(-50%) scale(0.95);

    min-width: 220px;
    max-width: 280px;
    background: rgba(0, 0, 0, 0.85);
    color: #fff;
    padding: 9px 14px;
    border-radius: 8px;
    font-size: 14px;
    line-height: 1.4;
    text-align: center;

    opacity: 0;
    visibility: hidden;
    transition: all 0.35s ease;
    z-index: 99;
}

.single-item .heading::before {
    content: "";
    position: absolute;
    bottom: 118%;
    left: 50%;
    transform: translateX(-50%);
    border-width: 6px;
    border-style: solid;
    border-color: rgba(0, 0, 0, 0.85) transparent transparent transparent;

    opacity: 0;
    visibility: hidden;
    transition: all 0.35s ease;
}

/* Desktop hover */
.single-item .heading:hover::after,
.single-item .heading:hover::before,
.single-item .heading.tooltip-active::after,
.single-item .heading.tooltip-active::before {
    opacity: 1;
    visibility: visible;
    transform: translateX(-50%) scale(1);
}

/* ================= DATE ================= */
.single-item .content .text {
    font-size: 14px;
    color: #6c757d;
    margin-bottom: 6px;
}

/* ================= TYPE BADGE ================= */
.single-item .content h6 {
    display: inline-block;
    align-self: center;
    background: linear-gradient(135deg, #0d6efd, #6610f2);
    color: #fff;
    padding: 6px 16px;
    border-radius: 20px;
    font-size: 13px;
}

/* ================= MOBILE ================= */
@media (max-width: 576px) {
    .single-item .box-image img {
        height: 100%;
    }

    .single-item .heading::after {
        max-width: 240px;
        font-size: 13px;
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
                        <h2 class="breadcrumb-title">Our Projects</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="/Home/Index">Home</a></li>
                            <li class="breadcrumb-item active">Our Projects</li>
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
                    <div class="col-12">
                        <div class="feature-images__four">
                            <div class="row">
                                <!-- forecach  loop -->
                                <?php
                                foreach ($userdata as $projects)
                                 {
                                ?>
                                    <div class="single-item col-lg-4 col-md-6 mt-30 wow move-up">
                                        <!-- ht-box-icon Start -->
                                         <a href="<?php echo $projects->url; ?>" target="_blank" style="width:100%;"> 
                                            <div class="image-box-wrap" style="width:100%;">
                                                <div class="box-image" style="width:100%;">
                                                    <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/projects/').$projects->image; ?>" title="projects" alt="projects" style="height: 200px; width: 100% " />
                                                </div>
                                                <div class="content ht-box-images style-04 text-center">
                                                  <h5 class="heading" title="<?= $projects->title; ?>" data-title="<?= $projects->title; ?>"><?= $projects->title; ?></h5>

                                                    <div class="text"><?php  $date = strtotime($projects->add_date); echo $date = date('M Y', $date);  ?>&nbsp;<i class="fa fa-link"></i></div>
                                                    <div class="text">
                                                        <h6><?= $projects->type; ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <!-- ht-box-icon End -->
                                    </div>
                                <?php
                                }
                                ?>
                                <!-- foreach loop end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!--===========  feature-images-wrapper  End =============-->
    </div>

    <!-- @section scripts{
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>

        } -->

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".single-item .heading").forEach(function (el) {

        el.addEventListener("click", function (e) {
            e.stopPropagation();

            // remove other active tooltips
            document.querySelectorAll(".heading.tooltip-active")
                .forEach(h => h.classList.remove("tooltip-active"));

            // toggle current
            el.classList.toggle("tooltip-active");
        });
    });

    // click outside to close
    document.addEventListener("click", function () {
        document.querySelectorAll(".heading.tooltip-active")
            .forEach(h => h.classList.remove("tooltip-active"));
    });
});
</script>

</body>

</html>
