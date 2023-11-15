<?php
    //definir funciones
    function saludo(){
        echo "Hola caracola";
    }

    //definir funciones con parametros
    function saludoparametros($nom){
        echo "<br>Hola $nom";
    }

   function suma($num1, $num2){
        $resultado = $num1 + $num2;
        echo "<br>Resultado: $resultado";
    }

    function resta($num1, $num2){
        $resultado = $num1 - $num2;
        echo "<br>Resultado: $resultado";
    }

    //funciones con return
    function sumareturn($num1, $num2){
        $resultado = $num1 + $num2;
        return $resultado;
    }

    //funcion que busca la posición de un caracter
    function buscarletra($fra){
        echo "encontrar caracter:" . strchr($fra, "a");
    }

   
?>