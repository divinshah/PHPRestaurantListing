<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'database.php';
require_once 'feedback.php';
	$db = Database::getDb();
	$s = new feedback();
if(isset($_POST['Addfeedback']))	
{
		$Email = $_POST['Addemail'];
	$Message= $_POST['Addmessage'];
	$count = $s->addfeedback($Email, $Message, $db);
	
	if($count){
		echo "Feedback Added Successfully";
	}
	else {
		echo "Problem adding feedback";
	}
}
?>
<div class="container">
  <h2>Tell us what you think</h2>
      <div class="form-group">
      <label>Email:</label>
      <input type="email" class="form-control" name="Addemail" placeholder="Enter email" name="email_feedback">
    </div>
    <div class="form-group">
      <label>Message:</label>
      <textarea type="text" class="form-control" name="Addmessage" placeholder="Enter your feeback upto 500 words" name="message"></textarea>
    </div>
    <button type="submit" value="insert" name="Addfeedback" class="btn btn-primary">Submit</button>
  </form>
  </div>