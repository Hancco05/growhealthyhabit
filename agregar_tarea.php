<?php

include('includes/header.php'); 
include('includes/navbar.php');
include('db_conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarea_principal = $_POST["tarea_principal"];
    $descripcion = $_POST["descripcion"];
    $fecha = $_POST["fecha"];
    $urgencia = $_POST["urgencia"];

    $sql = "INSERT INTO tarea (tarea_principal, descripcion, fecha, urgencia) VALUES ('$tarea_principal', '$descripcion', '$fecha', '$urgencia')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarea agregada con éxito.";
    } else {
        echo "Error al agregar la tarea: " . $conn->error;
    }
}

$conn->close();






/*include('conexion.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tarea = $_POST["tarea"];
    $fecha = date("Y-m-d");

    $sql = "INSERT INTO tareas_diarias (tarea, fecha) VALUES ('$tarea', '$fecha')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redirige de nuevo a la página principal
    } else {
        echo "Error al agregar la tarea: " . $conn->error;
    }
}

$conn->close();
*/
?>

<?php
    include('includes/scripts.php');
    include('includes/footer.php');
    ?>