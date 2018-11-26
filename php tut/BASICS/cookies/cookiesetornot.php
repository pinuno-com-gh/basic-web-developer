<?php 
/* checking if s cookie is set or not
 */

if(isset($_COOKIE["Auction_Item"])) 
{
    echo " Auction Item is a " . $_COOKIE["Auction_Item"];

}

else{
    echo "No items for auction.";
}

?>