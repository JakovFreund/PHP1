<!DOCTYPE html>
<html>
<head>
    <title>Adresar</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Slanje poruka</h2>

<?php
/**
 * Created by PhpStorm.
 * User: Ucenik
 * Date: 29.11.2017.
 * Time: 8:10
 */
$email=$_POST("email");
$naslov = $_POST("naslov");
$tekst=$_POST("area");
$adresa="jakovfreund@gmail.com"
echo "Primatelj: $email<br>";
echo "Naslov: $naslov<br>";
echo "Tekst poruke: $tekst<br>";
if (preg_match("(([\w\.\-_]+)?\w+@[\w-_]+(\.\w+){1,})", $adresa)){
ini_set("SMTP","smtp.gmail.com");
ini_set("sendmail_from",$adresa);
}

if (mail($email,$naslov,$tekst)){
    echo "Poruka je uspješno poslana.<br>";
}
else{
    echo "Poruka nije uspješno poslana.<br>";
}
?>
<br>
<a href="prvi.html">Unos nove poruke</a>
</body>
</html>
