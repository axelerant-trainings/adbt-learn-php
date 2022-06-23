<?php

use Fruit as GlobalFruit;

class Fruit
{
  public $name;
  protected $color;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  public function intro()
  {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}


trait Trait1
{
  private $myvar = 10;

  public function msg1()
  {
    echo "OOP is fun - 1! " . $this->myvar;
  }

  public function msg2()
  {
    echo "OOP is fun - 2! ";
  }

  private function msg3()
  {
    echo "OOP is fun - 3! ";
  }
}


class Welcome
{
  public function msg3()
  {
    echo __CLASS__ . "OOP is fun - 3! ";
  }
}


$obj = new Welcome();
$obj->msg1();
