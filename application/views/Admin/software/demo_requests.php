<!DOCTYPE html>
<html lang="en" class="semi-dark">
<head>
    <title>Software Demo Requests</title>
    <?php 
    include(APPPATH . 'views/Admin/include/headerlinks.php');
     ?>
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
                            <li class="breadcrumb-item active" aria-current="page">Demo Requests</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="card">
                <div class="card-header py-3">
                    <h6 class="mb-0">All Demo Requests</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Software</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; foreach ($requests as $req): ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><span class="badge bg-primary"><?= $req->software_name ?></span></td>
                                        <td><?= $req->name ?></td>
                                        <td><a href="tel:<?= $req->mobile ?>"><?= $req->mobile ?></a></td>
                                        <td><?= $req->email ?></td>
                                        <td><?= htmlspecialchars($req->message) ?></td>
                                        <td><?= date('d M Y, h:i A', strtotime($req->created_at)) ?></td>
                                    </tr>
                                <?php endforeach; ?>
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
