<?php

    function manejador_errores_personalizado($excepcion){
        echo "Excepción capturada: " .$excepcion->getMessage();
    }

    set_exception_handler("manejador_errores_personalizado");

    //No hay necesidad de usar try catch
    //Ejemplo 1
   /*  throw new Exception("Error, ha ocurrido una división por 0"); */

   //Ejemplo 2
   function dividir($x, $y) :int{
    if($y <= 0){
        throw new Exception("Error, ha ocurrido una división por CERO");
    }

    $resultado = $x / $y;
    return $resultado;

    }

    dividir(12, 0);