<?php
include "header.php";
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'Database.php';
require_once 'faq.php';


	$db = Database::getDb();
	$s = new faq();

if(isset($_POST['AddQuestion']))	
{
		$question = $_POST['question'];
	$answer= $_POST['answer'];

	$count = $s->addfaq($question, $answer, $db);
	
	if($count){
		echo "Question Added Successfully";
	}
	else {
		echo "Problem adding question";
	}
}
?>
<div class="container">
<form action="" method="post">
<div class="form-group">
	<label>Question:</label>
	<input type="text" class="form-control" name="question" /> <br /></div>
	<div class="form-group">
	<label>Answer:</label>
	<textarea name="answer" class="form-control" rows="10" cols="50" ></textarea> <br />
	</div>
	<div class="form-group">
	<input type="submit" class="form-control" name="AddQuestion" value="Add" /></div>
</form>
</div>
<?php
include "footer.php";
?> 