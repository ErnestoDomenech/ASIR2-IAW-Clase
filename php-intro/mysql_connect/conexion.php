<?php 

$link = 'mysql:host=localhost; dbname=tienda';
$usuario = 'web';
$pass = '1234asdf';

try{
    $pdo = new PDO($link, $usuario, $pass);
    echo 'conectado';
}catch(PDOException $e){
    print "Error: ".$e->getMessage().'<br>';
    die();
}

?>