<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blucle for</title>
</head>
<body>

    <h2>For loop</h2>

    <?php 
    for($i=0; $i<10; $i++){
        echo "<p>Hola Caracola</p>";
    }

    for($i=1; $i<=10; $i++){
        echo "numero de iteracion: $i <br>";
    }
    ?>

    <h2>While loop</h2>
    <?php 
        $variable = 0;
        while($variable<10){
            echo'<p>Hola Caracola</p>';
            $variable++;
        }
        echo'<p>Estoy fuera del while</p>';
    
        //cambios de estado
        $variable = TRUE;
        $i=0;
        while($variable==TRUE){
            echo "<p>Dentro del bucle: $variable</p>";
            $i++;
            if($i>=10){
                $variable=FALSE;
            }
        }
        echo '<p>Estoy fuera del bucle</p>';

        //Do - while
        $variable = 0;
        do{
            echo '<p>Hola Caracola</p>';
            $variable++;
        }while($variable<10);
        echo '<p>Estoy fuera del bucle</p>';
    ?>

    
    
</body>
</html>