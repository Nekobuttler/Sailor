<?php 
include_once "../Models/clienteModel.php";


function tipoDocumentos(){

    $result = MostrarDocumentosModel();

    if($result -> num_rows > 0){

        
        While($resultData = mysqli_fetch_array($result))
        {

            echo "<option value=" . $resultData["idTipoDocumento"] . " selected>" . $resultData["NombreTipo"] . "</option>";
        }
    }

}


if(isset($_GET["VerificarExisteCorreo"]))
{   
    $resultado = VerificarExisteCorreoModel($_GET["correoElectronico"]);

    if($resultado -> num_rows > 0)
    {
        echo "Ya hay un usuario registrado con este correo";
    }
    else
    {
        echo "OK";
    }
}

if(isset($_POST["btnRegistrarCuenta"])){

    $correoElectronico = $_POST["correoElectronico"];
    $contrasenna = $_POST["contrasenna"];
    $contrasenna_confirm = $_POST["contrasenna_confirm"];
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $telefono = $_POST["telefono"];
    $tipo_doc = $_POST["tipo_doc"];
    $identificacion = $_POST["identificacion"];
    $fecha_nac = $_POST["fecha_nac"];

    crearCliente($apellidos , $contrasenna , $correoElectronico, $nombre , $identificacion , $telefono , $tipo_doc , $fecha_nac);

}

function crearCliente($apellidos , $contrasenna , $email, $nombre , $numDocumento , $telefono , $tipo_doc , $fecha_nac){

    $result  = crearUsuarioModel($apellidos , $contrasenna , $email, $nombre , $numDocumento , $telefono , $tipo_doc , $fecha_nac);

    if($result == true){ 
        header("location:../Views/main.php");
    }else{
        header("location:../Views/RegistroClientes.php");
    }
}

function actualizarPerfil($idCliente,$apellidos , $contrasenna , $email, $nombre , $numDocumento , $telefono , $tipo_doc , $fecha_nac){

    $result  = actualizarPerfilModel($idCliente,$apellidos , $contrasenna , $email, $nombre , $numDocumento , $telefono , $tipo_doc , $fecha_nac);

    if($result == true){ 
        header("location:../Views/main.php");
    }else{
        header("location:../Views/RegistroClientes.php");
    }
}


function eliminarPerfil(){


}

function mostrarClientes($tipoUsuario){

    $result = mostrarClientesModel($tipoUsuario);

    if($result -> num_rows > 0){

        //We put the data from the DB request into an variable in form of an array
        //$resultData = mysqli_fetch_array($result);
    
        While($resultData = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" .  $resultData["id_cliente"]. "</td>";
            echo "<td>" . $resultData["Nombre"] . "</td>";
            echo "<td>" . $resultData["Apellidos"] . "</td>";
            echo "<td>" .  $resultData["email"]. "</td>";
            echo "<td>" .  $resultData["NombreTipo"]. "</td>";
            echo "<td>" .  $resultData["num_documento"]. "</td>";
            echo "<td>" .  $resultData["telefono"]. "</td>";
            echo "<td>" .  $resultData["direccion"]. "</td>";
            echo "<td>" .  $resultData["nombreTipoUsuario"]. "</td>";
            echo "<td>" .  $resultData["fecha_nac"]. "</td>";
            echo "</tr>";
        }
        
}else{
    echo 'No hay info';
}
}

function BorrarCliente($consecutivo){
    
    $resultado = eliminarPerfilModel($consecutivo);

    if($resultado -> num_rows > 0)
    {
        echo ' Los datos fueron eliminados ';
    }
}

function MostrarDatosClienteProfile($id){
    
    $resultado = MostrarDatosClienteModel($id);

    if($resultado -> num_rows > 0)
    {
        return mysqli_fetch_array($resultado);
    }else{
        
    }

    

}






?>