<?php

    //Ejercicio 1 if
    $edad = 18;

   /*  if($edad >= 18){
        echo "Puede ingresar";
    } */

    //Ejercicio 2 else
    /* if($edad >= 18){
        echo "Puede ingresar";
    }else{
        echo "NO Puede ingresar";
    } */

    /* //Ejercicio 3
    $identificacion = false;
    if($edad >= 18 || $identificacion){
        echo "Puede ingresar";
    }else{
        echo "NO Puede ingresar";
    } */

    /* //Ejercicio 4
    $nombreCompleto = "";
    if(!is_null($nombreCompleto)){
        echo "Nombre no está vacío";
    }else{
        echo "Nombre está vacío";
    } */

    /* //Ejercicio 5
    $nombreCompleto = "José Montoya";
    if($nombreCompleto != ""){
        echo "Nombre no está vacío";
    }else{
        echo "Nombre está vacío";
    } */

    /* //Ejercicio 6
    $nombreCompleto = "";
    if(!empty($nombreCompleto)){
        echo "Nombre no está vacío";
    }else{
        echo "Nombre está vacío";
    }
 */

   /*  //Ejercicio 7 - Sintáxis sin llaves, solo una línea
    $nombreCompleto = "";
    if(!empty($nombreCompleto))
        echo "Nombre no está vacío";
        echo "Nombre no está vacío2";
    else
        echo "Nombre está vacío";  
        echo "Nombre está vacío2";  
 */

 //Ejercicio 8 -validar tipo de dato
 $edad2 = 24;

 /* if($edad2 === "24"){
    echo "INGRESA";  
 }else{
    echo "NO INGRESA";  
 } */

 ?>

 <!DOCTYPE html>
 <html lang="eS">
 <head>
     <meta charset="UTF-8">  
     <title>Mezclar PHP con html</title>
 </head>
 <body>

    <!--OPCIÓN 1-->
    <?php if($edad2 == "24") { ?>
        <h2>INGRESA</h2>
    <?php } else { ?>
        <h2>NO INGRESA</h2>
    <?php } ?>

    <!--OPCIÓN 2-->
    <?php if($edad2 == "24") : ?>
        <h2>INGRESA</h2>
    <?php else : ?>
        <h2>NO INGRESA</h2>
    <?php endif; ?>
     
 </body>
 </html>