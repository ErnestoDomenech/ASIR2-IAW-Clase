<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array funciones</title>
</head>
<body>
    <h2>Funciones habituales con arrays</h2>
    <h3>array_slice - array_splice</h3>

    <?php 
        //Cortes sobre el array
        $array = array('a','b','c','d','e','f','g');
        $slice = array_slice($array,2);

        foreach($slice as $letra){
            echo "$letra <br>";
        }
        echo '<br>';
        echo '<br>';
        $slice = array_slice($array,2,3);

        foreach($slice as $letra){
            echo "$letra <br>";
        }

        echo '<br>';
        //sustituir partes del array
        $array = array('a','b','c','d','e','f','g');
        array_splice($array,2,2, array("x","y"));
        
        foreach($array as $letra){
            echo "$letra <br>";
        }
    ?>
    <h3>array_push - array_pop</h3>
    <?php 
        $array = array('a','b','c','d','e','f','g');
        $ultimoelemento = array_pop($array);

        echo "<br> Elemento extraido: $ultimoelemento <br>";
        foreach($array as $letra){
            echo "$letra <br>";
        }

        //agregar elementos nuevos al final
        $array = array('a','b','c','d','e','f','g');
        array_push($array, 'h','i','j');
        echo '<br>';
        foreach($array as $letra){
            echo "$letra <br>";
        }
    ?>

    <h3>array_shift - array_unshift</h3>
    <?php 
        //extraer el primer elemento del array
        $array = array('a','b','c','d','e','f','g');
        $primerelemento = array_shift($array);

        echo "<br> Elemento extraido: $primerelemento <br>";
        foreach($array as $letra){
            echo "$letra <br>";
        }

        echo '<br>';
        //añadir elementos al inicio del array
        array_unshift($array,$primerelemento);
        foreach($array as $letra){
            echo "$letra <br>";
        }
    ?>

    <h2>Sort - array_reverse</h2>
    <?php
        //ordena los elementos dentro del array de menor a mayor
        $array = array("x","f","e","g","b");
        sort($array);

        foreach ($array as $letra){
            echo "$letra <br>";
        }

        //invierte el orden de los elementos del array
        $reverse = array_reverse($array);
        foreach ($reverse as $letra){
            echo "$letra <br>";
        }
    ?>

    <h2>array_unique</h2>

    <?php 
    //elimina elementos duplicados dentro del array
    $array = array("x","f","e","g","b","g","b");
    $unicos = array_unique($array);
    
    foreach ($unicos as $letra){
        echo "$letra <br>";
    }
    ?>

    <h2>array_search</h2>
    <?php
    //realiza una búsqueda y devuelve el índice
    $array = array("x","f","e","g","b","g","b");
    $index = array_search("e", $array);

    echo "<br> $index <br>";

    $index = array_search("g", $array);
    echo "<br> $index <br>";
    echo $array[$index];

    ?>

    <h2>in_array</h2>
    <?php 
        $array = array("x","f","e","g","b","g","b");
        $existe= in_array("x",$array);

        var_dump($existe);
        echo "<br>$existe<br>";

    ?>
    <h2>array_key_exists</h2>

    <?php 
        $frutas = array("a"=>"Arandano", "p" => "Platano", "m" => "Manzana", "n" =>"Naranja");
        $existe = array_key_exists("p",$frutas);

        var_dump($existe);
        echo "<br>$existe<br>";
    ?>

</body>
</html>