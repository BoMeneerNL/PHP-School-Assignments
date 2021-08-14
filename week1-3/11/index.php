<?php
include_once '../7/index.php';
echo "<br/><br/><br/>";

if(array_search('Boeken',$naam)) { echo "True<br/>"; }

if(array_search('CD',$naam)) echo "True";

else echo "F";