<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 11.10.2017.
 * Time: 8:25
 */

$a= "abcdcba";
$b=1;
for($i=0;$i<strlen($a);$i++){
    if (!($a[$i]==$a[strlen($a)-($i+1)])){
        $b=0;
    }
}
if($b){
    echo"da";
}
else {
    echo "ne";
}
?>