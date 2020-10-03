$.validator.setDefaults({
    submitHandler: function () {
        alert("submitted!");
        location.href = "gestionarCliente.html"
    }
});

$(function () {

    $.validator.setDefaults({
        errorClass: 'help-block',
        highlight: function (element) {
            $(element)
                .closest('.form-group')
                .addClass('has-error');
        },
        unhighlight: function (element) {
            $(element)
                .closest('.form-group')
                .removeClass('has-error');
        }
    });

    $("#frmValidarLogin").validate({
        rules: {
            txtUsuario: {
                required: true
            },
            txtPassword: {
                required: true
            }
        },
        messages: {
            txtUsuario: {
                required: 'Ingrese el usuario'
            },
            txtPassword: {
                required: 'Ingrese la clave'
            }
        }
    })

});