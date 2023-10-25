<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Persona</title>
</head>
<body>
<div class="container">

        
<div class="text-center">
<h1>ㅤ</h1>
    <h1 class="h4 text-gray-900 mb-4">Formulario persona</h1>
</div>
<form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="nombre" name="nombre"
            placeholder="Nombre">
    </div>
    <div class="form-group">
        <input type="text" class="form-control form-control-user" id="apellido" name="apellido"
            placeholder="Apellido">
    </div>
    <div class="form-group">
        <input type="number" class="form-control form-control-user" id="edad" name="edad"
            placeholder="Edad">
    </div>
    <div class="form-group">
        <label for="sexo">Sexo:</label>
            <select id="sexo" name="sexo" required>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                    <option value="No Binario">No Binario</option>
            </select><br>
    </div>
    <div class="form-group">
        <input type="number" class="form-control form-control-user" id="peso" name="peso" step="0.01"
            placeholder="Peso (KG)" required>
    </div>
    <div class="form-group">
        <input type="number" class="form-control form-control-user" id="estatura" name="estatura" step="0.01"
            placeholder="Estatura (m)" required>
    </div>
    <div class="form-group">
        <textarea class="form-control form-control-user" id="descripcion" name="descripcion"
            placeholder="descripcion" required></textarea>
    </div>
    
    <label for="fotografia">Adjuntar Fotografía:</label>
    <input type="file" id="fotografia" name="fotografia"><br>
    
    <button type="submit" class="upload-button">Enviar</button>
</form>   
</div>

</div>
</body>
</html>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>