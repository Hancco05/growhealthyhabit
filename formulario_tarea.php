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
<div class="container">

        
<div class="text-center">
<h1>ㅤ</h1>
    <h1 class="h4 text-gray-900 mb-4">Crear Nueva Tarea</h1>
</div>
<form action="agregar_tarea.php" method="post">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="tarea_principal" name="tarea_principal"
            placeholder="Parea principal">
    </div>
    
    <div class="form-group">
        <textarea class="form-control form-control-user" id="descripcion" name="descripcion"
            placeholder="descripcion" required></textarea>
    </div>
    
    <div class="form-group">
        <input type="date" class="form-control form-control-user" id="fecha" name="fecha"
            placeholder="Fecha">
    </div>
    
    <label for="urgencia">Urgencia:</label>
    <select id="urgencia" name="urgencia" required>
          <option value="alta">Alta</option>
          <option value="media">Media</option>
          <option value="baja">Baja</option>
    </select><br>
    
    <button type="submit" class="upload-button">Agregar tarea</button>
</form>   
</div>

</div>	
</body>
</html>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>