<?php
function btw($kosten,$btwtype)
{
    if ($btwtype == "Hoog") return $einde = "het bedrag incl. laag btw is " . ($kosten * 1.21);

    else if ($btwtype == "Laag") return $einde = "het bedrag incl. laag btw is " . ($kosten * 1.09);
}
echo btw(13,"Laag") . "<br>". btw(13,"Hoog");