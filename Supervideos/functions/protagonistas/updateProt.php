<?php
require '../global.php';

$protagonistas = new Protagonistas(new Conexion);
$protagonistas->updateProt();

header('Location: ../../dashboard/protagonistas/protagonistas.php');
?>