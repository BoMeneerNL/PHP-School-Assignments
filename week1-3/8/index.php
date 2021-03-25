<?php
include_once '../7/index.php';


echo "<br><br>";echo"Before";echo "<br><br>";print_r($naam);echo "<br><br>";

unset($naam[2]);
echo"After";echo "<br><br>";print_r($naam);echo "<br><br>";
?>