<?php
/* Zadatak : neka program ispise svaku varijablu djeljivu s 2 iz referentnog array-a pomocu for-a*/
$lista = array(1 => "jedan",
               2 => "dva");

for($i=1; $i<3; $i++){
    if($i % 2 == 0){
    echo $lista[$i];
    }
}
?>