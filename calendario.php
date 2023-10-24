<?php


include('includes/header.php'); 
include('includes/navbar.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario de Tareas</title>
</head>
<body>
    <h1>Calendario de Tareas</h1>

    <form action="calendario.php" method="get">
        <label for="mes">Seleccionar Mes:</label>
        <input type="month" id="mes" name="mes" required>
        <button type="submit">Filtrar</button>
    </form>

    <?php
    if (isset($_GET['mes'])) {
        $mes = date("m", strtotime($_GET['mes']));
        $anio = date("Y", strtotime($_GET['mes']));
    } else {
        $mes = date("m");
        $anio = date("Y");
    }

    // Conectar a la base de datos y recuperar tareas del mes seleccionado
    $conn = new mysqli("localhost", "root", "", "test1");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM tarea WHERE MONTH(fecha) = $mes AND YEAR(fecha) = $anio";
    $result = $conn->query($sql);

    echo "<h2>Tareas para $mes/$anio:</h2>";

    if ($result->num_rows > 0) {
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<h1></h1>";
            echo "<strong>Tarea Principal:</strong> " . $row['tarea_principal'] . "<br>";
            echo "<strong>Descripción:</strong> " . $row['descripcion'] . "<br>";
            echo "<strong>Fecha:</strong> " . $row['fecha'] . "<br>";
            echo "<strong>Urgencia:</strong> " . ucfirst($row['urgencia']) . "<br>";
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay tareas para este mes.";
    }

    $conn->close();
    ?>

    <h2>Resumen de Urgencias</h2>

    <?php
    // Conectar nuevamente a la base de datos y contar tareas por urgencia
    $conn = new mysqli("localhost", "root", "", "adminpanel");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql_alta = "SELECT COUNT(*) as total FROM tarea WHERE urgencia = 'alta'";
    $sql_media = "SELECT COUNT(*) as total FROM tarea WHERE urgencia = 'media'";
    $sql_baja = "SELECT COUNT(*) as total FROM tarea WHERE urgencia = 'baja'";

    $result_alta = $conn->query($sql_alta);
    $result_media = $conn->query($sql_media);
    $result_baja = $conn->query($sql_baja);

    $total_alta = $result_alta->fetch_assoc()['total'];
    $total_media = $result_media->fetch_assoc()['total'];
    $total_baja = $result_baja->fetch_assoc()['total'];

    echo "Urgencia Alta: $total_alta tareas<br>";
    echo "<h1></h1>";
    echo "Urgencia Media: $total_media tareas<br>";
    echo "<h1></h1>";
    echo "Urgencia Baja: $total_baja tareas<br>";

    $conn->close();
    ?>
</body>
</html>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>


