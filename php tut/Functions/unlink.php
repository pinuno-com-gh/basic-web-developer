<?php 
/* the unlink()function is used to delete a file*/


//unlink(filename, context)

$file_pointer = "gfg.txt";

// using unlink()function to delete a file
if (($file_pointer))
    
{
    echo ("$file_pointer cannot be deleted due an error");
}
else 
{
    echo ("$file_pointer has been deleted");
}

?>