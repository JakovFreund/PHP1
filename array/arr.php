<ul>
<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 4.10.2017.
 * Time: 8:44
 */

$avg=0;

$ocjene = array("Hrvatski"=>4,
    "Matematika"=>5,
    "Povijest"=>4);
foreach ($ocjene as $a){
    echo $a."<br>";
    $avg+=$a;
}
echo ($avg/3)."<br><br>";

$gradovi=array("Zagreb","Rijeka","Rab","Dubrovnik","Vinkovci","Vukovar","Varaždin");
foreach ($gradovi as $grad){
    echo "<li>".$grad."</li>";
}
echo "</ul><br><br>";



$h1=0;
$h2=0;
$h3=0;
$h4=0;
$h5=0;
$temp=array(78,60,62,68,73,85,66,64,76,63,75,76,73,68,62,73,72,65,62,65,74,64,68,73,75,79,73);
foreach($temp as $t) {
    if ($h1 < $t) {
        $h1 = $t;
    } else {
        if ($h2 < $t) {
            $h2 = $t;
        } else {
            if ($h3 < $t) {
                $h3 = $t;
            } else {
                if ($h4 < $t) {
                    $h4 = $t;
                } else {
                    if ($h5 < $t) {
                        $h5 = $t;
                    }
                }

            }
        }
    }
}
echo $h1."<br>".$h2."<br>".$h3."<br>".$h4."<br>".$h5;

?>
