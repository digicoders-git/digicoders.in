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
                                         <div style="width:100%;"> 
                                            <div class="image-box-wrap" style="width:100%;">
                                                <div class="box-image" style="width:100%;">
                                                    <img class="lazy" src="<?= base_url('public') ?>/assets/images/loader2.jpg" data-src="<?= base_url('public/uploads/projects/').$projects->image; ?>" title="projects" alt="projects" style="height: 200px; width: 100% " />
                                                </div>
                                                <div class="content ht-box-images style-04 text-center">
                                                  <h5 class="heading" title="<?= $projects->title; ?>" data-title="<?= $projects->title; ?>"><?= $projects->title; ?></h5>

                                                    <div class="text"><?php  $date = strtotime($projects->add_date); echo $date = date('M Y', $date);  ?>&nbsp;<i class="fa fa-link"></i></div>
                                                    <div class="d-flex justify-content-center align-items-center mt-2" style="gap: 15px;">
                                                        <span style="background: linear-gradient(135deg, #0d6efd, #6610f2); color: #fff; padding: 6px 20px; border-radius: 20px; font-size: 13px; font-weight: 600; cursor: default; display: inline-block; text-align: center; margin: 0;"><?= $projects->type; ?></span>
                                                        <a href="<?= $projects->url; ?>" target="_blank" style="background: linear-gradient(135deg, #28a745, #218838); color: #fff; padding: 6px 20px; border-radius: 20px; font-size: 13px; font-weight: 600; text-decoration: none; display: inline-block; text-align: center; margin: 0; box-shadow: none;"><i class="fa fa-external-link"></i> Visit</a>
                                                        <button onclick="openProjectEnquiryModal('<?= $projects->id ?>', '<?= htmlspecialchars($projects->title, ENT_QUOTES) ?>')" style="background: linear-gradient(135deg, #0d6efd, #6610f2); color: #fff; padding: 6px 20px; border-radius: 20px; font-size: 13px; font-weight: 600; border: none; box-shadow: none; transition: all 0.3s; display: inline-block; text-align: center; margin: 0;">Enquiry</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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

</script>

    <!-- Global Project Enquiry Modal -->
    <div class="modal fade" id="projectEnquiryModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px;">
            <div class="modal-content" style="border-radius:20px; border:none; box-shadow:0 20px 50px rgba(0,0,0,0.15); overflow: hidden;">
                <div class="modal-header" style="background: linear-gradient(135deg, #086AD8, #00C6FF); padding:30px 25px 20px; border:none; position: relative;">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="position:absolute; top:15px; right:20px; opacity: 0.8; text-shadow:none;">
                        <span aria-hidden="true" style="font-size: 28px;">&times;</span>
                    </button>
                    <div class="w-100 text-center mt-2">
                        <div style="width:60px; height:60px; background:rgba(255,255,255,0.2); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; margin-bottom:10px;">
                            <i class="fa fa-paper-plane text-white" style="font-size:24px;"></i>
                        </div>
                        <h4 class="modal-title text-white" style="font-weight:700; font-size:22px; margin-bottom:5px;">Project Enquiry</h4>
                        <p class="text-white" id="modal_project_name_display" style="opacity: 0.9; font-size: 14px; font-weight:600; margin:0;"></p>
                    </div>
                </div>
                <div class="modal-body" style="padding: 30px 25px; background: #f8f9fa;">
                    <div id="projectEnquiryAlert" class="mb-3 text-center" style="font-weight:600; font-size:14px; display:none; padding:10px; border-radius:8px;"></div>
                    <form id="projectEnquiryForm">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                        <input type="hidden" name="project_id" id="modal_project_id">
                        <input type="hidden" name="project_name" id="modal_project_name">

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px; color:#444;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email Address" required style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px; color:#444;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-phone-alt"></i></span>
                                </div>
                                <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" required pattern="[0-9]{10}" maxlength="10" style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px; color:#444;">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <textarea name="message" class="form-control" placeholder="Tell us about your requirements..." rows="3" required style="border-radius:10px; background:#fff; box-shadow:none; font-size:14px; color:#444; resize:none; padding:15px;"></textarea>
                        </div>

                        <button type="submit" id="btnProjectEnquirySubmit" class="btn btn-primary w-100" style="height:50px; border-radius:25px; font-weight:700; font-size:16px; background:linear-gradient(135deg, #086AD8, #00C6FF); border:none; box-shadow:0 8px 20px rgba(8,106,216,0.3); transition:all 0.3s;">Submit Enquiry <i class="fa fa-arrow-right ml-2"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openProjectEnquiryModal(id, title) {
            $('#modal_project_id').val(id);
            $('#modal_project_name').val(title);
            $('#modal_project_name_display').text(title);
            $('#projectEnquiryAlert').hide();
            $('#projectEnquiryForm')[0].reset();
            $('#projectEnquiryModal').modal('show');
        }

        $('#projectEnquiryForm').on('submit', function(e) {
            e.preventDefault();
            var btn = $('#btnProjectEnquirySubmit');
            var originalText = btn.html();
            btn.html('<i class="fa fa-spinner fa-spin"></i> Submitting...').prop('disabled', true);
            
            $.ajax({
                url: '<?= base_url('Home/submitProjectEnquiry') ?>',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(res) {
                    btn.html(originalText).prop('disabled', false);
                    var alertBox = $('#projectEnquiryAlert');
                    if(res.status == 'success') {
                        alertBox.removeClass('alert-danger').addClass('alert-success').text(res.msg).show();
                        $('#projectEnquiryForm')[0].reset();
                        setTimeout(function(){
                            $('#projectEnquiryModal').modal('hide');
                        }, 2000);
                    } else {
                        alertBox.removeClass('alert-success').addClass('alert-danger').text(res.msg).show();
                    }
                },
                error: function() {
                    btn.html(originalText).prop('disabled', false);
                    $('#projectEnquiryAlert').removeClass('alert-success').addClass('alert-danger').text('Something went wrong. Please try again.').show();
                }
            });
        });
    </script>
</body>

</html>
