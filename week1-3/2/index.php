<?php
$voornaam = "";
$achternaam = "";
$straatnaam = "";
$huisnummer = "";
$postcode = "";
$woonplaats = "";
$land = "";

echo getupper($voornaam). $achternaam;


function getupper($input){

    $string = ucfirst($input);



    return $string;
}



$euros = 999.99;
$koers = 1.2;

$dollar = $euros * $koers;

echo $dollar;
echo "\r\n";
echo "000";
?>