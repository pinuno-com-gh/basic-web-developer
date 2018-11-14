<?php 
/*The link() creates a hard link for a specified target.
 *  The target and the link are passed as parameters to the link()
 *  function and it returns true on success and false on failure.
 */


//link(target,link)
 

// target file 
$targetfile = 'gfg.txt';  
  
// name of the link 
$linkname = 'gfglink'; 
  
// creating a symbolic link for the target file 
link($targetfile, $linkname); 

?>