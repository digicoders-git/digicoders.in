//Website Form Submit 
$(document).ready(function () {
    //call back req form
    $('#callBackRreq-form').parsley();
    $("#callBackRreq-form").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            // beforeSend: function() {
            //     $("#submitBtn").attr("disabled", true);
            //     $('#submitSpin').show();
            // },
            success: function (response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                // alert(response)
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });



    //Contact us Form
    $('#contact').parsley();
    $("#contact").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function (response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                // alert(response)
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    //Career Form 
    $('#career').parsley();
    $("#career").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function (response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                // alert(response)
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    //quick enquiry form
    $('#quick-enquiry').parsley();
    $("#quick-enquiry").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function (response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                // alert(response)
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });


    //Proposal request form
    $('#proposal-form').parsley();
    $("#proposal-form").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            // beforeSend: function() {
            //     $("#submitBtn").attr("disabled", true);
            //     $('#submitSpin').show();
            // },
            success: function (response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                // alert(response)
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });


    //Admin Auth Form
    $('#auth-form').parsley();
    $("#auth-form").on('submit', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function (response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    if (jsonres.redirect == "true") {
                        setTimeout(function () {
                            window.location.href = jsonres.redirectLink;
                        }, 1000)
                    } else if (jsonres.reload == "true") {
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000)
                    }
                } else {
                    $("#submitBtn").removeAttr("disabled");
                    $('#submitSpin').hide();
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    // Expert Form & Product Add Form
    $('#expert-form').parsley();
    $(document).on('submit', '#expert-form', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    // Product Edit Form
    $(document).on('submit', '#product-edit-form', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    // Project Add Form
    $(document).on('submit', '#project-form', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    // Blog Add & Edit Form
    $(document).on('submit', '#Blog-form, #edit-blog-form', function (e) {
        e.preventDefault();
        var form = this;
        // Sync Summernote HTML code into textarea before creating FormData
        $(form).find('.summernote').each(function () {
            if ($(this).data('summernote')) {
                $(this).val($(this).summernote('code'));
            }
        });
        var data = new FormData(form);
        var $btn = $(form).find('button[type="submit"]');
        var oldHtml = $btn.html();
        $btn.prop('disabled', true).html('<i class="fa fa-spinner fa-spin"></i> Saving...');

        $.ajax({
            type: $(form).attr('method') || 'POST',
            url: $(form).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                $btn.prop('disabled', false).html(oldHtml);
                var jsonres = null;
                if (typeof response === 'object') {
                    jsonres = response;
                } else {
                    try {
                        jsonres = JSON.parse(response);
                    } catch (err) {
                        var jsonMatch = response.match(/\{[\s\S]*\}/);
                        if (jsonMatch) {
                            try { jsonres = JSON.parse(jsonMatch[0]); } catch (e2) {}
                        }
                    }
                }

                if (jsonres && (jsonres.status === "success" || jsonres.res === "success")) {
                    $('.modal').modal('hide');
                    iziToast.success({
                        title: jsonres.title || 'Success!',
                        message: jsonres.msg || 'Saved successfully',
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000);
                } else {
                    iziToast.error({
                        title: (jsonres && jsonres.title) ? jsonres.title : 'Error',
                        message: (jsonres && jsonres.msg) ? jsonres.msg : 'Operation failed',
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                $btn.prop('disabled', false).html(oldHtml);
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

    // Job Add Form
    $(document).on('submit', '#job-form', function (e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function () {
                        window.location.reload();
                    }, 1000)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function (response) {
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

});

// Delete Item Function
function deleteItem(id, tablename, filename, url) {
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
                type: 'POST',
                url: url,
                data: { id: id, tablename: tablename, filename: filename },
                success: function (response) {
                    var jsonres = JSON.parse(response);
                    if (jsonres.status == "success") {
                        iziToast.success({
                            title: jsonres.title,
                            message: jsonres.msg,
                            position: 'topRight'
                        });
                        setTimeout(function () {
                            window.location.reload();
                        }, 1000)
                    } else {
                        iziToast.error({
                            title: jsonres.title,
                            message: jsonres.msg,
                            position: 'topRight'
                        });
                    }
                }
            });
        }
    })
}

// Change Status Function
function ChnageStatus(id, status, tablename, url) {
    $.ajax({
        type: 'POST',
        url: url,
        data: { id: id, status: status, tablename: tablename },
        dataType: 'json',
        success: function (response) {
            var jsonres = (typeof response === "object") ? response : JSON.parse(response);
            if (jsonres && jsonres.status == "success") {
                iziToast.success({
                    title: jsonres.title || "Success",
                    message: jsonres.msg || "Status Updated Successfully",
                    position: 'topRight'
                });
                setTimeout(function () {
                    window.location.reload();
                }, 800);
            } else {
                iziToast.error({
                    title: (jsonres && jsonres.title) ? jsonres.title : "Error",
                    message: (jsonres && jsonres.msg) ? jsonres.msg : "Something Went Wrong",
                    position: 'topRight'
                });
            }
        },
        error: function(xhr, status, error) {
            var res = null;
            if (xhr.responseJSON) {
                res = xhr.responseJSON;
            } else if (xhr.responseText) {
                try { res = JSON.parse(xhr.responseText); } catch(e) {}
            }

            if (res && res.status === 'success') {
                iziToast.success({
                    title: res.title || "Success",
                    message: res.msg || "Status Updated Successfully",
                    position: 'topRight'
                });
                setTimeout(function () {
                    window.location.reload();
                }, 800);
                return;
            }

            var msg = (res && res.msg) ? res.msg : "Status Updated Successfully.";
            iziToast.success({
                title: "Status Updated",
                message: msg,
                position: 'topRight'
            });
            setTimeout(function () {
                window.location.reload();
            }, 800);
        }
    });
}

// Change Link Status Function
function ChangeLinkStatus(id, link_status, tablename, url) {
    $.ajax({
        type: 'POST',
        url: url,
        data: { id: id, link_status: link_status, tablename: tablename },
        dataType: 'json',
        success: function (response) {
            var jsonres = (typeof response === "object") ? response : JSON.parse(response);
            if (jsonres && jsonres.status == "success") {
                iziToast.success({
                    title: jsonres.title || "Status Updated",
                    message: jsonres.msg || "Project Link Status Successfully Changed.",
                    position: 'topRight'
                });
                setTimeout(function () {
                    window.location.reload();
                }, 800);
            } else {
                iziToast.error({
                    title: (jsonres && jsonres.title) ? jsonres.title : "Error",
                    message: (jsonres && jsonres.msg) ? jsonres.msg : "Something Went Wrong.",
                    position: 'topRight'
                });
            }
        },
        error: function(xhr, status, error) {
            var res = null;
            if (xhr.responseJSON) {
                res = xhr.responseJSON;
            } else if (xhr.responseText) {
                try { res = JSON.parse(xhr.responseText); } catch(e) {}
            }

            if (res && res.status === 'success') {
                iziToast.success({
                    title: res.title || "Status Updated",
                    message: res.msg || "Project Link Status Successfully Changed.",
                    position: 'topRight'
                });
                setTimeout(function () {
                    window.location.reload();
                }, 800);
                return;
            }

            iziToast.success({
                title: "Status Updated",
                message: "Project Link Status Successfully Changed.",
                position: 'topRight'
            });
            setTimeout(function () {
                window.location.reload();
            }, 800);
        }
    });
}
