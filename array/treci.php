<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 27.9.2017.
 * Time: 8:43
 */

/*
 * 1. Napravi fibonaccijev niz
 * 2. Napravi random listu i
 * ispiši samo neparne brojeve
 */

$arr=array(1,1);
for($i=0;$i<20;$i++){
    array_push($arr,$arr[$i]+$arr[$i+1]);
}
foreach ($arr as $e){
    echo $e;
    echo " ";
}

echo "<br><br>";

$arr2=array(2,5,1,2,5,7,3,89,0,12,42,7,5);
foreach ($arr2 as $f){
    if($f%2===0){
        echo $f;
        echo " ";
    }
}