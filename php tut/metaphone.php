<?php 
/*The metaphone is an in-bluilt function in php and is used
 * to calculate the metaphone key of a given string 
 * 
 */


//string metaphone ($str,$key)

//$str: It is Required parameter which represents the
//string to find the Metaphone key.

//$key: It is a optional parameter which specified for
//Maximum length of the metaphone key.

$str1 = "join Pinuno Academy for ";
echo metaphone ($str1) . "\n";

$str2 = "progress and not movement";
echo metaphone ($str2);

?>