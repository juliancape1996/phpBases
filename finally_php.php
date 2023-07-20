<?php

    function manejador_errores_personalizado($excepcion){
        echo "Excepción capturada: " .$excepcion->getMessage();
    }

    set_exception_handler("manejador_errores_personalizado");
  

   //Ejemplo 1
   echo "<br />";

   try {
    /* throw new Exception("Excepción provocada"); */
   } finally {
      echo "Esta línea se ejecuta siempre";
   }
  