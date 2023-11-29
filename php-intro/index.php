<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uso PHP</title>
</head>
<body>
    <h1>Menu</h1>
    <ul>
        <li><a href="forloop.php">Bucle for</a></li>
        <li><a href="array.php">Array</a></li>
        <li><a href="arrayfunciones.php">Array funciones</a></li>
        <li><a href="formulario.php">Formulario</a></li>
        <li><a href="strings.php">Textos</a></li>
        <li><a href="fechas.php">Fechas</a></li>
        <li><a href="funciones.php">Funciones</a></li>
        <li><a href="includefuncion.php">Include funcion</a></li>
        <li><a href="mysql_connect\conexion.php">conexion</a></li>
        <li><a href="mysql_connect\usuarios.php">Ver usuarios</a></li>
    </ul>
    <h1>Primer uso de php</h1>

    <?php
    //Comentarios en php
    echo 'Hola Caracola';

    //puedes añadir etiquetas como texto
    echo '<br>';
    echo '<h1>Linea con h1 desde php</h1>';
    echo '<br>';
    ?>
    <h2>otro bloque de</h2>
    <?php
    $nombre ='Ernesto';
    $edad = 49;

    //echo del contenido de la variable
    echo $nombre;

    //concatenación de variables y texto
    echo '<h3>Mi nombre es ' . $nombre . '</h3>';
    echo '<br>';
    echo '<h3>Mi nombre es . $nombre . </h3';//esto no muestra el valor de la variable
    echo '<br>';
    //Interpolación variables y texto
    echo "<h3>Mi edad: $edad </h3>";
    ?>

    <h2><?php echo 'Hola'; ?></h2>

    <!-- CONDICIONALES-->
    <h2>Condicional if - else</h2>
        <?php
        $resultado = 4;
        
        //sintaxis de comparacion <=, <, >, >=, ==
        if($resultado >= 5){
            echo '<h3 style="color:green">Prueba superada</h3>';
        }
        else{
            echo '<h3 style="color:red">Prueba suspendida</h3>';
        }
        ?>
    
    <h2>Condicional if - elseif - else</h2>
    <!--Nos permite poder realizar más de una comparación-->

    <?php
    $resultado = 'A';

    if($resultado == 'A'){
        echo '<h3 style="color:green">Prueba superada fantástico!</h3>';
    }
    elseif($resultado == 'B'){
        echo '<h3 style="color:blue">Prueba superada al límite</h3>';
    }
    else {
        echo '<h3 style="color:red">Prueba NO superada</h3>';
    }
    ?>

    <h2>Condicional con Switch</h2>
    <?php
    $resultado = 'F';

    switch($resultado){
        case 'A':
            echo '<h3 style="color:green">Prueba superada fantástico!</h3>';
            break;
        case 'B':
            echo '<h3 style="color:blue">Prueba superada al límite</h3>';
            break;
        default:
            echo '<h3 style="color:red">Prueba NO superada</h3>';
            if($resultado == 'C'){
                echo '<h3>Puedes volver a realizar la prueba pulsado <a href="index.php">Aquí</a></h3>';
            }
            else
            {
                echo '<h3>No es posible realizar la prueba en este momento</h3>';
            }
            break;
    }
    ?>
    <footer>
        <p style="text-align=center;">
            Creado por 2ASIR <?php $fecha = getdate(); echo "Fecha: " . $fecha['mday'] . '/' . $fecha['mon'] . '/' . $fecha['year'];?>
        </p>
    </footer>
</body>
</html>