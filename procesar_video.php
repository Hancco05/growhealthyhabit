<?php
include('includes/header.php'); 
include('includes/navbar.php');

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo = $_POST['tipo'];
    $descripcion = $_POST['descripcion'];

    $nombre_video = $_FILES["video"]["name"];
    $ruta_temporal = $_FILES["video"]["tmp_name"];
    $ruta_destino = "videos/" . $nombre_video;
    
    // Mover el video al servidor
    move_uploaded_file($ruta_temporal, $ruta_destino);

    // Guardar la información en la base de datos (reemplaza con tu configuración)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "adminpanel";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contenido (tipo_contenido, video, descripcion) VALUES ('$tipo', '$ruta_destino', '$descripcion')";

    if ($conn->query($sql) === TRUE) {
        header("Location: contenido.php");
        exit();
    } else {
        echo "Error al subir el video: " . $conn->error;
    }

    $conn->close();
}
?>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
