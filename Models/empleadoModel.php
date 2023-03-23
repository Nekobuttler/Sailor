<?php
include_once 'conexion.php';

function VerDatosEmpleadosModel($correoElectronico, $tipoUsuario)
{
    $instancia = Open();

    $sentencia = "CALL VerDatosEmpleados('$correoElectronico', $tipoUsuario);";
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

?>