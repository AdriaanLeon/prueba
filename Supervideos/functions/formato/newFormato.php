<?php
require '../global.php';

$formato = new Formato(new Conexion);
$formato->newFormato();

header('Location: ../../dashboard/formato/formato.php');
?>