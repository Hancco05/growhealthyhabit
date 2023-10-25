<?php 
//include('security.php');
session_start();

include('includes/header.php'); 
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soporte</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        
                            <div class="text-center">
                            <h1>ㅤ</h1>
                                <h1 class="h4 text-gray-900 mb-4">Solicitud de Soporte</h1>
                            </div>
                            <form action="enviar_correo.php" method="post">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nombre" name="nombre"
                                        placeholder="Nombre">
                                </div>
								<div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="correo" name="correo"
                                        placeholder="correo">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="asunto" name="asunto"
                                        placeholder="Asunto">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-control-user" id="descripcion" name="descripcion"
                                        placeholder="descripcion" required></textarea>
                                </div>
                                
                                
                                <button type="submit" class="upload-button">Enviar Correo</button>
                                
                                
                            </form>   
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>


<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>