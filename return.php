<?php

     echo "<br />";
    //Ejemplo de return
    function validarUsuario($email){
        
        if(empty($email)){
            echo "El email está vacío";
            //El return rompe la función
            return;
        }

        //Si mandan vacío queremos impedir que ejecute el siguiente código
        switch ($email) {
            case 'admin@render2web.com':
                echo "Bienvenido usuario administrador";
                echo "<br />";
                break;
            case 'usuario@render2web.com':
                echo "Bienvenido usuario registrado";
                echo "<br />";
                break;
            default:
                echo "No existe ese usuario";
                echo "<br />";
            break; 
        }

    }

    validarUsuario("admin@render2web.com");
    validarUsuario("usuario@render2web.com");
    validarUsuario("");

