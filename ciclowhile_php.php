<?php
/* 
    while(condición){
        //El código que se ejecuta
    }
*/
echo "<br />";
//Ejercicio 1: imprimier númerso del 1 al 30
$numero = 1;
while ($numero <= 30) {
   /*  echo $numero;
    echo "<br />"; */
    //Muy importante el incrementador
    $numero++;
}


//Ejercicio 2: números pares del 1 al 20
$numero2 = 1;

while ($numero2 <= 20) {
    $resultado = $numero2 % 2;
    if($resultado == 0){
        echo "Número par: $numero2";
        echo "<br />";
    }
    $numero2++;
}