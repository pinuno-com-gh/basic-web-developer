<?php 
/* the touch()function is used to set the access and modification time of a specified file*/

//touch (filename, time, atime)
 
$file_pointer = "gfg.text";
//use the time function to change the time of a file to current system time

if (touch($file_pointer))
    
{
    echo ("$file_pointer modification time has been set to current system time");
}
else 
{
    echo ("$file_pointer modification time cannot be changed");
}

?>