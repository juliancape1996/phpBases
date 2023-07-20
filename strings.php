<?php

    echo "<br />";
    /* 
    Ejercicio 1: combinar strings usando punto (.)
     */
    $nombre = "José";
    $apellidos = " Montoya";

    $nombreCompleto = $nombre . $apellidos;

    print $nombreCompleto;

    $calificacion = 9;
    $mayorEdad = true;

    echo "<br />";
    /* 
    Ejercicio 2:  con el mismo (.), se pueden añadir otros tipos de variables (Integer, Booloan)
     */
    $infoUsuario = "El usuario: $nombreCompleto, tiene una calificación de: $calificacion y valida mayoría de edad: $mayorEdad";

    echo $infoUsuario;
    echo "<br />";

    /* 
    heredoc -> para escribir un bloque de texto (string)
    Ejemplo
     */
    $nombre2 = "Juan Gonzáles";
    $numero = 23;

     echo <<< TEXTO1
     is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too
     "texto en comillas dobles"
     'texto en comillas simples 
     $nombre2 es una persona
     $numero * 2
     (true) ? "VERDADERO" : "FALSO";
     <strong>Texto en negrilla</strong>
     TEXTO1;


     echo "<br />";
     /* 
    nowdoc -> para escribir un bloque de texto (string)
    Ejemplo
     */
    $nombre2 = "Juan Gonzáles";
    $numero2 = 23;

     echo <<< 'TEXTO2'
     is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer too
     "texto en comillas dobles"
     'texto en comillas simples 
     $nombre2 es una persona
     $numero2 * 2
     (true) ? "VERDADERO" : "FALSO";
     <strong>Texto en negrilla</strong>
     TEXTO2;


     echo "<br />";
     echo "<br />";
     /* 
     STRLEN - Cantidad caracteres
     */
     $nombres = "Jose Montoya";
     echo strlen($nombres);

     echo "<br />";
     $nombres = "";
     echo strlen($nombres);

     echo "<br />";
     $nombres = null;
     echo strlen($nombres);

     echo "<br />";
     //Validar cantidad caracteres (Es una buena práctica)
     if(strlen($nombres)){
        echo $nombres;
        echo "<br />";
     }else{
        echo "El nombre está vacío";
        echo "<br />"; 
     }

     echo "<br />";
     //STRPOS: Encontrar la posición de un string
     $texto = "is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s";

     //Aquí probar con otro texto ue no se encuentre y sale false pero no se imprime nada
     $textoABuscar = "dummy";

     $posicion = strpos($texto, $textoABuscar);
     echo $posicion;

     //Comparar posiciones de string
     if($posicion === false){
        echo "No encontrado";
        echo "<br />";
     }

     echo "<br />";
     //str_replace -> reemplazando strings

     $texto3 = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution using letters';

     //Probar con using ya que hay dos coincidencias
     echo "Texto reemplazado: " . str_replace('distribution', 'CAMBIADO', $texto3);



     echo "<br />";
     //str_word_count -> Contar palabras

     $articulo = 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters';

     echo "Cantidad palabras: " . str_word_count($articulo);

     echo "<br />";
     //strrev -> Revesar string
     $marca = "render2web";
     $revesarMarca = strrev($marca);
     echo $revesarMarca;


     echo "<br />";
     //str_shuffle -> Reordenar aleatoriamente un string
     $producto = "Acetaminofen X 500 mg";
     $ordenarProducto = str_shuffle($producto);

     //Probar refrescando varias veces en el navegador
     echo $ordenarProducto;

     echo "<br />";
     //Hallar posición de un string
     $texto5 = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search";

     echo stripos($texto5, "model");

     echo "<br />";
     //Mayúsculas
     $texto5 = "Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search";

     echo strtoupper($texto5);

     echo "<br />";
     //Mayúsculas
     $texto5 = "Many desktop publishing packages and web page editors now USE LOREM Ipsum as their default model text, and a search";

     echo strtolower($texto5);

     echo "<br />";
     //wordwrap -> Envolver en cantidad de palabras
     $texto6 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla leo nulla, suscipit vitae ultricies sed, finibus a leo. Curabitur in pretium sem. Vestibulum condimentum, velit eu eleifend euismod, massa magna eleifend augue, elementum tincidunt ipsum tellus ac leo. Pellentesque at hendrerit nisl, at euismod nibh. Phasellus luctus mi eu lobortis tincidunt. Integer eu pharetra leo. Pellentesque dapibus lacus non molestie venenatis. Donec aliquam dignissim velit ut mollis. Cras suscipit leo at magna elementum faucibus. Vestibulum venenatis risus nulla, quis euismod dolor mattis sit amet. Donec ac nisl elit. Curabitur eu tortor in leo consectetur sagittis. Vestibulum ullamcorper lobortis est id sagittis. Nunc at libero sit amet augue consequat aliquam. Nam sed neque laoreet, cursus turpis eget, sagittis enim.

     Ut ut nunc pharetra, interdum augue a, dapibus mauris. Praesent sit amet iaculis magna, nec mollis ligula. Maecenas ut libero velit. Phasellus porttitor congue odio vitae luctus. Donec convallis urna dictum ante iaculis venenatis. Sed justo justo, accumsan ac mauris sit amet, tincidunt convallis purus. Fusce sodales vehicula lacus id fermentum.
     
     Nam in odio augue. Sed quis tortor fermentum, bibendum tellus a, hendrerit magna. Donec dui dui, consequat vitae nunc ac, aliquam interdum purus. Nulla at ipsum sem. Aenean placerat lectus non purus aliquam commodo. Duis sed lobortis eros, non facilisis libero. Morbi blandit dignissim lorem, vel tincidunt turpis. Nam vulputate in mauris ac porta. Aliquam mattis condimentum leo, ac tristique quam sodales quis. Duis justo nisl, ornare eu ligula a, porttitor pulvinar eros. Donec pulvinar metus in ultricies vehicula. Aenean a vulputate lectus. Pellentesque venenatis diam lacus, ac pellentesque sem imperdiet nec. Maecenas sollicitudin nisi neque, nec iaculis sapien consectetur et.";
     echo $texto6;
     echo "<br />";
     echo "<br />";
     //Ojo el <br /> es muy importante
     echo wordwrap($texto6, 1, "<br />\n");


     echo "<br />";
     //Cortar espacios en blanco
     $texto7 = "     Nam in odio augue. Sed quis tortor fermentum, bibendum tellus a, hendrerit magna. Donec dui dui, consequat vitae nunc ac, aliquam interdum purus. Nulla at ipsum sem. Aenean placerat lectus non purus aliquam commodo. Duis sed lobortis eros, non facilisis libero. Morbi blandit dignissim lorem, vel tincidunt turpis. Nam vulputate in mauris ac porta. Aliquam mattis condimentum leo, ac tristique quam sodales quis. Duis justo nisl, ornare eu ligula a, porttitor pulvinar eros. Donec pulvinar metus in ultricies vehicula. Aenean a vulputate lectus. Pellentesque venenatis diam lacus, ac pellentesque sem imperdiet nec. Maecenas sollicitudin nisi neque, nec iaculis sapien consectetur et.      ";

     echo $texto7;
     echo "<br />";
     echo trim($texto7);







     


     
