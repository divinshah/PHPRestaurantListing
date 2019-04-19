<?php
require_once 'Database.php';
require_once 'Contact.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new Contact();
	
    $contacts = $s->getContactById($id, $dbcon);
    
	
}
if(isset($_POST['updCntct'])){
	//echo "hi";
    $id= $_POST['cid'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $dbcon = Database::getDb();
    $contact = new Contact();
    $count = $contact->updateContact($id, $email, $message, $dbcon);

    if($count){
        header("Location: listContact.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="cid" value="<?= $contact->id; ?>" />
    Email: <input type="text" class="form-control" name="email" value="<?= $faq->email; ?>" /><br/>
    Message: <textarea name="message" class="form-control" rows="10" cols="50" ><?= $faq->messsage?></textarea><br />
    <input type="submit"  class="form-control" name="updCntct" value="Update Contact">
</form>
</div>