<!-- Global Project Enquiry Modal -->
<div class="modal fade" id="projectEnquiryModal" tabindex="-1" role="dialog" aria-hidden="true" style="z-index: 1060;">
    <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 440px; margin: 1.75rem auto;">
        <div class="modal-content" style="border-radius:20px; border:none; box-shadow:0 25px 60px rgba(0,0,0,0.25); overflow: hidden; position: relative;">
            
            <!-- Modal Header -->
            <div class="modal-header d-block text-center" style="background: linear-gradient(135deg, #086AD8, #00C6FF); padding: 25px 20px 20px 20px; border: none; position: relative; border-radius: 20px 20px 0 0;">
                <button type="button" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close"
                    style="position: absolute; top: 14px; right: 14px; background: rgba(255, 255, 255, 0.25); color: #ffffff; border: none; border-radius: 50%; width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 22px; line-height: 1; cursor: pointer; z-index: 20; outline: none; padding: 0; box-shadow: 0 2px 6px rgba(0,0,0,0.15);"
                    onmouseover="this.style.background='rgba(255,255,255,0.45)'"
                    onmouseout="this.style.background='rgba(255,255,255,0.25)'">
                    <span aria-hidden="true" style="margin-top: -2px;">&times;</span>
                </button>
                <div class="w-100 text-center">
                    <div style="width:54px; height:54px; background:rgba(255,255,255,0.2); border-radius:50%; display:inline-flex; align-items:center; justify-content:center; margin: 0 auto 10px auto;">
                        <i class="fa fa-paper-plane text-white" style="font-size:22px;"></i>
                    </div>
                    <h4 class="modal-title text-white" style="font-weight:700; font-size:20px; margin-bottom:4px; line-height:1.2;">Project Enquiry</h4>
                    <p class="text-white mb-0" id="modal_project_name_display" style="opacity: 0.95; font-size: 13.5px; font-weight:600;"></p>
                </div>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="padding: 25px 22px; background: #f8f9fa;">
                <div id="projectEnquiryAlert" class="mb-3 text-center" style="font-weight:600; font-size:14px; display:none; padding:10px; border-radius:8px;"></div>
                <form id="projectEnquiryForm" action="javascript:void(0);" onsubmit="return false;">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name() ?>" value="<?= $this->security->get_csrf_hash() ?>">
                    <input type="hidden" name="project_id" id="modal_project_id">
                    <input type="hidden" name="project_name" id="modal_project_name">

                    <div class="form-group mb-3">
                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" name="name" class="form-control" placeholder="Your Name" required style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" name="email" class="form-control" placeholder="Email Address" required style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group" style="border: 1px solid #cbd5e1; border-radius: 10px; overflow: hidden; background: #fff;">
                            <div class="input-group-prepend" style="display: flex; align-items: center; background: #fff; padding-left: 14px;">
                                <span style="color: #086AD8; font-size: 14px;"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="tel" name="mobile" class="form-control" placeholder="Mobile Number" required pattern="[0-9]{10}" maxlength="10" style="border: none; height: 46px; background: transparent; box-shadow: none; font-size: 14px; color: #333; padding-left: 10px;">
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <textarea name="message" class="form-control" rows="3" placeholder="Tell us about your project requirements..." required style="border: 1px solid #cbd5e1; border-radius: 10px; background: #fff; box-shadow: none; font-size: 14px; color: #333; padding: 10px 14px;"></textarea>
                    </div>

                    <button type="submit" id="btnProjectEnquirySubmit" class="btn text-white w-100" style="background: linear-gradient(135deg, #086AD8, #00C6FF); border-radius:30px; height:48px; font-weight:700; font-size:15px; letter-spacing:0.5px; box-shadow: 0 8px 18px rgba(8,106,216,0.3); border:none; transition: all 0.3s ease;">
                        Send Enquiry <i class="fa fa-paper-plane ml-1"></i>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openProjectEnquiryModal(id, title) {
        id = id || '';
        title = title || 'Project Enquiry';
        if (typeof $ !== 'undefined' && $('#projectEnquiryAlert').length) {
            $('#projectEnquiryAlert').hide();
            if ($('#projectEnquiryForm').length) {
                $('#projectEnquiryForm')[0].reset();
            }
            $('#modal_project_id').val(id);
            $('#modal_project_name').val(title);
            $('#modal_project_name_display').text(title);
            $('#projectEnquiryModal').modal('show');
        } else if (typeof jQuery !== 'undefined') {
            jQuery('#projectEnquiryAlert').hide();
            if (jQuery('#projectEnquiryForm').length) {
                jQuery('#projectEnquiryForm')[0].reset();
            }
            jQuery('#modal_project_id').val(id);
            jQuery('#modal_project_name').val(title);
            jQuery('#modal_project_name_display').text(title);
            jQuery('#projectEnquiryModal').modal('show');
        }
    }

    (function initProjectEnquiryForm() {
        if (typeof jQuery === 'undefined') {
            setTimeout(initProjectEnquiryForm, 50);
            return;
        }
        jQuery(document).ready(function ($) {
            $(document).off('submit', '#projectEnquiryForm').on('submit', '#projectEnquiryForm', function (e) {
                e.preventDefault();
                var btn = $('#btnProjectEnquirySubmit');
                var originalText = btn.html();
                btn.html('<i class="fa fa-spinner fa-spin"></i> Submitting...').prop('disabled', true);

                var rawUrl = '<?= site_url('Home/submitProjectEnquiry') ?>';
                var targetUrl = rawUrl;
                try {
                    if (rawUrl.indexOf('://') !== -1) {
                        var parsed = new URL(rawUrl);
                        targetUrl = parsed.pathname + parsed.search;
                    }
                } catch (err) {
                    targetUrl = rawUrl;
                }

                $.ajax({
                    url: targetUrl,
                    type: 'POST',
                    data: $(this).serialize(),
                    success: function (response) {
                        btn.html(originalText).prop('disabled', false);
                        var res = {};
                        try {
                            res = (typeof response === 'object') ? response : JSON.parse(response);
                        } catch (e) {
                            res = { status: 'error', msg: 'Invalid response from server' };
                        }
                        var alertBox = $('#projectEnquiryAlert');
                        if (res && res.status == 'success') {
                            alertBox.removeClass('alert-danger alert-warning').addClass('alert alert-success').html('<i class="fa fa-check-circle mr-1"></i> ' + res.msg).show();
                            $('#projectEnquiryForm')[0].reset();
                            setTimeout(function () {
                                alertBox.hide();
                                $('#projectEnquiryModal').modal('hide');
                            }, 3000);
                        } else {
                            var errMsg = (res && res.msg) ? res.msg : 'Failed to submit enquiry. Please try again.';
                            alertBox.removeClass('alert-success alert-warning').addClass('alert alert-danger').html('<i class="fa fa-exclamation-triangle mr-1"></i> ' + errMsg).show();
                        }
                    },
                    error: function (xhr, status, error) {
                        btn.html(originalText).prop('disabled', false);
                        var alertBox = $('#projectEnquiryAlert');
                        var serverMsg = 'Something went wrong. Please try again.';
                        try {
                            if (xhr.responseText) {
                                var errJson = JSON.parse(xhr.responseText);
                                if (errJson && errJson.msg) {
                                    serverMsg = errJson.msg;
                                }
                            }
                        } catch(e) {}
                        alertBox.removeClass('alert-success alert-warning').addClass('alert alert-danger').html('<i class="fa fa-exclamation-circle mr-1"></i> ' + serverMsg).show();
                    }
                });
                return false;
            });
        });
    })();
</script>
