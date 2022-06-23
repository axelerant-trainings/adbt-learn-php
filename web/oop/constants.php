<?php

class Fruit {
  public const VEG = 'Yes';

  public function isVeg() {
    // return self::VEG;
    // return $this::VEG;
  }


}


// $apple = new Fruit();
// // echo $apple->isVeg();
// echo $apple::VEG;
echo Fruit::VEG;
