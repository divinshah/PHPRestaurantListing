<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'Database.php';
require_once 'offers.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new offers();
	//echo "hi";
    $faq = $s->getOfferById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updoffer'])){
	echo "hi";
    $id= $_POST['oid'];
    $offername = $_POST['offername'];
    $offerdescrp = $_POST['offerdescrp'];
	$offervalid = $_POST['offervalid'];
	$offerprice = $_POST['offerprice'];


    $dbcon = Database::getDb();
    $offer = new offers();
    $count = $faq->updateFaq($id, $offername, $offerdescrp, $offervalid, $offerprice, $dbcon);

    if($count){
        header("Location: listoffer.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="oid" value="<?= $offer->offerId; ?>" />
    Offer Name: <input type="text" class="form-control" name="offername" value="<?= $faq->offerName; ?>" /><br/>
    Offer Description: <textarea name="offerdescrp" class="form-control" rows="10" cols="50" value="<?= $offer->offerDesc; ?>" /><br />
	Offer Validity: <input type="datetime-local" class="form-control" name="offervalid" value="<?= $offer->offerValidity; ?>" /><br/>
	Offer Price: <input type="text" class="form-control" name="offerprice" value="<?= $offer->offerPrice; ?>" /><br/>
    <input type="submit"  class="form-control" name="updoffer" value="Update Offer">
</form>
</div>