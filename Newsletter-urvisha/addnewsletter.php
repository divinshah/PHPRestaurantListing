<?php

	require_once './model/Database.php';
	require_once './model/newsletter.php';

	 if(isset($_POST['adnwsltr'])){
        $topic = $_POST['topic'];
		$title = $_POST['title'];
		$message = $_POST['message'];
    


       $db = Database::getDb();
       $n = new Newsletter();
       $mynews = $n -> addNewsletter($topic, $title, $message);


       if($mynews){
           echo "Added sucessfully";
       } else {
           echo "problem adding a newsletter";
       }

    }


?>

<form action="" method="post">

	<label>News Topic </label>
	<input type="text" name="topic" /> <br/>
	
	<label>News Title </label>
	<input type="text" name="title" /> <br/>
	
	<label>News Message: </label>
	<textarea name="message" rows="4" cols="50"></textarea><br/>
	
	
	
	<input type="submit" name="adnwsltr" value="Add Newsletter" />
</form>