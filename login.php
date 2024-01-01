<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = "usuario";
    $contrasena_valida = "123";

    $usuario_ingresado = $_POST["username"];
    $contrasena_ingresada = $_POST["password"];

    if ($usuario_ingresado === $usuario_valido && $contrasena_ingresada === $contrasena_valida) {
        header("Location: dashboard.php");
    } else {
        header("Location: incorrect.php");
    }
}
?>
