<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h2>arrays</h2>
    <?php 
    //Array indexado
    $colores = array("rojo", "verde", "azul");
    echo $colores[0] . '<br>';
    echo $colores[1] . '<br>';
    echo $colores[2] . '<br>';

    //Array asociativo
    $edades = array("Ana"=>25, "Luis"=>35, "Pepe"=>23);
    echo $edades["Ana"] . '<br>';
    echo $edades["Luis"] . '<br>';
    echo $edades["Pepe"] . '<br>';

    //Array multidimensional
    $matriz = array(
        array(1,2,3), 
        array(4,5,6), 
        array(7,8,9)
    );
    echo $matriz[0][0] . '<br>';
    echo $matriz[1][1] . '<br>';
    echo $matriz[2][2] . '<br>';
    ?>

    <h2>funcion count</h2>
    <?php 
        $frutas=array("melón", "pera", "platano");
        echo count($frutas) . '<br>';
    
        //Array multidimensional asociativo
        $animales = array(
            "mamiferos"=>array("perro","gato","vaca"),
            "reptiles"=>array("serpiente","lagarto","rana")
        );

        echo count($animales) . '<br>';
        echo count($animales, 1) . '<br>';

        $animal = $animales["mamiferos"][1];
        echo "$animal <br>";

        //para recorrer un array con for
        $frutas=array("melón", "pera", "platano");
        $longitud = count($frutas);

        for($i=0; $i<$longitud; $i++){
            echo "$frutas[$i] <br>";
        }

        //Foreach
        $numeros = array(1,2,3,4,5);
        foreach($numeros as $n){
            echo "El número es: $n <br>";
        }

        //array asociativo
        $colores=array("rojo"=>"#FF0000", "verde"=>"#00FF00","azul"=>"#0000FF");
        foreach($colores as $color=>$hexadecimal){
            echo "El color $color tiene un codigo $hexadecimal <br>";
        }

        //array multimensional
        $matriz = array(
            array(1,2,3), 
            array(4,5,6), 
            array(7,8,9)
        );

        foreach($matriz as $fila){
            foreach($fila as $elemento){
                echo $elemento;
            }
            echo '<br>';
        }
    ?>


</body>
</html>