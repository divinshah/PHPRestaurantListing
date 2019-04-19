<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
.container{
	color:#1A5276;
	font-weight:bolder;
	font-size:25px;
	font-family:Arial, Helvetica, sans-serif;
}
input[type=text] {
    padding:5px; 
    border:1px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=submit] {
    padding:5px 15px; 
    background:#1A5276; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	margin-left: 40%;
    margin-right: 50%;
	width: 200px;
	font-family:Arial, Helvetica, sans-serif;
	color: white;
}
textarea {
    padding: 5px;
    line-height: 1.5;
    border-radius: 5px;
    border: 2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>
<?php
require_once 'Database.php';
require_once 'offers.php';
	$dbcon = Database::getDb();
    $s = new offers();
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	
	//echo "hi";
    $faq = $s->getOfferById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updoffer'])){
	//echo "hi";
    $id= $_POST['oid'];
    $offername = $_POST['offername'];
    $offerdescrp = $_POST['offerdescrp'];
	$offervalid = $_POST['offervalid'];
	$offerprice = $_POST['offerprice'];


    $dbcon = Database::getDb();
    $offer = new offers();
    $count = $offer->updateOffer($id, $offername, $offerdescrp, $offervalid, $offerprice, $dbcon);

    if($count){
        header("Location: listoffer.php");
    } else {
        echo  "problem updating";
    }
}
?>
<?php
include "../headerfooter/header.php";
?> 

<div class="jumbotron">
    <div class="container">
        <h1>Offers</h1>
    </div>
</div>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="oid" value="<?= $faq->offerId; ?>" />
    Offer Name: <input type="text" class="form-control" name="offername" value="<?= $faq->offerName; ?>" /><br/>
    Offer Description: <textarea name="offerdescrp" class="form-control" rows="10" cols="50" ><?= $faq->offerDesc?></textarea><br />
	Offer Validity: <input type="text" class="form-control" name="offervalid" value="<?= $faq->offerValidity; ?>" /><br/>
	Offer Price: <input type="text" class="form-control" name="offerprice" value="<?= $faq->offerPrice; ?>" /><br/>
    <input type="submit"  class="form-control" name="updoffer" value="Update Offer">
</form>
</div>
<?php
include "../headerfooter/footer.php";
?>