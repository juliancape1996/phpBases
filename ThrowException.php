<?php

    function manejador_errores_personalizado($excepcion){
        echo "Excepción capturada: " . $excepcion->getMessage();
        echo "<br />";
    }

    set_exception_handler("manejador_errores_personalizado");

    //No hay necesidades de usar try catch, de esta forma el manejador es por parte nuestra y se llama directamente para cada excepción
    //Ejemplo 1
    // throw new Exception("Excepción controlada");

    //Ejemplo2: Pasar la función dividir para acá
    echo "<br />";    
    function dividir($x, $y) : int{

        if($y <= 0){
            throw new Exception("Error, Ha ocurrido una división por 0");
        }

        $resultado = $x / $y;
        return $resultado;
    }

    dividir(4, 0);
