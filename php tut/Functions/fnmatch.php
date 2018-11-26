<?php 
// is used to match a filename or string against a specific pattern
//fnmatch(pattern,string,flags)

$check = "gfg.txt";
// fnmatch function used to check 

if (fnmatch ("*[g]*",$check))
    
{
    echo "gfg";
}
else 
{
    echo "match not found";
}

"\n";

$check = "GeeksforGeeks";

// fnmatch function used to check for a word practice 
if (fnmatch("*Geeks[gfgj]orGeeks", $check))
    
    echo "Yes";
    else
        echo "No"; 
    
"\n";
        
?>