<?php


// $arr = array();
// $arr = []

$arr = [
  'Axel',
  500,
  [
    'Hello',
    'text'
  ]
];


$brr = [
  'key1' => 'value',
  'ioioio100' => 'value2',
  'key' => [],
  'Test'
];

$brr[] = 'Parrot';

echo "<pre>";

print_r($brr);
unset($brr['ioioio100']);

$brr['tea'] = '10AM';
print_r($brr);


echo count($brr);

// print_r($arr);


// unset();
