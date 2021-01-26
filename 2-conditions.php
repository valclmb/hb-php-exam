<?php

$shoes = [
    [
        'name'  => 'Heracles air max ++',
        'price' => 120.50,
        'stock' => 12,
    ],
    [
        'name'  => 'Zeus de chantier',
        'price' => 115.32,
        'stock' => 75,
    ],
    [
        'name'  => 'Hermes ultra fast',
        'price' => 75,
        'stock' => 5,
    ],
    [
        'name'  => 'Poseidon étanches',
        'price' => 58.25,
        'stock' => 40,
    ],
    [
        'name'  => 'Hadès méga-dark',
        'price' => 55.12,
        'stock' => 32,
    ],
];


foreach($shoes as $shoe) {//Boucle sur shoes

    echo $shoe['name'] . '</br>';//Affiche index name 

    if ($shoe['price'] > 100) //Si supérieur à cent affiche un ! en plus
    {
        echo $shoe['price'] . '! </br>'; //Affiche index price (+ !)
    }else
    {
        echo $shoe['price'] . '</br>'; //Affiche index price
    }

   

    echo $shoe['stock'] . '<br/>';//Affiche index stock
}