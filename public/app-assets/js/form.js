$(document).ready(function() {

    // changePass
    $('#changePass').parsley();
    $("#changePass").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                } else {
                    $("#errorContainer").html(jsonres.msg).show();

                    iziToast.error({
                        title: jsonres.title,
                        message: "",
                        position: 'topRight'
                    });
                }
                if (jsonres.reload == "true") {
                    window.setTimeout(function() {
                        window.location.reload();
                    }, 800);
                } else if (jsonres.redirect == "true") {
                    window.setTimeout(function() {
                        window.location.href = jsonres.redirectLink;
                    }, 800);
                }
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();

            },

            error: function() {

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

    //News List
    $('#news-list').parsley();
    $("#news-list").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $("#submitBtn").attr("disabled", true);
                $('#submitSpin').show();
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#newsModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800);
                }

            },
            error: function(response) {
                $("#submitBtn").removeAttr("disabled", false);
                $('#submitSpin').hide();
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });


    //Admin Login
    $('#auth-form').parsley();
    $("#auth-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                } else {
                    $("#errorContainer").html(jsonres.msg).show();

                    iziToast.error({
                        title: jsonres.title,
                        message: "",
                        position: 'topRight'
                    });
                }
                if (jsonres.reload == "true") {
                    window.setTimeout(function() {
                        window.location.reload();
                    }, 800);
                } else if (jsonres.redirect == "true") {
                    window.setTimeout(function() {
                        window.location.href = jsonres.redirectLink;
                    }, 800);
                }
                $("#submitBtn").removeAttr("disabled");
                $('#submitSpin').hide();

            },

            error: function() {

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

    //Add Job
    $('#job-form').parsley();
    $("#job-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#jobModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function() {
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

    //Update Job
    $('#edit-job').parsley();
    $("#edit-job").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#jobModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function() {
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


    //add picture gallery
    $('#gallery-form').parsley();
    $("#gallery-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#galleryModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
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


    //expert form submit
    $('#expert-form').parsley();
    $("#expert-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#expertModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
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


    //client from submit
    $('#client-form').parsley();
    $("#client-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#ClientModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
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





    //Add Job
    $('#project-form').parsley();
    $("#project-form").on('submit', function(e) {
        e.preventDefault();
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),

            data: data,

            cache: false,

            contentType: false,

            processData: false,

            beforeSend: function() {

                $("#submitBtn").attr("disabled", true);

                $('#submitSpin').show();

            },

            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#projectModal").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 800)
                } else {
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
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




})



//Document Close here

function logout(url) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You want Logout!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Logout it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url: url,
                success: function(response) {
                    var jsonres = JSON.parse(response);
                    if (jsonres.status == 'success') {
                        Swal.fire(
                            'Logout !',
                            'Successfully Logout',
                            'success'
                        )
                    }
                    if (jsonres.redirect == "true") {
                        window.setTimeout(function() {
                            window.location.href = jsonres.redirectLink;
                        }, 800);
                    }
                },
                error: function(response) {

                }
            })

        }
    })
}

//delete job
function delData(id, table, url) {
    var url = url;
    var data = { id: id, table: table };

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
                type: "post",
                url: url,
                data: data,
                success: function(response) {
                    var jsonres = JSON.parse(response);
                    if (jsonres.status == 'success') {
                        iziToast.success({
                            title: jsonres.title,
                            message: jsonres.msg,
                            position: 'topRight'
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 800)
                    }
                },
                error: function(response) {
                    iziToast.success({
                        title: 'Error!',
                        message: 'Something Went Wrong',
                        position: 'topRight'
                    });
                }
            })
        }
    })

}

//delete with filename
function deleteItem(id, tablename, filename, url) {
    var url = url;
    var data = { id: id, tablename: tablename, filename: filename };

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
                type: "POST",
                url: url,
                data: data,
                success: function(response) {
                    var jsonres = JSON.parse(response);
                    if (jsonres.status == 'success') {
                        Swal.fire(
                            jsonres.title,
                            jsonres.msg,
                            'success'
                        )
                        setTimeout(function() {
                            window.location.reload();
                        }, 800)
                    }
                },
                error: function(response) {
                    Swal.fire(
                        jsonres.title,
                        jsonres.msg,
                        'error'
                    )
                }
            })


        }
    })

}

//Change Status
function ChnageStatus(id, status, tablename, url) {

    var url = url;
    var data = { id: id, status: status, tablename: tablename };
    Swal.fire({
        title: 'Are you sure?',
        text: "You Want to change this status!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Change it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "POST",
                url: url,
                data: data,
                success: function(response) {
                    var jsonres = JSON.parse(response);
                    if (jsonres.status == 'success') {
                        Swal.fire(
                            jsonres.title,
                            jsonres.msg,
                            'success'
                        )
                        setTimeout(function() {
                            window.location.reload();
                        })
                    }
                },
                error: function(response) {
                    Swal.fire(
                        jsonres.title,
                        jsonres.msg,
                        'error'
                    )
                }
            })


        }
    })


}