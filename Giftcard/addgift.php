<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'giftdatabase.php';
require_once 'giftcard.php';
$db = database::getDb();
$s = new giftcard();
if(isset($_POST['Addgiftcard']))	
{
	
	 $Name1 = $_POST['Addname1'];
	$Name2 = $_POST['Addname2'];
		$Email = $_POST['Addemail'];
	$Message= $_POST['Addmessage'];
	$count = $s->addgiftcard($Name1, $Name2, $Email, $Message, $db);
	
	if($count){
		echo "Gift Card Added Successfully";
	}
	else {
		echo "Problem adding Gift Card";
	} 
}
?>
<div class="container">
  <h2>Personalize Your Gift Card</h2>
  <form action="" method="post">
      <div class="form-group">
	  <label>Name1:</label>
	  <input type="name1" class="form-control" name="Addname1" placeholder="Enter name1">
    </div>
	<div class="form-group">
	  <label>Name2:</label>
	  <input type="name2" class="form-control" name="Addname2" placeholder="Enter name2">
    </div>
	<div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="Addemail" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label>Message:</label>
      <textarea type="text" class="form-control" name="Addmessage" placeholder="Enter your message upto 500 words"></textarea>
    </div>
    <button type="submit" name="Addgiftcard" class="btn btn-primary">Submit</button>
  </form>
  </div>