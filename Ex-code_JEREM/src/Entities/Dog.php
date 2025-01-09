<?php


class Dog extends Animal 
{
    // Propriétés
    private int $id;
    private int $age;
    private string $race;
    private string $poil;
    private string $nom;

    // Méthodes magique
    public function __construct(int $id, int $age, string $race, string $poil, string $nom)
    {
        $this->id = $id;
        $this->age = $age;
        $this->race = $race;
        $this->poil = $poil;
        $this->nom = $nom;
    }

    // Getter et Setter
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    // Méthodes custom
    public function attaquer(): string
    {
        return "Il attaque";
    }

    public function abboyer():string 
    {
        return "wouaf !";
    }
}