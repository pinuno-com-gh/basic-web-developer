<?php 
/* the microtime()function is an in-built function in php which is used 
 * to return the current nix timestamp with microseconds.
 */

//microtime($get_as_float)
//microtime as string
echo ("The micro time is :");
echo (microtime());

echo "\n";

//microtime as float
echo("The micro time is :");
echo (microtime(true));
?>