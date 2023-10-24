<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Contenido</title>
</head>
<body>
    <h1>Contenidos</h1>

    <?php
    $videos_por_pagina = 9; // Número de videos por página
    $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
    $inicio = ($pagina_actual - 1) * $videos_por_pagina;

    // Obtener videos de la base de datos
    $conn = new mysqli("localhost", "root", "", "adminpanel");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM contenido LIMIT $inicio, $videos_por_pagina";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div style='float: left; margin: 10px;'>";
            echo "<video width='320' height='240' controls>";
            echo "<source src='".$row["video"]."' type='video/mp4'>";
            echo "Tu navegador no soporta el elemento <code>video</code>.";
            echo "</video>";
            echo "<p>Tipo de Contenido: ".$row["tipo_contenido"]."</p>";
            echo "<p>".$row["descripcion"]."</p>";
            echo "<a href='".$row["video"]."' download>Descargar</a>";
            echo "</div>";
        }
    } else {
        echo "No hay contenido para mostrar.";
    }

    $conn->close();
    ?>

    <?php
    // Paginación
    $conn = new mysqli("localhost", "root", "", "adminpanel");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT COUNT(id) as total FROM contenido";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $total_videos = $row["total"];
    $total_paginas = ceil($total_videos / $videos_por_pagina);

    echo "<div style='clear: both;'>";
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<a href='ver_contenido.php?pagina=".$i."'>".$i."</a> ";
    }
    echo "</div>";

    $conn->close();
    ?>

    <br>
    <a href="contenido.php">Volver</a>
</body>
</html>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>