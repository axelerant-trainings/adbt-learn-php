<?php

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  public function set_name($name) {
    $this->name = $name;
  }

  public function get_name() {
    return $this->name;
  }

}

$apple = new Fruit();
$banana = new Fruit();

// var_dump($apple);

$apple->set_name('Apple');
$banana->set_name('Banana');


echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
