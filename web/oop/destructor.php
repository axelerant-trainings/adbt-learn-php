<?php

class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    echo 'Constructor called.. <br />';
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

  function __destruct() {
    echo 'Destructor called.. <br />';
  }
}

echo "About to create new fruit <br />";
$apple = new Fruit("Apple");
unset($apple);

echo "A new fruit created <br />";
echo $apple->get_name();
