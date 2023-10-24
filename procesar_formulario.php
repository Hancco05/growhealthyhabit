<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $peso = $_POST['peso'];
    $estatura = $_POST['estatura'];
    $descripcion = $_POST['descripcion'];

    // Procesar la fotografía si se adjunta
    $fotografia_nombre = null;
    if ($_FILES["fotografia"]["error"] == 0) {
        $fotografia_nombre = $_FILES["fotografia"]["name"];
        move_uploaded_file($_FILES["fotografia"]["tmp_name"], "fotografias/" . $fotografia_nombre);
    }

    // Guardar la información en la base de datos (reemplaza con tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "adminpanel";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO personas (nombre, apellido, edad, sexo, peso, estatura, descripcion, fotografia) 
            VALUES ('$nombre', '$apellido', $edad, '$sexo', $peso, $estatura, '$descripcion', '$fotografia_nombre')";

    if ($conn->query($sql) === TRUE) {
        echo "Información guardada correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
