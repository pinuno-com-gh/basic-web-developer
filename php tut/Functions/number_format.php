<?php 

/* The number_format() is used to format a number with grouped
 * thousands
 */
// string number_format ($number, $decimals, $decimalpoint, $sep)

$num = "999999.49";
 
//without decimal pointer parameter
echo number_format($num1). "\n";

//with decimal pointer parameter
echo number_format($num1,3). "\n";

$num2 = "999999.99";

//without decimal pointer parameter return round value
echo number_format($num2). "\n";

//with decimal pointer parameter
echo number_format ($num2, 3). "\n";

//with all four parameters
echo number_format("1000000.99", 3, "#", "GGG");

?>