<?php
require '../global.php';

$peliculas = new Peliculas(new Conexion);
$peliculas->deletePel();

header('Location: ../../dashboard/peliculas/peliculas.php');
?>