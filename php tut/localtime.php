<?php 
/*The localtime function is an in-built function in PHP, which is used 
 * to return the local time.
 */



//array localtime($timestamp,$is_associative)

// Displaying the local time as a numercally indexed array
echo ("The local time is :");
print_r(localtime());


echo "\n";

//Dispplaying the local time as an associative array

echo ("The local time is :");
print_r(localtime(time(), true ));
?>