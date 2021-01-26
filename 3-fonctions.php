<?php

function fonctionAffine(int $n)
{
    if ($n>5) { //Si n est supérieur à 5 renvoie le résultat du calcul 4n+6
        return 4 * $n + 6;
    } else {// Renvoie le résultat du calcul 3n-2
        return 3 * $n - 2;
    }
}


function suiteNPlusUn(int $n)
{
    $s = 0;

    for ($i=1;$i<=$n;$i++) {
        $s += $i;
    }
    
    return $s;
}

var_dump(fonctionAffine(1), fonctionAffine(2), fonctionAffine(3), suiteNPlusUn(1), suiteNPlusUn(2), suiteNPlusUn(3));
