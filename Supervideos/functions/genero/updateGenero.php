<?php
require '../global.php';

$genero = new Genero(new Conexion);
$genero->updateGenero();

header('Location: ../../dashboard/genero/genero.php');
?>