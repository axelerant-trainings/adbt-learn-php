<?php


class Fruit {
  public $name;
  protected $color;

  public function __construct($name, $color)
  {
    echo "Constructor called.. <br />";
    $this->name = $name;
    $this->color = $color;
  }

  public function __clone() {
    echo "Clone called.. <br />";
    $this->name = 'Cloned- ' .  $this->name;
  }

}


$apple = new Fruit('Apple', 'red');

// Constructor does'nt get call. (Magic method __clone)
// They point to different memory address.
$cloned_apple = clone($apple);

echo '<pre />';

var_dump($apple);
var_dump($cloned_apple);

var_dump($apple === $cloned_apple);
