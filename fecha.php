<?php
    //date(format, timestamp)
    //Documentación: https://www.php.net/manual/es/function.date.php

    echo "<br />";
    //Ejercicio 1: Imprimir fecha actual
    $fechaActual = date("d-m-y");
    echo $fechaActual;

    echo "<br />";
    //Ejercicio 2
    $fechaActual = date("D-M-Y");
    echo $fechaActual;

    echo "<br />";
    //Ejercicio 1: con hora
    $fechaActual = date("d-m-y h:i:s:a");
    echo $fechaActual;

    echo "<br />";
    //Ejercicio 3 con hora
    $fechaActual = date("D-M-Y H:I:S:A");
    echo $fechaActual;

    echo "<br />";
    //Obtener tiempo en milisegundos
    $tiempoMilisegundos = time();
    echo $tiempoMilisegundos;

    echo "<br />";
    //Incrementar tiempo en milisegundos
    $tiempo = time() + 1000;
    echo "Fecha actual: " . date("d-m-y h:i:s:a", $tiempo);

    echo "<br />";
    //Leer timestamp
    $fechaCompleta = getdate();
    var_dump($fechaCompleta);

    foreach ($fechaCompleta as $key => $value) {
        echo "$key => $value";
        echo "<br />";
    }

    //Control total sobre los elementos del timestamp para usarlos como queramos
    echo "Día de la semana: " . $fechaCompleta["weekday"];
    echo "<br />";

    //Opción 2:
    echo "Día de la semana: " . getdate()["weekday"];
    echo "<br />";

    echo "Día de la semana: " . getdate()["month"];
    echo "<br />";

    echo "Día de la semana: " . getdate()["year"];
    echo "<br />";

    //Funciones para trabajar con fechas
    echo date_create("now")->format("Y-m-d H:is");
    echo "<br />";

    //Sumar un día
    echo date_create("+1 day")->format("Y-m-d H:is");
    echo "<br />";

    //Restar un día
    echo date_create("-1 day")->format("Y-m-d H:is");
    echo "<br />";

    //Convertir un string a fecha (Debe tener un formato válido)
    $string = "2020-11-24 22:07:00";
    $convertir = strtotime($string);
    //Ejemplo uno formateando con guion
    echo date("d-M-yy H:i:s", $convertir);

    echo "<br />";
    //Ejemplo dos formateando con puntos
    echo date("d:M:yy H:i:s", $convertir);

    echo "<br />";
    //Obtener tiempo por zona
    //1-Obtener zona actual
    echo date_default_timezone_get();
    
    echo "<br />";
    //Formatear presentaciónde fecha
    echo date("d/m/Y h:i:s a");

    //Configurar zona por defecto
    date_default_timezone_set("America/Bogota");
    echo "<br />";
    echo date_default_timezone_get();
    echo "<br />";
    //Formatear presentaciónde fecha
    echo date("d/m/Y H:i:s a");

    echo "<br />";
    //Mostar la diferencia de tiempo
    $fechaA = time();
    //Retrasa la ejecución del programa durante unos segundos determinados
    /* sleep(20); */
    $fechaB = time();
    $diferencia = ($fechaB - $fechaA) / 60;
    echo $diferencia;


    //Obtener la diferencia de dos fechas
    $fechaInicial = date_create("2020-11-10 20:12:05");

    $fechaFinal = date_create("2020-11-15 21:14:10");

    $diferencia = date_diff($fechaFinal, $fechaInicial);

    echo "<br />";
    // print_r($diferencia);


    //Crear una fecha con mktime
    //La función mktime() retorna el timestap Unix para una fecha.La fecha timestamp contiene el  la eche Unix (January 1 1970 00:00:00 GMT)y la fecha determinada.
    
    echo "<br />";
    //Ejemplo creando fecha a partir de números en el mktime
    $d=mktime(10, 15, 58, 8, 12, 2011);
    echo "Fecha creación: " . date("Y-m-d h:i:sa", $d);
    



