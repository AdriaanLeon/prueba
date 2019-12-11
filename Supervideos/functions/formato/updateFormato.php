<?php
require '../global.php';

$formato = new Formato(new Conexion);
$formato->updateFormato();

header('Location: ../../dashboard/formato/formato.php');
?>