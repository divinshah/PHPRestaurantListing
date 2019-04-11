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
require_once 'offers.php';


	$db = Database::getDb();
	$s = new offers();

if(isset($_POST['AddOffer']))	
{
	$offername = $_POST['offername'];
	$offerdescrp= $_POST['description'];
	$offervalid= $_POST['offervalidity'];
	$offerprice= $_POST['offerprice'];

	$count = $s->addOffer($offername, $offerdescrp,$offervalid,$offerprice, $db);
	
	if($count){
		echo "Offer Added Successfully";
	}
	else {
		echo "Problem adding offer";
	}
}
?>
<div class="container">
<form action="" method="post">
<div class="form-group">
	<label>Offer Name:</label>
	<input type="text" class="form-control" name="offername" required /> <br /></div>
	<div class="form-group">
	<label>Offer Description:</label>
	<textarea name="description" class="form-control" rows="10" cols="50" required ></textarea> <br />
	</div>
	<div class="form-group">
	<label>Offer Validity:</label>
	<input type="datetime-local" class="form-control" name="offervalidity" /> <br /></div>
	<div class="form-group">
	<label>Offer Price:</label>
	<input type="text" class="form-control" name="offerprice" pattern='[0-9]+(\\.[0-9][0-9]?)?' /> <br /></div>
	<div class="form-group">
	<input type="submit" class="form-control" name="AddOffer" value="Add Offer" /></div>
</form>
</div>
<?php
include "footer.php";
?> 