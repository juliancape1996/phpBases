<?php
     //Para parte 2
     //Para validar todos los tipos de datos
     declare(strict_types=1);

    /* 
        Funciones en PHP
        function nombre_funcion(parametro1, parametro2, .....){

            Instruccion1;
            Inttruccion2;

            return valor;
        }
     */

     echo "<br />";
     //Definiendo funciones - Ejemplo 1
     function sumaNumeros(){
         $num1 = 2;
         $num2 = 3;
         echo $num1 + $num2;
     }

     sumaNumeros();

     echo "<br />";
     //Ejemplo 2: Imprimir números impares
     function numerosImpares($tope){
         for ($i=0; $i < $tope; $i++) { 
             if($i % 2 > 0){
                echo "Número: $i";
                echo "<br />";
             }
         }
     }

     /* numerosImpares(20); */
     //Probar con un número en string
     numerosImpares("20");

     //Ejemplo 3
     function suma($num1, $num2){
        return ($num1 + $num2);
     }

     echo suma(12, 10);

     echo "<br />";
     //Pasando parámetros a funciones
     function imprimirImpares(int $limite, $saltarNumero){
        for ($i=0; $i < $limite; $i++) { 
            if($i == $saltarNumero){
                continue;
            }

            if($i % 2 != 0){
                echo "Número impar: $i";
                echo "<br />";
            }
        }
     }

     //Llamar a la función
     /* imprimirImpares(30, "5"); */
     /* imprimirImpares("30", "5"); */
   /*   imprimirImpares(30); */


     //Retornando valores de función
     function multiplica($x, $y) : int {
        $valor = $x * $y;
        return $valor;
     }

     echo "Resultado: " . multiplica(2, 3);
     echo "<br />";


     //Arrary de números impares
     function arrayImpares($limite) : array {
        $retornaArray = [];
        for ($i=0; $i <= $limite ; $i++) { 
            if ($i % 2 != 0) {
                $retornaArray[] = $i;
            }            
        }
        return $retornaArray;
     }

     $numsImpares = arrayImpares(20);
     print_r($numsImpares);


     //Ejemplo 4
     //Parámetros por defecto y opcionales
     echo "<br />";
     //Pasando parámetros a funciones, SI SE ESPECIFICA EL VALOR POR DEFECTO DEL PAREMETRO DEBE IR AL FINAL
     function imprimirImpares3($saltarNumero = -1, int $limite){
        for ($i=0; $i < $limite; $i++) { 
            if($i == $saltarNumero){
                continue;
            }

            if($i % 2 != 0){
                echo "Número impar: $i";
                echo "<br />";
            }
        }
     }

     echo "<br />";
    /*  imprimirImpares3(10); */


     //Funciones dinámicas, son así porque se pueden llamar desde una variabel
     function suma3($x, $y) : int{
        return $x + $y;
     }

     function resta3($x, $y) : int{
        return $x - $y;
     }


     $funcionSuma = "resta3";
     echo "<br />";
     //Imprimir este 1
     echo $funcionSuma;

     echo "<br />";
     //Imprimir este 2
     echo $funcionSuma(3,5);



     ///Funciones anonimas (NO TIENEN UN NOMBRE DE FUNCIÓN)
     $funcionDivide = function($a, $b) : int{
         $total = $a / $b;
         return $total;
     };

     echo "<br />";
     echo $funcionDivide(10, 2);
     echo "<br />";


     //Ejemplo 2: Funciones anónimas, hacer ejemplo sin use y con use
     $nombre = "josé andrés montoya";

     $imprimirNombre = function() use($nombre){
         echo $nombre;
     };

     $imprimirNombre();

     //Pasando argumentos como referencias, PONER EL & en $total4
     $total4 = 0;

     function suma4($x, $y, $total4 = null){
        $total4 = $x + $y;
     }

     echo "<br />";
     echo $total4;
     echo "<br />";
     suma4(2,4, $total4);
     echo "<br />";
     echo $total4;


     //ULTIMO - Explicar aquí como leer las funciones

