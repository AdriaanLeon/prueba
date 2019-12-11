<?php
require '../global.php';

$protagonistas = new Protagonistas(new Conexion);
$protagonistas->deleteProt();

header('Location: ../../dashboard/protagonistas/protagonistas.php');
?>