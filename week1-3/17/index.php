<?php
$spaargeld = 1000;
$verschil = 1500 - $spaargeld;

if($verschil > 500){
    echo "zoek een baantje tekort is: " .  $verschil;
}

else if ($verschil <= 500 && $verschil > 0){
    echo "bijna gelukt! Tekort is: " . $verschil;
}

else{
    echo "Kopen maar! Je hebt nog over: " .  $verschil;
}