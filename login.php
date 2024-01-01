<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_valido = "usuario";
    $contrasena_valida = "123";

    $usuario_ingresado = $_POST["username"];
    $contrasena_ingresada = $_POST["password"];

    if ($usuario_ingresado === $usuario_valido && $contrasena_ingresada === $contrasena_valida) {
        $_SESSION["nombre_usuario"] = $usuario_ingresado;

        if (isset($_POST["recordar"])) {
            setcookie("nombre_usuario", $usuario_ingresado, time() + 86400);
        }
        header("Location: dashboard.php");
        exit();

    } else {
        header("Location: incorrect.php");
        exit();
    }
}
?>
