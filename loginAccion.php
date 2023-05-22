<?php
session_start();

// Obtener los datos del formulario de inicio de sesión
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Realizar la conexión a la base de datos (suponiendo que tienes los detalles de conexión)
$severname="localhost";
$username="root";
$password="";
$dbname="agencia";
$conexion=mysqli_connect($severname,$username,$password,$dbname) 
or die("Error".mysqli_error($conexion));

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Consultar la tabla "login" para verificar las credenciales
$sqlLogin = "SELECT * FROM login WHERE Usuario='$usuario' AND Contrasena='$contrasena'";
$resultado = mysqli_query($conexion, $sqlLogin);

if (mysqli_num_rows($resultado) == 1) {
    // Inicio de sesión exitoso
    $_SESSION['usuario'] = $usuario;
    echo "Inicio de sesión exitoso. Bienvenido, $usuario.";
} else {
    // Credenciales incorrectas
    echo "Usuario o contraseña incorrectos. Por favor, intenta nuevamente.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>