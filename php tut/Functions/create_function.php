<?php 
/* The create_function() is used to create an anonymous(lambda-style) function in the php
 */

//  string create_function ($args, $code)

// create information from information gathered at run time

$newfunc = create_function ('$a, $b','return "in($a) + in($b) = ". log($a * $b);');
echo "New anonymous function: $newfunc\n";
echo $newfunc(2, M_E) . "\n";

?>