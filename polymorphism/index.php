<?php


//  function __autoload($classname){
// 	include_once $classname.".php";
// }
//same opertaion (function) behave differently in different classes
spl_autoload_register(function($class) {
    include $class.'.php';
});


$log = new loger();
$obj = new userprofile($log);
$obj->update();