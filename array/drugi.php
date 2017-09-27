<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 27.9.2017.
 * Time: 8:23
 */

/**
 * Napravi array riječi i u
 * svaki novi red ispiši
 * novo slovo te riječi.
 */

$arr = array("a","u","t","o","m","o","b","i","l");
$arr2 = array("g","o","d","i","n","a");
for ($i=0;$i<count($arr)+1;$i++) {
    for ($j=0;$j<$i;$j++){
        echo $arr[$j];
    }
    echo "<br>";
}
for ($i=0;$i<count($arr2)+1;$i++) {
    for ($j=0;$j<$i;$j++){
        echo $arr2[$j];
    }
    echo "<br>";
}