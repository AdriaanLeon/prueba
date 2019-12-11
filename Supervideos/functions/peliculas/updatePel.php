<?php
require '../global.php';

$peliculas = new Peliculas(new Conexion);
$peliculas->updatePel();

header('Location: ../../dashboard/peliculas/peliculas.php');
?>