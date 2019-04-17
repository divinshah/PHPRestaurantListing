<?php
include "header.php";
?>
<?php
require_once 'Database.php';
require_once 'offers.php';

$dbcon = Database::getDb();
$s = new offers();
$myfaq =  $s->getAllOffers(Database::getDb());



foreach($myfaq as $faq){
   echo " <ul> Offer Name: $faq->offerName  </ul>
          <ul> Description: $faq->offerDesc </ul>
		   <ul> Validity: $faq->offerValidity </ul>
		    <ul> Price: $faq->offerPrice </ul>
		  ";
   
}
?>
<?php
include "footer.php";
?>