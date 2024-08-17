<?php

// Funcion para cargar la classe automaticamente
/*function spl_autoload_register($class)
{
    //include 'classes/' . $class . '.class.php';
    include 'class/class.php';
  
    //require_once(dirname(__FILE__) . "/../class/{$class}.class.php");
}*/



spl_autoload_register(function($class) {
  require_once(dirname(__FILE__) . "/../class/{$class}.class.php");
});


?>


