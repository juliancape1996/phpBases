<?php

/* 
do{
//Código que se ejecuta
}while(condition)
*/

echo "<br />";

//Ejercicio 1
$max = 50;
$num = 51;

do {
    echo $num;
    $num *= 2;
    echo "<br />";
} while ($num <= $max);

//Ejercicio 2
/* do {
    echo $num;
    echo $num++;
    echo "<br />";
} while (true); */