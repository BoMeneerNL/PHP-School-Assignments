<?php
function oddeven($num)
{
    $icall = $num;
    $num = $icall%2 ? 0 : 1;

    if($num == 0) return "Oneven";

    else return "Even";
}
$text = "<br> het getal is:";
echo $text . oddeven(5) . $text . oddeven(6) . $text . oddeven(7) . $text . oddeven(8) . $text . oddeven(9). $text . oddeven(10);