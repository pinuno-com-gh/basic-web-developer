<?php 
/* The rewind()function is an inbuilt function in php, used to
 * set the position of the file pointer to the beginning of the file
 */


// rewind (file)

$myfile = fopen("gfg.txt", "r+");

// writing to file
fwrite($myfile, 'geeksforgeeks a computer science portal');

//setting the file pointer to 0th position using rewind()function
rewind($myfile);

//wrting to the file on 0th position
fwrite($myfile, 'geeksportal');
rewind($myfile);

//displaying the content of the file
echo fread ($myfile, filesixe("gfg.txt"));

fclose($myfile);
?>