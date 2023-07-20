<?php

    function manejador_errores_personalizado($excepcion){
        echo "Excepción capturada: " . $excepcion->getMessage();
        echo "<br />";
    }

    set_exception_handler("manejador_errores_personalizado");

    //No hay necesidades de usar try catch, de esta forma el manejador es por parte nuestra y se llama directamente para cada excepción
    //Ejemplo 1
    // throw new Exception("Excepción controlada");

    //Ejemplo1: Pasar la función dividir para acá
    echo "<br />";    
    try {
        throw new Exception("Excepción capturada");
    } finally{
        echo "Esta línea se ejecuta siempre antes de todo";
    }
