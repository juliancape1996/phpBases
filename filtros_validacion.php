<?php
   
    //Validar envío por post
   /*  if (filter_has_var(INPUT_POST, "info")) {
        echo "Información enviada";
    }else{
        echo "Ninguna información";
    } */

    /* //Validar email
    if (filter_has_var(INPUT_POST, "info")) {
        if (filter_input(INPUT_POST, "info", FILTER_VALIDATE_EMAIL)) {
            echo "El email es válido"; 
        }else{
            echo "No es un email válido"; 
        }
    } */

    //Sanear email
    /* if (filter_has_var(INPUT_POST, "info")) {
        $email = $_POST["info"];

        //Eliminar caracteres inválidos
        $emailLimpio = filter_var($email, FILTER_SANITIZE_EMAIL);

        echo $emailLimpio . "<br />";


        if (filter_input(INPUT_POST, "info", FILTER_VALIDATE_EMAIL)) {
            echo "El email es válido"; 
        }else{
            echo "No es un email válido"; 
        }
    } */


    //Diferentes tipos de validación
    //FILTER_VALIDATE_BOOLEAN
    //FILTER_VALIDATE_EMAIL
    //FILTER_VALIDATE_FLOAT    
    //FILTER_VALIDATE_INT    
    //FILTER_VALIDATE_IP    
    //FILTER_VALIDATE_REGEXP    
    //FILTER_VALIDATE_URL    
    //FILTER_VALIDATE_DOMAIN
    
    //Para sanear    
    //FILTER_SANITIZE_EMAIL
    //FILTER_SANITIZE_NUMBER_FLOAT    
    //FILTER_SANITIZE_NUMBER_INT    
    //FILTER_SANITIZE_SPECIAL_CHARS    
    //FILTER_SANITIZE_STRING    
    //FILTER_SANITIZE_URL    
    //FILTER_SANITIZE_ENCODED

    //Ejercicio validando entero:
    $numero = 56;
/* 
    if (filter_var($numero, FILTER_VALIDATE_INT)) {
        echo "$numero es un número valido";
    }else{
        echo "$numero NO es un número valido";
    } */

    
    //Ejercicio saneando entero:
   /*  $numero2 = '56dddfsdf99jkdh23<<<l';

    var_dump(filter_var($numero2, FILTER_SANITIZE_NUMBER_INT));
 */

    //Ejercicio prevenir ejecución de scripts
    $nombre = '<script>alert("Hola")</script>';
    /* echo $nombre; */

   /*  echo filter_var($nombre, FILTER_SANITIZE_SPECIAL_CHARS); */


    //filter_input_array
    $filtros = array(
        "info" => FILTER_VALIDATE_EMAIL,
        "info2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 50
            )
        )
    );


    print_r(filter_input_array(INPUT_POST, $filtros));


?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="info">
    <input type="text" name="info2">
    <button type="submit">Enviar</button>
</form>