<?php

class MachineACafe
{

    // Propriétés
    private string $marque;
    private string $cafe;
    private bool $enFonction;

    // Méthodes 
    public function allumage($isOn)
    {
        if ($isOn){
            return "La machine '' $this->marque '' est en fonction . <br> ";
        } else {
            return "$this->marque n'est pas en fonction . <br>";
        }
    }

    public function mettreUneDosette()
    {
        return "Je mets une dosette et ";
    }

    public function faireDuCafe()
    {


        
        return "le café est prêt !";
    }


    // Méthode magique
    public function __construct(string $marque, bool $enFonction)
    {
       $this->marque = $marque;
       $this->enFonction = $enFonction;
       return $this;
      
    }
// 2 erreurs possible : machine pas allumée avec dosette ou inversement une machine allumée mais pas de dosette

// penser qu'il y a pour le moment 2 booléens !

}
