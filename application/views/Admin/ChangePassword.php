<!DOCTYPE html>
<html lang="en" class="semi-dark">

<head>
  <title>Change Password - <?= $this->data['app_name'] ?></title>
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
        <div class="breadcrumb-title pe-3">Change Password</div>
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


      <div class="row">
        <div class="col-xl-6 mx-auto">

          <div class="card">
            <div class="card-body">
              <div class="border p-3 rounded">
                <h6 class="mb-0 text-uppercase">Change Password</h6>
                <hr />
                <div style="display:none" id="errorContainer" class="bg-light text-danger mb-3 p-2" style="border-radius: 5px;">

                  </div>
                <form class="row g-3" action="<?= base_url('Admin/ManagePassword/ChangePassword');?>" method="POST" id="changePass">
				  <?php
$csrf = array(
        'name' => $this->security->get_csrf_token_name(),
        'hash' => $this->security->get_csrf_hash()
);
?>
<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                  <div class="col-12">
                    <label class="form-label">Old Password</label>
                    <input type="text" name="oldPassword" class="form-control" required placeholder="Enter Your Old Password">
                  </div>
                  <div class="col-12">
                    <label class="form-label">New Password</label>
                    <input type="text" name="newPassword" class="form-control" required placeholder="Enter Your New Password">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Confirm Password</label>
                    <input type="text" name="confirmPassword" class="form-control" required placeholder="Confirm Password">
                  </div>
                  <div class="col-12 my-5">
                    <div class="d-grid">
                      <button type="submit" id="submitBtn" class="btn btn-primary"><i class="fa fa-spinner fa-spin d-none" id="submitSpin"></i><i class="fa fa-unlock-alt"></i>&ensp;Change Password</button>
                    </div>
                  </div>
                </form>
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
