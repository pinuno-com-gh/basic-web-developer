<?php 

/* The popen() function is used to open a pipe to the program specified 
 * by the user using the command parameter. it returns a file pointer
 * which is identical to that returned by the fopen(). but unidirectional 
 * in nature 
 */

//popen(command,mode)

//opeing a pipe
$my_file = popen("/bin/ASSESSMENT P4", "r");


"\n";

// opening a pipe
$my_file= popen('/executable/gfg.exe', 'r');

// returning name of class of an object using get_class()
echo "'$my_file'; " . get_class($my_file) . "\n";

// reading file using fread()
$filereader = fread($my_file, 4192);
echo $filereader;

// closing the pipe
pclose($my_file);

?>