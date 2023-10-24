<?php
include('db_conn.php');

// Mostrar tareas diarias
$sql = "SELECT id, tarea, fecha FROM tareas_diarias WHERE fecha = CURDATE()";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tareas Diarias</title>
</head>
<body>
    <h1>Tareas Diarias</h1>

    <h2>Tareas para hoy:</h2>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . $row["tarea"] . "</li>";
            }
        } else {
            echo "<li>No hay tareas para hoy.</li>";
        }
        ?>
    </ul>

    <h2>Agregar Nueva Tarea:</h2>
    <form action="agregar_tarea.php" method="post">
        <input type="text" name="tarea" required>
        <input type="submit" value="Agregar Tarea">
    </form>
</body>
</html>