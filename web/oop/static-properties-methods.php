<?php

class Passes {

  // Share at class level not object
  public static $pass_count = 0;

  function __construct() {
    // echo $this->pass_count;
    // $this->pass_count++;

    echo self::$pass_count;
    self::$pass_count++;
  }

  static function getCountVal() {
    return self::$pass_count;

  }

}


$pass1 = new Passes();
$pass2 = new Passes();
$pass3 = new Passes();
$pass4 = new Passes();
$pass5 = new Passes();
$pass6 = new Passes();

echo Passes::$pass_count;
echo Passes::getCountVal();

