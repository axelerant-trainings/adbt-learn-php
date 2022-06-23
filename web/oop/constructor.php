<?php

class Fruit {
  public $name ='Apple';
  public $color;

  function __construct($name = 'Banana') {
    echo 'Constructor called.. <br />';
    echo $this->name;
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

echo "About to create new fruit <br />";
$apple = new Fruit('Mango');
echo "A new fruit created <br />";
echo $apple->get_name();
