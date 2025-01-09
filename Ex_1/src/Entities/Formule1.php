<?php

class Formule1
{

  // propriétes 
  private $speed = 0;

  // méthodes

  public function drive()
  {
    echo "Vroom vroom à $this->speed km/h <br>";
    return $this;
  }

  public function getSpeed()
  {
    return $this->speed;
  }

  public function shiftGear($speed)
  {
    $this->speed += $speed;
    return $this;
  }
}
