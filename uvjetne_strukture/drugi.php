<!DOCTYPE html>
<html>
<head>
    <title>DVA</title>
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
$z = 10;

if($x>$y && $y==$z || $z<$x) {
    echo "true ";
    switch($y+$z+2){
        case($z):
            echo"<p>z</p>";
            break;
        case($y):
            echo"<p>z</p>";
            break;
        case($x):
            echo"<p>z</p>";
            if ($y>$z){
                echo $x-$y;
            }
            break;

    }
}
else{
    echo "false";
}
?>

</body>
</html>
