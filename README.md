# PHP procédural et Objet - Examens

Pour travailler sur ce projet :

- **créer un fork** du projet (sur la page [https://github.com/Dreeckan/hb-php-exam](https://github.com/Dreeckan/hb-php-exam), cliquer sur le bouton `fork`, en haut à droite de la page)
- Cloner **votre** projet (commande `git clone` par exemple)
- Créer une branche pour faire tout l'exam
- À la fin de l'examen, vous **devez** envoyer un zip de votre code sur Moodle et vous **pouvez** faire une PR à destination du projet d'origine (afin de faciliter mes retours pour la correction)

**2 points bonus** peuvent être gagnés si tout votre code est valide PSR-12 et PSR-4 (3 erreurs autorisées au total).

La durée prévue est d'environ 3h. Des points peuvent être perdus pour le retard du rendu :

- 1 point si le rendu est fait après 20h
- 2 point si le rendu est fait après 23h59 (et 59 secondes)

Liste des exercices

1. Utilisation des variables (1 point)
2. Conditions et boucles (1 point)
3. Fonctions (2 points)
4. PHP dans du html (3 points)
5. Superglobales (4 points)
6. Objets (4 points)
7. Cours et bogues (2 points)
8. Jeux de rôle (5 points)

## 1. Utilisation des variables (1 point)

- Dans `1-variables.php` :
  - [ ] Déclarer un tableau nommé `objects`, contenant les valeurs suivantes : `test`, `42`, `0.0`
  - [ ] Ajouter un élément (après la déclaration) : `ajout`
  - [ ] Ajouter un élément (après la déclaration) `ajout2` avec l'index `index`
  - [ ] Afficher, avec un `echo`, le contenu de l'index `index` dans le tableau
- [ ] Créer un commit avec vos changements

## 2. Conditions et boucles (1 point)

- Dans `2-conditions.php` :
  - [ ] Utiliser `echo` et `foreach` pour afficher toutes les valeurs du tableau `$shoes` (défini dans le fichier) et les séparer par des sauts de ligne (`<br />`)
  - [ ] Dans cette boucle, si l'index `price` d'un élément est strictement supérieur à `100`, ajouter un point d'exclamation sur sa ligne
- [ ] Créer un commit avec vos changements

## 3. Fonctions (2 points)

- Dans `3-fonctions.php` :

  - Créer une fonction `fonctionAffine` qui
    - [ ] prend un nombre entier `n` en paramètre
    - [ ] Retourne le résultat du calcul `4n + 6` si `n` est strictement supérieur à 5
    - [ ] Retourne le résultat du calcul `3n - 2` si `n` est inférieur ou égale à 5
  - Créer une fonction `suiteNPlusUn` qui

    - [ ] prend un nombre entier `n` en paramètre
    - [ ] renvoie la somme des entiers de 1 à `n` (1 + 2 + 3 + ... + n)

  - [ ] Ajouter 3 appels de chacune de ces fonctions et en afficher les résultats avec la fonction `var_dump()`

- [ ] Créer un commit avec vos changements

## 4. PHP dans du html (3 points)

- Dans `4-html.php` :
  - [ ] Afficher le contenu du tableau PHP dans un tableau HTML (balise `<table>`). Pour cela, utiliser une boucle `foreach`.
  - Le tableau doit avoir 2 colonnes :
    - [ ] Nom des jeux
    - [ ] Prix (en euros)
      - [ ] Afficher tous les prix avec le format français (ex : 12,45€) grâce à la fonction `number_format()` ([dont la documentation est ici](https://php.net/manual/fr/function.number-format.php))
    - [ ] Pour les jeux coutant moins de 50€, ajouter le texte `(pas chère !)` juste après le prix
  - [ ] Dans la colonne du nom, ajouter un lien sur le texte, pointant vers `5-superglobales.php`, en ajoutant le paramètre `price` avec pour valeur le prix du jeu
- [ ] Créer un commit avec vos changements

## 5. Superglobales (4 points)

- Dans `5-superglobales.php` :
  - [ ] Récupérer la valeur de `price` contenu dans l'url.
  - [ ] Vérifier que `price` n'est pas vide et la mettre dans l'index `price` de la session.
  - le formulaire du fichier doit avoir 2 champs valides :
    - [ ] email (type email)
    - [ ] gift (type nombre)
  - [ ] Vérifier que l'email entré est valide en utilisant la fonction `filter_var` ([dont la documentation est ici](https://www.php.net/manual/fr/function.filter-var))
    - [ ] Si ça n'est pas le cas, afficher un message d'erreur : "Veuillez entrer un email valide"
  - Si les deux champs sont valides, ajouter ces entrées dans la session
    - [ ] `sum` qui va contenir la somme du `price` passé en paramètre de la page et de la valeur du champ `gift` du formulaire
    - [ ] `email` qui va contenir la valeur du champ `email` du formulaire
- [ ] Créer un commit avec vos changements

## 6. Objets (4 points)

- Dans le dossier `classes/Game` ( /!\ le sous-dossier est important)

  - Créer une classe abstraite `AbstractGame` dans son propre fichier avec les propriétés suivantes (définies en `protected`)
    - [ ] `name` de type `string`
    - [ ] `price` de type `float`
  - [ ] Écrire les getters et les setters de ces propriétés
  - [ ] En commentaire de la classe, expliquer avec vos mots ce qu'est une classe abstraite
  - [ ] Ajouter des annotations (commentaires) aux propriétés et aux méthodes
  - [ ] Créer une classe `VideoGame` (jeu vidéo) qui étend cette `AbstractGame`
  - [ ] Créer une classe `BoardGame` (jeu de société) qui étend cette `AbstractGame`

- Dans `6-objets.php` :
  - [ ] Instancier 2 objets de type `AbstractGame` (un de type `VideoGame` et un de type `BoardGame`) avec des valeurs distinctes
  - [ ] en afficher les valeurs de leurs propriétés avec des `echo`
- [ ] Créer un commit avec vos changements

## 7. Cours et bogues (2 points)

Pour chacune des questions, cocher **la** case qui correspond (il y a toujours une seule bonne réponse). Pour cocher une cas, remplacer le `[ ]` à côté de la réponse voulue par `[x]`.
Pour tous les exemples utilisant des objets, nous partons du principe qu'il y a un fichier chargé de l'autoload (appel automatique de `require_once` sur les fichiers de nos classes) et qu'il fonctionne à tous les coups.

### 7.1. Quelle est la bonne manière d'utiliser un trait ?

- [ ] Solution 1

```php
// Traits/HasTestTrait.php
trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

use Traits\HasTestTrait;

class UseTestTrait
{
    use HasTestTrait;
}
```

- [x] Solution 2

```php
// Traits/HasTestTrait.php
namespace Traits;

trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

use Traits\HasTestTrait;

class UseTestTrait
{
    use HasTestTrait;
}
```

- [ ] Solution 3

```php
// Traits/HasTestTrait.php
namespace Traits;

trait HasTestTrait {}

// Test/UseTestTrait.php
namespace Test;

class UseTestTrait
{
    use Traits\HasTestTrait;
}
```

### 7.2. Ce code plante, pourquoi ?

```php
// fichier Interfaces/Test.php
namespace Interfaces;

interface TestInterface
{
    public function getTest();
}

// fichier Test.php
use Interfaces\TestInterface;

class Test implements TestInterface
{
}
```

- [ ] Il manque un namespace dans la classe `Test`
- [x] La classe `Test` n'a pas de méthode `getTest()`
- [ ] Il manque un `use` dans la classe `Test`

## 8. Jeux de rôle (5 points)

Maintenant, nous allons coder un mini-jeu de rôle. Deux personnages, Legolas et Gimli ont décidé de s'entrainer au combat ensemble. Ils vont s'attaquer tour à tour jusqu'à ce que l'un des deux abandonne. Voir le contenu du fichier `8-jdr.php` pour voir le programme attendu. Il sera modifié dans l'exercice.

- Dans le dossier `classes/Rpg` ( /!\ le sous-dossier est important)

  - Créer une classe abstraite `AbstractCharacter` dans son propre fichier avec les propriétés suivantes (définies en `protected`)
    - [ ] `name` de type `string`
    - [ ] `strength` (force) de type `int`
    - [ ] `lifePoints` (points de vie) de type `int`
  - Créer des méthodes pour créer / manipuler nos personnages

    - [ ] Un constructeur, prenant en paramètre le nom du personnage (et le mettant dans la propriété `name` de l'objet)
    - [ ] `getName()` retournant le nom du personnage
    - [ ] `getLifePoints()` retournant le nombre de points de vie du personnage (`lifePoints`)
    - [ ] `hasSurrendered()` (a abandonné) qui renvoie `true` si le personnage a moins de 10 `lifePoints`, false sinon
    - [ ] `takeHit()` (prendre un coup) qui
      - [ ] prend en paramètre un entier `strength`
      - [ ] enlève `strength` (exemple 5) `lifePoints` (points de vie) au personnage touché
      - [ ] renvoie le résultat de la méthode `hasSurrendered()` (booléen)
    - [ ] `attack()` (attaquer) qui
      - [ ] prend en paramètre un autre personnage (objet de type `AbstractCharacter`)
      - fait un lancé de dé pour savoir si le personnage touche l'autre :
        - [ ] Utilise la fonction `rand()` de php ([dont la documentation est ici](https://www.php.net/manual/fr/function.rand.php)), pour générer un nombre entre 1 et 20
        - [ ] Si ce nombre est inférieur ou égale à la force du personnage, alors on va appeler la méthode `takeHit()` de l'autre personnage, en passant la `strength` du personnage actuel en paramètre
        - [ ] Sinon, le personnage a raté
      - [ ] Retourner le nombre de dégâts infligés

  - Créer 2 types de personnages, deux classes héritant de `AbstractCharacter` :
    - [ ] `Dwarf` initialisé avec les valeurs suivantes :
      - [ ] `strength` à 15
      - [ ] `lifePoints` à 100
    - [ ] `Elf` initialisé avec les valeurs suivantes :
      - [ ] `strength` à 17
      - [ ] `lifePoints` à 75
    - [ ] Conserver le comportement du constructeur de la classe parente (pour se faire, appeler `parent::__construct($name)` dans les constructeurs de `Dwarf` et `Elf`)

- Dans `8-jdr.php` :
  - [ ] Vérifier que le script fonctionne comme attendu
  - Plutôt que d'appeler manuellement tous les éléments un par un, nous allons faire une boucle pour simuler notre combat :
    - [ ] Tant qu’aucun de nos personnages n'a abandonné, faire
      - [ ] Legolas attaque Gimli
      - [ ] Si Gimli n'a pas abandonné, alors Gimli attaque Legolas
      - [ ] À chaque attaque, afficher
        - [ ] les points de vie de chaque personnage
        - [ ] les dégâts infligés
        - [ ] Si un personnage abandonne le combat
