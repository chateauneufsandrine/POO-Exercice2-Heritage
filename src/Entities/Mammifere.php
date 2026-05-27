<?php
require_once "Animal.php";
// Exercice 2 - Héritage
// Créer les fichiers Animal.php, Mammifere.php, Chien.php
// Créer une classe Animal qui contient la méthode info(). Cette méthode echo "je suis un animal".
// Créer une classe Mammifere qui hérite de la classe Animal et qui contient la méthode infoPlus() qui echo "je suis un mammifère".

// Créer une classe Chien qui hérite de la classe Mammifere et qui contient la méthode crie() qui echo "j'aboie".
// Créer un nouveau Chien et utiliser toutes les méthodes de sa classe.

abstract class Mammifere extends Animal
{
    public function infoPlus(): string
    {
        return "Je suis un mammifère";
    }
}
