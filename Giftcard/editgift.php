<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
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
	$Name1 = $_POST['Name1'];
	$Name2 = $_POST['Name2'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    $dbcon = Database::getDb();
    $s = new giftcard();
    $count = $s->updategiftcard($id, $Name1, $Name2, $Email, $Message, $dbcon);
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
	 Name1: <input type="text" class="form-control" name="Name1" value="<?= $giftcards->Name1; ?>" /><br/>
	  Name2: <input type="text" class="form-control" name="Name2" value="<?= $giftcards->Name2; ?>" /><br/>
    Email: <input type="text" class="form-control" name="Email" value="<?= $giftcards->Email; ?>" /><br/>
    Message: <input type="text" class="form-control" name="Message" value="<?= $giftcards->Message; ?>" /><br />
    <input type="submit"  class="form-control" name="updgiftcard" value="Update giftcards">
</form>
</div>
