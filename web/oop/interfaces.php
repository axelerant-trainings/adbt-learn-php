<?php

#### Interfaces cannot have properties but the constants abtract can have them
#### Classes implementing an Interface cannot override their constant
#### Has all methods public but abtract class can have private/protected
#### Interface can only have method declaration but abtract can have method body too
#### Class can implement many interfaces but only extend a single abstract class

interface Animal
{
  const IP = '128';
  public function makeSound();
}

// interface Animal extends OtherInterface, SoOnInterfaces{}

class Cat implements Animal {

  public function makeSound() {
    echo "Meow";
  }



}


class Dog implements Animal
{
  public function makeSound()
  {
    echo "Bhow bhow";
  }
}



class MyClass {
  public $animal;

  function __construct(Animal $animal) {
    $this->animal = $animal;
    $animal->makeSound();
  }

  function describeActivity() {
    $this->animal;
  }
}

$cat = new Cat();
$myclass = new MyClass($cat);
$dog = new Dog();
$myclass = new MyClass($dog);

// $animal->makeSound();
