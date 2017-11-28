<?php
$brojac = fopen("brojac.txt", "a");
fwrite($brojac, "+");
fclose($brojac);

$datoteka = fopen("podaci.txt", "r");
echo "<table border='1'><tr><th>Ime</th><th>Prezime</th><th>Adresa</th><th>Mjesto</th><th>Telefon</th></tr><tr>";
$counter = 0;
while ($red = fgets($datoteka, 100)){
    if($counter == 5){
        $counter = 0;
        echo "</tr><tr>";
    }
    $counter++;
    echo "<td>" . $red . "</td>";
}

$views = fopen("brojac.txt", "r");
echo "</tr></table><hr>Vi ste " . strlen(fgets($views)) . ". posjetioc stranice!";
fclose($views);



?>