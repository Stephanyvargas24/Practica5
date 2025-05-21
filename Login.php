<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    if ($usuario === 'admin' && $contrasena === 'admin') {
        echo '<h1>Ingreso exitoso</h1>';
    } else {
        echo '<h2>Usuario o contraseña incorrectos</h2>';
    }
} else {
    header("Location: Practica5_Login.html");
    exit();
}
?>
