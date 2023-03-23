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


?>