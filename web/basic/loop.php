<?php

// for, while, do while, foreach
// continue, break

// for ($count = 10; $count > 0; $count--) {
//   echo "Hello - " . $count . "<br />";

// }

// $count = 10;
// for (; $count > 0 ;) {
//   echo "Hello - " . $count . "<br />";
//   $count--;
// }

$count = 10;
while ($count > 0) {

  if ($count == 6) {
    $count--;
    continue;
    //break;
  }

  echo "Hello while - " . $count . "<br />";
  if ($count == 6) {
   break;
  }

  $count--;
}

// $count = -1;
// do {
//   echo "Hello - do-while " . $count . "<br />";
//   $count--;
// } while($count > 0);


// $products = [
//   'pr1' => 100,
//   'pr2' => 200,
//   'prN' => 300,
// ];
// echo $count =  count($products);
// foreach ($products as $key => $value) {
//   // echo $key . " - " . $value . "<br />";

//   // echo "Product: $key, Value $value <br />";
// }



// $index = 0;
// for (;$count > 0;$count--) {

//   $keys = array_keys($numbers);
//   echo $numbers[$keys[$index]];
//   // var_dump(array_keys($numbers));
//   $index++;
// }
