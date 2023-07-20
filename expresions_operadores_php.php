<?php

    //Expresiones y operadores
    //Ejemplo de una expresión
    $nombre = "José Montoya";
    $salario = 200000;
    //$total = suma(10, 20);

    //El = es un operador de asignación, los operadores se usan para realizar operaciones sobre las variables
    $apellidos = "Montoya";
    //$x++;
    $suma = 30 + 2;


    //Diferentes tipos de operadores
    //Aritméticos
    $sueldo = 1000000;
    $subsidioTransporte = 200000;
    $salud = 100000;
    $pension = 100000;
    $ingresos = $sueldo + $subsidioTransporte;
    $egresos = $salud + $pension;
    $total = $ingresos - $egresos;
    //echo "El total del sueldo es: $total";

    echo "<br />";
    //Calcular area de un rectángulo
    $base = 10;
    $altura = 14;
    $area = $base * $altura;
    echo $area;
    
 
    echo "<br />";
    //División
    $num1 = 8;
    $num2 = 2;
    $division = $num1 / $num2;
    echo $division;

    //Porcentaje
    echo "<br />";   
    $sumaNotas = 42;
    $cantidadMaterias = 5;
    $promedio = $sumaNotas / $cantidadMaterias;
    echo $promedio;

    echo "<br />"; 
    //Módulo
    $a = 51 % 2;
    echo $a;

    echo "<br />"; 
    //Exponenciación
    $c = 4;
    $d = 3;
    $resultadoExponenciacion = $c ** $d;
    echo $resultadoExponenciacion;

    echo "<br />"; 
    //Operadores condicionales
    $puedeIngresar = (false) ? "ENTRA" : "NO ENTRA";
    echo $puedeIngresar;

    echo "<br />"; 
    //Operadores lógicos and or %% ||
    $permiso = false;
    $autenticado = true;
    echo ($permiso or $autenticado) ? "Bienvenido administrador" : "Bienvenido invitado";

    echo "<br />"; 
    $total = 50;
    $pasaMateria = 50;
    $validarPasa = ($total > $pasaMateria) ? true : false;
    echo ($validarPasa) ? "PASA" : "NO PASA";

    //Asignacion
    $nombre = "José Montoya";
    $salario = 200000;

    echo "<br />"; 
    //Operador +=
    $contador = 1;
    //$contador = $contador + 1;
    $contador += $contador;
    echo $contador;

    echo "<br />"; 
    //Operador -=
    $contador = 1;
    //$contador = $contador + 1;
    $contador -= $contador;
    echo $contador;

    echo "<br />"; 
    //Operador *=
    $contador = 1;
    //$contador = $contador + 1;
    $contador *= $contador;
    echo $contador;

    echo "<br />"; 
    //Operador /=
    $contador = 30;
    //$contador = $contador + 1;
    $contador /= 2;
    echo $contador;

    echo "<br />"; 
    //Operador %=
    $contador = 51;
    //$contador = $contador + 1;
    $contador %= 2;
    echo $contador;

    echo "<br />"; 
    //.=
    $nombreCompleto = "Jose";
    $nombreCompleto .= " Andrés";
    $nombreCompleto .= " Montoya";
    echo $nombreCompleto;

    echo "<br />"; 
    //Operadores de incremento
    $conta = 20;
    $conta += 1;
    echo $conta;

    echo "<br />"; 
    //Post incremento   
    echo $conta++;
    echo "<br />";
    echo $conta;

    echo "<br />"; 
    //Pre incremento   
    echo ++$conta;
    echo "<br />";
    echo $conta;


    echo "<br />"; 
    //Operadores de decremento
    $conta = 20;
    $conta -= 1;
    echo $conta;

    echo "<br />"; 
    //Post decremento   
    echo $conta--;
    echo "<br />";
    echo $conta;

    echo "<br />"; 
    //Pre decremento   
    echo --$conta;
    echo "<br />";
    echo $conta;

    echo "<br />"; 
    //Operador de ejecución, comillas invertidas
    //echo `dir * .php`;

    echo "<br />";
    //Precedencia de operadores
    $val = 20;
    echo $val++;
    $contad = $val++;
    echo "<br />";
    echo $contad;
    echo "<br />";
    echo $val;

    echo "<br />";
    //Ejemplo2
    $valor1 = 3 * 4 + 2;
    echo $valor1;

    echo "<br />";
    //Ejemplo 3
    $resultado1 = true && false;
    $resultado2 = true and false;

    echo ($resultado1) ? "verdadero" : "falso";
    echo "<br />";
    echo ($resultado2) ? "verdadero" : "falso";





