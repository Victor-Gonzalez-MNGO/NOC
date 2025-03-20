<?php
// Configuración de la conexión a la base de datos
$host = "localhost"; // Cambia esto al nombre de tu host si es diferente
$usuario_db = "root"; // Cambia esto al nombre de usuario de tu base de datos
$contrasena_db = ""; // Cambia esto a la contraseña de tu base de datos
$nombre_db = "nocserv"; // Cambia esto al nombre de tu base de datos

// Crear la conexión
$conexion = mysqli_connect($host, $usuario_db, $contrasena_db, $nombre_db);

// Verificar la conexión
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
