<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <h1>Fechas</h1>
    <p style="font-size: 36px;">
        <?php 
        $fecha = getdate();
        echo "fecha actual:";
        echo "<br>";
        echo $fecha['mday'];
        echo "<br>";
        echo $fecha['mon'];
        echo "<br>";
        echo $fecha['year'];

        echo "<br>";
        echo "Fecha: " . $fecha['mday'] . '/' . $fecha['mon'] . '/' . $fecha['year'];
        
        echo "<br>";
        //echo $fecha;
        echo time();

        echo "<br>";
        print date("d/m/y G:i:s" , time() );

        echo "<br>";
        print date("d/m/y g:i:s a" , time() );

        ?>

    </p>
    
</body>
</html>