# 💊 Introduction à la POO

## 🏆 Objectifs
- Je sais créer et utiliser un objet PHP.
- Je sais faire un héritage.

## 📺 Présentation
- [Les paradigmes de programmation](https://docs.google.com/presentation/d/1S-5sxLhOG4O02RDbCrQA816CQZpECg3BytstehqaY7A/edit#slide=id.p)
- [Introduction à la POO](https://docs.google.com/presentation/d/1Rs3aB2lmad4GMejCvoPQ4gwsn51Fk9sbjuig2Qf5j1s/edit)
- ⚠️ [Le Mémo](https://github.com/G404-DWWM/POO-Memo)

## 🎦 Live coding	
  - Comment créer un objet PHP 

## 📚 Les ressources
  - [declaration class php](https://tutowebdesign.com/declaration-class-php.php) / [héritage objet php](https://tutowebdesign.com/heritage-objet-php.php) / [visibilité classe php](https://tutowebdesign.com/visibilite-classe-php.php)
  - Lior CHAMLA :
    - [PARTIE 1 | Les Classes](https://www.youtube.com/watch?v=fZcGXjg97Ns)
    - [PARTIE 2 | L'Encapsulation](https://www.youtube.com/watch?v=kDrdwWGipPo)
    - [PARTIE 3 | L'Héritage](https://www.youtube.com/watch?v=XYZzsTLbhes)
    - [PARTIE 4 | Interface et Abstraction](https://www.youtube.com/watch?v=NjF-gF1yNqo)

  

## 📖 Lexique
- **Classe** : Schéma qui permet de définir une série d'objets. Sorte de patron de conception.
    - **Analogie** : Dans la construction d'une maison, les plans de l'architecte sont des classes, tandis que la maison construite est une instance du plan.
- **Objet** : Instance de la classe générée grâce à l'opérateur `new`. Il est possible d'instancier plusieurs objets par classe.
- **Instance** : Une itération de la classe. Une instance de classe contient un objet.
- **Propriété** : Une variable de la classe qui prendra une valeur au moment de l'instanciation ou après.
- **Méthode** : Une fonction définie dans la classe.
- **Publique** : C'est une variable, propriété de l'objet, qui est accessible et visible en dehors de la classe.
- **Privé** : C'est une variable, propriété de l'objet, qui n'est pas accessible ni visible en dehors de la classe.
- **Statique** : C'est une variable, propriété de la classe, qui a la même valeur pour toutes les instances de la classe.

## ⛳ Exercices

### Exercice 1
- Dans un fichier PHP, créez une classe Formule1 avec une propriété privée `speed` qui est à 0 par défaut.
- Dans cette classe Formule1, créer une méthode `drive()` qui affiche "Vroom vroom à x km/h", x étant la valeur de la propriété `speed`.
- Créer une variable `myFormule1` qui contient une nouvelle instance de la classe Formule1.
- Utiliser la méthode `drive()`.
- Créer une méthode `shiftGear()` qui ajoute un nombre à l'attribut vitesse.
- Enchaîner les méthodes `drive()`, `shiftGear()` et encore `drive()`. Cette dernière fonction doit afficher un nombre supérieur pour montrer le passage de vitesse.

### Exercice 2 - Héritage
- Créer un fichier animaux.php
- Créer une classe Animal qui contient la méthode `info()`. Cette méthode echo "je suis un animal".
- Créer une classe Mammifère qui hérite de la classe Animal et qui contient la méthode `infoPlus()` qui echo "je suis un mammifère".
- Créer une classe Chien qui hérite de la classe Mammifere et qui contient la méthode `crie()` qui echo "j'aboie".
- Créer un nouveau Chien et utiliser toutes les méthodes de sa classe.

## 🔥 Extra :
- Ajouter des propriétés à chaque classe qui leur sont propres.
- Ajouter dans chaque méthode l'affichage de ces propriétés.

## ☕ Mini TP : nous allons construire une machine à café !

### Créer un fichier cafe.php
- Créer la classe MachineACafe
  - La machine doit avoir au minimum 3 attributs privés et 3 fonctions publiques :
    - Les attributs : `marque`, `cafe`, `enFonction`.
    - Les méthodes : `allumage()`, `faireDuCafe()`, `mettreUneDosette()`.
  - Utiliser la méthode magique `__construct()` pour définir la marque de la machine.
- Écrire le code des fonctions pour arriver à ce résultat :
  ```php
  $machine = new MachineACafe("Senseo");
  $machine->allumage(true);
  $machine->mettreUneDosette();
  $machine->faireDuCafe();
    // Output:
  // Senseo est en fonction.
  // Je mets une dosette.
  // Le café est prêt !
  ```

### 🔥 Extra
- Gérer toutes les possibilités d'erreur d'utilisation.
- Ajouter une méthode pour éteindre la MachineACafe.
- Imaginer et intégrer la gestion du sucre.
- Ajouter un monnayeur pour payer son café et qui rend la monnaie.
- Créer une interface graphique représentant la machine et les interactions.

## 🧠 A retenir
- Le constructeur permet d’initier des propriétés à l’instanciation de l’objet.

