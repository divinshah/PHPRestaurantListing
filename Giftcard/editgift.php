<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'database.php';
require_once 'giftcard.php';
	
if(isset($_POST['update'])){
	$id = $_POST['Id'];
	
	$dbcon = Database::getDb();
    $s = new giftcard();
	//echo "hi";
    $faq = $s->getEmailById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updgiftcard'])){
	echo "hi";
    $id= $_POST['fid'];
	$Name1 = $_POST['Name1'];
	$Name2 = $_POST['Name2'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    $dbcon = Database::getDb();
    $giftcard = new giftcard();
    $count = $giftcard->updategiftcard($Id, $Name1, $Name2, $Email, $Message, $dbcon);
    if($count){
        header("Location: listgift.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $feedback->Id; ?>" />
	 Name1: <input type="text" class="form-control" name="Name1" value="<?= $giftcard->Name1; ?>" /><br/>
	  Name2: <input type="text" class="form-control" name="Name2" value="<?= $giftcard->Name2; ?>" /><br/>
    Email: <input type="text" class="form-control" name="Email" value="<?= $feedback->Email; ?>" /><br/>
    Message: <input type="text" class="form-control" name="Message" value="<?= $feedback->Message; ?>" /><br />
    <input type="submit"  class="form-control" name="updfeedback" value="Update Feedback">
</form>
</div>
