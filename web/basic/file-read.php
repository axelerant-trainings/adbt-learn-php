<?php


$file = __DIR__ . '/learn.txt';
$handler = fopen($file, 'r'); // or die("Unable to open file!");


// if ($handler) {
//   while (($line = fgets($handler)) !== false) {
//     echo $line . "<br />"; // process the line read.
//   }

//   fclose($handler);
// }

echo file_get_contents($file);
