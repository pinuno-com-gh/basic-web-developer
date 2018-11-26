<?php 
// displaying information using lstat() function

print_r(lstat("gfg.txt"));



// creating a symbolic link
symlink('gfg.php', 'gfg');

// comparing info return by stat() and Istat() fun;

array_diff(stat('gfg'), lstat('gfg'));


// displaying infor of zip file using lstat() function
$myfile = lstat("./gfg.zip");
echo($myfile);



?>