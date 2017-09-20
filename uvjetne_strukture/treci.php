<!DOCTYPE html>
<html>
<head>
    <title>TRI</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 20.9.2017.
 * Time: 8:07
 */

$a = "5";
$b = 5;
$c = 10;

if($a === $b || $c===2*$b && $c!=$a){
    echo ($b/$c)*4;
}
else{
    echo $a*$b-$c;
}

$a = 2;
$b = 3;
$c = 5;
$d = 1;
$e = 7;

switch($e-$a) {
    case $b:
        echo "b";
        break;
    case $c:
        echo "c";
        break;
    case $d:
        echo "d";
        break;
}
?>

</body>
</html>
