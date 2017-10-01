<?php
/* Zadatak : neka program ispise svaku varijablu iz array-a koja je djeljiva s 2*/
$lista = array(1,2,3,4,5);

for($i = 0; $i<5; $i++){
    if($lista[$i] % 2 == 0){
        echo $lista[$i];
    }
}
?>