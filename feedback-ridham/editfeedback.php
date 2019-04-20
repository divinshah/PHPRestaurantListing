<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'database.php';
require_once 'Feedback.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new feedback();
	//echo "hi";
    $feedback = $s->getEmailById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updfeedback'])){
	//echo "hi";
    $id= $_POST['fid'];
    $Email = $_POST['Email'];
    $Message = $_POST['Message'];
    $dbcon = Database::getDb();
    $s = new feedback();
    $count = $s->updatefeedback($id, $Email, $Message, $dbcon);
    if($count){
        header("Location: listfeedback.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $feedback->id; ?>" />
    Email: <input type="text" class="form-control" name="Email" value="<?= $feedback->email; ?>" /><br/>
    Message: <input type="text" class="form-control" name="Message" value="<?= $feedback->message; ?>" /><br />
    <input type="submit"  class="form-control" name="updfeedback" value="Update Feedback">
</form>
</div>

