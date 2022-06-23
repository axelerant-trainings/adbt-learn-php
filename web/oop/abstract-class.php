<?php


// Parent class
// Abstract method must be either protected/public.
// Derived class implemnting abstract method can have additional default-valued args.

abstract class Car
{
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }

  abstract public function intro(): string;

  public function getPrice(): string  {
    return "Inside price";
  }
}

// Child classes
abstract class Audi extends Car
{

  public function intro(): string
  {
    return "Proud to be Swedish! I'm a $this->name!";
  }

  public function getPrice(): string
  {
    return "Inside price";
  }
}


class Volvo extends Car
{
  public function intro(): string
  {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";
