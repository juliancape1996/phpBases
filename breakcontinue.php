<?php

 echo "<br />";
//Romper el ciclo infinito
$num = 1;

/* do {
   //echo $num;
   echo "<br />";

   if($num >= 400){
    break;
   }

   $num++;
} while (true);
 */

//Continue, se salta la siguiente línea y avanza hacia el próximo ciclo o loop
$num2 = 1;

while (true) {
    $resultado = $num2 % 2;

    if($resultado == 1){
        $num2++;
        continue;
    }
    //El continuo se salta esta línea por lo tanto 
    if($num2 > 10){
        break;
    }

    echo 'PARES: ' . $num2;
    echo "<br />";
    $num2++;
}
