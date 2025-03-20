<?php
include 'conexion.php';
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirigir al formulario de inicio de sesión
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link rel="stylesheet" href="css/panel-admin.css">
</head>
<body>
    <header>
        <h1>Bienvenido, <?php echo $_SESSION['usuario']; ?></h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Usuarios</a></li>
                <li><a href="#">Configuración</a></li>
                <li><a href="logout.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </header>

    <div class="contenido">
        <h2>Panel de Administrador</h2>
        <p>Aquí puedes gestionar diferentes aspectos del sistema.</p>
    </div>

    <footer>
        <p>Derechos de Autor © 2024 Tu Compañía</p>
    </footer>
</body>
</html>
