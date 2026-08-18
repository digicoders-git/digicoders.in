<div class="modal fade" id="edit-modal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
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

	function uploadSummernoteImage(file, editor) {
		var data = new FormData();
		data.append("image", file);
		var csrfName = "<?= $this->security->get_csrf_token_name(); ?>";
		var csrfHash = "<?= $this->security->get_csrf_hash(); ?>";
		var csrfInput = $('input[name="' + csrfName + '"]');
		if (csrfInput.length > 0 && csrfInput.val()) {
			csrfHash = csrfInput.val();
		}
		data.append(csrfName, csrfHash);

		$.ajax({
			url: "<?= base_url('Admin/UploadSummernoteImage') ?>",
			cache: false,
			contentType: false,
			processData: false,
			data: data,
			type: "POST",
			success: function(url) {
				var trimmedUrl = (url || '').trim();
				if (trimmedUrl.indexOf('http') === 0 || trimmedUrl.indexOf('/') === 0) {
					$(editor).summernote('insertImage', trimmedUrl);
				} else {
					alert("Upload error: " + trimmedUrl);
				}
			},
			error: function(jqXHR, textStatus, errorThrown) {
				var errorMsg = jqXHR.responseText ? stripTags(jqXHR.responseText) : (errorThrown || textStatus);
				console.error("Summernote image upload error:", errorMsg);
				alert("Image upload failed: " + (errorMsg.length > 150 ? errorMsg.substring(0, 150) + "..." : errorMsg));
			}
		});
	}

	function stripTags(html) {
		var div = document.createElement("div");
		div.innerHTML = html;
		return div.textContent || div.innerText || "";
	}

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
        if (typeof $.fn.dropify === 'function') {
          $('#modal-body .dropify').dropify();
        }
        if (typeof $.fn.summernote === 'function') {
          $('#modal-body .summernote').summernote({
            placeholder: 'Write Here ...',
            tabsize: 2,
            height: 250,
            callbacks: {
              onImageUpload: function(files) {
                for (let i = 0; i < files.length; i++) {
                  uploadSummernoteImage(files[i], this);
                }
              }
            },
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
        }
      }
    })
  }
</script>
<!-- Password Verification Modal -->
<?php if($this->session->userdata('AdminEmail') && !$this->session->userdata('Password_Verified')): ?>
<div class="modal fade" id="password-verify-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Final Security Check</h5>
      </div>
      <div class="modal-body p-4">
        <p class="text-muted">Welcome back! Please enter your account password to unlock the dashboard.</p>
        <form id="password-verify-form">
          <div class="mb-3">
            <label class="form-label">Account Password</label>
            <div class="input-group">
              <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
              <input type="password" id="admin_password_input" class="form-control" placeholder="Enter Password" required>
            </div>
          </div>
          <div class="d-grid">
            <button type="submit" id="unlockBtn" class="btn btn-primary radius-30">Unlock Dashboard</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function() {
    $('#password-verify-modal').modal('show');

    $('#password-verify-form').submit(function(e) {
      e.preventDefault();
      var pass = $.trim($('#admin_password_input').val());
      var btn = $('#unlockBtn');

      btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Verifying...');

      $.ajax({
        url: "<?= base_url('Authentication/VerifyPassword') ?>",
        type: "POST",
        data: {
          password: pass,
          "<?= $this->security->get_csrf_token_name(); ?>": "<?= $this->security->get_csrf_hash(); ?>"
        },
        dataType: "json",
        timeout: 15000,
        success: function(res) {
          if(res.status == 'success') {
            iziToast.success({title: 'Success', message: res.msg, position: 'topRight'});
            $('#password-verify-modal').modal('hide');
            location.reload();
          } else {
            btn.prop('disabled', false).html('Unlock Dashboard');
            iziToast.error({title: 'Error', message: res.msg, position: 'topRight'});
          }
        },
        error: function(xhr, status, error) {
          btn.prop('disabled', false).html('Unlock Dashboard');
          var res = null;
          if (xhr.responseJSON) {
            res = xhr.responseJSON;
          } else if (xhr.responseText) {
            try {
              res = JSON.parse(xhr.responseText);
            } catch (e) {}
          }

          if (res && res.status === 'success') {
            iziToast.success({title: 'Success', message: res.msg, position: 'topRight'});
            $('#password-verify-modal').modal('hide');
            location.reload();
            return;
          }

          var errorMsg = (res && res.msg) ? res.msg : "Failed to verify password. Please try again.";
          if (status === 'timeout') {
            errorMsg = "Verification timed out. Please try again.";
          }
          iziToast.error({title: 'Error', message: errorMsg, position: 'topRight'});
        }
      });
    });
  });
</script>
<?php endif; ?>

<script>
  function logout(url) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You want to logout!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, Logout!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: url,
          type: "POST",
          data: {
            "<?= $this->security->get_csrf_token_name(); ?>": "<?= $this->security->get_csrf_hash(); ?>"
          },
          dataType: "json",
          success: function (res) {
            if (res.status == 'success') {
              window.location.href = res.redirectLink;
            }
          }
        });
      }
    })
  }

  function delData(id, table, url) {
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: url,
          type: "POST",
          data: {
            id: id,
            table: table,
            "<?= $this->security->get_csrf_token_name(); ?>": "<?= $this->security->get_csrf_hash(); ?>"
          },
          dataType: "json",
          success: function (res) {
            if (res.status == 'success') {
              iziToast.success({title: 'Success', message: res.msg || 'Successfully Deleted.', position: 'topRight'});
              setTimeout(function(){ location.reload(); }, 1000);
            } else {
              iziToast.error({title: 'Error', message: res.msg || 'Something went wrong.', position: 'topRight'});
            }
          },
          error: function (xhr, status, error) {
            var res = null;
            if (xhr.responseJSON) {
              res = xhr.responseJSON;
            } else if (xhr.responseText) {
              try {
                var jsonMatch = xhr.responseText.match(/\{.*?\}/s);
                if (jsonMatch) {
                  res = JSON.parse(jsonMatch[0]);
                }
              } catch (e) {}
            }

            if (res && res.status === 'success') {
              iziToast.success({title: 'Success', message: res.msg || 'Successfully Deleted.', position: 'topRight'});
              setTimeout(function(){ location.reload(); }, 1000);
            } else if (xhr.status === 200) {
              iziToast.success({title: 'Success', message: 'Successfully Deleted.', position: 'topRight'});
              setTimeout(function(){ location.reload(); }, 1000);
            } else {
              iziToast.error({title: 'Error', message: 'Delete failed. Please try again.', position: 'topRight'});
            }
          }
        });
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
if ($this->session->flashdata('status') == 'success') {
  ?>
  <script>
    iziToast.success({
      title: 'Success',
      message: '<?= $this->session->flashdata('msg') ?>',
      position: 'topRight'
    });
  </script>
  <?php
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