<?php
include "header.php";
?>
<div class="container">
    <!--<h2>Get Started with free account</h2>-->
    <form action="" method="post">

<?php
require_once 'Database.php';
require_once 'offers.php';

$dbcon = Database::getDb();
$s = new offers();
$myfaq =  $s->getAllOffers(Database::getDb());



foreach($myfaq as $faq){
   echo "<div class='form-group'>
            <label>Offer Name:</label><input class='form-control' name='oid' value='$faq->offerName' readonly/></div>
   <div class ='form-group'>	
   <label>Offer Description:</label><input class='form-control' name='oid' value='$faq->offerDesc' readonly/></div>
   <div class ='form-group'>
   <label>Offer Validity:</label><input class='form-control' name='oid' value='$faq->offerValidity' readonly/></div>
   <div class ='form-group'>
   <label>Offer Price:</label><input class='form-control' name='oid' value='$faq->offerPrice' readonly/></div>
   
		  ";
   
}
?>
</form>
</div>
<?php
include "footer.php";
?>