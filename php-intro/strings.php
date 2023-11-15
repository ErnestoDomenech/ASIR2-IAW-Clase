<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textos</title>
</head>
<body>
    <h1>Trabajar con textos</h1>
    <p style="font-size: 36px;">
    <?php 
    //concatenación
    $frase1 ="¿Hola como estás?";
    $frase2 ="muy bien gracias";
    $frase3 ="TODO EN MAYUSCULAS";

    echo $frase1 . " " . $frase2;
    echo "<br>";

    //Transformación de texto
    echo "Mayúsculas primera letra en mayúscula: " . ucfirst($frase2);
    echo "<br>";
    echo "Mayúsculas primera letra de cada palabra: " . ucwords($frase2);
    echo "<br>";
    echo "Texto en mayúsculas: " . strtoupper($frase2);
    echo "<br>";
    echo "Texto en minúsculas: " . strtolower($frase3);
    echo "<br>";

    //Encontrar caracteres
    echo "Encontrar un caracter: " . strchr($frase1, 'a');
    echo "<br>";

    //Reemplazar texto
    echo "Reemplaza texto: " . str_replace("Hola", "Adiós", $frase1);
    
    ?>
    </p>
</body>
</html>