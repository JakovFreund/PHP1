<!DOCTYPE html>
<html>
<head>
    <title>JEDAN</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 20.9.2017.
 * Time: 8:07
 */

$x = 27;
$y = 15;

if($x>$y){
    echo "true ";
}


$b = 3;
$c = 5;
$d = 1;


switch($c-$b-$d) {
    case $b:
        echo "b";
        break;
    case $d:
        echo "d";
        break;
}

?>

</body>
</html>