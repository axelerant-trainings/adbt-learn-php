<?php

use HelloLib\ExampleClass;

spl_autoload_register(function ($class_name) {
  // var_dump($class_name, __DIR__ . '/' . $class_name . '.php');
  $path = __DIR__ . '/' . $class_name . '.php';
  var_dump($path);
  $a= str_replace('\\', '/', $path);
  var_dump($a);
  require_once $a;
});


$obj  = new ExampleClass();
echo $obj::GREET;
