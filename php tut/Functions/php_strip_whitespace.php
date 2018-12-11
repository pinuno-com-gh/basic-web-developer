<?php 
/* The php_strip_whitespace() function is used to remove all comment
 * and whitespace
 */

// string php_strip_whitespace ($file)

// simple program to remove comment using php_strip whitespace

//function to calculate fibonacci number
function fib($n)
{
    if ($n <= 1)
        return $n;
    return fib ($n - 1) + fib($n - 2);
}

//drive code
$n = 9;
fib($n);

// one more muililine comment

echo php_strip_whitespace(__FILE__);
//this line also removed

?>