<?php
$exitnode = "F";

function oddeven($num)
{
    $icall = $num;
    if($icall%2){
    $num = 0;
    }
    else{$num == 1;}

    if($num == 0){
        $exitnode = "Oneven";
        return $exitnode;
    }
    else{
        $exitnode = "Even";
        return $exitnode;
    }
}
echo "het getal is: " . oddeven(5);
echo "<br>";
echo "het getal is: " . oddeven(6);
echo "<br>";
echo "het getal is: " . oddeven(7);
echo "<br>";
echo "het getal is: " . oddeven(8);
echo "<br>";
echo "het getal is: " . oddeven(9);
echo "<br>";
echo "het getal is: " . oddeven(10);
?>