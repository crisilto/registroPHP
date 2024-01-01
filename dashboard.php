<?php
session_start();
if (!isset($_SESSION["nombre_usuario"]) && !isset($_COOKIE["nombre_usuario"])) {
    header("Location: formulario.html");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>
    <div class="dashboard-container">
        <h2>Bienvenido al Dashboard</h2>
        <p>Aquí encontrarás contenido exclusivo para usuarios autenticados.</p>
        <form action="logout.php" method="post">
            <input type="hidden" name="cerrar_sesion" value="1">
            <button type="submit" class="btn-submit">Cerrar sesión</button>
        </form>
    </div>
</body>

</html>