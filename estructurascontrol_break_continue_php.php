<?php

    echo "<br />";

    //Ejercicio 1
    $num = 1;

   /*  do {
        echo $num;
        echo "<br />";

        if($num >= 400){
            break;
        }
        $num++;
    } while (true); */

    //Continue, se salta a la siguiente línea y avanza hacia el próximo ciclo o loop
    $num2 = 1;

    while (true) {
        $resulta = $num2 % 2;

        if($resulta == 1){
            $num2++;
            continue;
        }

        if($num2 > 10){
            break;
        }

        echo "PARES: " . $num2;
        echo "<br />";
        $num2++;
    }