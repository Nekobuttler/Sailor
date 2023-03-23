
let correoElectronico = $("#correoElectronico").val().trim();
let contrasenna = $("#contrasenna").val().trim();
let confirmarContrasenna = $("#contrasenna_confirm").val().trim();
let nombre = $("#nombre").val().trim();
let apellidos = $("#nombre").val().trim();
let date = $("#nombre").val().trim();
let identificacion = $("#nombre").val().trim();

$("#btnRegistrarCuenta").prop("disabled", true);

$.ajax({
    url:  '../Controllers/usuariosController.php',
    type: 'GET',
    data: { 
        "VerificarExisteCorreo" : "VerificarExisteCorreo",
        "correoElectronico" : correoElectronico 
    },
    success: function(res) 
    {
        if(res == "OK")
        {
            if (correoElectronico !== "" && contrasenna !== "" && confirmarContrasenna !== "") 
            {
                if(contrasenna === confirmarContrasenna)
                {
                    $("#btnRegistrarCuenta").prop("disabled", false);
                }
            }
        }
        else
        {
            alert(res);
        }
    }
 });

 