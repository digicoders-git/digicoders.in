<div class="modal fade" id="edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal-head"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="modal-body">
        <br>
        <div class='text-center'><i class='fas fa-circle-notch fa-spin fa-2x'></i></div><br>
      </div>
    </div>
  </div>
</div>
<!-- Bootstrap bundle JS -->
<script src="<?= base_url() ?>public/app-assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="<?= base_url() ?>public/app-assets/js/jquery.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url() ?>public/app-assets/js/pace.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/chartjs/js/Chart.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/chartjs/js/Chart.extension.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="<?= base_url() ?>public/app-assets/js/app.js"></script>
<script src="<?= base_url() ?>public/app-assets/js/index.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url() ?>public/app-assets/js/table-datatable.js"></script>
<script src="<?= base_url() ?>public/app-assets/js/form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
  integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js"
  integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
  integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
  integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
  new PerfectScrollbar(".best-product");
</script>

<script>

  function EditData(table, id, head) {
    // alert(id);
    var data = "<br><div class='text-center'><i class='fas fa-circle-notch fa-spin fa-2x'></i></div><br>";
    $("#modal-head").html(head);
    $("#modal-body").html(data);
    $("#edit-modal").modal("show");

    $.ajax({
      url: "<?= base_url('Admin/EditData/') ?>" + table + '/' + id,
      success: function (res) {
        $("#modal-body").html(res);
      }
    })
  }
</script>
<?php
if (!empty($this->session->flashdata('status'))) {
  if ($this->session->flashdata('msg') == 'Client Update Successfull') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'Client Update Successfull',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'Expert Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'Expert Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'Project Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'Project Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'Job Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'Job Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'News Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'News Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'Picture Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'Picture Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }

  if ($this->session->flashdata('msg') == 'SEO Page Successfully Added') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'SEO Page Successfully Added',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'SEO Page Successfully Updated') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'SEO Page Successfully Updated',
        position: 'topRight'
      });
    </script>
    <?php
  }
  if ($this->session->flashdata('msg') == 'SEO Page Deleted Successfully') {
    ?>
    <script>
      iziToast.success({
        title: 'success',
        message: 'SEO Page Deleted Successfully',
        position: 'topRight'
      });
    </script>
    <?php
  }
}
if ($this->session->flashdata('status') == 'error') {
  ?>
  <script>
    iziToast.error({
      title: 'Error',
      message: '<?= $this->session->flashdata('msg') ?>',
      position: 'topRight'
    });
  </script>
  <?php
}
?>