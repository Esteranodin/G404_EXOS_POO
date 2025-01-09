<?php

abstract class Animal
{

    // Propriétés
    private int $weight;
    private int $heigh;
    private bool $isCute;

    // Méthode 
    public function info(): string
    {

        return "Je suis un animal <br>";
    }

    public function propDisplay($isCute, $weight, $heigh)
    {

        if ($isCute) {
           $isCute = "Je suis mignon";
        } else {
           $isCute = "Je suis pas très beau mais choupi :)";
        }

        return "$isCute et je pèse $weight kg et mesure $heigh centimètres !";
    }
}
