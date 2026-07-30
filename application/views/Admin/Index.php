<!doctype html>
<html lang="en">

<head>
  <title>Admin Login - <?= $this->data['app_name'] ?></title>
  <?php include('include/headerlinks.php') ?>
  <style>
    .otp-section {
      display: none;
    }
  </style>
</head>


<body>

  <!--start wrapper-->
  <div class="wrapper">

    <!--start content-->
    <main class="authentication-content">
      <div class="container-fluid">
        <div class="authentication-card">
          <div class="card shadow rounded-0 overflow-hidden">
            <div class="row g-0">
              <div class="col-lg-6 bg-login d-flex align-items-center justify-content-center">
                <img src="<?= base_url('public') ?>/app-assets/images/error/login-img.jpg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="card-body p-4 p-sm-5">
                  <h5 class="card-title">Admin Login</h5><br>

                  <div style="display:none" id="errorContainer" class="bg-light text-danger mb-3 p-2"
                    style="border-radius: 5px;"></div>

                  <form class="form-body" id="login-flow-form">
                    <?php
                    $csrf = array(
                      'name' => $this->security->get_csrf_token_name(),
                      'hash' => $this->security->get_csrf_hash()
                    );
                    ?>
                    <input type="hidden" name="<?= $csrf['name']; ?>" value="<?= $csrf['hash']; ?>" id="csrf_token" />

                    <div class="row g-3">
                      <!-- Email Section -->
                      <div class="col-12 email-section">
                        <label for="inputEmailAddress" class="form-label">Email Address</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                              class="bi bi-envelope-fill"></i></div>
                          <input type="email" name="email" required class="form-control radius-30 ps-5"
                            id="inputEmailAddress" placeholder="Email Address">
                        </div>
                      </div>

                      <div class="col-12 email-section">
                        <div class="d-grid">
                          <button type="button" id="sendOtpBtn" class="btn btn-primary radius-30">Send OTP</button>
                        </div>
                      </div>

                      <!-- OTP Section -->
                      <div class="col-12 otp-section">
                        <label for="inputOTP" class="form-label">Enter 6-Digit OTP</label>
                        <div class="ms-auto position-relative">
                          <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i
                              class="bi bi-shield-lock-fill"></i></div>
                          <input type="text" name="otp" class="form-control radius-30 ps-5" id="inputOTP"
                            placeholder="Enter OTP" maxlength="6">
                        </div>
                        <div class="mt-2 text-center" id="timerSection">
                          <small class="text-muted">OTP expires in: <b id="timer" class="text-primary">02:00</b></small>
                        </div>
                      </div>

                      <div class="col-12 otp-section">
                        <div class="d-grid gap-2">
                          <button type="button" id="verifyOtpBtn" class="btn btn-success radius-30">Verify OTP & Sign
                            In</button>
                          <button type="button" id="resendOtpBtn" class="btn btn-link btn-sm"
                            style="display:none;">Resend OTP</button>
                        </div>
                      </div>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

  </div>
  <?php include('include/jslinks.php') ?>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEss4wpsQ0o9WPBjDgHsSByUzFuo2oSNE"></script>
  <script>
    $(document).ready(function() {
      var timerInterval;
      var latitude = "";
      var longitude = "";
      var address = "";
      var locationError = null;

      // Capture Geolocation Silently
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          latitude = position.coords.latitude;
          longitude = position.coords.longitude;
          locationError = null;

          // Get Address using Google Reverse Geocoding
              var geocoder = new google.maps.Geocoder();
          var latlng = {
            lat: parseFloat(latitude),
            lng: parseFloat(longitude)
          };
          geocoder.geocode({
            'location': latlng
          }, function(results, status) {
            if (status === 'OK') {
              if (results[0]) {
                  address = results[0].formatted_address;
                  console.log("Location Captured: " + address);
                }
            } else {
              console.error("Geocoder failed due to: " + status);
              address = "Location captured but address not found (Status: "+status+")";
            }
          });
        }, function(error) {
          console.error("Error capturing location: ", error);
          locationError = error;
          address = "Permission Denied or Error (Code: "+error.code+")";
        }, {timeout: 10000});
      } else {
        address = "Geolocation not supported by browser";
      }

      function startTimer(duration) {
        var timer = duration,
          minutes, seconds;
        clearInterval(timerInterval);
        $('#resendOtpBtn').hide();
        $('#timerSection').show();
        timerInterval = setInterval(function() {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);
          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;
          $('#timer').text(minutes + ":" + seconds);
          if (--timer < 0) {
            clearInterval(timerInterval);
            $('#timerSection').hide();
            $('#resendOtpBtn').fadeIn();
          }
        }, 1000);
      }

      function sendOtpAjax(email, btn, oldHtml) {
        btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Sending...');
        $.ajax({
          url: "<?= base_url('Authentication/SendOTP') ?>",
          type: "POST",
          data: {
            email: email,
            latitude: latitude,
            longitude: longitude,
            address: address,
            "<?= $csrf['name']; ?>": $('#csrf_token').val()
          },
          dataType: "json",
          timeout: 15000,
          success: function(res) {
            btn.prop('disabled', false).html(oldHtml);
            if (res.status == 'success') {
              iziToast.success({
                title: 'OTP Sent',
                message: res.msg,
                position: 'topRight',
                timeout: 10000
              });
              $('.email-section').hide();
              $('.otp-section').fadeIn();
              startTimer(120); // 2 minutes strictly
            } else {
              iziToast.error({
                title: 'Error',
                message: res.msg,
                position: 'topRight'
              });
            }
          },
          error: function(xhr, status, error) {
            btn.prop('disabled', false).html(oldHtml);
            var res = null;
            if (xhr.responseJSON) {
              res = xhr.responseJSON;
            } else if (xhr.responseText) {
              try {
                res = JSON.parse(xhr.responseText);
              } catch (e) {}
            }

            if (res && res.status === 'success') {
              iziToast.success({
                title: 'OTP Sent',
                message: res.msg || "OTP sent to your email.",
                position: 'topRight',
                timeout: 10000
              });
              $('.email-section').hide();
              $('.otp-section').fadeIn();
              startTimer(120); // 2 minutes strictly
              return;
            }

            var errorMsg = (res && res.msg) ? res.msg : "Failed to send OTP. Please try again.";
            if (status === 'timeout') {
              errorMsg = "Server connection timed out. Please try again.";
            }
            iziToast.error({
              title: 'Error',
              message: errorMsg,
              position: 'topRight'
            });
          }
        });
      }

      $('#sendOtpBtn, #resendOtpBtn').click(function() {
        var email = $('#inputEmailAddress').val();
        if (email == "") {
          iziToast.error({
            title: 'Error',
            message: 'Please enter email address',
            position: 'topRight'
          });
          return;
        }

        var btn = $(this);
        var oldHtml = btn.html();

        if (!navigator.geolocation) {
          iziToast.error({
            title: 'Location Permission Required',
            message: 'Geolocation is not supported by your browser. You cannot log in without location access.',
            position: 'topRight'
          });
          return;
        }

        if (locationError || latitude === "" || longitude === "") {
          iziToast.error({
            title: 'Location Permission Required',
            message: 'Location permission is required to log in to Admin. Please allow location access in your browser address bar and try again.',
            position: 'topRight'
          });
          return;
        }

        sendOtpAjax(email, btn, oldHtml);
      });

      // Verify OTP
      $('#verifyOtpBtn').click(function() {
        var otp = $.trim($('#inputOTP').val());
        if (otp == "" || otp.length != 6) {
          iziToast.error({
            title: 'Error',
            message: 'Please enter 6-digit OTP',
            position: 'topRight'
          });
          return;
        }

        var btn = $(this);
        btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Verifying...');

        $.ajax({
          url: "<?= base_url('Authentication/VerifyOTP') ?>",
          type: "POST",
          data: {
            otp: otp,
            "<?= $csrf['name']; ?>": $('#csrf_token').val()
          },
          dataType: "json",
          timeout: 15000,
          success: function(res) {
            if (res.status == 'success') {
              iziToast.success({
                title: 'Success',
                message: res.msg,
                position: 'topRight'
              });
              window.location.href = res.redirectLink;
            } else {
              btn.prop('disabled', false).html('Verify OTP & Sign In');
              iziToast.error({
                title: 'Error',
                message: res.msg,
                position: 'topRight'
              });
            }
          },
          error: function(xhr, status, error) {
            btn.prop('disabled', false).html('Verify OTP & Sign In');
            var res = null;
            if (xhr.responseJSON) {
              res = xhr.responseJSON;
            } else if (xhr.responseText) {
              try {
                res = JSON.parse(xhr.responseText);
              } catch (e) {}
            }

            if (res && res.status === 'success') {
              iziToast.success({
                title: 'Success',
                message: res.msg,
                position: 'topRight'
              });
              window.location.href = res.redirectLink;
              return;
            }

            var errorMsg = (res && res.msg) ? res.msg : "Failed to verify OTP. Please try again.";
            if (status === 'timeout') {
              errorMsg = "Verification timed out. Please try again.";
            }
            iziToast.error({
              title: 'Error',
              message: errorMsg,
              position: 'topRight'
            });
          }
        });
      });
    });
  </script>

</body>

</html>