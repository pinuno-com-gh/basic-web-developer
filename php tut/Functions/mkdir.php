<?php 
/*mkdir is used to creates a new directory with the specified pathname. the
 * path names are sent as parameters to the mkdir()function
 * and return TRUE on success and FALSE on failure
 */

//mkdir(path,mode,recursive,context)

$nest = './node1/node2/node3/';
// creating a nested structure directory
if (!mkdir($nest, 0777, true))
{
    echo('Folders cannot be created recursively');
}
else
{
    echo('Folders created recursively');
}


?>