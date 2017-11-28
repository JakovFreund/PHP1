<?php


$datoteka = fopen("podaci.txt", "a");

$ime = isset($_POST["ime"]) ? $_POST["ime"] : "Nije upisano";
$prezime = isset($_POST["prezime"]) ? $_POST["prezime"] : "Nije upisano";
$adresa = isset($_POST["adresa"]) ? $_POST["adresa"] : "Nije upisano";
$mjesto = isset($_POST["mjesto"]) ? $_POST["mjesto"] : "Nije upisano" ;
$telefon = isset($_POST["telefon"]) ? $_POST["telefon"] : "Nije upisano";

fwrite($datoteka, $ime . "\r\n");
fwrite($datoteka, $prezime . "\r\n");
fwrite($datoteka, $adresa . "\r\n");
fwrite($datoteka, $mjesto . "\r\n");
fwrite($datoteka, $telefon . "\r\n");
fclose($datoteka);

echo "Podaci uspješno upisani!<br><br>";

echo $ime . "<br>";
echo $prezime . "<br>";
echo $adresa . "<br>";
echo $mjesto . "<br>";
echo $telefon . "<hr>";

echo "<a href=\"ispis.php\">Dalje</a>";

?>