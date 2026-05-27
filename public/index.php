<?php 

require_once "../utils/autoloader.php";

// Exercice 2 - Héritage
// Créer les fichiers Animal.php, Mammifere.php, Chien.php
// Créer une classe Animal qui contient la méthode info(). Cette méthode echo "je suis un animal".
// Créer une classe Mammifere qui hérite de la classe Animal et qui contient la méthode infoPlus() qui echo "je suis un mammifère".

// Créer une classe Chien qui hérite de la classe Mammifere et qui contient la méthode crie() qui echo "j'aboie".
// Créer un nouveau Chien et utiliser toutes les méthodes de sa classe.

$chien = new Chien();
$chat = new Chat();

var_dump($chien);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1><?= $chien->info() ?></h1>
<h2><?= $chien->infoPlus() ?></h2>
<h3><?= $chien->crie() ?></h3>

<h1><?= $chat->info() ?></h1>
<h2><?= $chat->infoPlus() ?></h2>
<h3><?= $chat->crie() ?></h3>

</body>
</html>