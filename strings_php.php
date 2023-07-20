<?php

    echo "<br />";

    // Ejercicio 1: combinar strings usando (.)
    $nombre = "José ";
    $apellidos = 'Montoya';

    $nombreCompleto = $nombre . $apellidos;
    echo $nombreCompleto;

    echo "<br />";
    // Ejercicio 2 concatenar diferentes tipos de3 variable
    $calificacion = 9;
    $mayorEdad = true;

    $infoUsuario = "El usuario: $nombreCompleto, tiene una calificación de: " . $calificacion . " y es mayor de edad: " . $mayorEdad;
    echo $infoUsuario;

    echo "<br />";
    /* 
    heredoc: para escribir un bloque de texto Y nowdoc(string)
     */
    // Ejercicio 3
    $nombre2 = "Juan Gonzáles";
    $numero = 23;

    echo <<< 'TEXTO1'
    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the year
    $nombre2 es una persona
    $numero * 2
    (true) ? "Verdadero" : "Falso";
    <strong> texto en negrilla </strong>
    TEXTO1;

    echo "<br />";
    /* 
    strlen - Cantidad de caracteres
     */
    $nombres = "Jose";
    echo strlen($nombres);

    //Forma recomendada de validar cantidad de strings
    echo "<br />";
    if(strlen($nombres)){
      echo $nombres;
      echo "<br />";
    }else{
        echo "El nombre está vacío";
        echo "<br />";
    }


    echo "<br />";
    /* 
    strpos - Encontrar la posición de un string
     */
    $texto = "It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.";

    $textoABuscar = "combined";

    $posicion = strpos($texto, $textoABuscar);
    echo $posicion;

    //Comparar posición de strings
    if($posicion === false){
        echo "No encontrado";
        echo "<br />";
    }


    echo "<br />";
    /* 
    str_replace - reemplazar strings
     */

     $texto3 = "written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. popular";

     echo $texto3;
     echo "<br />";
     echo "Texto reemplazado: " . str_replace('popular', 'MASIVO', $texto3);


     echo "<br />";
    /* 
    str_word_count - contar palabras
     */

    $articulo = "written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. popular";

    echo "Cantidad palabras: " . str_word_count($articulo);

    echo "<br />";
    /* 
    str_shuffle - Reordenar aleatoriamente un string
     */

     $producto = "Acetaminofen x 500 mg";
     $ordernarProducto = str_shuffle($producto);
     echo $ordernarProducto;

     echo "<br />";
    /* 
    strpos - Hallar la posicion de un string
     */

     $texto5 = "Written in 45 BC. This book is a treatise on the theory of ethics, very popular during the RENA. popular";

     echo strpos($texto5, 'during');


     echo "<br />";
     //Convertir a mayúsculas
    echo strtoupper($texto5);

     echo "<br />";
     //Convertir a minúsculas
     echo strtolower($texto5);


     echo "<br />";
     /* 
     wordwrap - Envolver cantidad de caracteres
      */

      $texto6 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.";

      //echo $texto6;
      echo "<br />";
      echo "<br />";
      //echo wordwrap($texto6, 40, "<br />\n");

      echo "<br />";
     /* 
     trim - Eliminar espacios en blanco en el texto
      */

      $texto7 = "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.";

      echo trim($texto7);


 





