<?php
function btw($kosten,$btwtype)
{
    if ($btwtype == "Hoog"){
        $eindcijfer = $kosten * 1.21;
        $einde = "het bedrag incl. hoge btw is " . $eindcijfer;
        return $einde;
    }
    else if ($btwtype == "Laag") {
        $eindcijfer = $kosten * 1.09;
        $einde = "het bedrag incl. laag btw is " . $eindcijfer;
        return $einde;
    }
}
echo btw(13,"Laag") . "<br>". btw(13,"Hoog");
?>