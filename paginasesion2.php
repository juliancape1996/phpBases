<?php
    session_start();

    $nombre = $_SESSION['usuario'];
    $email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina sesion 2</title>
</head>
<body>
    <h2>Bienvenido <?php echo $nombre; ?></h2>
    <h2>El email <?php echo $email; ?> se ha registrado correctamente</h2>
</body>
</html>

