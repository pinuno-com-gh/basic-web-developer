<?php 

/*This type of function in PHP is used to check all the 
 * characters in string/text are control characters. control 
 * characters are; line feed, tab esccape.
 */
     //bool ctype_cntrl($dtr)
     

     //checking if string has control characters
$str1 = "GeeksforGeeks";
if (ctype_cntrl($str1))
    echo "yes\n";
else 
    echo "no\n";

    $str2 = "\n\t";
    if (ctype_cntrl($str2))
        echo "yes\n";
    else 
        echo "yes\n";
  
//php code to check if a string has control characters

        $str = array(
            "Geeks",
            "Geeks space",
            "@@##-- /",
            "\n",
            "\t \r",
            "\r\t\n"
        );
        
        // Check the above strings by using
        // ctype_cntrl() function
        foreach ($str as $test) {
            
            if (ctype_cntrl($test))
                echo "Yes\n";
                else
                    echo "No\n";
        }
        
      
        
     ?>