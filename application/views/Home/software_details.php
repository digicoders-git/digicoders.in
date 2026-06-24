<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= isset($software->meta_title) && $software->meta_title ? htmlspecialchars($software->meta_title) : htmlspecialchars($software->title) ?> | DigiCoders</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <meta name="description" content="<?= isset($software->meta_description) && $software->meta_description ? htmlspecialchars($software->meta_description) : htmlspecialchars($software->short_description) ?>">

    <?php include('include/headerlinks.php') ?>

    <style>
        .main-gallery-img {
            width: 100%;
            height: 450px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .thumb-img {
            width: 80px;
            height: 60px;
            object-fit: cover;
            border-radius: 8px;
            cursor: pointer;
            border: 2px solid transparent;
            transition: all 0.3s;
        }
        .thumb-img:hover, .thumb-img.active {
            border-color: #086AD8;
            transform: scale(1.05);
        }
        .feature-item {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            font-size: 16px;
            color: #444;
        }
        .feature-item i {
            color: #28a745;
            font-size: 22px;
            margin-right: 15px;
        }
        .panel-link {
            display: inline-block;
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 10px 20px;
            border-radius: 6px;
            color: #086AD8;
            font-weight: 600;
            text-decoration: none;
            margin-right: 10px;
            margin-bottom: 10px;
            transition: all 0.3s;
        }
        .panel-link:hover {
            background: #086AD8;
            color: #fff;
            box-shadow: 0 5px 15px rgba(8,106,216,0.3);
            border-color: #086AD8;
        }
        .price-tag {
            font-size: 32px;
            font-weight: 800;
            color: #086AD8;
            background: rgba(8,106,216,0.05);
            display: inline-block;
            padding: 10px 20px;
            border-radius: 8px;
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
                        <h2 class="breadcrumb-title"><?= htmlspecialchars($software->title) ?></h2>
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list">
                            <li class="breadcrumb-item"><a href="<?= base_url('Home/Index') ?>">Home</a></li>
                            <li class="breadcrumb-item active"><?= htmlspecialchars($software->title) ?></li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->

    <div class="container" style="padding: 70px 0;">
        <div class="row">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <?php 
                $add_imgs = [];
                if(!empty($software->additional_images)) {
                    $add_imgs = json_decode($software->additional_images, true);
                }
                if(empty($add_imgs) && !empty($software->image)) {
                    $add_imgs[] = $software->image;
                }
                $main_display_img = !empty($add_imgs) ? $add_imgs[0] : 'placeholder.jpg';
                ?>
                <a id="main-product-lightbox" href="<?= base_url('public/uploads/software/'.$main_display_img) ?>" data-fancybox="gallery" data-caption="<?= htmlspecialchars($software->title) ?>">
                    <img id="main-product-image" src="<?= base_url('public/uploads/software/'.$main_display_img) ?>" class="main-gallery-img mb-4" alt="<?= htmlspecialchars($software->title) ?>" style="cursor: zoom-in;">
                </a>
                
                <?php if(!empty($add_imgs) && count($add_imgs) > 1): ?>
                <div class="d-flex" style="gap: 15px; overflow-x: auto; padding-bottom: 10px;">
                    <?php foreach($add_imgs as $idx => $img): ?>
                        <img src="<?= base_url('public/uploads/software/'.$img) ?>" class="thumb-img <?= $idx === 0 ? 'active' : '' ?>" onclick="changeImage(this, '<?= base_url('public/uploads/software/'.$img) ?>')">
                        <!-- Hidden links to add other images to the gallery so you can swipe through them in Fancybox -->
                        <?php if($idx > 0): ?>
                        <a href="<?= base_url('public/uploads/software/'.$img) ?>" data-fancybox="gallery" class="d-none"></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Premium CTA Box moved below the image -->
                <div class="mt-4 p-5 text-center position-relative" style="background: linear-gradient(135deg, #0052D4, #4364F7, #6FB1FC); border-radius:16px; overflow:hidden; box-shadow: 0 15px 35px rgba(0,82,212,0.2);">
                    <!-- Decorative background elements -->
                    <div style="position:absolute; top:-50px; left:-50px; width:150px; height:150px; background:rgba(255,255,255,0.1); border-radius:50%;"></div>
                    <div style="position:absolute; bottom:-50px; right:-50px; width:150px; height:150px; background:rgba(255,255,255,0.1); border-radius:50%;"></div>
                    
                    <h4 style="font-weight: 800; margin-bottom: 15px; color: #ffffff; position:relative; z-index:2; font-size: 24px;">Interested in this software?</h4>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 30px; font-size: 16px; position:relative; z-index:2; line-height: 1.6;">Get started immediately or schedule a call with our experts to see how it can transform your business.</p>
                    
                    <div class="d-flex flex-wrap justify-content-center" style="gap: 15px; position:relative; z-index:2;">
                        <?php if(!empty($software->book_demo_link)): ?>
                            <a href="<?= $software->book_demo_link ?>" target="_blank" class="btn" style="background-color: #ffffff; color: #0052D4; padding: 10px 24px; font-size: 15px; font-weight: 700; border-radius: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.15); border: 2px solid #ffffff; transition: all 0.3s;"><i class="fa fa-shopping-cart" style="margin-right: 8px;"></i> Buy Now</a>
                        <?php else: ?>
                            <button onclick="openBookDemoModal('<?= $software->id ?>', '<?= htmlspecialchars($software->title, ENT_QUOTES) ?>')" class="btn" style="background-color: #ffffff; color: #0052D4; padding: 10px 24px; font-size: 15px; font-weight: 700; border-radius: 6px; box-shadow: 0 4px 10px rgba(0,0,0,0.15); border: 2px solid #ffffff; transition: all 0.3s;"><i class="fa fa-calendar-check" style="margin-right: 8px;"></i> Book Demo</button>
                        <?php endif; ?>
                        <a href="https://wa.me/9198483820" target="_blank" class="btn" style="background-color: #25D366; color: #ffffff; padding: 10px 24px; font-size: 15px; font-weight: 700; border-radius: 6px; border: 2px solid #25D366; box-shadow: 0 4px 10px rgba(37,211,102,0.3); transition: all 0.3s;"><i class="fab fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Chat</a>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 pl-lg-5">
                <div class="mb-4">
                    <span style="display:inline-block; background:#28a745; color:#fff; padding:4px 10px; border-radius:4px; font-size:12px; font-weight:700; margin-bottom:15px; text-transform:uppercase; box-shadow: 0 4px 10px rgba(40, 167, 69, 0.2);">Premium Software</span>
                    <h2 style="font-weight: 800; color: #1a1a1a; margin-bottom: 15px; font-size: 36px; line-height: 1.3;"><?= htmlspecialchars($software->title) ?></h2>
                    <div class="price-tag mb-4">Starting at ₹<?= number_format($software->selling_price, 0) ?></div>
                </div>
                
                <h4 style="font-weight: 700; margin-bottom: 20px; font-size:20px; border-bottom: 2px solid #f0f0f0; padding-bottom:10px; display: inline-block; color: #086AD8;">Top Features</h4>
                <div class="mb-5" style="background: #fdfdfd; padding: 20px; border-radius: 12px; border: 1px solid #f0f0f0;">
                    <?php 
                    $features = json_decode($software->features, true);
                    if(is_array($features) && count($features) > 0):
                        foreach($features as $f): 
                    ?>
                        <div class="feature-item" style="padding-bottom: 8px; margin-bottom: 8px; border-bottom: 1px dashed #eee;">
                            <i class="fa fa-check-circle"></i> <?= htmlspecialchars($f) ?>
                        </div>
                    <?php 
                        endforeach; 
                    else:
                    ?>
                        <p class="text-muted">No features listed.</p>
                    <?php endif; ?>
                </div>

                <?php if(!empty($panels) && count($panels) > 0): ?>
                <h4 style="font-weight: 700; margin-bottom: 20px; font-size:20px; border-bottom: 2px solid #f0f0f0; padding-bottom:10px; display: inline-block; color: #086AD8;">Live Demo Panels</h4>
                <div class="mb-5">
                    <?php foreach($panels as $p): ?>
                        <a href="<?= $p->panel_value ?>" target="_blank" class="panel-link">
                            <i class="fa fa-desktop" style="margin-right: 8px;"></i> <?= htmlspecialchars($p->panel_name) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <?php include('include/jslinks.php') ?>
    <?php include('include/footer.php') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        function changeImage(element, src) {
            document.getElementById('main-product-image').src = src;
            // Update the lightbox link so fancybox opens the right image
            document.getElementById('main-product-lightbox').href = src;
            document.querySelectorAll('.thumb-img').forEach(el => el.classList.remove('active'));
            element.classList.add('active');
        }
    </script>

    <!-- Global Book Demo Modal -->
    <div class="modal fade" id="bookDemoModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 420px;">
            <div class="modal-content" style="border-radius:20px; border:none; box-shadow:0 20px 50px rgba(0,0,0,0.15); overflow: hidden;">
                <div class="modal-header" style="background: linear-gradient(135deg, #086AD8, #00C6FF); padding:30px 25px 20px; border:none; position: relative;">
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close" style="position:absolute; top:15px; right:20px; opacity: 0.8; text-shadow:none;">
                        <span aria-hidden="true" style="font-size: 28px;">&times;</span>
                    </button>
                    <div class="w-100 text-center mt-2">
                        <div style="width:60px; height:60px; background:rgba(255,255,255,0.2); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; margin-bottom:10px;">
                            <i class="fa fa-calendar-check text-white" style="font-size:24px;"></i>
                        </div>
                        <h4 class="modal-title text-white" style="font-weight:700; font-size:22px; margin-bottom:5px;">Book a Free Demo</h4>
                        <p class="text-white" style="opacity: 0.9; font-size: 13px; margin:0;">Experience our software in action!</p>
                    </div>
                </div>
                <div class="modal-body" style="padding: 30px 25px; background: #f8f9fa;">
                    <div id="bookDemoAlert" class="mb-3 text-center" style="font-weight:600; font-size:14px; display:none; padding:10px; border-radius:8px;"></div>
                    <form id="bookDemoForm">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                        <input type="hidden" name="software_name" id="book_software_name">
                        
                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-laptop-code"></i></span>
                                </div>
                                <select name="software_id" id="book_software_id" class="form-control" required style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px; color:#444;">
                                    <option value="">Select Software</option>
                                    <?php foreach($softwares as $sw): ?>
                                        <option value="<?= $sw->id ?>"><?= $sw->title ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-user"></i></span>
                                </div>
                                <input type="text" name="name" class="form-control" required placeholder="Your Full Name" style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-phone-alt"></i></span>
                                </div>
                                <input type="text" name="mobile" class="form-control" required placeholder="Mobile Number" maxlength="10" minlength="10" style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px;">
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" style="background:#fff; border-right:none; border-radius:10px 0 0 10px; color:#086AD8; padding-left:15px;"><i class="fa fa-envelope"></i></span>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email Address (Optional)" style="border-left:none; border-radius:0 10px 10px 0; height:50px; background:#fff; box-shadow:none; font-size:14px;">
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <textarea name="message" class="form-control" rows="2" placeholder="Any specific requirements?" style="border-radius:10px; padding:15px; background:#fff; box-shadow:none; resize:none; font-size:14px; border:1px solid #ced4da;"></textarea>
                        </div>

                        <button type="submit" class="btn w-100" id="btnBookDemo" style="background: linear-gradient(135deg, #086AD8, #00C6FF); color:#fff; font-weight:700; font-size:15px; padding:14px; border-radius:10px; border:none; box-shadow:0 8px 20px rgba(8,106,216,0.3); text-transform:uppercase; letter-spacing:1px; transition:all 0.3s ease;">
                            <span class="spinner-border spinner-border-sm d-none" id="bookDemoSpinner" role="status" aria-hidden="true" style="margin-right:8px;"></span>
                            Confirm Booking
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        function openBookDemoModal(softwareId, softwareName) {
            $('#book_software_id').val(softwareId);
            $('#book_software_name').val(softwareName);
            $('#bookDemoModal').modal('show');
        }
        
        // Update hidden software name on change
        document.getElementById('book_software_id').addEventListener('change', function() {
            var name = this.options[this.selectedIndex].text;
            document.getElementById('book_software_name').value = name;
        });

        // Handle form submission with Vanilla JS
        document.getElementById('bookDemoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            var form = this;
            var btn = document.getElementById('btnBookDemo');
            var spinner = document.getElementById('bookDemoSpinner');
            var alertBox = document.getElementById('bookDemoAlert');
            
            btn.disabled = true;
            spinner.classList.remove('d-none');
            alertBox.style.display = 'none';
            alertBox.className = 'mt-3 text-center';
            var formData = new FormData(form);
            fetch("<?= base_url('Home/submitDemoRequest') ?>", {
                method: "POST",
                body: formData,
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            })
            .then(response => response.json())
            .then(data => {
                btn.disabled = false;
                spinner.classList.add('d-none');
                
                if(data.status === 'success') {
                    alertBox.classList.add('text-success');
                    alertBox.textContent = data.message;
                    alertBox.style.display = 'block';
                    form.reset();
                    
                    setTimeout(function(){
                        $('#bookDemoModal').modal('hide');
                        alertBox.style.display = 'none';
                    }, 3000);
                } else {
                    alertBox.classList.add('text-danger');
                    alertBox.textContent = data.message;
                    alertBox.style.display = 'block';
                }
            })
            .catch(error => {
                btn.disabled = false;
                spinner.classList.add('d-none');
                alertBox.classList.add('text-danger');
                alertBox.textContent = "Something went wrong. Please try again.";
                alertBox.style.display = 'block';
            });
        });
    </script>
</body>
</html>
