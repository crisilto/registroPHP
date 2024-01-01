<?php
session_start();

if (isset($_POST["cerrar_sesion"])) {
    setcookie("nombre_usuario", "", time() - 1);
    session_unset();
    session_destroy();
}
header("Location: formulario.html");
exit();
