<?php

class MachineACafe
{
    // Propriétés
    protected string $marque;
    protected int $cafe; //dosettes
    protected bool $enFonction;
    protected int $sucre;

    // Méthode magique
    public function __construct(string $marque)
    {
        $this->marque = $marque;
        $this->enFonction = false;
        $this->cafe = 0;
        $this->sucre = 0;
    }


    // Méthodes 
    public function allumage(): void
    {
        $this->enFonction = !$this->enFonction;

        // if ($this->enFonction) {
        //     return "La machine $this->marque est en fonction. <br> ";
        // } else {
        //     return "$this->marque n'est pas en fonction. <br>";
        // }
    }

    public function mettreUneDosette(int $cafe): void
    {
        $this->cafe = $cafe;

        // if ($this->cafe <= 0) {
        //     return "Il n'y pas de café dans la machine, veuillez mettre une dosette <br>";
        // } else if ($this->cafe > 0) {
        //     return "Il y a $this->cafe dosette, ";
        // }
    }

    /**
     *  Focntion qui permet de faire du café avec en paramètre le nombre de morceau(x) de sucre
     */

    public function faireDuCafe(int $sucre)
    {
        $this->sucre = $sucre;

        if ($this->enFonction === false && $this->cafe > 0) {
            return "Il y a du café mais vous n'avez pas allumé la machine !";

        } else if ($this->enFonction === true && $this->cafe <= 0) {
            return "La machine est allumée mais il n'y a pas de café";

        } else if ($this->enFonction === true && $this->cafe > 0) {

            if ($this->enFonction === true && $this->cafe > 0 && $this->sucre > 0) {
                return "Votre café est prêt ! Vous avez mis $this->cafe dosette(s) et choisi de mettre $this->sucre morceau(x) de sucre";
            } else {
                return "Votre café est prêt ! Vous avez mis $this->cafe dosette(s)";
            }

        } else {
            return "La machine n'est pas allumée et il n'y a pas de café...";
        }

       
    }
}


// if ($this->enFonction === false && $this->cafe > 0) {
//     return $this->mettreUneDosette($this->cafe);