<?php
session_start();

include('includes/header.php'); 
include('includes/navbar.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Carga la librería PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $descripcion = $_POST['descripcion'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor SMTP (Gmail en este caso)
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 's.carmonawright@gmail.com'; // Tu dirección de correo
        $mail->Password = 'ipbt jpqb eohh ejmn'; // Tu contraseña de correo
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('s.carmonawright@gmail.com', 'Tu Nombre');
        $mail->addAddress($correo); // Destinatario
        $mail->isHTML(true);
        $mail->Subject = $asunto;
        $mail->Body = "<p><strong>Nombre:</strong> $nombre</p><p><strong>Descripción:</strong> $descripcion</p>";

        $mail->send();
        echo 'Correo enviado correctamente.';
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
}
?>
<?php
    include('includes/scripts.php');
    include('includes/footer.php');
?>
