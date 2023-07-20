<?php
    /*
    -Inicialización de ciclo for o for loop
    for(inicializacion, condicion, incremento){
        //Aquí el código a ejecutarse
    }
    */

    echo "<br />";
    
    //Ejercicio 1: (RECOMENDADO)Imprimir números del 1 al 200 -- Explicar peligro si no tiene incremento, en este caso la condición nunca sería falsa se crea loop infinito
    for($num1 = 0; $num1 <= 200; $num1++){
       //print $num1;
       //echo "<br />";
    }

    //Ejercicio 2: (RECOMENDADO)Números impares hasta el 20
    for($num2 = 1; $num2 <= 20; $num2++){
        
        $resultado = $num2 % 2;
        if($resultado > 0){
           /*  echo "Número impar: $num2";
            echo "<br />"; */
        }
    }
    
    //Ejercicio 3: Inicialización por fuera del ciclo
    $num2 = 1;
    for(; $num2 <= 20; $num2++){
        
        $resultado = $num2 % 2;
        if($resultado > 0){
           /*  echo "Número impar: $num2";
            echo "<br />"; */
        }
    }

    //Ejercicio 4: Inicialización por fuera del ciclo
    $num2 = 1;
    for(; $num2 <= 20;){
        
        $resultado = $num2 % 2;
        if($resultado > 0){
          /*   echo "Número impar: $num2";
            echo "<br />"; */
        }
    
        $num2++;
    }


    //Ejercicio 5: Tablas de multiplicar    
    for($num3 = 1; $num3 <= 12;  $num3++){        
        for($num4 = 1; $num4 <= 10; $num4++){
            echo "$num3 X $num4 = " . $num3 * $num4;
            echo "<br />";
        }  
    }