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
<form action="" method="post">
	<label>Question:</label>
	<input type="text" name="question" /> <br />
	<label>Answer:</label>
	<textarea name="answer" rows="10" cols="50" ></textarea> <br />
	<input type="submit" name="AddQuestion" value="Add" />
</form>