<?php
require '../global.php';

$peliculas = new Peliculas(new Conexion);
$peliculas->newPel();

header('Location: ../../dashboard/peliculas/peliculas.php');
?>