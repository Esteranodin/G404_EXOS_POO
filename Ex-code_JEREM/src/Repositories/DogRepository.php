<?php

class DogRepository
{

    private PDO $pdo;
    private DogMapper $mapper;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->mapper = new DogMapper();
    }

    /**
     * Trouve un chien en fonction de son id
     */
    public function findById(int $id): ?Dog
    {
        $sql = "SELECT * FROM dog WHERE id = :id";

        try {

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ":id" => $id
            ]);
            $dogData = $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $error) {
            echo "Erreur lors de la requete : " . $error->getMessage();
        }

        $dog = $this->mapper->mapToObject($dogData);

        if($dog){
            return $dog;
        } else {
            return null;
        }

    }


    public function insert(int $age, string $poil, string $race, string $nom)
    {
        $sql = "INSERT INTO `dog`(`age`, `nom`, `poil`, `race`) VALUES (:age, :nom, :poil, :race)";

        try {

            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([
                ":age" => $age,
                ":nom" => $nom,
                ":poil" => $poil,
                ":race" => $race,
            ]);
        } catch (PDOException $error) {
            echo "Erreur lors de la requete : " . $error->getMessage();
        }
    }
}