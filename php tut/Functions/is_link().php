<?php 
/* the is_link() function in PHP is used to check whether
 * the specified file is a symbolic link or not.
 */


//is_link(file)
$report = "gfg";

if(is_link($report)) {
    echo ("$report is a symbolic link!");
} else {
    echo ("$report is not a symbolic link!");
}


?>