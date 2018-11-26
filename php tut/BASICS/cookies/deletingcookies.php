<?php 
// to delete a cookie called Auction item the following can be 
// executed.
setcookie("Auction_Item", "", time()-60);

/*so if the time is set to 0, or omiited, the cookie will
 * expire at the end of the session thus when the browser close
 */
?>