<?php

    //Try catch
   /*  try {

        //Aquí un error en este bloque

    } catch (Exception $e) {
        //Salta aquí si en el bloque de arriba hay un error

    } */
    echo "<br />";
    //Ejemplo 1
    function dividir($x, $y) : int{

        if($y <= 0){
            throw new Exception("Error, Ha ocurrido una división por 0");
        }

        $resultado = $x / $y;
        return $resultado;
    }

    try {
        
        echo dividir(10, 0);

    } catch (Exception $e) {
        
        echo "Capturada una excepción: " .$e->getMessage();
        echo "<br />";

    }

    /* echo "Continua ejecución del programa"; */

    //En este no tenemos control porque está por fuera del try
    /* echo dividir(10, 0); */
    echo "Continua ejecución del programa";