
function HabilitarBoton(){

let correoElectronico = $("#correoElectronico").val().trim();
let contrasenna = $("#contrasenna").val().trim();
let confirmarContrasenna = $("#contrasenna_confirm").val().trim();
let nombre = $("#nombre").val().trim();
let apellidos = $("#apellidos").val().trim();
let date = $("#fehca_nac").val();
let identificacion = $("#identificacion").val().trim();


$("#btnRegistrarCuenta").prop("disabled", false);


$.ajax({
    url:  '../Controllers/ClienteController.php',
    type: 'GET',
    data: { 
        "VerificarExisteCorreo" : "VerificarExisteCorreo",
        "correoElectronico" : correoElectronico 
    },
    success: function(res) 
    {
        if(res == "OK")
        {
            $("#error_corr").prop("hidden" , false); //Lo quita
            
            if (correoElectronico !== "" && contrasenna !== "" && confirmarContrasenna !== "") 
            {
                $("#error_contra").prop("hidden" , true); //Lo pone

                if(contrasenna === confirmarContrasenna)
                {
                    $("#btnRegistrarCuenta").prop("disabled", false);
                    $("#error_contra").prop("hidden" , false);// Lo quita
                }
            }else{
                //las contrasenas deben de llenarse
            }
        }
        else
        {

           $("#error_corr").prop("hidden" , true); // Lo  pone visible 
        }
    }
 })
}

 

 