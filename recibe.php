<?php

    //Obtener los datos con GET
    var_dump($_GET);

    //Text
    //Obtener el nombre
    $nombreEnviado = isset($_GET['nombre']) ? $_GET['nombre'] : "";
    // $contraseniaEnviado = isset($_GET['contrasenia']) ? $_GET['contrasenia'] : "";

    echo $nombreEnviado;
    echo "<br />";
    // echo $contraseniaEnviado;

    //Select un valor
    echo "<br />";
    echo $tipoDocumento = $_GET['tipoDocumento'];
    
    //Textarea
    echo "<br />";
    echo $observacion = $_GET['observacion'];

    //Checkboxes
    echo "<br />";
    echo $cocina = isset($_GET['cocina']) ? "Cocina: " . $_GET['cocina'] : "";
    echo "<br />";
    echo $cocina = isset($_GET['cine']) ? "Cine: " . $_GET['cine'] : "";
    echo "<br />";
    echo $cocina = isset($_GET['lectura']) ? "Lectura: " . $_GET['lectura'] : "";

    //Select multiple
    echo "<br />";
    $vehiculo = $_GET['vehiculo'];
    print_r($vehiculo);


    //Radio button
    echo "<br />";
    echo $genero = $_GET['genero'];


    //Para el input file, no olvidar en el html: enctype="multipart/form-data" y el form debe ser tipo POST     
    var_dump($_FILES);
   

    //Explicar los problemas con el GET, por ejemplo en el Login


    //Obtener los datos con POST
   /*  var_dump($_POST);


    //Obtener el nombre
    $nombreEnviado = isset($_POST['nombre']) ? $_POST['nombre'] : "";

    echo $nombreEnviado; */


    //POR ÚLTIMO EXPLICAR TEMAS DE USABILIDAD EN LOS FORMULARIOS, ELEGIR LOS TIPOS DE CAMPO CORRECTOS.
?>