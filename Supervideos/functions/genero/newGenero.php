<?php
require '../global.php';

$genero = new Genero(new Conexion);
$genero->newGenero();

header('Location: ../../dashboard/genero/genero.php');
?>