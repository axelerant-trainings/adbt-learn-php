<?php

// function myFunction($num) {
//   echo 'Inside myFunction - $num' . $num;

// // $z = $x + $y;
// // $myval = $z/200
// }

// myFunction(5);



// This is required to restrict auto typecasting.
// Typehinting function arguments will work appropriately after using it.
// declare(strict_types=1);

// typehinting
// function
//
// Type hinting + Arary within forloop.


// Type hinting.
// function doComplexOperation (int $num1, array $arr, string $num3) : int {
//   $sum =  $num1 + $num3;

//   // array_slice($arr);
//   // if (is_array($arr)) {
//   //   //array_slice()
//   // }
//   return 1;
// }

// var_dump(
//   doComplexOperation(2, [200], 5)
// );
// echo "Hello";


// function addNumbers($numbers)
// {
//   $sum = 0;
//   foreach ($numbers as $number) {
//     $sum = $sum + $number;
//   }
//   // $sum =  $num1 + $num2 + $num3;
//   return $sum;
// }

// echo addNumbers([2, 4, 5]);
// $numbers = [4, 5, 70, 40];


// Pass by value/reference
function addBonus(&$value) {
  $value += 1000; // $value = $value + 1000;
}

$salary = 10000;
addBonus($salary);
echo $salary;


