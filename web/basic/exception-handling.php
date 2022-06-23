<?php


// Function with an exception
function checkNum($number) {
  if ($number > 1) {
    throw new Exception("Value must be 1 or below");
  }

  //
  //

  return true;
}

// checkNum(4);

// Trigger exception

echo 100;

try {
  echo "<br/ >Inside Try<br/ ><br/ >";
  checkNum(1);
}
catch (Exception $e) {
  echo "<br/ >Inside Catch<br/ ><br/ >";
  // var_dump($e);
  // /echo $e->getMessage();
}
finally  {
  echo "<br/ ><br/ >Covered exception handling.<br/ ><br/ >";

}


echo 200;
