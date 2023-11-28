<?php
require_once 'funciones.php';

session_start();

// If "Cerrar Sesion" is clicked, destroys the session and redirects to index.php.
if (isset($_GET['logout'])) {
    cerrarSesion();
    header("Location: index.php");
    exit();
}
$usuario = isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Invitado";

$colorFondo = obtenerPreferenciasColor($usuario);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información</title>
    <style>
        body {
            background-color: <?php echo $colorFondo; ?>;
        }
    </style>
</head>
<body>
<p>Conectado como: <?php echo isset($_SESSION["usuario"]) ? $_SESSION["usuario"] : "Invitado"; ?></p>
<p>(Inicio de sesión: <?php echo isset($_SESSION["horaInicio"]) ? $_SESSION["horaInicio"] : "N/A"; ?>)</p>

<p><a href="informacion.php?logout=true">Volver a la página de inicio</a></p>

<h2>Información</h2>
<p>Explicación del funcionamiento de la aplicación.</p>

<!-- Some paragraphs -->
<h3>Funcionalidades de aplicacion.php:</h3>
<p>La página de aplicacion.php proporciona acceso exclusivo a usuarios autenticados.</p>
<p>En esta página, los usuarios pueden:</p>
<ul>
    <li>Acceder a la página de información actualizada.</li>
    <li>Ajustar sus preferencias de color de fondo en la página de preferencias.</li>
    <li>Cerrar sesión para salir de la aplicación.</li>
</ul>

</body>
</html>


