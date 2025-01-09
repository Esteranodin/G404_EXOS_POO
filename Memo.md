# 📝 Mémo : La Programmation Orientée Objet (POO)

Bienvenue dans le monde de la **POO** ! Voici un mémo clair pour comprendre et retenir les notions clés que nous aborderons dans ce module. 🌟

## Table des matières

1. [Les concepts fondamentaux](#%EF%B8%8F-1-les-concepts-fondamentaux) 🟢
   - [Objet](#-objet)
   - [Classe](#-classe)
   - [Instance](#-instance)
2. [Les principes clés de la POO](#-2-les-principes-clés-de-la-poo) 🟡
   - [Encapsulation](#-encapsulation)
   - [Visibilité : public, protected, private](#-visibilité--public-protected-private)
   - [Héritage](#-héritage)
   - [Polymorphisme](#-polymorphisme)
   - [Abstraction](#-abstraction)
3. [Les éléments d’une classe](#%EF%B8%8F-3-les-éléments-dune-classe) 🔵
   - [Propriétés](#-propriétés)
   - [Méthodes](#-méthodes)
   - [Typage](#-typage)
   - [Constructeur](#-constructeur)
   - [Méthodes magiques](#-méthodes-magiques)
4. [Concepts avancés](#%EF%B8%8F-4-concepts-avancés) 🔴
   - [Interfaces](#-interfaces)
   - [Static](#-static)
   - [Traits](#-traits)
5. [Patrons de conception communs en POO](#5-patrons-de-conception-communs-en-poo) 🟣
   - [Mapper](#-mapper)
   - [Repository](#-repository)
   - [Manager](#-manager)
6. [Tools](#6-tools) ⚪
   - [Autoloader](#-autoloader)

<hr>

## 🏗️ 1. Les concepts fondamentaux

### 🟢 Objet

➡️ Un objet est une "chose" dans le programme, ayant des propriétés (données) et des méthodes (actions).

#### Exemple

```php
class Voiture {
    public $couleur;
    public $vitesse = 0;

    public function rouler() {
        echo "La voiture roule.";
    }
}

$maVoiture = new Voiture();
$maVoiture->couleur = "Rouge";
$maVoiture->rouler(); // Affiche : La voiture roule.
```

<hr>

### 🟢 Classe

➡️ Une classe est un modèle ou un plan permettant de créer des objets.

#### Exemple

```php
class Utilisateur {
    public $nom;
    public $email;
}
```

<hr>

### 🟢 Instance

➡️ Une instance est un objet concret créé à partir d'une classe.

#### Exemple

```php
$utilisateur = new Utilisateur(); // $utilisateur est une instance !!
$utilisateur->nom = "Jean";
echo $utilisateur->nom; // Affiche : Jean

```

<hr>

## 🧰 2. Les principes clés de la POO

### 🟡 Encapsulation

➡️ Cache les détails internes d’un objet et contrôle l’accès via des accesseurs (`getter`) ou mutateurs (`setter`).

#### Exemple

```php
class CompteBancaire {
    private $solde = 0;

    public function deposer($montant) {
        $this->solde += $montant;
    }

    public function getSolde() {
        return $this->solde;
    }
}

$compte = new CompteBancaire();
$compte->deposer(100);
echo $compte->getSolde(); // Affiche : 100
```

<hr>

### 🟡 Visibilité : public, protected, private

En programmation orientée objet (POO), la visibilité des propriétés et des méthodes détermine où elles peuvent être accédées ou modifiées. PHP propose trois niveaux de visibilité :

<hr>

#### 1. Public

- **Accessible partout**, que ce soit depuis la classe elle-même, une classe héritée, ou depuis l'extérieur.
- Utilisé pour les méthodes ou propriétés devant être accessibles à tous.

##### Exemple

```php
class Utilisateur {
    public string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom; // Accessible ici
    }

    public function afficherNom(): string {
        return $this->nom; // Accessible dans une méthode de la classe
    }
}

$utilisateur = new Utilisateur("Alice");
echo $utilisateur->nom; // Accessible depuis l'extérieur
```

<hr>

#### 2. Protected

- **Accessible uniquement depuis la classe elle-même et ses classes héritées.**
- Empêche l'accès direct depuis l'extérieur, mais autorise l'utilisation dans des sous-classes (héritage).

##### Exemple

```php
class Utilisateur {
    protected string $role = "invité";

    protected function afficherRole(): string {
        return $this->role; // Accessible dans la classe
    }
}

class Admin extends Utilisateur {
    public function definirRole(string $role): void {
        $this->role = $role; // Accessible dans une sous-classe
    }

    public function afficherRoleAdmin(): string {
        return $this->afficherRole(); // Accessible via la sous-classe
    }
}

$admin = new Admin();
// $admin->role = "superadmin"; // ERREUR : inaccessible depuis l'extérieur
$admin->definirRole("superadmin"); // OK : via une méthode publique
echo $admin->afficherRoleAdmin(); // OK
```

<hr>

#### 3. Private

- **Accessible uniquement dans la classe où elle est définie.**
- Non accessible depuis les classes héritées ou depuis l'extérieur.
- Idéal pour protéger les données sensibles ou des implémentations internes.

##### Exemple

```php
class Utilisateur {
    private string $motDePasse;

    public function __construct(string $motDePasse) {
        $this->motDePasse = $motDePasse; // Accessible uniquement ici
    }

    private function crypterMotDePasse(): string {
        return hash("sha256", $this->motDePasse); // Méthode privée
    }

    public function afficherMotDePasseCrypte(): string {
        return $this->crypterMotDePasse(); // Appel interne OK
    }
}

$utilisateur = new Utilisateur("secret123");
// echo $utilisateur->motDePasse; // ERREUR : inaccessible
echo $utilisateur->afficherMotDePasseCrypte(); // OK : via méthode publique
```

<hr>

### 🟡 Héritage

➡️ Permet à une classe d’hériter des propriétés et méthodes d’une autre classe.

#### Exemple

```php
class Animal {
    public function dormir() {
        echo "Je dors.";
    }
}

class Chat extends Animal {
    public function miauler() {
        echo "Miaou !";
    }
}

$chat = new Chat();
$chat->dormir(); // Affiche : Je dors. Le chat peut dormir car c'est un Animal !
$chat->miauler(); // Affiche : Miaou !
```

<hr>

### 🟡 Polymorphisme

➡️ Permet à une méthode d’avoir des comportements différents selon le contexte ou la classe.

#### Exemple

```php
class Oiseau {
    public function parler() {
        echo "Je siffle.";
    }
}

class Perroquet extends Oiseau {
    public function parler() {
        echo "Je parle.";
    }
}

$oiseau = new Oiseau();
$perroquet = new Perroquet();
$oiseau->parler(); // Affiche : Je siffle.
$perroquet->parler(); // Affiche : Je parle.
```

<hr>

### 🟡 Abstraction

➡️ Définit des concepts généraux en cachant les détails spécifiques.

#### Exemple

```php
abstract class Vehicule {
    abstract public function demarrer();
}

class Moto extends Vehicule {
    public function demarrer() {
        echo "La moto démarre.";
    }
}

$moto = new Moto();
$moto->demarrer(); // Affiche : La moto démarre.
```

<hr>

## 🛠️ 3. Les éléments d’une classe

### 🔵 Propriétés

➡️ Les variables définies dans une classe.

#### Exemple

```php
class Utilisateur {
    // Propriétés
    public $nom;
    private $motDePasse;

    // Méthodes
    ...
}
```

<hr>

### 🔵 Méthodes

➡️ Les fonctions définies dans une classe.

#### Exemple

```php
class Utilisateur {
    // Propriétés
    ...

    // Méthodes
    public function seConnecter() {
        echo "Connexion réussie.";
    }
}
```

<hr>

### 🔵 Typage

➡️ Le typage permet de spécifier le type des propriétés, des arguments de méthode et des valeurs de retour en PHP. Cela renforce la robustesse et la lisibilité du code.

#### Propriétés typées

```php
class Utilisateur {
    public string $nom;
    public int $age;
}
```

#### Arguments typés

```php
class Calculatrice {
    public function additionner(int $a, int $b): int {
        return $a + $b;
    }
}

$calc = new Calculatrice();
echo $calc->additionner(3, 5); // Affiche : 8
```

#### Valeurs de retour typées

```php
class Produit {
    public function getPrix(): float {
        return 19.99;
    }
}

$produit = new Produit();
echo $produit->getPrix(); // Affiche : 19.99
```

<hr>

### 🔵 Constructeur

➡️ Une méthode magique exécutée lors de la création d’un objet.

#### Exemple

```php
class Utilisateur {
    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }
}

$utilisateur = new Utilisateur("Alice");
echo $utilisateur->nom; // Affiche : Alice
```

<hr>

### 🔵 Méthodes magiques

➡️ Les méthodes magiques commencent par \_\_ (double underscore) et permettent de personnaliser le comportement de vos objets.
Elles sont **magique** car elle se déclenchent toute seule sans qu'on les appelle manuellement !

#### Exemple de méthodes courantes

- `__construct()` : Appelée lors de la création de l’objet.

- `__toString()` : Permet de convertir un objet en chaîne de caractères.

  ```php
  class Produit {
      public function __toString(): string {
          return "Produit disponible";
      }
  }

  $produit = new Produit();
  echo $produit; // Affiche : Produit disponible
  ```

- `__get()` et `__set()` : Accès et modification de propriétés inaccessibles.

  ```php
  class Article {
      private array $data = [];

      public function __get($name) {
          return $this->data[$name] ?? null;
      }

      public function __set($name, $value) {
          $this->data[$name] = $value;
      }
  }

  $article = new Article();
  $article->titre = "Nouvel article";
  echo $article->titre; // Affiche : Nouvel article
  ```

<hr>

## ⚙️ 4. Concepts avancés

### 🔴 Interfaces

➡️ Définit un ensemble de méthodes que les classes doivent implémenter (comme un contrat à respecter !).

#### Exemple

```php
interface Payable {
    public function payer($montant);
}

class Facture implements Payable {
    public function payer($montant) {
        echo "Facture payée : $montant euros.";
    }
}
```

<hr>

### 🔴 Static

➡️ Permet d’accéder à des méthodes ou propriétés sans créer d’instance.

#### Exemple

```php
class MathUtil {
    public static $pi = 3.14;

    public static function aireCercle($rayon) {
        return self::$pi * $rayon * $rayon;
    }
}

echo MathUtil::$pi; // Affiche : 3.14
echo MathUtil::aireCercle(5); // Affiche : 78.5
```

<hr>

### 🔴 Traits

➡️ Réutilisent des méthodes dans plusieurs classes.

#### Exemple

```php
trait Identifiable {
    public function afficherId() {
        echo "ID unique généré.";
    }
}

class Produit {
    use Identifiable;
}

$produit = new Produit();
$produit->afficherId(); // Affiche : ID unique généré.
```

<hr>

## 5. Patrons de conception communs en POO

**Note :** Ces patrons sont des approches courantes pour structurer le code, mais il en existe bien d'autres ...

<hr >

### 🟣 Mapper

➡️ Le Mapper convertit les données brutes, comme celles issues d'une base de données (ou d'un JSON !) en objets métiers.

#### Exemple

```php
// Imaginons que la requête SQL suivante retourne ces données :
$data = [
    'id' => 1,
    'nom' => 'Jean Dupont',
    'email' => 'jean.dupont@example.com'
];

class Utilisateur {
    // Propriétés
    ...

    public function __construct(
        public int $id,
        public string $nom,
        public string $email
    ) {}
}

class UserMapper {
    public function mapToObject(array $data): Utilisateur {
        return new Utilisateur(
            $data['id'],
            $data['nom'],
            $data['email']
        );
    }
}

// Utilisation
$mapper = new UserMapper();
$user = $mapper->map($data);
echo $user->nom; // Affiche : Jean Dupont

```

<hr>

### 🟣 Repository

➡️ Le Repository gère les interactions avec la base de données. Il permet d’exécuter des requêtes SQL pour récupérer des données et les convertir en objets grâce à un Mapper.

#### Exemple

```php
class UserRepository {
    private PDO $db;
    private UserMapper $mapper;

    public function __construct(PDO $db) {
        $this->db = $db;
        $this->mapper = new UserMapper();
    }

    public function findById(int $id): ?Utilisateur {
        $stmt = $this->db->prepare("SELECT * FROM utilisateurs WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($data) {
            return $this->mapper->map($data);
        }

        return null;
    }
}

// Connexion PDO
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$repo = new UserRepository($db);

$user = $repo->findById(1);
if ($user) {
    echo $user->nom; // Affiche : Jean Dupont
}
```

<hr>

### 🟣 Manager

➡️ Le Manager encapsule la logique métier et se concentre sur les opérations complexes ou les règles d'affaires. Il fait souvent appel au Repository pour récupérer les données et exécuter des actions métiers.

#### Différence entre Repository et Manager

- **Repository** : Fournit un accès brut aux données (ex. : requêtes SQL).
- **Manager** : Gère la logique métier (ex. : validation, transformation, ou interactions multiples).

#### Exemple : UserManager

```php
class UserManager {
    private UserRepository $repository;

    public function __construct(UserRepository $repository) {
        $this->repository = $repository;
    }

    public function createUser(string $nom, string $email): Utilisateur {
        // Exemple de logique métier : validation des données
        if (empty($nom) || empty($email)) {
            throw new Exception("Nom et email sont obligatoires.");
        }

        // Création de l'utilisateur
        $newUser = new Utilisateur(0, $nom, $email);

        // Exemple : on pourrait ici insérer en base via un autre repository
        return $newUser;
    }

    public function getUserDetails(int $id): ?array {
        $user = $this->repository->findById($id);

        if ($user) {
            // Logique métier : transformer l'objet en un tableau simple
            return [
                'nom_complet' => strtoupper($user->nom),
                'email' => $user->email
            ];
        }

        return null;
    }
}

// Utilisation
$manager = new UserManager($repo);
$userDetails = $manager->getUserDetails(1);

if ($userDetails) {
    print_r($userDetails);
    // Affiche : Array ( [nom_complet] => JEAN DUPONT [email] => jean.dupont@example.com )
}
```

<hr>

## 6. Tools

### ⚪ Autoloader

➡️ L’Autoloader permet de charger automatiquement les classes lorsqu’elles sont utilisées dans le code, sans avoir besoin de faire des require ou include manuels.

<hr>

#### Structure du projet

Imaginons que vous ayez la structure suivante pour votre projet :

```bash
/utils
  autoloader.php
/src
  /Entities
    Utilisateur.php
  /Mappers
    UserMapper.php
  /Repositories
    UserRepository.php
  /Managers
    UserManager.php
/public
  home.php
  about.php
  contact.php
index.php
```

<hr>

#### Fichier `utils/autoloader.php`

Voici un autoloader fonctionnant avec cette structure :

```php
<?php

spl_autoload_register(function ($className) {
    // Base directory (src)
    $baseDir = __DIR__ . '/../src/';
    
    // Déterminer le répertoire en fonction du suffixe du nom de la classe
    switch (true) {
        case substr($className, -10) === 'Repository':
            $directory = 'Repositories';
            break;
        case substr($className, -7) === 'Manager':
            $directory = 'Managers';
            break;
        case substr($className, -6) === 'Mapper':
            $directory = 'Mappers';
            break;
        default:
            $directory = 'Entities';
            break;
    }

    // Construire le chemin complet du fichier
    $file = $baseDir . $directory . '/' . $className . '.php';

    // Charge le fichier si trouvé
    if (file_exists($file)) {
        require $file;
    }
});
```

<hr>

#### Fichier `index.php`

Ici le fichier index ne jouera qu'un seul rôle : Rediriger vers une page par défaut (`home.php` dans `public`).

```php
<?php
// Rediriger vers la page d'accueil
header('Location: public/home.php');
exit;
```

<hr>

#### Fichier `public/home.php`

Exemple d’une page publique (`home.php`) qui utilise les classes chargées automatiquement :

```php
<?php
// Connexion à la base de données
$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '');

// Création des objets
$repository = new UserRepository($db);
$manager = new UserManager($repository);

// Exemple : récupérer un utilisateur
$user = $repository->findById(1);

if ($user) {
    echo "<h1>Bienvenue, {$user->nom}</h1>";
} else {
    echo "<h1>Aucun utilisateur trouvé</h1>";
}
?>
```

<hr>
