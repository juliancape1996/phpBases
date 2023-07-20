<?php
    //Try catch
    /* 
        try{
            //Aquí un error en este bloque
        }catch(Excepcion $e){
            //Salta aqui si en el bloque de arriba hay un error
        }
     */

     echo "<br />";
    //  Ejemplo 1
        function dividir($x, $y) :int{
            if($y <= 0){
                throw new Exception("Error, ha ocurrido una división por 0");
            }

            $resultado = $x / $y;
            return $resultado;

        }


    try {
       echo dividir(10, 0); 
    } catch (Exception $e) {
        echo "Captura una excepción: " .$e->getMessage();
        echo "<br />";
    }


    /* echo "Continua ejecucion del programa"; */

    echo dividir(10, 0);
    echo "Continua ejecucion del programa";