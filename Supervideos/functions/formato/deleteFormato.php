<?php
require '../global.php';

$formato = new Formato(new Conexion);
$formato->deleteFormato();

header('Location: ../../dashboard/formato/formato.php');
?>