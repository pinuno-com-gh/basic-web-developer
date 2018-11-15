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
Copy CodeRun on IDE

Output:
% ->Returns [%] sign: % %
%b ->binary number : 11000000101111110111 1010001101001110111
%o ->octal number : 3005767 1215167 
%x ->Hexadecimal number Lc : c0bf7 51a77
%X ->Hexadecimal number Uc : C0BF7 51A77
Program 5:Implement %g %G and %c(ASCII) vsprintf() function in PHP.

<?php 
  
// vsprintf function in php 
  
$value1 = 75; 
$value2 = 55; 
$char   = 97; 
$char2  = 69; 
  
// shorter of %e and %f 
echo "%g shorter of %e and %f: "; 
$txt = vsprintf("%g %g", array( 
    $value1, 
    $value2
)); 
echo $txt; 
  
// %G – shorter of %E and %f  
echo "\n%G shorter of %E and %f : "; 
  
$tt = vsprintf("%G %G", array( 
    $value1, 
    $value2
)); 
echo $tt; 
  
// ASCII value 
echo "\n%c ASCII value : "; 
$result = vsprintf("%c %c ", array( 
    $char, 
    $char2
)); 
echo $result; 


?>