<?php
require '../global.php';

$genero = new Genero(new Conexion);
$genero->deleteGenero();

header('Location: ../../dashboard/genero/genero.php');
?>