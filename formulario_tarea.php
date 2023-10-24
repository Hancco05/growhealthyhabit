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
    <title>Crear Tarea</title>
</head>
<body>
    <h1>Crear Nueva Tarea</h1>
    <form action="agregar_tarea.php" method="post">
        <label for="tarea_principal">Tarea Principal:</label>
        <input type="text" id="tarea_principal" name="tarea_principal" required><br>
        
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" cols="50"></textarea><br>
        
        <label for="fecha">Fecha:</label>
        <input type="date" id="fecha" name="fecha" required><br>
        
        <label for="urgencia">Urgencia:</label>
        <select id="urgencia" name="urgencia" required>
            <option value="alta">Alta</option>
            <option value="media">Media</option>
            <option value="baja">Baja</option>
        </select><br>
        
        <input type="submit" value="Agregar Tarea">
    </form>
</body>
</html>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>