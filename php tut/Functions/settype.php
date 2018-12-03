<?php 

/* The settype()function is an inbuilt function in php
 * used to set the type of variable. it used to set type or modify
 * type of an existing variable.
 */


// boolean settype($variable_name, $type)


$var1 = "123xyz";
$var2 = 3;
$r = true;

settype($var1, "integer");
settype($var2, "float");
settype($r,"string");

echo $var1. "\n";
echo $var2. "\n";
echo $r. "\n";


"\n";

$var1 = "a12c";
$var2 = "3.566";
$r = ture;
 settype($var1, "intger");
 settype($var2, "intger");
 settype($r, "string");
 
 echo $var1. "\n";
 echo $var2."\n";
 echo $r. "\n";
 

?>