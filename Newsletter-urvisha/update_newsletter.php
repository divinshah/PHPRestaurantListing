<?php

include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'newsletter.php';
	
	if(isset($_POST['update'])){
		
		$id=$_POST['id'];
		
		$dbcon = database::getDb();
		$n = new Newsletter();
		$nwsltr = $n -> getNewsById($id,$dbcon);
	}


	if(isset($_POST['updnews']))
{
    $id= $_POST['urvisha'];
	$topic = $_POST['topic'];
    $title = $_POST['title'];
	$message = $_POST['message'];
   
	$dbcon = Database::getDb();
    $n = new Newsletter();
	$count = $n -> updateNewsletter($id,$topic,$title,$message,$dbcon);
    if($count){
        header("Location: newsletter_list.php");
    } else {
        echo  "problem updating";
    }


}

?>

<div class="jumbotron">
	<div>
		<h2>Update newsletter</h2>
	</div>
</div>

<form action="" method="post">

	<input type="hidden" name="urvisha" value="<?= $nwsltr-> newsletterid;?>" />
	
	<label>Topic: </label>
	<input type="text" name="topic" value="<?= $nwsltr->topic; ?>"/><br/>
	
	<label>Title: </label>
	<input type="text" name="title" value="<?= $nwsltr->title; ?>"/> <br/>
	
	<label>Message: </label>
	<textarea name="message" rows="4" cols="50"><?= $nwsltr->message; ?></textarea><br/>
	
	
	<input type="submit" name="updnews" value="update Newsletter" />
</form>

<?php
	include'footer.php';
?>
