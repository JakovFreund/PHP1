<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.10.2017.
 * Time: 8:10
 */

function Opseg($a){
    echo (4*$a);
}

function Povrsina($a){
    echo ($a*$a);
}

echo "Opseg:";
Opseg(5);
echo "<br> Povrsina:";
Povrsina(5);
?>