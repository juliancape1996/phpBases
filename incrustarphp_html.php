<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrustar php en htmlentities</title>

    <script>
        <?php
            echo "alert('SALUDO CURSO PHP MODERNO')";
        ?>
    </script>

</head>
<body>
    <h2>Curso PHP</h2>

    <?php echo "render2web"; ?>

    <?php 
        print "<h4>Título H4</h4>";
        echo '<hr>';
    ?>

    <h4>
        <?php 
            print "Título H4";       
        ?>
    </h4>

    <h2 style="color: blue;">TEXTO AZUL</h2>

    <h2 <?php echo 'style="color:blue;"' ?>>TEXTO AZUL 2</h2>
    
</body>
</html>