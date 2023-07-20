<?php
    declare(strict_types = 1);
    /*
    Funciones en php
    function nombre_funcion(parametro1, parametro2, ...){
        Instruccion1;
        Instruccion2:

        return valor;
    }
    */

    echo "<br />";
    //Definiendo funciones
    function sumaNumeros(){
        $num1 = 2;
        $num2 = 3;
        echo $num1 + $num2;
    }

    //Llamar función
    sumaNumeros();


    echo "<br />";
    //Ejemplo 2: Imprimir números impares
    function numerosImpares($tope){
        for ($i=0; $i < $tope; $i++) { 
            if($i % 2 > 0){
                echo "Números: $i";
                echo "<br />";
            }
        }
    }

    //LLamar función
    /* numerosImpares(30); */
    /* numerosImpares("30"); */

    //Ejemplo 3
    function suma($num1, $num2){
        return ($num1 + $num2);
    }

    echo suma(12, 10);


    echo "<br />";
    //Ejemplo 3: Pasando parámetros a funciones
    function numerosImpares2(int $limite, $saltaNumero){
        for ($i=0; $i < $limite; $i++) { 
            if($i == $saltaNumero){
                continue;
            }

            if($i % 2 != 0){
                echo "Número impar: $i";
                echo "<br />";
            }
        }
    }

    //Llamar a la función
    /* numerosImpares2(30, 7); */
   /*  numerosImpares2(30, "7"); */
   /* numerosImpares2(30); */


   //Retornar valores de funciones
   function multiplica($x, $y) : int{
        $valor = $x * $y;
        return $valor;
   }

   echo "Resultado: " . multiplica(2, 3);
   echo "<br />";


   //Ejemplo retornando array
   function arrayImpares($limite) : array{
        $retornaArray = [];
        for ($i=0; $i < $limite; $i++) { 
            if($i % 2 != 0){
                $retornaArray[] = $i;
            }
        }
        return $retornaArray;
    }

    $numsImpares = arrayImpares(20);
    print_r($numsImpares);

    //Ejemplo 4: Parámetros por defecto y opcionales
    echo "<br />";
    function imprimirImpares3(int $limite, $saltaNumero = -1){
        for ($i=0; $i < $limite; $i++) { 
            if($i == $saltaNumero){
                continue;
            }

            if($i % 2 != 0){
                echo "Número impar: $i";
                echo "<br />";
            }
        }
    }

    echo "<br />";
    imprimirImpares3(10, 3);
    

    //Funciones dinámicas, se pueden llamar desde una variable
    function sumar3($x, $y) : int{
        return $x + $y;
    }

    function resta3($x, $y) : int{
        return $x - $y;
    }

    $funcionOperacion = "resta3";
    echo "<br />";
    echo $funcionOperacion(3,5);


    //Funciones anónimas
    $nombre = "josé andrés montoya";

    $imprimirNombre = function() use($nombre){
        echo $nombre;
    };

    echo "<br />";
    $imprimirNombre();


    //Pasando argumentos como referencias

    $total4 = 0;
    
    function suma4($x, $y, &$total4 = null){
        $total4 = $x + $y;
    }

    echo "<br />";
    echo $total4;
    echo "<br />";
    suma4(2, 4, $total4);
    echo "<br />";
    echo $total4;


    //Funciones propias de PHP
    //https://www.php.net/manual/es/funcref.php
  




