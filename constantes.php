<?php

    //Constantes
    /*
    1- No se necesita usar $
    2- Solo se definen con el método define
    3- Se asignan una única vez
    4- El alcance SCOPE, es global se puede acceder desde cualquier parte   
   */

    //Definiendo una constante y su valor
    define ("CUOTA", 200000);
    $valorCuota = CUOTA;
    echo "El valor de la cuota: $valorCuota";
    echo "<br />";
    echo "El valor de la cuota: CUOTA";
    echo "<br />";
    echo "El valor de la cuota: " . CUOTA . "<br />";

    //No podemos redefinir una constante
    echo "<br />";
    define ("CUOTA", 500000);
    echo "El valor de la cuota: $valorCuota";

    //Acceder a con el método constant
    echo constant('CUOTA');
    
    echo "<br />";
    //No podemos usar ISSET en constantes
    define ('PI', '');
    //echo isset(PI);
    echo PI;

    //Buenas prácticas en constantes MAYÚSCULAS
    define('VERSION', 7);

    //Usar el mismo nombre de la variable y la misma convención de nombre
    $nombre = "José Montoya";
    define(NOMBRE, 'José Montoya');

    //No usar contantes como:
    define(__NOMBRE__, 'José Montoya');

     //No usar nombres de contantes con guión bajo:
     define(_1nombre, 'José Montoya');


     //Magic constants
     //https://www.php.net/manual/es/language.constants.predefined.php

     echo __LINE__ . "<br />";
     echo __DIR__;

?>