<!DOCTYPE html>
<html lang="en" class="semi-dark">

<head>
    <title>Career List - <?= $this->data['app_name'] ?></title>
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
                <div class="breadcrumb-title pe-3">All Career List</div>
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

            <!-- Hiring Status Control Card -->
            <?php $hiring_status = get_hiring_status(); ?>
            <div class="card mb-4 shadow-sm border border-2 border-<?= ($hiring_status == 'open') ? 'success' : 'danger' ?>">
                <div class="card-body p-4">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle p-3 bg-light-<?= ($hiring_status == 'open') ? 'success' : 'danger' ?> text-<?= ($hiring_status == 'open') ? 'success' : 'danger' ?>" style="font-size: 28px; line-height: 1;">
                                <i class="bi bi-<?= ($hiring_status == 'open') ? 'briefcase-fill' : 'slash-circle-fill' ?>"></i>
                            </div>
                            <div>
                                <h5 class="mb-1 fw-bold">Website Hiring Status: 
                                    <span class="badge bg-<?= ($hiring_status == 'open') ? 'success' : 'danger' ?> px-3 py-2 fs-6">
                                        <?= ($hiring_status == 'open') ? '🟢 HIRING IS OPEN (Form Enabled)' : '🔴 HIRING IS CLOSED (Form Disabled)' ?>
                                    </span>
                                </h5>
                                <p class="text-muted mb-0 small">
                                    <?= ($hiring_status == 'open') ? 'Applicants CAN currently submit job applications on the website career page.' : 'The job application form is DISABLED and "We Are Not Hiring" notice is displayed on the website.' ?>
                                </p>
                            </div>
                        </div>
                        <div>
                            <button type="button" onclick="toggleHiringStatus()" class="btn btn-<?= ($hiring_status == 'open') ? 'danger' : 'success' ?> btn-lg px-4 fw-bold shadow-sm">
                                <i class="bi bi-power"></i> <?= ($hiring_status == 'open') ? 'CLOSE Hiring (Turn OFF)' : 'OPEN Hiring (Turn ON)' ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header py-3">
                    <div class="row align-items-center m-0">
                        <!-- <div class="d-grid gap-2 d-md-flex justify-content-md-end"> -->
                            <!-- <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#galleryModal"><i class="fa fa-plus"></i>&ensp;Add New</button> -->
                             <h6>Manage Career List</h6>
                        <!-- </div> -->

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Action</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Apply For</th>
                                    <th>Resume</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                foreach ($userdata as $data) {
                                ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        
                                        <td>
                                            <div class="col">
                                                <div class="btn-group">
                                                <button type="button" onclick="deleteItem(<?= $data->id ?>,'career','<?= $data->resume ?>','<?= base_url('Admin/deleteWithFilename') ?>')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                <!-- <button type="button" onclick="EditData('career',<?= $data->id?>,'Edit Contact')" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button> -->
                                                </div>
                                            </div>
                                        </td>
                                        
                                        <td><?= $data->name; ?></td>
                                        <td><?= $data->email; ?></td>
                                        <td><?= $data->mobile; ?></td>
                                        <td><?= $data->appaly_for; ?></td>
                                        <td> <a href="<?= base_url('public/uploads/career/').$data->resume; ?>" target="_blank"><?= $data->resume; ?></a></td>
                                        <td><?= $data->message; ?></td>
                                        <td><?= $data->status; ?></td>
                                        <td><?= $data->date; ?></td>
                                        <td><?= $data->time; ?></td>
                                        
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <!-- <tfoot>
                                <tr>
                                <th>#</th>
                                    <th>Title</th>
                                    <th>Profile</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                    <th>Eligibility</th>
                                    <th>Skills</th>
                                    <th>Experience</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot> -->
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



<div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Picture</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>Admin/ManageGallery/Add" enctype="multipart/form-data" method="POST" id="gallery-form">
                    <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />     
               
                    <div class="form-group mb-3">
                        <input type="file" id="input-file-now" name="image" class="dropify" required />
                    </div>



            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>

</html>
<script>
    $('.dropify').dropify();

    function toggleHiringStatus() {
        if (confirm("Are you sure you want to change the website Hiring Status?")) {
            $.ajax({
                url: "<?= base_url('Admin/toggleHiringStatus') ?>",
                type: "POST",
                dataType: "json",
                data: {
                    "<?= $this->security->get_csrf_token_name(); ?>": "<?= $this->security->get_csrf_hash(); ?>"
                },
                success: function(response) {
                    if (response.status == 'success') {
                        if (typeof Swal !== 'undefined') {
                            Swal.fire({
                                icon: 'success',
                                title: response.title,
                                text: response.msg,
                                timer: 1500,
                                showConfirmButton: false
                            }).then(function() {
                                location.reload();
                            });
                        } else if (typeof iziToast !== 'undefined') {
                            iziToast.success({
                                title: response.title,
                                message: response.msg,
                                position: 'topRight'
                            });
                            setTimeout(function(){ location.reload(); }, 600);
                        } else {
                            alert(response.msg);
                            location.reload();
                        }
                    } else {
                        alert(response.msg || 'Something went wrong!');
                    }
                },
                error: function(xhr, status, error) {
                    alert("Error: " + error + "\nPlease try again.");
                    location.reload();
                }
            });
        }
    }
</script>