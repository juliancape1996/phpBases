<?php

    /*
    -El ciclo foreach solo trabaja con arrays, se usar para recorrer cada registros con su llave->valor, key->value
    //Sintaxis
    foreach($array as $valor){
        //Aquí el código que se ejecuta
    }
    */

    echo "<br />";
    //Ejercicio 1, accediendo a los valores
    $colores = array("Blanco", "Negro", "Rojo", "Verde", "Amarillo", "Azul");

    foreach($colores as $valor){
        echo "$valor <br />";
    }


    echo "<br />";
    //Ejercicio 2, accediendo a las llaves y valores
    $persona = array("José" => "111111", "Juan" => "222222", "Martha" => "3333333");

    foreach($persona as $x => $valor){
        echo "$x => $valor" . "<br />";
    }