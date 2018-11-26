<?php 

// this function accept three parameters
/*
 * var
 * filtername
 * options
 */
$str = "<h2>PINUNO ACADEMY</h2>";
$newstr = filter_var($str, FILTER_SANITILZE_STRING);

echo $newstr;

?>