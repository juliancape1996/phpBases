<?php

    /*
    -Lista archivos
    -Validar achivos en carpeta
    -Validar si el nombre es un archivo o carpeta
    -Buscar coincidencias de archivo con un patrón
    -Crear un directorio
    -Copiar archivos entre directorios 
     */

    //Ejemplo 1: Listar todos los archivos en un directorio, NO ES SENSIBLE A LAS MAYÚSCULAS
    $ruta = "Carpeta1";
    $resultado = scandir($ruta);
    var_dump($resultado);

    echo "<br />";
    //Imprimir sin los puntos
    foreach ($resultado as $archivo) {
       if ($archivo != "." && $archivo != "..") {
           echo $archivo;
           echo "<br />";
       }
    }

    echo "<br />";
    //Remover (.) y (..)
    $archivos = array_diff($resultado, [".", ".."]);
    var_dump($archivos);

    echo "<br />";
    //Ejemplo 2:Validar achivos en carpeta (Este no trae los puntos)
    $ruta = "Carpeta1";
    $resultado = scandir($ruta); 
    
    foreach ($resultado as $archivo) {
       if (is_file($ruta . "/" .$archivo)) {
           echo $archivo;
           echo "<br />";
       }
    }

    //Buscar coincidencias de archivo con un patrón
    echo "<br />";
    $resultado = glob("arrays.php");
    var_dump($resultado);

    //Crear un directory
    if (!file_exists("carpeta_prueba2")) {
       mkdir("carpeta_prueba2");
    }

    //Copiar archivos
    copy("Carpeta1/archivo1.txt","carpeta_prueba2/archivo1.txt");


    //Verificar si una carpeta o archivo existe
    //PROBAR CON CARPETA Y DESPUÉS CON ARCHIVO
    $archivo = "test5.txt";

    if (file_exists($archivo)) {
       echo "El archivo o directorio existe";
       echo "<br />";

      //Validar si es un diretorio
      if (is_dir($archivo)) {
         echo "Es un DIRECTORIO";
         echo "<br />";
      }else{
         echo "Es un ARCHIVO";
         echo "<br />";

         //Copiar el archivo
         copy("$archivo","carpeta_prueba2/$archivo");

         //Renombrar el archivo
         //rename($archivo, "Archivo_Renombrado.txt");

         //Borrar archivo
         //unlink("Archivo_Renombrado.txt");
      }

    }else{
      echo "El archivo o directorio NO EXISTE";
      echo "<br />";
      //Ojo para el próximo ejercicio hay que comentar este die
      //die("No hay archivos");
    }

    //Abrir, leer contenido de un archivo y cerrarlo

    //Modos de archivo
    //r---read(lectura)
    //w---write(escritura)
    //a---append(adjuntar)

    //Método 1
    $nombreArchivo = "contenido15.txt";

    //Leer archivo
    $contenido = file_get_contents($nombreArchivo);

    //Imprimir el contenido del archivo
    echo "<br />";
    echo $contenido;
    echo "<br />";

    //Ejemplo 2, segunda opción
    //Abrir archivo
    $manejaArchivo = fopen($archivo, "r");
    $tamanioArchivo = filesize($archivo);

    //Leer el contenido de un archivo
    /* $contenido2 = fread($manejaArchivo, $tamanioArchivo); */

  /*   echo $contenido2; */
    echo "<br />";

    //Cerrar archivo
    fclose($manejaArchivo);


    //Escritura de archivo
    $manejaArchivo2 = fopen($archivo, "w") or die("Imposible escribir");

    fwrite($manejaArchivo2, "Este es el contenido modificado");
    fclose($manejaArchivo2);


    //Leer un archivo de configuración como un array
    $configuracion = parse_ini_file("ejemplo.ini");
    print_r($configuracion);

    echo "<br />";
    foreach ($configuracion as $key => $value) {
       echo $key . " => " . $value;
       echo "<br />"; 
    }

    echo $configuracion["tag2"];
    echo "<br />";