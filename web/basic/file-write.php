<?php

$file = __DIR__ . '/learn.txt';
echo __DIR__;

// $handler = fopen($file, "w"); // or die("Unable to open file!");
// fwrite($handler, "Hey!!");
// fwrite($handler, "How are things aroun?!");

// // // // print_r(pathinfo($file));
// fclose($handler);

file_put_contents($file, "Today is a wonderful day!");
// file_get_contents();


