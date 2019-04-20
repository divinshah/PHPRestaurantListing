<?php



include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'newsletter.php';
	

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

<div class="jumbotron">
<div class="container">
  <h1>Add newsletter</h1> 
 </div>
</div> 

<form action="" method="post">
	<div>
	<label>News Topic </label>
	<input type="text" name="topic" /> <br/>
	</div>
	
	<div>
	<label>News Title </label>
	<input type="text" name="title" /> <br/>
	</div>
	
	<div>
	<label>News Message: </label>
	<textarea name="message" rows="4" cols="50"></textarea><br/>
	</div>
	
	
	<input type="submit" name="adnwsltr" value="Add Newsletter" />
</form>

<?php
	include'../headerfooter/footer.php';

?>