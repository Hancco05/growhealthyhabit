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
    <h1>Formulario de Persona</h1>

    <form action="procesar_formulario.php" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br>
        
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required><br>

        <label for="sexo">Sexo:</label>
        <select id="sexo" name="sexo" required>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="No Binario">No Binario</option>
        </select><br>

        <label for="peso">Peso (kg):</label>
        <input type="number" id="peso" name="peso" step="0.01" required><br>

        <label for="estatura">Estatura (m):</label>
        <input type="number" id="estatura" name="estatura" step="0.01" required><br>

        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br>

        <label for="fotografia">Adjuntar Fotografía:</label>
        <input type="file" id="fotografia" name="fotografia"><br>

        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>