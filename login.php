<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: dash.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Aquí verificarías las credenciales ingresadas por el usuario y harías la validación correspondiente
    // Por simplicidad, este ejemplo asume que el inicio de sesión siempre es exitoso

    $usuario = $_POST['usuario'];

    $_SESSION['usuario'] = $usuario;

    header('Location: dash.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesión</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>Iniciar sesión</h1>
        <form method="POST" action="">
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
</body>
</html>
