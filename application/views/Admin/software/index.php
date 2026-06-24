<!DOCTYPE html>
<html lang="en" class="semi-dark">
<head>
    <title>Manage Software Products - <?= $this->data['app_name'] ?></title>
    <?php include(APPPATH . 'views/Admin/include/headerlinks.php'); ?>
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
                            <li class="breadcrumb-item active" aria-current="page">Manage Software</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header py-3">
                    <div class="row align-items-center m-0">
                        <div class="col-sm-6">
                            <h6>Software Products List</h6>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <a href="<?= base_url('AdminSoftware/add') ?>" class="btn btn-primary me-md-2"><i class="fa fa-plus"></i> Add Software</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                foreach ($softwares as $data) {
                                ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        <td>
                                            <?php 
                                            $display_img = $data->image;
                                            if(!empty($data->additional_images)) {
                                                $add_imgs = json_decode($data->additional_images, true);
                                                if(is_array($add_imgs) && count($add_imgs) > 0) {
                                                    $display_img = $add_imgs[0];
                                                }
                                            }
                                            if($display_img): ?>
                                                <img src="<?= base_url('public/uploads/software/') . $display_img; ?>" style="height: 50px;" />
                                            <?php endif; ?>
                                        </td>
                                        <td><?= $data->title; ?></td>
                                        <td>₹<?= $data->selling_price; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url('AdminSoftware/edit/' . $data->id) ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                                                <a href="<?= base_url('AdminSoftware/delete/' . $data->id) ?>" onclick="return confirm('Are you sure you want to delete this?');" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        
        <div class="overlay nav-toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    </div>
    
    <?php include(APPPATH . 'views/Admin/include/jslinks.php'); ?>
</body>
</html>
