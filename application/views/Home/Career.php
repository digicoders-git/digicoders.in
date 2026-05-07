<!DOCTYPE html>
<html lang="en">

<head>
    <title>Career | Best IT Company in Lucknow - DigiCoders</title>
	<meta name="description" content="We are working with young engineer's, entrepreneur's and innovative teams. Please fill out the form and apply to become a part of our big family.">
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
                        <h2 class="breadcrumb-title">Career</h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active">Career</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="site-wrapper-reveal" id="form">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30" id="heading">
                            <h3 class="heading">Become a part of our <br>big family to inspire <br><span class="text-color-primary">and get inspired</span> by professional experts.</h3>
                            <div class="sub-heading">A Company Working With Young Engineer's, Entrepreneur's And Innovative Team.</div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-lg-6" >
                        <div class="contact-form-wrap">
                            <form id="career" action="<?= base_url() ?>/Home/SubmitForm/career" method="post" enctype="multipart/form-data">
							
							 <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                <div class="contact-form">
                                    <div class="contact-inner contact-message">
                                        <span>Apply For</span>

                                        <select name="ApplyFor" required="required" autocomplete="off">
                                            <option value="0" selected disabled>--Select--</option>
                                            <?php
                                            foreach ($jobdata as $each) {

                                            ?>
                                                <option value="<?= $each->title ?>" class="text-capitalize"> <?= $each->title ?> </option>
                                            <?php
                                            }
                                            ?>
                                            <option value="Any Other">Any Other</option>
                                        </select>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <span>Your Name</span>
                                            <input required="required" name="Name" type="text" autocomplete="off">
                                        </div>
                                        <div class="contact-inner">
                                            <span>Your Email</span>
                                            <input required="required" name="Email" type="email" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <span>Your Phone No.</span>
                                                                                        <input required="required" type="number" name="Mobile" autocomplete="off" placeholder="Phone Number *" oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);">
                                        </div>
                                        <div class="contact-inner">
                                            <!-- @TempData["Notice"] -->
                                            <span>Your Resume/CV</span>
                                            <input type="file" name="UploadFile" id="add" required="required" />
                                        </div>
                                    </div>


                                    <div class="contact-inner contact-message">
                                        <span>Your Message</span>
                                        <textarea name="Message"></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <button class="ht-btn ht-btn-md" type="submit"><i class="fas fa-spinner fa-spin d-none"></i>&ensp;Apply</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-12 ">
                        <?php
                        $sr = 1;
                        foreach ($jobdata as $joblist) {
                        ?>
                            <div class="card my-2">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-sm-6 col-6">
                                            <h6 class="mt-2"><?= $joblist->title ?></h6>
                                        </div>
                                        <div class="col-sm-6 col-6">
                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                <button class="btn btn-sm btn-primary" data-toggle="collapse" href="#collapsedata_<?= $sr++; ?>" style="height: 39px; line-height: 31px;">Hide <i class="fas fa-sort-down d-none" id="down"></i> <i class="fas fa-sort-up mt-3" id="up"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body" id="collapsedata_<?= ($sr++) - 1; ?>">

                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Job Profile</th>
                                            <td><?= $joblist->job_profile ?></td>
                                        </tr>
                                        <tr>
                                            <th>Location</th>
                                            <td><?= $joblist->location ?></td>
                                        </tr>
                                        <tr>
                                            <th>Salary </th>
                                            <td><?= $joblist->salary ?></td>
                                        </tr>
                                        <tr>
                                            <th>Skills </th>
                                            <td><?= $joblist->skills ?></td>
                                        </tr>
                                        <tr>
                                            <th>Experience </th>
                                            <td><?= $joblist->experience ?></td>
                                        </tr>
                                        <tr>
                                            <th>Eligibility </th>
                                            <td><?= $joblist->eligibility ?></td>
                                        </tr>
                                        <tr>
                                            <th>Description </th>
                                            <td><?= $joblist->description ?></td>
                                        </tr>
                                        <tr>
                                            <th>Posted Date</th>
                                            <td><?= $joblist->date ?></td>
                                        </tr>
                                    </table>
                                    <div class="form-group p-2">
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="#career"class="btn btn-sm btn-primary"  style="height: 39px; line-height: 31px;"> <i class="fas fa-pencil-alt"></i> &ensp;Apply Now </a>
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
        </div>
        <!--====================  Conact us Section End  ====================-->
    </div>


    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>
</body>

</html>
