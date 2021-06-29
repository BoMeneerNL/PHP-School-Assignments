<?php
function oddeven($num)
{
    $icall = $num;
    if($icall%2){
    $num = 0;
    }
    else{$num = 1;}

    if($num == 0){
        $exitnode = "Oneven";
        return $exitnode;
    }
    else{
        $exitnode = "Even";
        return $exitnode;
    }
}
$text = "<br> het getal is:";
echo $text . oddeven(5) . $text . oddeven(6) . $text . oddeven(7) . $text . oddeven(8) . $text . oddeven(9). $text . oddeven(10);