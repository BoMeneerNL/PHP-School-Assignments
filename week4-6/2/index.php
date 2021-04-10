<?php
error_reporting(E_ERROR | E_PARSE);
echo('
    <form>
        <label for="times">Hoeveel reeksen?</label>
        <input type="number" id="times" name="times" min="0">
     </form>
');
$rep = $_GET['times'];
$prev1 = null;
$prev2 = null;
$outcome = null;
while($rep > 0){
    $outcome = $prev1 + $prev2;
    echo($outcome);
    $rep--;
}
if(isset($_GET['times']))
header("location: index.php");