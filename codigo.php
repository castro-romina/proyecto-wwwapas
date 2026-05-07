<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['Mensaje'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje enviado - wwwapas</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }
        .card {
            background: white;
            padding: 40px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            max-width: 500px;
        }
        h1 { color: #333; }
        p { color: #666; }
        .dato { font-weight: bold; color: #333; }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 24px;
            background: #333;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }
        a:hover { background: #555; }
    </style>
</head>
<body>
    <div class="card">
        <h1>¡Gracias por contactarnos!</h1>
        <p>Recibimos tu mensaje y nos pondremos en contacto a la brevedad.</p>
        <hr>
        <p>Nombre: <span class="dato"><?php echo htmlspecialchars($nombre); ?></span></p>
        <p>Email: <span class="dato"><?php echo htmlspecialchars($email); ?></span></p>
        <p>Mensaje: <span class="dato"><?php echo htmlspecialchars($mensaje); ?></span></p>
        <a href="index.html">← Volver al inicio</a>
    </div>
</body>
</html>