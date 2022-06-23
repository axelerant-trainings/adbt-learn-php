<?php

// namespace SyedaLib\Volume;
// namespace ManiLib\Volume;

// // namespace Nature;
// // use Nature1;

use SyedaLib\Fruit as NewFruit;

require_once __DIR__ . '/ExampleClass.php' ;


class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    echo ' >> Constructor called.. <br />';
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }

}


$apple = new Fruit('Apple');
$myvar = new NewFruit();
echo $myvar::GREET;
// $example = new MyNamespace\ExampleClass();
// echo $example->name;


// echo "<br /><br /><br />From Namespace.. ";
// echo "About to create new fruit <br />";
// $apple = new Nature1\Fruit1("Apple");
// var_dump($apple);
// unset($apple);

// echo "A new fruit created <br />";
// echo $apple->get_name();
