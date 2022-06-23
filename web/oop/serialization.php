<?php


class Fruit
{
  public $name;
  protected $color;
  private $weight;

  public function __construct($name, $color) {
    echo 'Constructor called..<br />';

    $this->name = $name;
    $this->color = $color;
  }

  public function __serialize() : array {
    echo 'Serialize called..<br />';

    return (array) $this;
  }
}


$apple = new Fruit('Apple', 'red');

$serialized_data = serialize($apple);
echo $serialized_data;

// echo addslashes($serialized_data);
// var_dump($serialized_data);
echo '<br />Object ready to store in database^.<br /><br />';

// Constructor does'nt get call. (Magic method __unserialize)
// They point to different memory address.
$some_fruit = unserialize($serialized_data) ;

echo '<pre />';
var_dump($apple);
var_dump($some_fruit);


var_dump($apple === $some_fruit);
