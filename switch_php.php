<?php
echo "<br />";

// Ejercicio 1: día de la semana
/* 
1-Domingo
2-Lunes
3-Martes
4-Miércoles
5-Jueves
6-Viernes
7-Sábado
*/

$numeroDia = 9;

switch ($numeroDia) {
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
        echo "Número inválido";
        break;
}

echo "<br />";
//Ejercicio 2: Número para e impar
//Utilizar el módulo (%)

$numeroIngresado = 13;
$resultado = $numeroIngresado % 2;

switch ($resultado) {
    case 1:
        echo "NUMERO IMPAR";
        break;
    case 0:
        echo "NUMERO PAR";
        break;    
}


