<?php
session_start();
require_once 'config/config.php';
include_once "helpers/helper.php";
//Autoload php (busca automaticamente en la carpeta frameController las une y las integra efecto merge)

spl_autoload_register(function ($nombreClase) {

  require_once 'frameController/' . $nombreClase . '.php';
});




//Instantiate core class
$init = new UrlController();
