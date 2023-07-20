<?php
    //Definiendo variables
    $nombre = "render2web";

    //Defincion varaibles
    $url = "www.youtube.com/render2web";
    echo "<h3>Dirección:</h3>";
    echo $url;
    echo "<br />";

    //Cambiando el valor de variable
    $url = "www.render2web.com";
    echo $url;
    echo "<br />";

    //Variables tipo string y concatenar
    $apellidos = "montoya castro";
    $mensaje = "mi primer string";
    // echo $apellidos . ": " . $mensaje;
    print "$apellidos: $mensaje";
    echo "<br />";

    //Variable tipo entero
    $estatura = 173;
    // echo 'Estatura: ' . $estatura;
    echo "Estatura: $estatura";
    echo "<br />";

    //Sumar dos valores
    /*$num1 = 10;
    $num2 = 5;
    $total = $num1 + $num2;
    echo $total;*/

    //Tipado de variables
    $num1 = "10";
    $num2 = 5;
    $total = $num1 + $num2;
    echo $total;


    //Introducción rápida a las variables
    function restar()
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    }

    //No se puede redeclarar funciones
   /*  function restar()
    {
        $num5 = 7;
        $num6 = 4;
        $totalResta = $num5 - $num6;
        echo $totalResta;
    }

    echo "<br />";
    restar(); */


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

    function mostrarContacto(){
        $contacto = "Juan Carlos";
        echo $contacto;
    }

    echo "<br />";
    mostrarContacto();
    echo "<br />";
    echo $contacto;


    //variables globales
    global $mensaje;

    $mensaje = "saludo";

    function mostrarContacto3(){
        global $mensaje;
        echo $mensaje;
    }

    echo "<br />";
    mostrarContacto3();
    echo "<br />";
    echo $mensaje;

    //Variables estáticas
    function contador(){
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

    //Variables superglobales
    $saludo4;
    $saludo4 = "Bienvenidos";
    echo $GLOBALS['saludo4'] . "<br />";

    //Variables super globales predefinidas
    echo "Nombre archivo: " . $_SERVER['PHP_SELF'];

    echo "<br />";

    //Variables de variables
    $persona = "José Andrés Montoya";
    $hombre = "persona";
    $genero = "hombre";

    /* echo $hombre;
    echo "<br />";
    echo $persona; */

    echo "<br />";
    echo $$hombre;
    echo "<br />";
    echo $$$genero;

    //error_reporting(E_ALL ^ E_NOTICE);
    //Variables o métodos para variables predefinidos
    $division = 4/0;
    //echo $php_errormsg;
    $err = error_get_last();
    var_export($err);

    //Variable setead isset
    echo "<br />";
    $telefono = 3258963214;
    echo $telefono;

    echo isset($telefono) ? "Variable definida" : "Variable indefinida" ;




?>