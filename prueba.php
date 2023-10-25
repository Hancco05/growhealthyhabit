<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Contenidos</title>
</head>
<body>
    <div class="container">
        <h1>Contenidos</h1>

        <?php
        // Obtener datos del video desde PHP (reemplazar con tu lógica para obtener datos)
        $videoURL = "ruta/al/video.mp4";
        $tipo = "Tipo de Contenido";
        $descripcion = "Descripción del video";
        ?>

        <div class="video-card">
            <video controls>
                <source src="<?php echo $videoURL; ?>" type="video/mp4">
                Tu navegador no soporta el elemento <code>video</code>.
            </video>
            <p><strong>Tipo:</strong> <?php echo $tipo; ?></p>
            <p><strong>Descripción:</strong> <?php echo $descripcion; ?></p>
            <a href="<?php echo $videoURL; ?>" download class="download-button">Descargar Video</a>
        </div>
    </div>
</body>
</html>
