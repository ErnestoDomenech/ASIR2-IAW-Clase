<?php
    //definir funciones
    function saludo(){
        echo "Hola caracola";
    }

    //llamar a la función
    saludo();

    //definir funciones con parametros
    function saludoparametros($nom){
        echo "<br>Hola $nom";
    }

    $nombre = "Ana";
    saludoparametros($nombre);

    function suma($num1, $num2){
        $resultado = $num1 + $num2;
        echo "<br>Resultado: $resultado";
    }

    $numero1 = 3;
    $numero2 = 4;
    suma($numero1, $numero2);

    function resta($num1, $num2){
        $resultado = $num1 - $num2;
        echo "<br>Resultado: $resultado";
    }

    $numero1 = 3;
    $numero2 = 4;
    resta($numero1, $numero2);

    //funciones con return
    function sumareturn($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }

    $numero1 = 3;
    $numero2 = 4;
    $resultadosuma = sumareturn($numero1, $numero2);
    echo "<br>$resultadosuma";

    resta($resultadosuma, $numero1);

    //funcion que busca la posición de un caracter
    function buscarletra($fra){
        echo "encontrar caracter:" . strchr($fra, "a");
    }

    $frase1 ="¿Hola como estás?";

    buscarletra($frase1);
?>