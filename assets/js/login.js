var login_user = 0;

/*$('#ModalIngresoLogin').modal('show');

$('#ModalIngresoLogin').on('hidden', function() {
    if(login_user ==  0)
    location.href = "../";
});


$('#label_direccion_cambiar').click(function() {
    if(login_user ==  0)
    ValidarUsuario();
});

function ValidarUsuario() {
    var parametros = {
        "LoginUsuarios": $("#inputUsuario").val()
    };
    $.ajax({
        data: parametros,
        url: 'c_main/ValidarUsuario',
        type: 'post',
        async: false,
        beforeSend: function() {
            $("#resultado").html("Procesando, espere por favor...");
        },
        success: function(response) {
            $("#resultado").html(response);
        }
    });
    var resultado = $("#datousuario").val();
    if(resultado == ''){
        
    }else{
        login_user = 1;
        $('#ModalIngresoLogin').modal('hide');
    }
}
*/

function ValidarUsuario() {
    var parametros = {
        "LoginUsuarios": $("#inputUsuario").val()
    };
    $.ajax({
        data: parametros,
        url: 'c_main/ValidarUsuario',
        type: 'post',
        async: false,
        beforeSend: function() {
            $("#resultado").html("Procesando, espere por favor...");
        },
        success: function(response) {
            $("#resultado").html(response);
        }
    });
    var resultado = $("#datousuario").val();
    if(resultado == ''){
        
    }else{
        location.href = 'c_main/vista_principal';
    }
}