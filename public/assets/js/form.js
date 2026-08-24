//Website Form Submit 
$(document).ready(function() {
    //call back req form
    $('#callBackRreq-form').parsley();
    $("#callBackRreq-form").on('submit', function(e) {
        e.preventDefault();
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var $icon = $btn.find('.fa-spinner');
        
        var data = new FormData(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $btn.attr("disabled", true);
                $icon.removeClass('d-none');
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    $form.modal('hide');
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000)
                } else {
                    $btn.attr("disabled", false);
                    $icon.addClass('d-none');
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
                $btn.attr("disabled", false);
                $icon.addClass('d-none');
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
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var $icon = $btn.find('.fa-spinner');

        var data = new FormData(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $btn.attr("disabled", true);
                $icon.removeClass('d-none');
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000)
                } else {
                    $btn.attr("disabled", false);
                    $icon.addClass('d-none');
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
                $btn.attr("disabled", false);
                $icon.addClass('d-none');
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
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var $icon = $btn.find('.fa-spinner');

        var data = new FormData(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $btn.attr("disabled", true);
                $icon.removeClass('d-none');
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000)
                } else {
                    $btn.attr("disabled", false);
                    $icon.addClass('d-none');
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
                $btn.attr("disabled", false);
                $icon.addClass('d-none');
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
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var $icon = $btn.find('.fa-spinner');

        var data = new FormData(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $btn.attr("disabled", true);
                $icon.removeClass('d-none');
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000)
                } else {
                    $btn.attr("disabled", false);
                    $icon.addClass('d-none');
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
                $btn.attr("disabled", false);
                $icon.addClass('d-none');
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
        var $form = $(this);
        var $btn = $form.find('button[type="submit"]');
        var $icon = $btn.find('.fa-spinner');

        var data = new FormData(this);
        $.ajax({
            type: $form.attr('method'),
            url: $form.attr('action'),
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function() {
                $btn.attr("disabled", true);
                $icon.removeClass('d-none');
            },
            success: function(response) {
                var jsonres = JSON.parse(response);
                if (jsonres.status == "success") {
                    iziToast.success({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 1000)
                } else {
                    $btn.attr("disabled", false);
                    $icon.addClass('d-none');
                    iziToast.error({
                        title: jsonres.title,
                        message: jsonres.msg,
                        position: 'topRight'
                    });
                }
            },
            error: function(response) {
                $btn.attr("disabled", false);
                $icon.addClass('d-none');
                iziToast.error({
                    title: 'Error',
                    message: 'Something Went Wrong',
                    position: 'topRight',
                });
            }
        });
    });

})