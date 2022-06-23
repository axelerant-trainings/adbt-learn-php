<?php

// Used to reference the called class in a context of static inheritance.

class Fruit {

  public static function getWeight() {
    echo __CLASS__;
  }

  public static function test() {
    static::getWeight(); // Here comes Late Static Bindings
  }
}

class Apple extends Fruit {

  public static function getWeight() {
    echo __CLASS__;
  }

}

Apple::test();
