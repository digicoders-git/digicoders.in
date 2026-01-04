<!doctype html>
<html lang="en" class='semi-dark'>

<head>
    <title>Dashboard - Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship</title>
    <?php include('include/headerlinks.php') ?>
</head>

<body class="pace-done">


    <!--start wrapper-->
    <div class="wrapper">
        <!--start top header-->
        <?php include('include/header.php'); ?>
        <!--end top header-->

        <!--start sidebar -->
        <?php include('include/sidebar.php'); ?>
        <!--end sidebar -->

        <!--start content-->
        <main class="page-content">


            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-4">
                <div class="col">
                    <div class="card radius-10 border-0 border-start border-tiffany border-3">
                    <a href="<?= base_url('Admin/ManageJob') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Proposal Request</p>
                                    <h4 class="mb-0 text-tiffany"><?= $proposalreq; ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-tiffany text-white">
                                    <i class="bi bi-bag-check-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-0 border-start border-success border-3">
                    <a href="<?= base_url('Admin/ManageContact') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Contact List</p>
                                    <h4 class="mb-0 text-success"><?= $contact ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-success text-white">
                                <i class="bi bi-person-lines-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
				<div class="col">
                    <div class="card radius-10 border-0 border-start border-warning border-3">
                    <a href="<?= base_url('Admin/OurProduct') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Products</p>
                                    <h4 class="mb-0 text-warning"><?= $products ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-warning text-white">
                                <i class="bi bi-tv-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-0 border-start border-pink border-3">
                    <a href="<?= base_url('Admin/ManageCareer') ?>">   <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Career List</p>
                                    <h4 class="mb-0 text-pink"><?= $career ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-pink text-white">
                                    <i class="bi bi-bar-chart-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-0 border-start border-orange border-3">
                    <a href="<?= base_url('Admin/ManageEnquiry') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Quick Enquiry List</p>
                                    <h4 class="mb-0 text-orange"><?= $quickenq; ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-orange text-white">
                                <i class="bi bi-telephone-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/ManageProject') ?>"><div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Projects</p>
                                    <h4 class="mb-0 text-pink"><?= $projects; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-pink">
                                    <i class="bi bi-cup"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
				
				 <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/ManageBlog') ?>"><div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Blog</p>
                                    <h4 class="mb-0 text-pink"><?= $Blog; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-pink">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
				
                <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/ManageClient') ?>"><div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Clients</p>
                                    <h4 class="mb-0 text-info"><?= $clientlist ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-info">
                                    <i class="bi bi-wallet"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/ManageJob') ?>"><div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Jobs</p>
                                    <h4 class="mb-0 text-purple"><?= $joblist; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-purple">
                                <i class="bi bi-briefcase-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/ManageExpertList') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Our Experts</p>
                                    <h4 class="mb-0 text-primary"><?= $experts; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-primary">
                                <i class="bi bi-person-bounding-box"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
				 <div class="col">
                    <div class="card radius-10">
                    <a href="<?= base_url('Admin/Manageintern') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Interns</p>
                                    <h4 class="mb-0 text-primary"><?= $interns; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-primary">
                                <i class="bi bi-person-bounding-box"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10">
                       <a href="<?= base_url('Admin/ManageCallBackReq') ?>"> <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Call Back Request List</p>
                                    <h4 class="mb-0 text-primary"><?= $callbackreq; ?></h4>
                                </div>
                                <div class="ms-auto fs-2 text-primary">
                                <i class="bi bi-bell"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                <div class="col">
                    <div class="card radius-10 border-0 border-start border-tiffany border-3">
                    <a href="<?= base_url('Admin/ManageGallery') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total Gallery Pictures</p>
                                    <h4 class="mb-0 text-tiffany"><?= $gallery; ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-tiffany text-white">
                                   <i class="bi bi-images"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
				
                <div class="col">
                <div class="card radius-10 border-0 border-start border-success border-3">
                    <a href="<?= base_url('Admin/ManageNews') ?>">  <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="">
                                    <p class="mb-1">Total News</p>
                                    <h4 class="mb-0 text-tiffany"><?= $news; ?></h4>
                                </div>
                                <div class="ms-auto widget-icon bg-success text-white">
                                  <i class="bi bi-tv-fill"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
              
            </div>
            <!--end row-->



        </main>
        <!--end page main-->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked="">
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme" value="option3">
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme" value="option3">
                        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                    </div>
                    <hr>
                    <h6 class="mb-0">Header Colors</h6>
                    <hr>
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->

    </div>
    <!--end wrapper-->

    <?php include('include/jslinks.php') ?>


</body>

</html>