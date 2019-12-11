<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/Supervideos/config/config.php';

spl_autoload_register(function($class){
    include $_SERVER['DOCUMENT_ROOT'] . "/Supervideos/class/$class/$class.class.php";
});
?>