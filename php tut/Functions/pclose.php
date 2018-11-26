<?php 

//The pclose() closes a pipe opened by the popen()function.
// The file pointer initiated by the open() function must be closed with
// pclose()



//pclose(pipe)

// opening a pipe
$my_file = popen("/bin/ls", "r");

// closing the my_file
pclose($my_file);


?>