<?php

    /*
    -El ciclo foreach solo trabaja con arrays, se puede usar para recorrer cada registros con su llave->valor, key->value
    //Sintaxis
    foreach($array as $valor){
        //Aquí el código que se ejecuta
    }
    */

    echo "<br />";
    //Ejercicio 1, accediendo a los valores
    $colores = array("Blanco", "Rojo", "Azul", "Amarillo");

    foreach ($colores as $valor) {
       echo "$valor <br />";
    }

    echo "<br />";
    //Ejercicio 2, accediendo a las llaves y los valores
    $persona = array("José" => "111111", "Juan" => "22222", "Carlos" => "3333333", "Marta" => "444444");


    foreach ($persona as $key => $value) {
        echo "$key => $value" . "<br />";
    }