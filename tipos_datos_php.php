<?php
    /*
    -Integers o enteros son números
    -No contienen decimales
    -Pueden ser positivos o negativos
    -Puede contener números octales(base 8), hexadecimales (base 16) y binarios (base 2)    
    */

    echo "<br />";
    echo "---------------ENTEROS--------";
    echo "<br />";
    $puntaje = 120;
    echo $puntaje;

    echo "<br />";
    //Hexadecimal
    $numHexa = 0x6FFF6;
    echo $numHexa;

    echo "<br />";
    //Convertir string a entero
    $puntaje = 20;
    $total = "120" + $puntaje;
    echo $total;

    echo "<br />";
    //Número negativos
    $puntajeTotal = 8 - 20;
    echo $puntajeTotal;

    echo "<br />";
    //Obtener tamaño de un entero (Determinado por el sistema)
    echo PHP_INT_SIZE;

    echo "<br />";
    //Obtener mínimo número entero (Determinado por el sistema)
    echo PHP_INT_MIN;

    echo "<br />";
    //Obtener máximo número entero (Determinado por el sistema)
    echo PHP_INT_MAX;

    echo "<br />";
    echo "---------------DECIMALES--------";
    echo "<br />";
    //Definir decimales
    /*
    -Decimales son numeros reales
    -Se escriben con punto (.)
    -Se pueden redondear con el método round()
    -Pueden ser negativos
    */
    $pagoTotal = 102.45;
    echo "<br />";
    echo $pagoTotal;

    $saldoPendiente = -56.23;
    echo "<br />";
    echo $saldoPendiente;

    //Redondear decimales
    $puntaje = 48.51;
    echo "<br />";
    echo round($puntaje);


    //Comparar decimales con precisión 0.1
    $precio = 1.87;
    $estimado = 1.98;
    echo "<br />";
    echo (abs($precio - $estimado) < 0.1) ? "PAGA" : "NO PAGA";

    echo "<br />";
    echo "---------------BOOLEANOS--------";
    echo "<br />";
    //Definir booleanos
    /*
    -Verdadero o false: true/false o TRUE/FALSE
    -No son case sensitive
    -Cuanso se imprime con echo true=1 false=0
    -Para los valore enteros el 0 es false y cualquier otro valor diferente de 0 es true
    -Para los valore strint el 0 es false y cualquier otro valor diferente de 0 es true
    -Son usados en condiciones para validar cosas
    */
    $puedeAcceder = true;
    $validado = false;

    echo ($puedeAcceder) ? "VERDADERO" : "FALSO";
    echo "<br />";
    echo ($validado) ? "VERDADERO" : "FALSO";

    //Imprimiendo variables booleanas
    echo "<br />";
    echo "Verdadero: " . $puedeAcceder . "<br />";
    echo "<br />";
    echo "Falso: " . $validado . "<br />";

    //Como usar un string como booleano
    $estaLogueado = true;
    $inicioSesion = "0";
    echo ($estaLogueado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";

    echo "<br />";
     //Como usar un entero como booleano
     $estaLogueado = true;
     $inicioSesion = 5;
     echo ($estaLogueado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";
 
     echo "<br />";
    echo "---------------STRINGS--------";
    echo "<br />";
    //Definir strings
    /*
    -Los strings se definen en doble o comilla simple
    -Las comillas dobles pueden interpolar variables, las simples no
    -Aunque no hay limite en general para una variable string, este si está definido por el sistema
    -Se deben escapar los caracteres de comillas doble y otros caracteres
    -Se pueden realizar tareas de manipulación sobre los strings con otros métodos    
    */

    $nombre = 'José Andrés';
    $apellidos = "Montoya";

    echo "$nombre y $apellidos";

    echo "<br />";
    //Combinando strings
    $nombre2 = $nombre . " - " . $apellidos;
    echo $nombre2;

    echo "<br />";
    //Escapar caracteres con contra barra o backslash
    $nombre3 = "Ejemplo de caracter \"especial\"";
    echo $nombre3;

    echo "<br />";
    //Introducción a los métodos para operaciones con string, obtener la longitud de un string: strlen
    $nombre4 = "Carlos Alberto Morales";
    echo strlen($nombre4);


    echo "<br />";
    echo "---------------NULL--------";
    echo "<br />";    
    /*
    -NULL no es case sensitive NULL/null
    -Es usualmente usado para inicializar una variable con un valor vacío
    -Usa métodos como unset y is_null      
    */

    //Definir nulo
    $documento = null;
    echo $documento;
    echo ($documento) ? "Contiene valor" : "Sin valor";

    //Método is_null
    echo "<br />";
    $documento = null;
    echo (!is_null($documento)) ? "Contiene valor" : "Sin valor";

    //Borrar la variable del programa y memoria con unset()
    unset($documento);
    echo (!is_null($documento)) ? "Contiene valor" : "Sin valor";
  
   

?>