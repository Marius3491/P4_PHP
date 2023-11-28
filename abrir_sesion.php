<?php
require_once 'funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];

    $usuarioData = obtenerUsuario($usuario);

    if ($usuarioData && verificarContrasena($contrasena, $usuarioData["pwd"])) {
        crearSesion($usuarioData);
        header("Location: aplicacion.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}



