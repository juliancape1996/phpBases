<?php
echo "<br />";
//Ejercicio 1: Día de la semana
/*
1-Domingo
2-Lunes
3-Martes
4-Miércoles
5-Jueves
6-Viernes
7-Sábado
*/

$numeroDia = 3;

switch($numeroDia){
    case 1: 
        echo "Domingo";
    break;
    case 2: 
        echo "Lunes";
    break;
    case 3: 
        echo "Martes";
    break;
    case 4: 
        echo "Miércoles";
    break;
    case 5: 
        echo "Jueves";
    break;
    case 6: 
        echo "Viernes";
    break;
    case 7: 
        echo "Sábado";
    break;
    default:
        echo "Número no válido";
    break;
}

echo "<br />";
//Ejercicio 2: Número par e impar
/*
-Utilizar módulo (%) para saber si es par o impar
*/

$numeroIngresado = 10;
$resultado = $numeroIngresado % 8;

switch($resultado){
    case 1:
        echo "Número IMPAR";
    break;
    case 0:
        echo "Número PAR";
    break;
    default:
        echo "Número inválido";
    break;
}
