


pickedDatestr = Date.now();
var pickedDate = new Date(Date.parse(pickedDatestr.replace(/-/g, " ")))

function controlFechas(){



}

//Tratar de comparar fechas que haya algun espacio de tiempo entre ellas 
//Que las fechas sean mayor al dia 'hoy '

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