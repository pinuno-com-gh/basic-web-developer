<?php 
// implemnet %d, %u, 


// vsprintf function in php
// used %d, %u, %e, %E
$value1 = 7894;
$value2 = 9070;
$value3 = 3344;

echo "%d Signed decimal number : ";
// %d Signed decimal number
// where (-, + or zero)
$txt = vsprintf("%d %d %d", array(
    $value1,
    $value2,
    $value3
));
echo $txt;

echo "\n%u UnSigned decimal number : ";
// %d UnSigned decimal number
// where (0<=zero)

$tt = vsprintf("%u %u %u", array(
    $value1,
    $value2,
    $value3
));
echo $tt;

echo "\n%e Scientific notation : ";
// Scientific notation for lowercase
$result = vsprintf("%e %e %e ", array(
    $value1,
    $value2,
    $value3
));
echo $result;

echo "\n%E Scientific notation : ";
// Scientific notation for uppercase
$result = vsprintf("%E %E %E ", array(
    $value1,
    $value2,
    $value3
));
echo $result;


?>