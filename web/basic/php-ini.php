<?php

// Helps finding from where this php.ini getting loaded.
// If using development tool like DDEV/Lando
// you need to ssh to the respective environment to view the file.
// echo phpinfo();


echo ini_get('max_execution_time');  // E_ALL;
echo "<br />max_execution_time^<br /><br />";

// echo ini_get('error_reporting');  // E_ALL;
// echo ">> " . E_ALL;

// echo [1, 2, 3];

//  echo "<br />";
//  echo ini_set('error_reporting', E_ALL & ~E_NOTICE);  // E_ALL;
// // echo ini_get('error_reporting');  // E_ALL;
//  echo [1, 2, 3];



