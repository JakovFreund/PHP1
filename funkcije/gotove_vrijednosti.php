<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.10.2017.
 * Time: 9:00
 */

function Ispis($b){
    $a = array("Audi","BMW","Fiat","Mazda","Toyota");
    if ($b>5){
        echo $b*$b."<br>";
    }
    else{
        echo $a[$b-1]."<br>";
    }
}

function Reverse($a){
    $b=[];
    for($i=count($a)-1;$i>0;$i--){
        array_push($b,$a[$i]);
    }
    //isprintaj listu jos ovdje
}
?>