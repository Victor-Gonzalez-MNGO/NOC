<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Iniciar la sesión
session_start();

// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el usuario y la contraseña enviados desde el formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];

    // Escapar los datos para prevenir inyección de SQL
    $usuario = mysqli_real_escape_string($conexion, $usuario);
    $contrasena = mysqli_real_escape_string($conexion, $contrasena);

    // Consultar la base de datos para verificar las credenciales del usuario
    $query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";
    $resultado = mysqli_query($conexion, $query);

    // Contar el número de filas devueltas por la consulta
    $count = mysqli_num_rows($resultado);

    // Si las credenciales son válidas, redirigir al panel de administrador
    if ($count == 1) {
        $_SESSION['usuario'] = $usuario;
        header('Location: panel-admin.php');
        exit;
    } else {
        // Si las credenciales no son válidas, redirigir al formulario de inicio de sesión con un mensaje de error
        header('Location: login.php?error=1');
        exit;
    }
}
?>
