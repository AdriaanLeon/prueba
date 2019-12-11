<?php
require '../global.php';

$protagonistas = new Protagonistas(new Conexion);
$protagonistas->newProt();

header('Location: ../../dashboard/protagonistas/protagonistas.php');
?>