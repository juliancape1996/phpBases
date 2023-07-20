<?php
    //Expresiones y operadores
    //Ejemplo expresion    
    $nombre = "José Montoya";
    $salario = 200000;
    //$total = suma(20, 40);

    //El = es un operador de asignación, los operadores se usan para realizar operaciones sobre las variables
    $apellidos = "Montoya";
    //$x++;
    $suma = 30 + 2;


    //Diferentes tipos de operadores
    //1-Operadores aritméticos
    $sueldo = 1000000;
    $subsidioTransporte = 200000;

    $salud = 100000;    
    $pension = 100000;
    $ingresos = $sueldo +  $subsidioTransporte;
    $egresos = $salud + $pension;

    $total = $ingresos - $egresos;
    echo "<br>";
    echo "Total sueldo: $total";

    echo "<br>";
    //Área de un rectángulo Multiplicar
    $base = 10;
    $altura = 16;

    $area = $base * $altura;
    echo "El área es: $area";

    echo "<br>";
    //División
    $num1 = 8;
    $num2 = 2;
    $division = $num1 / $num2;
    echo $division;

    echo "<br>";
    //Porcentaje
    $sumaNotas = 42;
    $cantidadMaterias = 5;
    $promedio = $sumaNotas / $cantidadMaterias;
    echo "Promedio notas: $promedio";


    //Operador módulo
    $a = 50 % 2;
    echo "<br>";
    echo $a;

    $b = 53 % 2;
    echo "<br>";
    echo $b;


    //Exponenciación
    $c = 4;
    $d = 3;

    $resultado = $c ** 2;    
    echo "<br>";
    echo $resultado;


    echo "<br>";
    ///Operadores condicionales
    //Operador ternario
    $puedeIngresar = (true) ? "Entra" : "No entra";
    echo $puedeIngresar;

    echo "<br>";
    //Operadores lógicos and or && ||
    $permiso = true;
    $autenticado = true;
    $usuario = "José Montoya";
    echo ($permiso or $autenticado) ? "Bienvenido Administrador" : "Bienvenido Invitado";

    echo "<br>";
    //Validar estudiante
    $total = 49;
    $pasaMateria = 50;
    $validarPasa = ($total >= $pasaMateria) ? true : false;

    echo ($validarPasa) ? "Pasa" : "No pasa";


    //Operadores de asignación;
    $puntaje = 12;
    $nombreCompleto = "José Montoya";

    echo "<br>";
    //Operador +=
    $contador = 1;
    $contador = $contador + 1;
    $contador += $contador;
    echo $contador;

    //Resta
    echo "<br>";
    //Operador +=
    $contador = 1;
    $contador = $contador - 1;
    $contador -= $contador;
    echo $contador;

    //Multiplicación
    echo "<br>";
    //Operador +=
    $contador = 1;
    //$contador = $contador * 1;
    $contador *= $contador;
    echo $contador;

    //División
    echo "<br>";
    //Operador +=
    $contador = 30;
    //$contador = $contador / 2;
    $contador /= 2;
    echo $contador;

    //Módulo
    echo "<br>";
    //Operador +=
    $contador = 3;
    //$contador = $contador % 2;
    $contador %= 2;
    echo $contador;

    //.=
    echo "<br>";
    $nombreCompleto = "José ";
    $nombreCompleto .= "Andrés ";
    $nombreCompleto .= " Montoya";
    echo $nombreCompleto;

    echo "<br>";
    //Operadores de incremento
    $conta = 20;
    $conta += 1;
    echo $conta;

    //Post incremento
    echo "<br>";
    echo $conta++;
    echo "<br>";
    echo $conta;

    //Pre incremento
    echo "<br>";
    echo ++$conta;
    echo "<br>";
    echo $conta;


    echo "<br>";
    //Operadores de decremento
    $conta = 20;
    $conta -= 1;
    echo $conta;

    //Post decremento
    echo "<br>";
    echo $conta--;
    echo "<br>";
    echo $conta;

    //Pre decremento 
    echo "<br>";
    echo --$conta;
    echo "<br>";
    echo $conta;

    echo "<br>";
    //Operador de ejecución
    echo `dir *.php`;

    echo "<br>";
    //Precedencia de operadores
    $val = 20;
    echo $val++;
    $contad = $val++;
    echo $contad;
    echo $val;

    echo "<br>";
    //Ejemplo 2
    $valor1 = 3 * 4 + 2;
    echo $valor1;

    echo "<br>";
    //Ejemplo 3
    $resultado1 = true && false;
    $resultado2 = true and false;

    echo ($resultado1) ? "Verdadero" : "Falso";
    echo "<br>";
    echo ($resultado2) ? "Verdadero" : "Falso";






?>