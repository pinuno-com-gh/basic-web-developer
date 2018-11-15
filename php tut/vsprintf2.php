<?php 
//Drive floatting program %f and %f invsprintf()function in php

// %f and %F floating number in
// vsprintf function in php
$value1 = 789495321;
$value2 = 8080907021;
$value3 = 334422190;


echo "\n%f (local) Floating: ";

// for %f Floating-point number
// for local settings aware

$txt = vsprintf("%f %f %f", array(
    $value1,
    $value2,
    $value3
));
echo $txt;

echo "\n%F (Not local) Floating: ";
// for %F Floating-point number
// for local settings aware

$result = vsprintf("%F %F %F ", array(
    $value1,
    $value2,
    $value3
));

echo $result; 


?>