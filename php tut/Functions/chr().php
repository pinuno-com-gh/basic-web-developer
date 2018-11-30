<?php 
/* The chr() function is an inbuilt function in php
 * that convert a ASCII value to a character. It accept
 * an ASCII value as a parameter and returns a string representing
 * a character from the specified ASCII value. 
 * The ASCII ca be in decimal, octal, or hex values
 * 
 * octal values are defined by a leading 0
 * hex values are defined by a leading 0x
 */


// string chr($asciiVal)

// program to demonstrate the chr() function
$n1 = 35;
$n2 = 043;
$n3 = 0x23;

echo "The equivalent character for ASCII 35 in decimal is";
echo chr($n1), "\n"; // Decimal value

echo "The equivalent character for ASCII 043 in octal is";
echo chr($n2), "\n"; // octal value

echo "The equivalent character for ASCII 0x23 in hex is";
echo chr($n3), // Decimal value

"\n";




?>