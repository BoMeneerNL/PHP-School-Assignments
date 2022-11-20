<?php
function btw($kosten,$btwtype)
{
    $btwtype = ($btwtype == "hoog" ? $btwtype : "laag");
    return  "het bedrag incl. $btwtype btw is "($btwtype == "hoog"?  $kosten * 1.21 : $kosten * 1.06);
}
echo btw(13,"laag") . "<br>". btw(13,"hoog");