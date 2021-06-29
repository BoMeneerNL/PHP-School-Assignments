<?php
$gegevens = ["bo","a","Straatenstraat","1","6660AA","Gelderland","Nederland"];

function getupper($input){
    $string = ucfirst($input);
    return $string;
}
$euros = 999.99;
$koers = 1.2;
$dollar = $euros * $koers;
echo $dollar . "\r\n" . "000". "\r\n" . getupper($gegevens[0])." ". getupper($gegevens[1]);