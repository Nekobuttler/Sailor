<?php
    include_once '../Controllers/loginController.php';
    include_once '../Controllers/ClienteController.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistema Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="bg-gradient-primary">
    <div class="container">
        
    <br/><br/>

                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Sistema Web</h1>
                                    </div>

                                    <form action="" method="post" class="user">
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control form-control-user m-6"
                                                id="correoElectronico" name="correoElectronico" required
                                                placeholder="Correo Electrónico" >
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control form-control-user"
                                                id="contrasenna" name="contrasenna" required
                                                placeholder="Contraseña">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="password" class="form-control form-control-user"
                                                id="contrasenna_confirm" name="contrasenna_confirm" required
                                                placeholder="Confirmar Contraseña">
                                        </div>


                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control"
                                                id="nombre" name="nombre" required
                                                placeholder="Ingrese su nombre">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control "
                                                id="apellidos" name="apellidos" required
                                                placeholder="Ingrese sus apellidos">
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="date" class="form-control "
                                                id="fecha_nac" name="fecha_nac" required
                                                placeholder="Ingrese su fehca de nacimiento">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="tel" class="form-control "
                                                id="telefono" name="telefono" required
                                                placeholder="Ingrese su telefono">
                                        </div>
                                        <div class="form-group mb-3">
                                        <select id="tipo_doc" name="tipo_doc" required>
		    	                            <?php
                                            tipoDocumentos();
                                            ?>
                                        </div>
                                        <div class="form-group mb-3 mt-3">
                                        <input type="text" class="form-control "
                                                id="identificacion" name="identificacion" required
                                                placeholder="Ingrese su numero de identificacion">
                                        </div>



                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar Usuario" disabled
                                        id="btnIniciarSesion" name="btnIniciarSesion">
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="login.php">¿Ya tiene un usuario Registrese?</a>
                                    </div>
                                    

                                </div>
                            </div>
                       
    
    <script src="js/funcionesLogin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>