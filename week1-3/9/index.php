<?php
include_once '../7/index.php';
echo "<br/><br/><br/>";

if(array_key_exists(1,$naam) == true)
{
    echo "True<br/>";
}

if(array_key_exists(0,$naam) == true)
{
    echo "True";
}

else{echo "F";}
?>