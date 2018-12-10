<?php 
/* The PHP is an inbuilt function which is used to create a symbolic link for
 * for a target which already exist
 */

// symlink(target, link)

// specifying target
$target_pointer = 'gfg.txt';

// specifiying link  name
$link_name = 'geeksforgeeks';

// creating alink using symlink() function
symlink($target_pointer, $link_name); 


"\n";  

// specifying target
$target_pointer = "/home/user1/gfg.txt";

// specifiying link  name
$link_name = 'mylink';

// creating alink using symlink() function
$test = symlink($target_pointer, $link_name);
if ($result)
{
    echo ("Symlink has been created!");
}
else
{
    echo ("Symlink cannot be created!");
}


?>

