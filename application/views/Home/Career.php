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

    <?php $hiring_status = get_hiring_status(); ?>
    <div class="site-wrapper-reveal" id="form">
        <!--====================  Conact us Section Start ====================-->
        <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
            <div class="container">
                <!-- Hiring Announcement Alert Box -->
                <div class="row mb-4">
                    <div class="col-12">
                        <?php if ($hiring_status == 'open'): ?>
                            <div class="hiring-open-alert-box" style="background: linear-gradient(135deg, #ecfdf5 0%, #d1fae5 100%); border: 1.5px solid #a7f3d0; border-radius: 14px; padding: 18px 24px; box-shadow: 0 4px 16px rgba(16, 185, 129, 0.12);">
                                <div class="hiring-alert-content d-flex align-items-center gap-3 flex-wrap">
                                    <div class="hiring-alert-icon" style="background: #10b981; color: #ffffff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 22px; flex-shrink: 0;">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <div class="hiring-alert-text flex-grow-1">
                                        <h4 class="hiring-alert-title" style="color: #065f46; font-size: 19px; font-weight: 800; margin-bottom: 4px;">🚀 We Are Hiring!</h4>
                                        <p class="hiring-alert-desc mb-0" style="color: #047857; font-size: 14px; font-weight: 500;">We are currently looking for passionate engineers and creative minds to join our growing team. Fill out the application form below to apply!</p>
                                    </div>
                                </div>
                            </div>
                        <?php else: ?>
                            <div class="hiring-closed-alert-box">
                                <div class="hiring-alert-content">
                                    <div class="hiring-alert-icon">
                                        <i class="fas fa-bullhorn"></i>
                                    </div>
                                    <div class="hiring-alert-text">
                                        <h4 class="hiring-alert-title">Currently We Are Not Hiring!</h4>
                                        <p class="hiring-alert-desc mb-0">We are currently not accepting new job applications. For future job openings & career opportunities, please follow us on our official LinkedIn page.</p>
                                    </div>
                                    <a href="https://www.linkedin.com/company/digicoderstechnologies/" target="_blank" rel="noopener noreferrer" class="hiring-alert-linkedin-btn">
                                        <i class="fab fa-linkedin"></i> Follow on LinkedIn <i class="fas fa-arrow-right" style="font-size: 11px;"></i>
                                    </a>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-lg-6">
                        <div class="conact-us-wrap-one mb-30" id="heading">
                            <h3 class="heading">Become a part of our <br>big family to inspire <br><span class="text-color-primary">and get inspired</span> by professional experts.</h3>
                            <div class="sub-heading">A Company Working With Young Engineer's, Entrepreneur's And Innovative Team.</div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-lg-6">
                        <div class="contact-form-wrap <?= ($hiring_status != 'open') ? 'form-disabled-wrap' : '' ?>">
                            <form id="career" action="<?= base_url() ?>/Home/SubmitForm/career" method="post" enctype="multipart/form-data">
							
							 <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                                <div class="contact-form">
                                    <div class="contact-inner contact-message">
                                        <span>Apply For</span>

                                        <?php if ($hiring_status == 'open'): ?>
                                            <select name="ApplyFor" required="required" autocomplete="off">
                                                <option value="0" selected disabled>--Select Job Position--</option>
                                                <?php foreach ($jobdata as $each): ?>
                                                    <option value="<?= $each->title ?>" class="text-capitalize"> <?= $each->title ?> </option>
                                                <?php endforeach; ?>
                                                <option value="Any Other">Any Other</option>
                                            </select>
                                        <?php else: ?>
                                            <select name="ApplyFor" disabled autocomplete="off">
                                                <option value="0" selected disabled>-- Hiring Currently Closed --</option>
                                            </select>
                                        <?php endif; ?>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <span>Your Name</span>
                                            <input <?= ($hiring_status == 'open') ? 'required="required"' : 'disabled' ?> name="Name" type="text" autocomplete="off" placeholder="<?= ($hiring_status == 'open') ? 'Enter Your Full Name *' : 'Hiring Currently Closed' ?>">
                                        </div>
                                        <div class="contact-inner">
                                            <span>Your Email</span>
                                            <input <?= ($hiring_status == 'open') ? 'required="required"' : 'disabled' ?> name="Email" type="email" autocomplete="off" placeholder="<?= ($hiring_status == 'open') ? 'Enter Email Address *' : 'Hiring Currently Closed' ?>">
                                        </div>
                                    </div>
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <span>Your Phone No.</span>
                                            <input <?= ($hiring_status == 'open') ? 'required="required"' : 'disabled' ?> type="number" name="Mobile" autocomplete="off" placeholder="<?= ($hiring_status == 'open') ? 'Phone Number *' : 'Hiring Currently Closed' ?>" oninput="if(this.value.length > 10) this.value = this.value.slice(0, 10);">
                                        </div>
                                        <div class="contact-inner">
                                            <span>Your Resume/CV</span>
                                            <input type="file" name="UploadFile" id="add" <?= ($hiring_status == 'open') ? 'required="required"' : 'disabled' ?> />
                                        </div>
                                    </div>


                                    <div class="contact-inner contact-message">
                                        <span>Your Message</span>
                                        <textarea <?= ($hiring_status == 'open') ? '' : 'disabled' ?> name="Message" placeholder="<?= ($hiring_status == 'open') ? 'Write your message or cover note...' : 'Hiring Currently Closed' ?>"></textarea>
                                    </div>
                                    <div class="submit-btn mt-20">
                                        <?php if ($hiring_status == 'open'): ?>
                                            <button class="ht-btn ht-btn-md" type="submit"><i class="fas fa-spinner fa-spin d-none"></i>&ensp;Apply Now</button>
                                            <p class="form-messege"></p>
                                        <?php else: ?>
                                            <button class="ht-btn ht-btn-md disabled-hiring-btn" type="button" disabled><i class="fas fa-ban"></i>&ensp;Hiring Currently Closed</button>
                                            <p class="form-messege text-danger mt-2 font-weight-bold">Applications are temporarily closed. Follow us on LinkedIn for updates!</p>
                                        <?php endif; ?>
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
                                            <?php if ($hiring_status == 'open'): ?>
                                                <a href="#career" class="btn btn-sm btn-primary" style="height: 39px; line-height: 31px;"> <i class="fas fa-pencil-alt"></i> &ensp;Apply Now </a>
                                            <?php else: ?>
                                                <button type="button" class="btn btn-sm btn-secondary disabled" disabled style="height: 39px; line-height: 31px; cursor: not-allowed;"> <i class="fas fa-ban"></i> &ensp;Hiring Closed </button>
                                            <?php endif; ?>
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
