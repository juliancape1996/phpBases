<?php

    /*
    -Los nombres de espacios no son case sensitive
    -Los espacios de nombres se utilizan para evitar la colisión de nombres entre otras bibliotecas
    -Usa la palabra reservada namespace
    -Se pueden usar para definir: clases, interfaces, funciones y constantes
    -Los nombres de espacios siempre van en la primera línea
    -Usar el caracter contrabarra (\) para referirse a un subdirectorio o nombre de archivo
    */


    //Incluir namespace
    include "ConstantesNameSpace.php";

    //Acceder al namespace
    echo constante1\NOMBRE_ARCHIVO;

?>