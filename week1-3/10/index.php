<?php
include_once '../7/index.php';
echo "<br/><br/><br/>";

if(in_array('Boeken',$naam) == true)
{
    echo "True<br/>";
}

if(in_array('CD',$naam) == true)
{
    echo "True";
}

else{echo "F";}
?>