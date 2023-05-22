<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path_to_phpmailer/Exception.php';
require 'path_to_phpmailer/PHPMailer.php';
require 'path_to_phpmailer/SMTP.php';

// Obtener el usuario del formulario de recuperación de contraseña
$usuarioRecuperar = $_POST['usuario_recuperar'];

// Realizar la conexión a la base de datos (suponiendo que tienes los detalles de conexión)
$severname="localhost";
$username="root";
$password="";
$dbname="agencia";
$conexion=mysqli_connect($severname,$username,$password,$dbname) 
or die("Error".mysqli_error($conexion));
// Consultar la tabla "login" para obtener la contraseña y el correo electrónico asociados al usuario
$sqlRecuperar = "SELECT Contrasena, CorreoElectronico FROM login WHERE Usuario='$usuarioRecuperar'";
$resultado = mysqli_query($conexion, $sqlRecuperar);

if (mysqli_num_rows($resultado) == 1) {
    // Recuperación exitosa
    $fila = mysqli_fetch_assoc($resultado);
    $contrasenaRecuperada = $fila['Contrasena'];
    $correoDestinatario = $fila['CorreoElectronico'];

    // Configurar el correo electrónico
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'tu_correo@gmail.com'; // Coloca aquí tu dirección de correo de Gmail
    $mail->Password = 'tu_contraseña'; // Coloca aquí tu contraseña de Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('tu_correo@gmail.com', 'Nombre Remitente'); // Coloca aquí tu dirección de correo y nombre de remitente
    $mail->addAddress($correoDestinatario); // Correo del destinatario

    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de Contraseña';
    $mail->Body = "Tu contraseña recuperada es: $contrasenaRecuperada";

    // Enviar el correo electrónico
    if ($mail->send()) {
        echo "Se ha enviado un correo con la contraseña recuperada a la dirección $correoDestinatario";
    } else {
        echo "Error al enviar el correo electrónico: " . $mail->ErrorInfo;
    }
} else {
    // Usuario no encontrado
    echo "El usuario $usuarioRecuperar no existe. Por favor, verifica el usuario e intenta nuevamente.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
