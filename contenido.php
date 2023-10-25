<?php
include('includes/header.php'); 
include('includes/navbar.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
</head>
<body>
    <div class="container">
        <h1>Subir Video</h1>
        
        <form action="procesar_video.php" method="post" enctype="multipart/form-data">
            <label for="tipo">Tipo de Contenido:</label>
            <select id="tipo" name="tipo" required>
                <option value="Propio">Propio</option>
                <option value="Gym">Gym</option>
            </select><br>

            <label for="video">Selecciona un video (mp4, avi, wmx):</label>
            <input type="file" id="video" name="video" accept=".mp4, .avi, .wmx" required><br>

            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" rows="4" cols="50" required></textarea><br>

            <button type="submit" class="upload-button">Subir Video</button>
        </form>
        <h1>ㅤ</h1>

        <div class="footer">
        <div class="footer-content">
        <h1>ㅤ</h1>
            <h2>Contenido</h2>
            <h6>ㅤ</h6>
            <a href="ver_contenido.php" class="view-button">Ver Contenido</a>

        </div>
    </div>
    </div>

    
</body>
</html>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
