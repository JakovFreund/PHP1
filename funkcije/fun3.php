<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.10.2017.
 * Time: 8:15
 */

function Godina($rod, $sad){
    if($sad<$rod){
        echo "Ti ces biti rođen za ".($rod-$sad)." godina.<br>";
    }
    if($sad>$rod){
        echo "Ti si ".($sad-$rod)." godina star.<br>";
    }
    if($sad===$rod){
        echo "Ti si rođen ove godine.<br>";
    }
}

Godina(2017, 925);
Godina(1999, 2017);
Godina(5,5);
?>