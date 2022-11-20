<?php
function oddeven($num): string
{
    return $num %2 ? "Oneven" : "Even";
}
$text = "<br> het getal is:";
echo $text . oddeven(5) . $text . oddeven(6) . $text . oddeven(7) . $text . oddeven(8) . $text . oddeven(9). $text . oddeven(10);