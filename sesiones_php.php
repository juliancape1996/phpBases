<?php
   if (isset($_POST["enviar"])) {
       session_start();

       $_SESSION["usuario"] = htmlentities($_POST["usuario"]);

       $_SESSION["email"] = htmlentities($_POST["email"]);

       header("Location: paginasesion3.php");
   }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones PHP</title>
</head>
<body>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Ingresa el usuario">

        <input type="text" name="email" placeholder="Ingresa el email">

        <input type="submit" name="enviar" value="Enviar">
    </form>
    
</body>
</html>