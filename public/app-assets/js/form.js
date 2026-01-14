//Website Form Submit 
$(document).ready(function() {
    //call back req form
    $('#callBackRreq-form').parsley();
    $("#callBackRreq-form").on('submit', function(e) {
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
            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
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



    //Contact us Form
    $('#contact').parsley();
    $("#contact").on('submit', function(e) {
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
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
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

    //Career Form 
    $('#career').parsley();
    $("#career").on('submit', function(e) {
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
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
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

    //quick enquiry form
    $('#quick-enquiry').parsley();
    $("#quick-enquiry").on('submit', function(e) {
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
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
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


    //Proposal request form
    $('#proposal-form').parsley();
    $("#proposal-form").on('submit', function(e) {
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
            success: function(response) {
                // alert(response);
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    // $("#callBackRreq-form").modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
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