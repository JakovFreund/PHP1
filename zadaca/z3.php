<?php
$ime=isset($_POST['ime']) ? $_POST['ime'] : echo "Ime nije postavljeno<br>";
$prezime=isset($_POST['prezime']) ? $_POST['prezime'] : echo "Prezime nije postavljeno<br>";
$ulica=isset($_POST['ulica']) ? $_POST['ulica'] : echo "Ulica nije postavljena<br>";
$brojUlica=isset($_POST['broj']) ? $_POST['broj'] : echo "Broj nije postavljen<br>";
$primjedba=isset($_POST['primjedba']) ? $_POST['primjedba'] : echo "Primjedba nije postavljena<br>";
$zemlja=isset($_POST['zemlja']) ? $_POST['zemlja'] : echo "Zemlja nije postavljena<br>";
$username=isset($_POST['k_ime']) ? $_POST['k_ime'] : echo "Korisnicko ime nije postavljeno<br>";
$password=isset($_POST['pass_1']) ? $_POST['pass_1'] : echo "Prva lozinka nije postavljena<br>";
$passwordRetry=isset($_POST['pass_2']) ? $_POST['pass_2'] : echo "Nisi upisao lozinku dvaput<br>";
echo $ime . "<br>";
echo $prezime . "<br>";
echo $ulica . "<br>";
echo $brojUlica . "<br>";
echo $primjedba . "<br>";
echo $zemlja . "<br>";
echo $username . "<br>";
echo $password . "<br>";
echo $passwordRetry . "<br>";
$password == $passwordRetry ? echo "Lozinke se poklapaju" : "Lozinke se ne poklapaju!";
?>