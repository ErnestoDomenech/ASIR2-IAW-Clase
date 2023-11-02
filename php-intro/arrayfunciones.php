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


</body>
</html>