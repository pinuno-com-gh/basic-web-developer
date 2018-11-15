<?php 


// vsprintf function in php
// used %%, %b, %o, %x, %X
$value1 = 789495;
$value2 = 334455;


// Returns [%] sign
echo "% ->Returns [%] sign: ";
$txt = vsprintf("%% %%", array(
    $value1,
    $value2
));
echo $txt;

// Returns [%b] binary number
echo "\n%b ->binary number : ";

$tt = vsprintf("%b %b", array(
    $value1,
    $value2
));
echo $tt;

// Returns [%o] octal number
echo "\n%o ->octal number : ";
$result = vsprintf("%o %o ", array(
    $value1,
    $value2
));
echo $result;

// Returns [%x] Hexadecimal number[lowercase]
echo "\n%x ->Hexadecimal number Lc : ";
$result = vsprintf("%x %x", array(
    $value1,
    $value2
));
echo $result;

// Returns [%X] Hexadecimal number[Uperercase]
echo "\n%X ->Hexadecimal number Uc : ";
$result = vsprintf("%X %X", array(
    $value1,
    $value2
));
echo $result; 



?>