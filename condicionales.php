<?php

    //Ejercicio 1 if
    $edad = 17;

   /*  if($edad >= 18){
        echo "Puede ingresar";
    } */


    //Ejercicio 2 else  

    /* if($edad >= 18){
        echo "Puede ingresar";
    }else{
        echo "NO Puede ingresar";
    } */

    //Ejercicio 3 
   /*  $identificacion = true;
    if($edad >= 18 && $identificacion){
        echo "Puede ingresar";
    }else{
        echo "NO Puede ingresar";
    } */

    //Ejercicio 4
    $nombreCompleto = "José Montoya";
   /*  if(!is_null($nombreCompleto)){
        echo "El nombre no está vacío";
    }else{
        echo "El nombre está vacío";
    } */

   /*  if($nombreCompleto != ""){
        echo "El nombre no está vacío";
    }else{
        echo "El nombre está vacío";
    } */

    //Mejor forma de chequear vacíos
  /*   if(!empty($nombreCompleto)){
        echo "El nombre no está vacío";
    }else{
        echo "El nombre está vacío";
    } */

    //Sintaxis sin llaves {}, probar con dos líneas
  /*   if(!empty($nombreCompleto))
        echo "El nombre no está vacío";
        echo "El nombre no está vacío 2";
    else
        echo "El nombre está vacío";
        echo "El nombre está vacío 2"; */

        //Chequear tipo de dato, probar con tres iguales
        $edad2 = 24;

        if($edad2 == "24"){
            echo "TIENE ACCESO";
        }else{
            echo "SIN ACCESO";
        } 

    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Ejemplo</title>
</head>
<body>
    <!--Mezclar php con html-->
    <?php if($edad >= 18) { ?>
        <h3>Puede entrar</h3>
    <?php } else { ?>
        <h3>NO Puede entrar</h3>
    <?php } ?>


    <!--Ejemplo 2-->
    <?php if($edad >= 18) : ?>
        <h3>Puede entrar</h3>
    <?php  else : ?>
        <h3>NO Puede entrar</h3>
    <?php endif; ?>
    
</body>
</html>
