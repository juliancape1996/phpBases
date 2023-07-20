<?php
    // Definiendo variables 1-Nombre 2-Valor
    $nombre = "render2web";

    // Definición de variables
    $url = "www.youtube.com/render2web";
    echo "<h3>Dirección</h3>";
    echo $url; //Imprimiendo la variable

    // Cambiando valor de variable
    $url = "www.render2web.com";
    echo "<br />";
    echo $url;
    echo "<br />";

    // Variables tipo string y concatenar
    $apellidos = "montoya castro";
    $mensaje = "Mi primer string";
    echo $apellidos . ": " . $mensaje;
    echo "<br />";
    print "$apellidos: $mensaje"; //Probar este mismo con comilla simple
    echo "<br />";

    // Variables tipo entero
    $estatura = 173;
    echo 'Estatura: ' . $estatura;
    echo "<br />";
    echo "Estatura: $estatura";
    echo "<br />";

    $estatura = 17.3;  
    echo 'Estatura: ' . $estatura; 
    echo "Estatura: $estatura";
    echo "<br />";


    //Sumar dos valores
    $num1 = 10;
    $num2 = 5;
    $total = $num1 + $num2;
    echo $total;
    echo "<br />";

    //Tipado de variables;

    /* $num3 = 4;
    $num4 = 3;
    $multiplica = $num3 * $num4;
    echo $multiplica; */

    $num3 = "4";
    $num4 = 3;
    $multiplica = $num3 * $num4;
    echo $multiplica;
    echo "<br />";

    //Introducción a las funciones
    function restar() 
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    }

    //No se puede redeclarar una función
    /* function restar() 
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    } */

    //Mover esta y mostrar que no importa si esta arriba o abajo la función se ejecuta
    restar();

    //Las variables son case sensitive
    $nombre = "Jose";
    $Nombre = "Alberto";
    echo "<br />";

    echo "El nombre 1 es: $nombre, y el nombre 2 es: $Nombre";

    //Funciones no son case sensitive
    function restar2() 
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    }
    echo "<br />";
    RESTAR2();


    //Variable local SCOPE(Alcance)
    $contacto = "Jon Doe";

    function mostrarContacto()
    {
        $contacto = "Juan Carlos";
        echo $contacto;
    }

    echo "<br />";

    mostrarContacto();
    echo "<br />";
    echo $contacto;


     //Ejemplo 2
     $mensaje = "Saludo";

     function mostrarContacto2()
     {         
         echo $mensaje;
     }
 
     echo "<br />";
 
     mostrarContacto2();



     //Variable global
     global $mensaje;

     $mensaje = "Saludo";

     function mostrarContacto3()
     {     
         //Si quito el global aquí sería otra variable diferente
         global $mensaje;
         $mensaje = "Saludo 2";    
         echo $mensaje;
     }
 
     echo "<br />";
 
     mostrarContacto3();
     echo $mensaje;

     //Variable estática
     function contador()
     {     
         //probar sin la palabra static primero, despues con static
         static $num = 1;
         echo $num;
         $num = $num + 1;
     }
 
     echo "<br />";
 
     contador();
     echo "<br />";
     contador();
     echo "<br />";
     contador();
     echo "<br />";
     contador();

     echo "<br />";

     //Variables super globales
     global $saludo4;
     $saludo4 = "Bienvenidos";

     echo $GLOBALS['saludo4'] . "<br />";

     //Mostrar las variables super globales prefefinidas
     //php.net/manual/es/language.variables.superglobals.php

     //Ejemplo super globales predefinidas
     echo "Nombre archivo: " . $_SERVER['PHP_SELF'];
     
     echo "<br />";
     //Variable de variables hacer el ejemplo con 2 y después 3 niveles de acceso $$$
     $persona = "José Montoya";
     $hombre = "persona";
     $genero = "hombre";

     echo $genero;
     echo "<br />";
     echo $$genero;
     echo "<br />";
     echo $$$genero;

     //Variables predefinidas
     $division = 4/0;
     //Probar con esta
     //echo $php_errormsg;
     //Despues probar con esta
     $err = error_get_last();
     var_export($err);

    
     //$y = $x;
     /* $err = error_get_last();
     var_export($err); */

     //error_reporting(E_ALL ^ E_NOTICE);
     //Variable seteada isset
     echo "<br />";
     $telefono;
     echo $telefono;

     //Operador ternario
     echo isset($telefono) ? "Variable definida" : "Variable NO definida";

?>