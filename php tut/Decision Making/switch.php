<?php 
/*switch performs in various cases, 
 * to use switch there are two keywords 
 * to be familiar with, BREAK and DEFAULT
 */ 

//BREAK is used to to stop the automatic control
//flow into the next case and exit from switch case 

//the default statment contains the code that would execute if none
// of the case match 

$n = "August";

switch($n) {
    case "january":
        echo " its january";
        break;
    case "february":
        echo "its february";
         break;
    case "march":
        echo "its march";
        break;
    case "april":
        echo "its april";
        break;
    case "may":
        echo "its may";
        break;
    case "june":
        echo "its june";
        break;
    case "july":
      echo "its july";
      break;
    case "August":
        echo "its August";
        break;
    case "september":
        echo "its september";
        break;
    case "october":
        echo "its october";
        break;
    case "november":
        echo "its november";
        break;
    case "december":
        echo "its decemebr";
        break;
        
        default:
            echo "doesn't exist";
          
}

?>