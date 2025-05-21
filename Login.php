<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    echo '<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultado de Login</title>
        <style>
            body {
                background-color: #ffe4e1; /* rosa pastel */
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                font-family: Arial, sans-serif;
                text-align: center;
            }
            .mensaje {
                background-color: white;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }
        </style>
    </head>
    <body>
        <div class="mensaje">';

    if ($usuario === 'admin' && $contrasena === 'admin') {
        echo '<h1>Ingreso exitoso</h1>';
    } else {
        echo '<h2>Usuario o contraseña incorrectos</h2>';
    }

    echo '</div>
    </body>
    </html>';
} else {
    header("Location: Practica5_Login.html");
    exit();
}
?>
