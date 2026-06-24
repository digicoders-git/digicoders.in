<!DOCTYPE html>
<html lang="en" class="semi-dark">

<head>
    <title>Project Enquiries - <?= $this->data['app_name'] ?? 'Digicoders' ?></title>
    <?php include('include/headerlinks.php'); ?>
</head>

<body>


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

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3"> Project Enquiries</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="<?= base_url('Admin/Dashboard') ?>"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">

                    </div>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-header py-3">
                    <div class="row align-items-center m-0">
                        <h6>Manage Project Enquiries</h6>
                    </div>
                </div> 
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                foreach ($enquiries as $data) {
                                ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        <td><?= $data->project_name; ?></td>
                                        <td><?= $data->name; ?></td>
                                        <td><?= $data->email; ?></td>
                                        <td><?= $data->mobile; ?></td>
                                        <td><?= $data->message; ?></td>
                                        <td><?= date('d M, Y h:i A', strtotime($data->add_date)); ?></td>

                                        <td>
                                            <div class="col">
                                                <div class="btn-group">
                                                <button type="button" onclick="delData(<?= $data->id ?>,'project_enquiries','<?= base_url('Admin/Delete') ?>')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                </div>
                                            </div>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </main>
        <!--end page main-->

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
    </div>
    <!--end wrapper-->

    <?php include('include/jslinks.php') ?>

</body>
</html>
