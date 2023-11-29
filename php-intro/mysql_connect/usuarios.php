<?php 
include_once 'conexion.php';

$sql_read = 'SELECT * FROM usuarios';
$gsent= $pdo->prepare($sql_read);
$gsent->execute();

$resultado = $gsent->fetchAll();

var_dump($resultado);
?>