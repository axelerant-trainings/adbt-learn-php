<?php

// Overriding methods
// Calling parent method
// Final keyword


class Fruit {
  public $name;
  protected $color;

  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }

  final public function intro() {
    echo "Parent - The fruit is {$this->name} and the color is {$this->color}.";
  }
}


// Strawberry is inherited from Fruit
class Strawberry extends Fruit {

  public function intro() {
    $data = parent::intro();
    echo " Derived - The fruit is {$this->name} and the color is {$this->color}.";
  }

  public function message() {
    echo "Am I a fruit or a berry? ";
  }
}

$strawberry = new Strawberry("Strawberry", "red");
$strawberry->message();
$strawberry->intro();

// $strawberry->color;

// var_dump($strawberry);
