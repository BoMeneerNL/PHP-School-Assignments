<?php
include_once '../7/index.php';
echo "<br/><br/><br/>";

if(array_search('Boeken',$naam) == true) { echo "True<br/>"; }

if(array_search('CD',$naam) == true) { echo "True"; }

else{ echo "F"; }