
<?php
include_once 'conexion.php';



function crearUsuarioModel($apellidos , $contrasenna, $email , $nombre , $numDocumento , $telefono  , $tipoDocumento , $fecha_nac){

}
function VerDatosUsuariosModel($correoElectronico, $tipoUsuario)
{
    $instancia = Open();

    $sentencia = "CALL VerDatosUsuarios('$correoElectronico', $tipoUsuario);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}

function VerificarExisteCorreoModel($correoElectronico)
{
    $instancia = Open();

    $sentencia = "CALL VerificarExisteCorreo('$correoElectronico');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;        
}

function RegistrarCuentaModel($correoElectronico, $contrasenna)
{
    $instancia = Open();

    $tipoUsuarioCliente = 2;

    $sentencia = "CALL RegistrarCuenta('$correoElectronico','$contrasenna',$tipoUsuarioCliente);";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
}


function MostrarDocumentosModel(){

    $instancia = Open();

    $sentencia = "CALL mostrarTipoDocumentos()";
    
    $result = $instancia -> query($sentencia);

    Close($instancia);

    return $result;

}


?>