<?php
/* 
    -Inicialización de un ciclo for o para
    for(inicializacion, condicion, incremento){
        //Código que se ejecuta
    }
*/

echo "<br />";

//Ejercicio 1: (RECOMENDADO)Imprimir numeros del 1 al 200
for($num1 = 1; $num1 <= 200; $num1++){
   /*  print $num1;
    echo "<br />";  */
}


//Ejercicio 2: Números impares hasta el 20
for ($i=1; $i <= 20 ; $i++) { 
   /*  $resultado = $i % 2;
    if($resultado > 0){
        echo "Número impar: $i";
        echo "<br />";
    } */
}

//Ejercicio 3: Inicialización por fuera del ciclo
$i=1;
for (; $i <= 20 ; $i++) { 
    /* $resultado = $i % 2;
     if($resultado > 0){
         echo "Número impar: $i";
         echo "<br />";
     } */
 }

 //Ejercicio 3: Incrementador dentro del for
$i=1;
for (; $i <= 20 ;) { 
    /* $resultado = $i % 2;
     if($resultado > 0){
         echo "Número impar: $i";
         echo "<br />";
     }

     $i++; */
 }




 //Ejercicio 5: Tablas de multiplicar (Ciclos anidados)
 for ($num3=1; $num3 <= 12; $num3++) { 
    for ($num4=1; $num4 <= 10; $num4++) { 
        echo "$num3 X $num4 = " . $num3 * $num4;
        echo "<br />";
    }
 }