<?php 

/* The stat()function is an inbuilt function in php used to return
 * information of a file
 * 
 */

// stat (filename)
$test = stat('examples.txt');

//using stat() along with name index to display access time
echo 'Access time: ' .$test['atime'];

// using stat() along with name index to display modification time
echo '<br />Modification time: ' .$test['mtime'];

//using stat() along with name index to display device number
echo '<br />Device Number: ' .$test['dev'];

?>