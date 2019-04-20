<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
.form-group{
	color:#1A5276;
	font-weight:bolder;
	font-size:25px;
	font-family:Arial, Helvetica, sans-serif;
}
button[type=submit] {
    padding:5px 15px; 
    background:#1A5276; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	margin-left: 40%;
    margin-right: 50%;
	width: 200px;
	font-family:Arial, Helvetica, sans-serif;
	color: white;
}
.form-groups{
	color:#1A5276;
	font-weight:bolder;
	font-size:25px;
	font-family:Arial, Helvetica, sans-serif;
}
	
textarea {
    padding: 5px;
    line-height: 1.5;
    border-radius: 5px;
    border: 2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>



<?php	
require_once '../headerfooter/header.php';
require_once 'database.php';
require_once 'feedback.php';

//validations

$Email = "";
$Message = "";

$Email = $Message="";

if(isset($_POST['Email'])) {
	
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	
	//$Emailptn = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
	$Emailptn = "^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$";
	
	if($Email == "") {
		 $Emailerr = "Please enter your Email </br>";
	}
	elseif(!preg_match($Emailptn,$Email)) {
		$Emailerr = "Please use the correct form <br/>";
	}
	else{
		$Emailerr = "";
	}
	
	if($Message == ""){
		
			$Message = "Please enter the message <br/>";
		}else{
			$Message = "";
		}
}

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

<div class="jumbotron">
    <div class="container">
        <h1>Your Feedback Please!</h1>
    </div>
</div>

<div class="container">
<form method="post">
  <h2>Tell us what you think</h2>
      <div class="form-groups">
      <label>Email:</label>
      <input type="email" class="form-control" name="Addemail" placeholder="Enter email">
    <?php
if(isset($Emailerr)) {
echo $Emailerr;
}
?>
</span>
</br>
	</div>
    <div class="form-group">
      <label>Your Feedback </label>
      <textarea type="text" class="form-control" name="Addmessage" placeholder="Enter your feeback upto 500 words" required ></textarea>
<?php
if(isset($Messageerr)) {
echo $Messageerr;
}
?>
</span>
</br>   
   </div>
    <button type="submit"  name="Addfeedback" class="form-control">Submit</button>
  </form>
  </div>
 <?php
require_once '../headerfooter/footer.php';
  ?>