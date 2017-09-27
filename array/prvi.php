<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 27.9.2017.
 * Time: 8:16
 */

/**
 * Napravi for loop koji
 * će printati brojeve od 1 do 10
 * i ako je broj 5, treba se
 * isprintati "pet".
 */

for ($i = 0; $i<10; $i++){
    if ($i!==4) {
        echo $i+1;
    }
    else{
        echo "pet";
    }
    echo "<br>";
}