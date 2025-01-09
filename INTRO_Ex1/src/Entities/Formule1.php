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
    // a corriger la fonction en doit que retourner et c'est la page concernée qui doit afficher ici homepage
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
