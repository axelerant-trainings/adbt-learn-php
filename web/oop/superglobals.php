<?php

// require_once __DIR__ . '/index.php';
$myvar = 100;
$myvar2 = 200;

function shareInfo() {
  global $myvar, $myvar2;
  echo $myvar;
  echo $myvar2;
}


shareInfo();

##### Superglobals
// $GLOBALS
// $_SERVER
// $_GET
// $_POST
// $_FILES
// $_COOKIE
// $_SESSION
// $_REQUEST
// $_ENV

echo '<pre />';
var_dump($_SERVER);
