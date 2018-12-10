<?php 
/* The is_numeric()function is used to check whether a variable passed in function as a parameter is a number or a string
 * or a numeric string or not. 
 */

//bool is_numeric ($var)
$num = 12;
if (is_numeric($num)) {
    echo $num . "is numeric";
}
else {
    echo $num . "is not numeric";
}

?>