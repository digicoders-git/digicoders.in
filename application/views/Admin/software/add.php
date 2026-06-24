<!DOCTYPE html>
<html lang="en" class="semi-dark">
<head>
    <title>Add Software Product - <?= $this->data['app_name'] ?></title>
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
                            <li class="breadcrumb-item active" aria-current="page">Add Software</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="mb-0">Add New Software Product</h6>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('AdminSoftware/save') ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                        
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Software Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" required placeholder="e.g. HRMS Software">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Slug (Optional)</label>
                                <input type="text" name="slug" class="form-control" placeholder="e.g. hrms-software">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label">Short Description</label>
                                <textarea name="short_description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Selling Price <span class="text-danger">*</span></label>
                                <input type="number" step="0.01" name="selling_price" class="form-control" required placeholder="e.g. 25000">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Book Demo Link (Optional)</label>
                                <input type="text" name="book_demo_link" class="form-control" placeholder="External link or leave blank for default">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Upload Images (Select Multiple)</label>
                                <input type="file" name="additional_images[]" class="form-control" multiple accept="image/*" required>
                                <small class="text-muted">The first image will be used as the main image.</small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status</label>
                                <select name="status" class="form-control">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Meta Title (SEO)</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="e.g. Best HRMS Software in India">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Meta Description (SEO)</label>
                                <textarea name="meta_description" class="form-control" rows="1" placeholder="e.g. Improve your HR processes with our HRMS..."></textarea>
                            </div>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Features List</h5>
                            <button type="button" class="btn btn-sm btn-info" id="add-feature"><i class="fa fa-plus"></i> Add Feature</button>
                        </div>
                        <div id="features-container">
                            <div class="row mb-2 feature-row">
                                <div class="col-md-10">
                                    <input type="text" name="features[]" class="form-control" placeholder="Enter feature (e.g. Geo Fencing Attendance)">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" class="btn btn-danger remove-feature"><i class="fa fa-trash"></i></button>
                                </div>
                            </div>
                        </div>

                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">Demo Panels</h5>
                            <button type="button" class="btn btn-sm btn-info" id="add-panel"><i class="fa fa-plus"></i> Add Panel</button>
                        </div>
                        <div id="panels-container">
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
                            </div>
                        </div>

                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary px-5">Save Software</button>
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
