<?php

    /* 
    Else if nos permite evaluar varias condiciones y se cumplirá una de ellas
    La sentencia elseif es ejecutada solamente si la expresión if precedente y cualquiera de las expresiones elseif precedentes son evaluadas como FALSE, y la expresión elseif actual se evalúa como TRUE. 
     */

     echo "<br />";

    //  Ejercicio 1
    $num1 = 8;
    $num2 = 10;


    /* if($num1 > $num2){
        echo "$num1 es MAYOR que $num2";
    } else if($num1 == $num2){
        echo "$num1 es IGUAL que $num2";
    } else if($num1 == $num2){
        echo "$num1 es IGUAL que $num2";
    }else{
        echo "$num1 es MENOR que $num2";
    } */

    //Ejercicio 2
    if($num1 > $num2)
        echo "$num1 es MAYOR que $num2";
    else if($num1 == $num2)
        echo "$num1 es IGUAL que $num2";
    else if($num1 == $num2)
        echo "$num1 es IGUAL que $num2";
    else
        echo "$num1 es MENOR que $num2";
    
    echo "<br />";
    //Diferencia else if con el if
    $a = true;
    $b = true;
    $c = true;

    if($a == true){
        echo "a: $a";
    }elseif($b == true){
        echo "b: $b";
    }else{
        echo "c: $c";
    }


    echo "<br />";
    //Con if normales
    if($a == true){
        echo "a: $a";
    }

    if($b == true){
        echo "b: $b";
    }

    if($c == true){
        echo "c: $c";
    }