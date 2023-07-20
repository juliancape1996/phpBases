<?php
    /* 
    while(condición){
        //Código a ejecutarse
    }
    */

    //Ejercicio 1: números del 1 al 30
    $numero = 1;
    while($numero <= 30){
       /*  echo $numero;
        echo "<br />"; */
        //Expliar este loop infinito
        $numero++;
    }

    //Ejercicio 2: números parea del 1 al 20
    $numero2 = 1;
    while($numero2 <= 30){
        $resultado = $numero2 % 2;
        if($resultado == 0){
            echo "Número par: $numero2";
            echo "<br />";
        }
        $numero2++;
    }