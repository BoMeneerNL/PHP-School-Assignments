<?php
$getallen = ['nul','een','twee','drie','vier','vijf'];
$tools = ['boek', 'pen','laptop','potlood'];

$imp1 = implode(",", $getallen);
echo $imp1 . "<br/>";
$imp2 = implode(",", $tools);
echo $imp2;
?>