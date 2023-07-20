<?php
    /*
        -Integers o enteros son números
        -No continen decimales
        -Pueden ser positivos o negativos
        -Puede contener números octales(base 8) hexadecimales(base 16) y binarios (base 2)
    */
    echo "<br />";
    echo "------------ENTEROS------------";
    echo "<br />";
    $puntaje = 120;
    echo $puntaje;

    echo "<br />";
    //Hexadecimal
    $numHexa = 0x9687FE;
    echo $numHexa;

    echo "<br />";
    //Conversión de string a entero
    $puntaje = 20;
    $total = "120" + $puntaje;
    echo $total;

    echo "<br />";
    //Números negativos
    $puntajeTotal = 8 - 20;
    echo $puntajeTotal;

    echo "<br />";
    //Obtener tamaño de entero (Determinado por el sistema)
    echo PHP_INT_SIZE;

    echo "<br />";
    //Obtener mínimo numero entero (Determinado por el sistema)
    echo PHP_INT_MIN;

    echo "<br />";
    //Obtener máximo numero entero (Determinado por el sistema)
    echo PHP_INT_MAX;


    echo "<br />";
    /*
    -Decimales son números reales
    -Se escriben con punto (.)
    -Se pueden redondear a través del méotdo round()
    -Pueden ser negativos
    */
    echo "------------DECIMALES------------";

    //Definir decimales
    $pagoTotal = 102.45;
    echo "<br />";
    echo $pagoTotal;

    //Definir decimales
    $saldoPendiente = -56.12;
    echo "<br />";
    echo $saldoPendiente;

    //Redondeando
    $puntaje = 48.49;
    echo "<br />";
    echo round($puntaje);

    echo "<br />";
     //Comparando decimales con precición 0.1
     $precio = 1.87;
     $estimado = 1.97;
     echo "<br />";
     echo (abs($precio - $estimado) < 0.1) ? "PAGA" : "NO PAGA";



     ///Booleanos
     /*
        -Verdadero o false: true/false o TRUE/FALSE
        -No son case sensitive
        -Cuando se impriment con echo true=1 false=0
        -Para los valores enteros el 0 es false y cualquier otro valor es true
        -Para los valores string el 0 es false y cualquier otro valor es true
        -Son usados en condiciones para validar algunas cosas
     */
    echo "<br />";
     echo "------------BOOLEANAS------------";
    echo "<br />";
     //Definiendo variables booleanas
     $puedeAcceder = true;
     $validado = false;

     echo ($puedeAcceder) ? "Verdadero" : "Falso";
     echo "<br />";
     echo ($validado) ? "Verdadero" : "Falso";
     echo "<br />";

     //Imprimiendo booleanas
     echo "Verdadero: " . $puedeAcceder . "<br />";
     echo "False: " . $puedeAcceder . "<br />";

     echo "<br />";
     //Usando strings como booleano
     $estaLogueado = true;
     $inicioSesion = "José Montoya";
     echo ($estaLogueado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";

     echo "<br />";
     //Usando entero como booleano     
     $tipoUsuario = 0;
     echo ($tipoUsuario) ? "Ingresa" : "No ingresa";

     echo "<br />";
     echo "------------STRINGS------------";
     echo "<br />";     
     /*
      -Los strings se definen en doble o unica comilla
      -Las comillas dobles pueden interpolar variables, las comillas simples no
      -Aunque no hay limite en general para una variables string, este si está definido por el sistema
      -Se deben escapar los caracteres de comilla doble y otros caracteres
      -Para manipular y realizar tareas sobre los strings existen varios métodos
     */

     //Definiendo variables STRINGS
     $nombre = "Jose andres";
     $apellidos = 'Montoya';

     echo "$nombre y $apellidos";
     
     echo "<br />";
     //Combinando strings
     $nombre2 =  $nombre . " - " . $apellidos;
     echo $nombre2;

     echo "<br />";
     //Escapando caracteres con contrabarra backslash
     $nombre3 = "Ejemplo de caracter \"especial\"";
     echo $nombre3;

     echo "<br />";
     //Introducción a los métodos para operaciones con string, obtener longitud de un string: strlen
     $nombre4 = "Carlo Alberto Morales";
     echo strlen($nombre4);

     echo "<br />";
     echo "------------NULL------------";
     echo "<br />"; 
     //NULL
     /*
        -NULL no es case sensitive null/NULL es lo mismo
        -Es usualmente usado para inicializar un variable conun valor vacío
        -Usa métodos como unset() y is_null
     */

     $documento = null;
     echo $documento;
     echo ($documento) ? "Contiene valor" : "Está vacío";

     //Validar si la variables es null o no
     echo "<br />";
     $documento = "0";    
     echo (!is_null($documento)) ? "Contiene valor" : "Está vacío";


     //Borrar la variable del programa y memoria
     unset($documento);
     echo (!is_null($documento)) ? "Contiene valor" : "Está vacío";







?>