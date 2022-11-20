<?php
$spaargeld = 1000;
$verschil = 1500 - $spaargeld;

echo match ($verschil){
    $verschil > 500=>"zoek een baantje tekort is: $verschil",
    $verschil < 500 && $verschil > 0=>"bijna gelukt! Tekort is: $verschil",
    default => "Kopen maar! Je hebt nog over: $verschil"
};