<?php
session_start(); // Asegúrate de que esta línea esté al principio del archivo

// Verifica si el usuario está logueado
if (isset($_SESSION['usuario_nombre'])) {
    // Muestra un mensaje de bienvenida con el nombre del usuario
    $mensaje_bienvenida = "Bienvenido, " . $_SESSION['usuario_nombre'];
} else {
    // Si no hay una sesión de usuario, redirige a la página de login
    header("Location: login.php");
    exit;
}
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Incluye un enlace al archivo CSS de normalización -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- Agrega aquí tus estilos y enlaces a recursos adicionales -->
</head>
<body>
    <!-- Muestra un saludo personalizado al usuario -->
    <h1>Bienvenido, <?php echo $usuario_nombre; ?>, a DOGINN</h1>
    <!-- Contenido del dashboard -->

    <!-- Agrega aquí tu contenido específico del dashboard -->

    <!-- Proporciona un enlace para cerrar sesión -->
    <p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>
