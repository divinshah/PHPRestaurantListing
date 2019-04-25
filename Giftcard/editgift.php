<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once '../headerfooter/header.php';
require_once 'giftdatabase.php';
require_once 'giftcard.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = database::getDb();
    $s = new giftcard();
	//echo "hi";
    $giftcards = $s->getGiftcardById($id, $dbcon);
   // var_dump($giftcards);
	
}
if(isset($_POST['updgiftcard'])){
	//var_dump($_POST);
	//echo "hi";
    $id= $_POST['fid'];
	$amount = $_POST['amount'];
	$email = $_POST['email'];
	$giftto = $_POST['giftto'];
    $giftfrom = $_POST['giftfrom'];
    $message = $_POST['message'];
    $dbcon = Database::getDb();
    $s = new giftcard();
    $count = $s->updategiftcard($id, $amount, $email, $giftto, $giftfrom, $message, $dbcon);
    if($count){
        header("Location: listgift.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $giftcards->id; ?>" />
	 AMOUNT: <input type="text" class="form-control" name="amount" value="<?= $giftcards->amount; ?>" /><br/>
	 EMAIL: <input type="text" class="form-control" name="email" value="<?= $giftcards->email; ?>" /><br/>
	  GIFT TO: <input type="text" class="form-control" name="giftto" value="<?= $giftcards->giftto; ?>" /><br/>
    GIFT FROM: <input type="text" class="form-control" name="giftfrom" value="<?= $giftcards->giftfrom; ?>" /><br/>
    MESSAGE: <input type="text" class="form-control" name="message" value="<?= $giftcards->message; ?>" /><br />
    <input type="submit"  class="form-control" name="updgiftcard" value="Update giftcards">
</form>
</div>
<?php
include "../headerfooter/footer.php";
?>