<?php
include_once '../7/index.php';

echo "<br><br> Before" . "<br><br>" . print_r($naam) . "<br><br>";

unset($naam[2]);
echo"After<br><br>". print_r($naam) . "<br><br>";