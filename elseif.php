<?php
    /* 
    Else if nos permite evaluar varias condiciones y se cumplirá una de ellas
    La sentencia elseif es ejecutada solamente si la expresión if precedente y cualquiera de las expresiones elseif precedentes son evaluadas como FALSE, y la expresión elseif actual se evalúa como TRUE.
     */
    echo "<br />";

    // Ejercicio 1
    $num1 = 8;
    $num2 = 10;

    if ($num1 > $num2) {
        echo "$num1 es MAYOR que $num2";
    } else if ($num1 == $num2) {
        echo "$num1 es IGUAL que $num2";
    } else {
        echo "$num1 es MENOR que $num2";
    }


    //Ejercicio 2 sin llaves y else if, separado
    if ($num1 > $num2)
        echo "$num1 es MAYOR que $num2";
     else if ($num1 == $num2) 
        echo "$num1 es IGUAL que $num2";
     else 
        echo "$num1 es MENOR que $num2";

    echo "<br />";

    //Explicar diferencia de else if con if
    $a = true;
    $b = true;
    $c = true;

    if ($a == true)
    {
        echo "a: $a";
        echo "<br />";
    }
    else if ($b == true)
    {
        echo "b: $b";
        echo "<br />";
    }
    else
    {
        echo "c: $a";
        echo "<br />";
    }

    echo "<br />";
    //Ejemplo con if
    if ($a == true)
    {
        echo "a: $a";
        echo "<br />";
    }

    if ($b == true)
    {
        echo "b: $b";
        echo "<br />";
    }

    if ($c == true)
    {
        echo "c: $c";
        echo "<br />";
    }

