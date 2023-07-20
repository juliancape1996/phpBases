<?php

/* 
do{
    //Código que se ejecuta
}while(condición);
 */

 echo "<br />";

//Ejercicio 1
$max = 50;
$num = 51;

//Con el do while por lo menos se ejecuta una vez
do{
   /*  echo $num;
    $num *= 2;
    echo "<br />"; */
}while($num <= $max);

//Tener cuidado conla condición que siempre sea true o verdadera por que se crea un Ciclo o Loop infinito
do {
    echo $num;
    echo $num++;
    echo "<br />";
} while (true);
