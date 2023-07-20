<?php
    echo "<br />";

    //Ejercicio 1: return
    function validarUsuario($email){

        if(empty($email)){
            echo "El email está vacío";
            return;
        }

        //Si manda vacío queremos impedir que ejecute el siguiente código
        switch ($email) {
            case 'admin@render2web.com':
                echo "Bienvenido administrador";
                break;
            case 'registrado@render2web.com':
                echo "Bienvenido registrado";
                break;            
            default:
                echo "No existe este tipo de usuario";
                break; 
        }
    }

    validarUsuario("admin@render2web.com");
    echo "<br />";
    validarUsuario("registrado@render2web.com");
    echo "<br />";
    validarUsuario("");