<?php

use Game\BoardGame;
use Game\VideoGame;

spl_autoload_register(function ($class) {
    // Dé-commenter la ligne ci-dessous si vous utilisez un Mac avec MAMP
    // $class = str_replace($class, '\\', '/');
    require_once "classes/$class.php";
});

$videoGame = new VideoGame;
$videoGame->setName('Call of Duty');
$videoGame->setPrice(80);

$boardGame = new BoardGame;
$boardGame->setName('Monopoly');
$boardGame->setPrice(20);

echo $videoGame->getName(),$videoGame->getPrice(), $boardGame->getName(),$boardGame->getPrice();
