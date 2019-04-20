 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once '../headerfooter/header.php';
require_once 'giftdatabase.php';
require_once 'giftcard.php';

//validations

$amounterr = "";
$emailerr = "";
$gifttoerr = "";
$giftfrom = "";
$message = "";
$amount = $email = $giftto = $giftfrom = $Message= '';

if(isset($_POST['amount'])) {
	$amount = $_POST['amount'];
	$email = $_POST['email'];
	$giftto = $_POST['giftto'];
	$giftfrom = $_POST['giftfrom'];
	$message = $_POST['message'];

	if($amount ==  "") {
		$amount = "Please enter the amount. <br/>";
	}
	else{
		$amounterr = "";
	}
	
	//$Emailptn = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
	$Emailptn = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
	
	if(empty($Email)) {
		 $Emailerr = "Please enter your Email </br>";
	}
	elseif(!preg_match($Emailptn,$Email)) {
		$Emailerr = "Please use the correct form <br/>";
	}
	else{
		$Emailerr = "";
	}
	
	if($giftto ==  "") {
		$giftto = "Please enter the name of the person you are gifting.<br/>";
	}
	else{
		$gifttoerr = "";
	}
	
	if($giftfrom ==  "") {
		$giftfrom = "Please enter your name <br/>";
	}
	else{
		$giftfromerr = "";
	}
	if($message ==  "") {
		$message = "Please enter your message <br/>";
	}
	else{
		$message = "";
	}
}

//Validations end.

$db = database::getDb();
$s = new giftcard();
if(isset($_POST['Addgiftcard']))	
{
	
	 $amount = $_POST['Addamount'];
	 $email = $_POST['Addemail'];
	$giftto = $_POST['Addgiftto'];
		$giftfrom = $_POST['Addgiftfrom'];
	$message= $_POST['Addmessage'];
	$count = $s->addgiftcard($amount, $email, $giftto, $giftfrom, $message, $db);
	
	if($count){
		echo "Gift Card Added Successfully";
	}
	else {
		echo "Problem adding Gift Card";
	} 
}
?>
<div class = "container">
<img src = "gift.jpg"/>
</div>
<div class="container">
  <h2>Personalize Your Gift Card</h2>
  <form action="" method="post">
      <div class="form-group">
	  <label>Amount:</label>
	  <input type="amount" class="form-control" name="Addamount" placeholder="Enter the Amount">
<span style="color:red;">
<?php
if(isset($amounterr)) {
echo $amounterr;
}
?>
</span>
</br>
   </div>
	
	<div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="Addemail" placeholder="Enter email">
    <?php
if(isset($Emailerr)) {
echo $Emailerr;
}
?>
</span>
</br>
</div>
<div class="form-group">
	  <label>Gift to:</label>
	  <input type="name2" class="form-control" name="Addgiftto" placeholder="Enter the name.">
    <?php
if(isset($gifttoerr)) {
echo $gifttoerr;
}
?>
</span>
</br>
</div>

<div class="form-group">
	  <label>Gift From:</label>
	  <input type="name2" class="form-control" name="Addgiftfrom" placeholder="Enter your name.">
    <?php
if(isset($err)) {
echo $giftfromerr;
}
?>
</span>
</br>
</div>
    <div class="form-group">
      <label>Message:</label>
      <textarea type="text" class="form-control" name="Addmessage" placeholder="Enter your message upto 500 words"></textarea>
<?php
if(isset($messageerr)) {
echo $messageerr;
}
?>
</span>
</br>
   
   </div>
    <button type="submit" name="Addgiftcard" class="btn btn-primary">Submit</button>
  </form>
  </div>
  
  <?php
include "../headerfooter/footer.php";
?>