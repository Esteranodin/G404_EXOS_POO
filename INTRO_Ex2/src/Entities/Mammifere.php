<?php

abstract class Mammifere extends Animal {

    protected int $nombrePatte;

  
    public function infoPlus(): string
    {
        return "je suis un mammifère";
    }
}