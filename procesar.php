<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pedido recibido</title>
</head>
<body style="font-family: sans-serif; padding: 40px;">

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre  = trim($_POST['nombre'] ?? '');
    $correo  = trim($_POST['correo'] ?? '');
    $asunto  = trim($_POST['asunto'] ?? '');
    $mensaje = trim($_POST['mensaje'] ?? '');

    echo "<h1>Datos recibidos por PHP:</h1>";
    echo "<p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>";
    echo "<p><strong>Correo:</strong> " . htmlspecialchars($correo) . "</p>";
    echo "<p><strong>Asunto:</strong> " . htmlspecialchars($asunto) . "</p>";
    echo "<p><strong>Mensaje:</strong> " . htmlspecialchars($mensaje) . "</p>";
} else {
    echo "<h1>Esperando datos...</h1>";
    echo "<p>No has enviado el formulario. Vuelve a la página principal e inténtalo de nuevo.</p>";
}
?>

<br>
<a href="index.html">Volver al inicio</a>

</body>
</html>