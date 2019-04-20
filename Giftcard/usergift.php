<?php
include "header.php";
?>
<?php
require_once 'giftdatabase.php';
require_once 'giftcard.php';

$dbcon = Database::getDb();
$s = new giftcard();
$mygift =  $s->getGIFTCARD(Database::getDb());



foreach($mygift as $giftcard){
   echo " <ul> Name1: $giftcard->Name1  </ul>
          <ul> Name2: $giftcard->Name2 </ul>
		   <ul> Email: $giftcard->Email </ul>
		    <ul> Message: $giftcard->Message </ul>
		  ";
   
}
?>
<?php
include "footer.php";
?>