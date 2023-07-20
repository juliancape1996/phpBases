<?php

    //Definiendo un array
    //Probar con enteros, string y double
    $numeros = [3, 4, "6", 8.4];

    //Función para imprimir array
    var_dump($numeros);

    //Más legible
    print_r($numeros);

    //No usar echo para imprimir arrays

    echo "<br />";
    //Acceder e imprimir elemento array
    echo $numeros[3];
    echo "<br />";

    echo "<br />";
    //Imprimir valor de elemento de array sin índice
    echo "$numeros[0]";
    echo "<br />";
    echo "$numeros[1]";
    echo "<br />";
    echo "$numeros[2]";
    echo "<br />";
    echo "$numeros[3]";
    echo "<br />";

    //Definición
    /* 
    -0 o 1, etc corresponde a los índices del array
    -$numeros[0] -> corresponde al elemento del array
    -Los índices de los array's siempre empiezan en 0 no en 1
    -Los array pueden guardar cualquier tipo de dato: string, integer, double, boolean.
    -Los arrays contienen una longitud basada en el número de elementos que tenga
    -Se pueden tener array's anidados dentro de otros array's.
     */

     //Contar elementos de array
     echo "Cantidad elementos: " . count($numeros);
     echo "<br />";

     //Recorrer array con un ciclo for
     echo "<br />";
     for ($i=0; $i < count($numeros) ; $i++) { 
         echo $numeros[$i];
         echo "<br />";
         //echo "$numeros[$i]";
     }

     echo "<br />";
     //Acceder a un elemento de un array usando una constantes

     const ELEMENTO = 3;

     echo "{$numeros[ELEMENTO]}";
   
    //Cambiar los elementos de un array
    echo "<br />";
    print_r($numeros);
    echo $numeros[0] = 18;
    echo "<br />";
    echo $numeros[1] = 20;
    echo "<br />";
    echo $numeros[2] = 22;
    echo "<br />";
    echo $numeros[3] = 23;
    echo "<br />";

    print_r($numeros);


    //Cambiar el tipo de dato
    echo "<br />";
    print_r($numeros);
    echo $numeros[0] = true;
    echo "<br />";
    echo $numeros[1] = 11.58;
    echo "<br />";
    echo $numeros[2] = 22;
    echo "<br />";
    echo $numeros[3] = "render2web";
    echo "<br />";

    var_dump($numeros);

    echo "<br />";
    //Cualquier tipo de dato dentro del array indentación
    $ejemploArray = ["Jose",
                     3, 
                     true, 
                     85.32
                    ];

    print_r($ejemploArray);

    //Ciclo foreach para array
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    foreach ($meses as $value) {
       echo $value;
       echo "<br />";
    }


    //Ciclo foreach para array con contador
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    $contador = 0;

    foreach ($meses as $value) {
       /* echo $value; */      
       echo "[$contador] => $value";
       echo "<br />";
       $contador++;
    }


    //Ciclo foreach acceder a array con diferentes tipos de datos
    $meses2 = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", true, "Julio", 87.2, "Septiembre", "Octubre", "Noviembre", 48];

    $contador = 0;

    foreach ($meses2 as $value2) {
       /* echo $value; */      
       echo "[$contador] => $value2";
       echo "<br />";
       $contador++;
    }


    //Array vacío
    $nombres = [];
    echo count($nombres);
    echo "<br />";
    var_dump($nombres);
    echo "<br />";
    print_r($nombres);

    //Validar si un array está vacío
    if (empty($nombres)) {
        echo "El array está vacío";
    }

    //Agregar un valor al array
    $nombres = ['Juan'];
    var_dump($nombres);

    echo "<br />";
    //Agregar otro array a la posición 0
    $nombres[0] = ['Carlos'];
    var_dump($nombres);

    //Resetear array
    $nombres = [];
    var_dump($nombres);

    //Array dentro de array --Importante
    $array2 = [[]];
    var_dump($array2);

    //Array mezclado
    $array3 = [];
    $array3[0] = 4;
    $array3[3] = 8;
    $array3[7] = "Jon";
    $array3[12] = 17.89;

    //Si no se especifica el índice del array, el usará el último valor entero

    $array3[] = "Carlos";
    $array3[] = "Guillermo";
    var_dump($array3);

    //Cambiar el valor de un elemento dentro del array
    $array3[0] = "Antes era 1, ahora es este texto";
    foreach ($array3 as $value) {
       echo $value;
       echo "<br />";
    }


    echo "<br />";
    //Array asociativo
    $meses = [1 => "Enero", "Feb" => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"];
  
    foreach ($meses as $key => $value) {
       echo $key . " = " . $value;    
       echo "<br />";       
    }

    echo "<br />";
    //Imprimir las llaves keys de un array asociativo
    print_r(array_keys($meses));

    echo "<br />";
    //Acceder solo a las llaves (keys)
    foreach (array_keys($meses) as $key) {
        echo $key;
        echo "<br />"; 
    }

    echo "<br />";
    //Acceder solo a los valores (values)
    foreach ($meses as $value) {
        echo $value;
        echo "<br />"; 
    }

    echo "<br />";
    //Acceder a un valor en un array asociativo
    $agenda = [
                "jose" => "jose@hotmail.com",
                "martha" => "martha@hotmail.com",
                "carlos" => "carlos@hotmail.com"
            ];

    echo $agenda["martha"];

    //Al añadir un elemento en un array asocittivo se añade siempre al final

    $agenda["jon"] = "jon@yaho.es";

    var_dump($agenda);


    //Array multidimensional (Son array dentro de otros arrays)

    //Array indexado de una dimensión
    $arrayUnaDimension = [1,2,3,4,5,6];
    var_dump($arrayUnaDimension);

    //Array asociativo de una dimensión
    $agenda = [
        "jose" => "jose@hotmail.com",
        "martha" => "martha@hotmail.com",
        "carlos" => "carlos@hotmail.com"
    ];
    var_dump($agenda);

    //Array multidimensional
    $array4 = [
                [0,1,2,3,4],
                [25,26,27],
                [3,7,10,15,69]
             ];

    var_dump($array4);
    
    //Se convierte a una dimensión, se imprimen los valores por separado
    foreach ($array4 as $unoDimension) {
        var_dump($unoDimension);
    }

    foreach ($array4 as $unaDimension) {
        echo "[";
        foreach($unaDimension as $valor){
            echo $valor . ",";
        }
        echo "]";
        echo "<br />";
    }

    //Array asociativo multidimensional

    $array5 = [
                "listaEmail" => [
                    "jose" => "jose@hotmail.com",
                    "martha" => "martha@hotmail.com",
                    "carlos" => "carlos@hotmail.com" 
                ],
                "listaTelefono" => [
                    "jose" => "11111111",
                    "martha" => "22222222",
                    "carlos" => "33333333",
                    "pedro" => "444444444"
                ]
             ];
    
    echo "<br />";
    foreach ($array5 as $valoresArray) {
        foreach($valoresArray as $valor){
            echo $valor;
            echo "<br />";
        }
    }

    //Acceder a los pares llave/valor (key/value)
    echo "<br />";
    foreach ($array5 as $key => $valoresArray) {
        echo "LLaves: $key";
        echo "<br />";
        foreach($valoresArray as $valor){
            echo $valor;
            echo "<br />";
        }
    }



