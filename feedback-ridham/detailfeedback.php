<?php
require_once 'database.php';
require_once 'feedback.php';
if(isset($_GET['Id'])){
	$id = $_GET['Id'];
    $dbcon = Database::getDb();
	
    $f = new feedback();
    $feedback = $f->getEmailById($id, $dbcon);
//var_dump($feedback);
}
/* echo  "Email : " . $feedback->email . "<br />";
echo  "Message : " . $feedback->message . "<br />"; */
?>
<form action="" method="">
<label> Email: </label>
 <?= $feedback->email; ?><br/>
</form>