<?php 
// PHP 7 has introduced a new kind of operator called
// spaceship operator (). these are used to compare values
// but instead of returning boolean result, it returns integers
// values, if both operands are equal it returns 0, if the right 
// operand is greater, it returns -1 if postitve it returns 1.

$x = 50;
$y = 50;
$z = 25;

echo $x <=> $y;
echo "\n";

echo $x <=> $z;
echo "\n";

echo $z <=> $y;
echo "\n";

// we can do the same for strings
$x = "Makonne";
$y = "Mahonne";

echo $x <=> $y;
echo "\n";

echo $x <=> $y;
echo "\n";

echo $y <=> $x;

?>