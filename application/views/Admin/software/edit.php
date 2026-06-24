<!DOCTYPE html>
<html lang="en" class="semi-dark">
<head>
    <title>Edit Software Product - <?= $this->data['app_name'] ?></title>
    <?php include(APPPATH . 'views/Admin/include/headerlinks.php'); ?>
    <style>
        .dynamic-row { border: 1px solid #ddd; padding: 15px; margin-bottom: 10px; position: relative; border-radius: 5px; }
        .remove-row { position: absolute; top: 10px; right: 10px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <?php include(APPPATH . 'views/Admin/include/header.php'); ?>
        <?php include(APPPATH . 'views/Admin/include/sidebar.php'); ?>
        
        <main class="page-content">
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Software Products</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url('AdminSoftware/index') ?>">Manage Software</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Software</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="mb-0">Edit Software Product</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('AdminSoftware/update') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                        <input type="hidden" name="id" value="<?= $software->id ?>">
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Software Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" required value="<?= $software->title ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control" value="<?= $software->slug ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3"><?= $software->short_description ?></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Selling Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="selling_price" class="form-control" required value="<?= $software->selling_price ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Book Demo Link (Optional)</label>
                                <input type="text" name="book_demo_link" class="form-control" value="<?= $software->book_demo_link ?>">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Upload Images (Select Multiple)</label>
                                <input type="file" name="additional_images[]" class="form-control" multiple accept="image/*">
                                <small class="text-muted">Uploading new images will replace existing ones. The first image acts as the main image.</small>
                                <?php 
                                if(!empty($software->additional_images)) {
                                    $add_imgs = json_decode($software->additional_images, true);
                                    if(is_array($add_imgs) && count($add_imgs) > 0) {
                                        echo '<div class="d-flex mt-2" style="gap:10px; flex-wrap:wrap;" id="image-gallery-container">';
                                        foreach($add_imgs as $img) {
                                            echo '<div class="position-relative" id="img-wrapper-'.md5($img).'">';
                                            echo '<img src="'.base_url('public/uploads/software/'.$img).'" style="height:50px; width:50px; object-fit:cover; border-radius:4px; border:1px solid #ccc;">';
                                            echo '<button type="button" onclick="removeImage(\''.$software->id.'\', \''.$img.'\')" class="btn btn-sm btn-danger position-absolute" style="top:-8px; right:-8px; padding:2px 5px; font-size:10px; border-radius:50%;"><i class="fa fa-times"></i></button>';
                                            echo '</div>';
                                        }
                                        echo '</div>';
                                    }
                                } elseif($software->image) {
                                    echo '<div class="d-flex mt-2"><img src="'.base_url('public/uploads/software/'.$software->image).'" style="height:40px; width:40px; object-fit:cover; border-radius:4px;"></div>';
                                }
                                ?>
                                <script>
                                function removeImage(softwareId, imageName) {
                                    if(confirm('Are you sure you want to remove this image?')) {
                                        $.ajax({
                                            url: '<?= base_url("AdminSoftware/remove_image") ?>',
                                            type: 'POST',
                                            data: {
                                                software_id: softwareId,
                                                image_name: imageName,
                                                "<?= $this->security->get_csrf_token_name(); ?>": "<?= $this->security->get_csrf_hash(); ?>"
                                            },
                                            dataType: 'json',
                                            success: function(res) {
                                                if(res.status == 'success') {
                                                    iziToast.success({title: 'Success', message: res.msg, position: 'topRight'});
                                                    // Remove the image wrapper from DOM
                                                    $('#img-wrapper-' + md5(imageName)).remove();
                                                } else {
                                                    iziToast.error({title: 'Error', message: res.msg, position: 'topRight'});
                                                }
                                            }
                                        });
                                    }
                                }
                                </script>
                                <!-- Basic md5 implementation for ID hashing -->
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-md5/2.19.0/js/md5.min.js"></script>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="Active" <?= $software->status == 'Active' ? 'selected' : '' ?>>Active</option>
                                    <option value="Inactive" <?= $software->status == 'Inactive' ? 'selected' : '' ?>>Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Meta Title (SEO)</label>
                                <input type="text" name="meta_title" class="form-control" value="<?= isset($software->meta_title) ? htmlspecialchars($software->meta_title) : '' ?>">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Meta Description (SEO)</label>
                                <textarea name="meta_description" class="form-control" rows="1"><?= isset($software->meta_description) ? htmlspecialchars($software->meta_description) : '' ?></textarea>
                            </div>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Features List</h5>
                            <button type="button" class="btn btn-sm btn-info" id="add-feature"><i class="fa fa-plus"></i> Add Feature</button>
                        </div>
                        <div id="features-container">
                            <?php 
                            $features = json_decode($software->features, true); 
                            if(empty($features)) $features = [];
                            foreach($features as $f): 
                            ?>
                            <div class="row mb-2 feature-row">
                                <div class="col-md-10">
                                    <input type="text" name="features[]" class="form-control" value="<?= htmlspecialchars($f) ?>">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Demo Panels</h5>
                            <button type="button" class="btn btn-sm btn-info" id="add-panel"><i class="fa fa-plus"></i> Add Panel</button>
                        </div>
                        <div id="panels-container">
                            <?php foreach($panels as $p): ?>
                            <div class="dynamic-row panel-row">
                                <button type="button" class="btn btn-sm btn-danger remove-row"><i class="fa fa-trash"></i></button>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Panel Name</label>
                                        <input type="text" name="panel_names[]" class="form-control" value="<?= $p->panel_name ?>">
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <label class="form-label">Demo URL</label>
                                        <input type="text" name="demo_urls[]" class="form-control" value="<?= $p->panel_value ?>">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary px-5">Update Software</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        
        <div class="overlay nav-toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    </div>
    
    <?php include(APPPATH . 'views/Admin/include/jslinks.php'); ?>
    
    <script>
        $(document).ready(function() {
            // Features
            $('#add-feature').click(function() {
                var html = `
                <div class="row mb-2 feature-row">
                    <div class="col-md-10">
                        <input type="text" name="features[]" class="form-control" placeholder="Enter feature">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
                    </div>
                </div>`;
                $('#features-container').append(html);
            });
            $(document).on('click', '.remove-feature', function() {
                $(this).closest('.feature-row').remove();
            });

            // Panels
            $('#add-panel').click(function() {
                var html = `
                <div class="dynamic-row panel-row">
                    <button type="button" class="btn btn-sm btn-danger remove-row"><i class="fa fa-trash"></i></button>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Panel Name</label>
                            <input type="text" name="panel_names[]" class="form-control" placeholder="e.g. Admin Panel">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label">Demo URL</label>
                            <input type="text" name="demo_urls[]" class="form-control" placeholder="e.g. https://admin.demo.com">
                        </div>
                    </div>
                </div>`;
                $('#panels-container').append(html);
            });
            $(document).on('click', '.remove-row', function() {
                $(this).closest('.dynamic-row').remove();
            });
        });
    </script>
</body>
</html>
