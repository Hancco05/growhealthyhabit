<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de la Persona</title>
</head>
<body>
    <h1>Información de la Persona</h1>

    <?php
    // Mostrar la información desde la base de datos (reemplaza con tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "adminpanel";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM personas";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>Edad</th><th>Sexo</th><th>Peso</th><th>Estatura</th><th>Descripción</th><th>Fotografía</th></tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["edad"]."</td><td>".$row["sexo"]."</td><td>".$row["peso"]."</td><td>".$row["estatura"]."</td><td>".$row["descripcion"]."</td>";
            echo "<td><img src='fotografias/".$row["fotografia"]."' width='100' height='100'></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No hay información para mostrar.";
    }

    $conn->close();
    ?>
</body>
</html>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>