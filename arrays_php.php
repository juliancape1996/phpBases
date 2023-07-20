<?php

    //Definiendo un array, los arrays empiezan en cuanto a posición en 0, array indexado
    $numeros = [3, "4", true, 8.54];

    //Función para imprimir arrays
    var_dump($numeros);

    //Más legible
    print_r($numeros);

    //No debemos usar echo para imprimir array's

    echo "<br />";
    //Acceder e imprimir elemento del array
    echo $numeros[2];

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

     //Contar los elementos de un array
     echo "Cantidad de elementos: " . count($numeros);

     echo "<br />";
     //Recorrer array con un ciclo for
     for ($i=0; $i < count($numeros); $i++) { 
        echo $numeros[$i];
        echo "<br />";
     }

     echo "<br />";
     //Accedr a un elemetno de array con una costante
     const ELEMENTO = 3;
     echo "{$numeros[ELEMENTO]}";


     echo "<br />";
     //Cambiar los elementos de un array
     print_r($numeros);
     echo $numeros[0] = 18;
     echo "<br />";
     print_r($numeros);


     echo "<br />";
     //Cambiar el tipo de datos
     print_r($numeros);
     echo $numeros[0] = true;
     echo "<br />";
     echo $numeros[1] = 11.59;

     var_dump($numeros);

     echo "<br />";
     //Cualquier tipo de dato en el array - sintáxis
     $ejemploArray = ["José", 
                        3, 
                        85.32, 
                        true
                    ];

    print_r($ejemploArray);

    echo "<br />";
    //Ciclo foreach para array
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    foreach ($meses as $valor) {
        echo $valor;
        echo "<br />";
    }


    echo "<br />";
    //Ciclo foreach para array con contador
    $meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

    $contador = 0;

    foreach ($meses as $valor) {
       /*  echo $valor; */
       echo "[$contador] => $valor";
       echo "<br />";
       $contador++;
    }


    echo "<br />";
    //Ciclo foreach para array con contador usando diferentes tipos de datos
    $meses = ["Enero", "Febrero", true, "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", 17.25, "Noviembre", 12];
   
    $contador = 0;

    foreach ($meses as $valor) {       
       echo "[$contador] => $valor";
       echo "<br />";
       $contador++;
    }

    echo "<br />";
    //Array vacío
    $nombres = [];
    echo count($nombres);
    var_dump($nombres);
    print_r($nombres);

    echo "<br />";
    //Validar un array vacío
    if (empty($nombres)) {
       echo "Array vacío";
    }

    echo "<br />";
    //Agregar otro array a la posición 0
    $nombres[0] = ['Carlos'];
    var_dump($nombres);

    echo "<br />";
    //resetear array
    $nombres = [];
    var_dump($nombres);

    echo "<br />";
    //Array dentro de otro array --Importante
    $array2 = [[]];
    var_dump($array2);


    //Array mezclados
    $array3 = [];
    $array3[0] = 4;
    $array3[3] = 98;
    $array3[7] = "Jon";
    $array3[12] = 17.89;

    var_dump($array3);

     //Si no se especifica el índice del array, el usará el último valor entero
    $array3[] = "Carlos";
    $array3[] = "Guillermo";
    var_dump($array3);

    //Cambiar el valor de un elemento dentro del array
    $array3[0] = "Antes era 4, ahora es este texto";
    var_dump($array3);

    foreach($array3 as $valor){
        echo $valor;
        echo "<br />";
    }

    echo "<br />";
    //Array asociativos
    $meses = [1 => "Enero", "Feb" => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"];

    //Recorrer o acceder a array asociativo
    foreach ($meses as $key => $value) {
        echo $key . " = " . $value;
        echo "<br />";
    }

    echo "<br />";
    //Imprimir las llaves de un array asociativo
    print_r(array_keys($meses));

    //Acceder solo a los valores
    foreach($meses as $valor){
        echo $valor;
        echo "<br />";
    }

    echo "<br />";
    //Acceder a un valor en un array asociativo
    $agenda = [
                "jose" => "jose@hotmail",
                "martha" => "martha@hotmail",
                "carlos" => "carlos@hotmail",
              ];

    echo $agenda["martha"];
    echo "<br />";
    var_dump($agenda);


    //Array's multidimensionales (Son array dentro de array)

    //Array indexado de una dimension
    $arrayUnaDimension = [1,2,3,4,5];
    var_dump($arrayUnaDimension);

    //Array asociativo de una dimension
    $agenda = [
        "jose" => "jose@hotmail",
        "martha" => "martha@hotmail",
        "carlos" => "carlos@hotmail",
      ];

    var_dump($agenda);


    //Array multidimensiona
    $array4 = [
                [0,1,2,3,4],
                [25,26,27,32],
                [3,7,10,15,69]
             ];

    var_dump($array4);

    //Se convierte a una dimensión, se imprimen los valores por separado
    foreach ($array4 as $unaDimension) {
        var_dump($unaDimension);
    }

    foreach ($array4 as $unaDimension) {
        echo "[";
        foreach($unaDimension as $valor){
            echo $valor . ", ";
        }
        echo "]";
        echo "<br />"; 
    }


    //Array asociativo multidimensional

    $array5 = [
                    "listaEmail" => [
                        "jose" => "jose@hotmail",
                        "martha" => "martha@hotmail",
                        "carlos" => "carlos@hotmail",
                    ],
                    "listaTelefono" => [
                        "jose" => "11111111",
                        "martha" => "22222222",
                        "carlos" => "33333633",
                        "pedro" => "23231455"
                    ]
                ];

    echo "<br />"; 
    //Recorrer array asociativo multidimensional
    foreach ($array5 as $valoresArray) {
        foreach($valoresArray as $valor){
            echo $valor;
            echo "<br />";
        }
    }

    //Acceder a los pares llave/valor (key value pairs)
    echo "<br />"; 
    //Recorrer array asociativo multidimensional
    foreach ($array5 as $key => $valoresArray) {
        echo "Llaves: $key";
        echo "<br />";
        foreach($valoresArray as $valor){
            echo $valor;
            echo "<br />";
        }
    }





