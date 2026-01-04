<!doctype html>
<html lang="en" class='semi-dark'>

<head>
    <title>Dashboard - Software Development | Website Development | Mobile Application Development | Digital Marketing | Summer Training | Internship | Apprenticeship</title>
    <?php include('include/headerlinks.php') ?>
</head>

<body class="pace-done">


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
                <div class="breadcrumb-title pe-3">All Job List</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
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
                        <div class="col-6">
                            <h6>Manage Job</h6>
                        </div>
                        <div class="col-6">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-primary me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#jobModal"><i class="fa fa-plus"></i>&ensp;Add Job</button>

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
                                    <th>Title</th>
                                    <th>Profile</th>
                                    <th>Location</th>
                                    <th>Salary</th>
                                    <th>Eligibility</th>
                                    <th>Skills</th>
                                    <th>Experience</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sr = 1;
                                foreach ($userdata as $data) {
                                ?>
                                    <tr>
                                        <td><?= $sr++ ?></td>
                                        <td><?= $data->title; ?></td>
                                        <td><?= $data->job_profile; ?></td>
                                        <td><?= $data->location; ?></td>
                                        <td><?= $data->salary; ?></td>
                                        <td><?= $data->eligibility; ?></td>
                                        <td><?= $data->skills; ?></td>
                                        <td><?= $data->experience; ?></td>
                                        <td><?= $data->description; ?></td>
                                        <td><?= $data->date; ?></td>
                                        <td><?= $data->time; ?></td>
                                        <td>
                                            <div class="col">
                                                <div class="btn-group">
                                                    <button type="button" onclick="delData(<?= $data->id ?>,'jobs','<?= base_url('Admin/Delete') ?>')" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    <button type="button" onclick="EditData('jobs',<?= $data->id ?>,'Edit Job')" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                                </div>
                                            </div>
                                        </td>

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

<div class="modal fade" id="jobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                


                 <form action="<?= base_url() ?>Admin/ManageJob/Add" method="POST" id="job-form">
				   <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                 <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Job Title</label>
                            <input type="text" name="title" class="form-control text-capitalize" required placeholder="Job Title">
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Job Profile</label>
                            <input type="text" name="profile" class="form-control" required placeholder="Job Profile">
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Location</label>
                            <input type="text" name="location" class="form-control" required placeholder="Location">
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Salary(₹)</label>
                            <input type="number" name="salary" class="form-control" required placeholder="Salary(₹)">
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Eligibility</label>
                            <input type="text" name="eligibility" class="form-control" required placeholder="Eligibility">
                        </div>
                        <div class="col-sm-6">
                            <label for="" class="my-2 fw-bold">Skills</label>
                            <input type="text" name="skill" class="form-control" required placeholder="Skill">
                        </div>
                        <div class="col-sm-12">
                            <label for="" class="my-2 fw-bold">Experience</label>
                            <input type="text" name="experience" class="form-control" required placeholder="Experience">
                        </div>
                        <div class="col-sm-12">
                            <label for="" class="my-2 fw-bold">Discriptioin</label>
                            <textarea name="discription" id="summernote" cols="30" rows="5" class="form-control" placeholder="Discriptioin..."></textarea>
                        </div>

                    </div>
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

<script>
      $('#summernote').summernote({
        placeholder: 'Discription..',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>


</html>