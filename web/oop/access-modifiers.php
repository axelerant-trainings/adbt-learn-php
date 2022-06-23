<?php

// namespace Nature1;

class Fruit {
  public $name;
  protected $color;
  private $weight;

  function setColor($color) {
   $this->color = $color;

  }

  function getColor() {
    $this->setWeight('300');
    return $this->color;
  }

  private function setWeight($weight) {
    $this->weight = $weight;
  }

}

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK

// $mango->setColor('Yellow');
// // $mango->setWeight('100');

// var_dump($mango);
// echo $mango->getColor();

// var_dump($mango);


// echo $mango->name;
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = '300'; // ERROR
