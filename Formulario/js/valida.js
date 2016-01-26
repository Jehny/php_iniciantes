


$('cadastro').validate({
    rules: {
        firstname: {
            minlength: 3,
            maxlength: 15,
            required: true
        },
        lastname: {
            minlength: 3,
            maxlength: 15,
            required: true
        }
    },
    highlight: function(element) {
        $(element).closest('.col-lg-9').addClass('has-error');
    },
    unhighlight: function(element) {
        $(element).closest('.col-lg-9').removeClass('has-error');
    },
    errorElement: 'span',
    errorClass: 'help-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});