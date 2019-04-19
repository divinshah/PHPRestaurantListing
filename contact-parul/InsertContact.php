<?php
require_once 'Database.php';
require_once 'Contact.php';

	$db = Database::getDb();
	$s = new Contact();

if(isset($_POST['SendMessage']))	
{
	$email = $_POST['email'];
	$message= $_POST['message'];

	$count = $s->addContact($email, $message, $db);
	
	if($count){
		echo "Message Sent Successfully..!!";
	}
	else {
		echo "Sorry..!! Please Check your fiedls once";
	}
}
?>
<div class="container">
<form action="" method="post">
<div class="form-group">
	<label>Email:</label>
	<input type="text" class="form-control" name="email" required /> <br /></div>
	<div class="form-group">
	<label>Message:</label>
	<textarea name="message" class="form-control" rows="10" cols="50" required ></textarea> <br />
	</div>
	<input type="submit" class="form-control" name="SendMessage" value="Send Message" /></div>
</form>
</div>