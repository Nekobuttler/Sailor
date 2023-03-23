<?php
include_once 'conexion.php';

function ValidarInicioSesionModelClient($correoElectronico, $contrasenna)
{
    $instancia = Open();

    $sentencia = "CALL ValidarInicioSesionCli('$correoElectronico','$contrasenna');";
    $resultado = $instancia -> query($sentencia);

    Close($instancia);
    return $resultado;    
};

function ValidarInicioSesionModelEmp($correoElectronico, $contrasenna){

$instancia = Open();


$sentecia = "CALL ValidarInicioSesionEmp('$correoElectronico','$contrasenna');";

$resultado = $instancia->query($sentecia);

Close($instancia);


return $resultado;

}

?>