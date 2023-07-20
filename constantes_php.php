<?php

    //Constantes
    /* 
    1-No se necesita usar $
    2-Solo se definen con el método define
    3-Se asignan una única vez
    4-El alcance o SCOPE es global se puede acceder desde cualquier lugar a las constantes
    */

    //Definir una constantes y su valor
    define('CUOTA', 200000);
    $valorCuota = CUOTA;
    echo "El valor de la cuota: $valorCuota";
    echo "<br />";
    echo "El valor de la cuota: CUOTA";
    echo "<br />";
    echo "El valor de la cuota: " . CUOTA . "<br />";


    //No podemos redefinir constantes
   /*  define('CUOTA', 500000);
    echo "<br />";
    echo "El valor de la cuota: " . CUOTA . "<br />"; */
    echo "<br />";
    //Acceder con el método constant
    echo constant('CUOTA');

    //No podemos usar isset
  /*   define('VERSION', '');
    echo isset(VERSION); */

    //Buenas prácticas con CONSTANTES
    //MAYÚSCULAS
    define('NOMBRE', 'José Montoya');

    //No usar nombres de constantes como
    define('__VALOR__', 'Valor');

    //No usar nombres de constantes con guión bajo
   /*  define('_valor', 'Valor'); */

   //Magic constantes
   //https://www.php.net/manual/es/language.constants.predefined.php
   echo "<br />";
   echo __LINE__ . "<br />";
   echo __DIR__;
   


?>