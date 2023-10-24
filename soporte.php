<?php 
//include('security.php');
session_start();

include('includes/header.php'); 
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Correo</title>
</head>
<body>
    <h1>Formulario de Correo</h1>
    
    <form action="enviar_correo.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="correo">Correo Electrónico:</label>
        <input type="email" id="correo" name="correo" required><br>
        
        <label for="asunto">Asunto:</label>
        <input type="text" id="asunto" name="asunto" required><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>
        
        <button type="submit">Enviar Correo</button>
    </form>
</body>
</html>


<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>