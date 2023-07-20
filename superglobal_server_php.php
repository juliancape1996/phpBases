<?php
    //Superglobal server
	//https://www.php.net/manual/es/language.variables.superglobals.php

    $servidor = [
        "Host servidor" => $_SERVER["SERVER_NAME"],
        "Encabezado host" => $_SERVER["HTTP_HOST"],
        "Software servidor" => $_SERVER["SERVER_SOFTWARE"],
        "Encabezado host" => $_SERVER["DOCUMENT_ROOT"],
        "Página actual" => $_SERVER["PHP_SELF"],
        "Nombre de script" => $_SERVER["SCRIPT_NAME"],
        "Ruta absoluta" => $_SERVER["SCRIPT_FILENAME"]
    ];

    print_r($servidor);