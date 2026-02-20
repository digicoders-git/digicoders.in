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

    // Blog Add Form
    $(document).on('submit', '#Blog-form', function (e) {
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
