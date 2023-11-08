<?php 
$usuario = $_POST['user'];
$password = $_POST['password'];

$listausuarios = array('Pepe', 'Ana', 'Juan');
$listapassword = array('qwert','1234','zxcv');

foreach($listausuarios as $userarray){
    if($usuario == $userarray){
        echo "Existe";
    }
    else{
        echo "No existe el usuario";
    }
}

echo "<h2>Con Array_search</h2>";

$indice = array_search($usuario, $listausuarios);
echo "<br>$indice<br>";
echo $listausuarios[$indice];

echo "<h2>Con In_array</h2>";

$existe = in_array($usuario, $listausuarios);
var_dump($existe);
echo "<br>$existe<br>";
if($existe == 1){
    echo "<h2>Acceso permitido</h2>";
}
else{
    echo "<h2>Acceso denegado</h2>";
}

?>