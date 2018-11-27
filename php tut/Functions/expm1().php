<?php 

/* Euler's Number or commonly known as e is an irrational number 
 * which approximate to 2.7182828.
 * the exmp1() function is an inbuilt function in php
 * used to calculate e raised to the power of a given argument
 */


// float expm1($power)

$n1 = 1;
$n2 = 0;

//printing the value of e^1 -1
echo "e^", $n1, "-1 = ", expm1($n1), "\n";

//printing the value of e^0 -1
echo "e^", $n2, "-1 = ", expm1($n2), "\n";



?>