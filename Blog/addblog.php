<?php	
require_once '../headerfooter/header.php';
require_once 'database.php';
require_once 'blog.php';

//validations

$nameerr = "";
$dateerr = "";
$timeerr = "";
$blogerr = "";

$name = $date = $time =  $blog="";

if(isset($_POST['name'])) {
	
	$name = $_POST['name'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$blog = $_POST['blog'];
	
	
	if($name == "") {
		 $nameerr = "Please enter your Name </br>";
	}
		else{
		$nameerr = "";
	}
	
	//$dateptn = "[0-9]{4}/[0-1][0-9]{2}/[0-3][0-9]{2}";
		  $dateptn = "/^[0-9]{4}\/(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])$/";
		  
		if(empty($date)){
			$dateerr = "Please enter date </br>";
		}
		elseif(!preg_match($dateptn,$date)){
			$dateerr ="Please enter date in format yyyy/mm/dd <br/>";
		}
		else{
			$dateerr = "";
		}
		
		$timeptn = "/(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9](:[0-5][0-9])?/";
		
		//time
			if(empty($time)){
				$timerr = "Please enter event time <br/>";
			}elseif(!preg_match($timeptn,$time)){
				$timeerr = "Please enter time in hh:mm:ss </br>";
			}
			else{
				$timerr = "";
			}
	if($blog == ""){
		
			$blog = "Please enter the message <br/>";
		}else{
			$blog = "";
		}
}

	$db = Database::getDb();
	$s = new blog();

if(isset($_POST['Addblog']))	
{

		$name = $_POST['Addname'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$message = $_POST['Addmessage'];
	$blog= $_POST['Addblog'];
	echo "Hi";
	$count = $s->addblog($name, $date, $time, $message, $db);
	
	if($count){
		echo "The Blog is Added Successfully";
	}
	else {
		echo "Problem adding blog";
	}
}
?>

<div class="jumbotron">
    <div class="container">
        <h1>Write your Blog Please!</h1>
    </div>
</div>

<div class="container">
<form method="post">
  <h2>Blog!</h2>
      <div class="form-group">
      <label>Name:</label>
      <input type="name" class="form-control" name="Addname" placeholder="Enter name" required>
    <?php
if(isset($nameerr)) {
echo $nameerr;
}
?>
</span>
</br>
	</div>
    <div class="form-group">
      <label>Message:</label>
      <textarea type="text" class="form-control" name="Addmessage" placeholder="Enter your blog upto 1000 words" required ></textarea>
<?php
if(isset($blogerr)) {
echo $blogerr;
}
?>
</span>
</br>   
   </div>
   <label>Date: </label>
	<input type="text" name="date" placeholder="yyyy/mm/dd" value="<?= $date ?>" required />
	<span style="color:red;">
		<?php
			if(isset($dateerr)){
				echo $dateerr;
			}
		?>
	</span>
	</br>
	
	<label>Time: </label>
	<input type="text" name="time" placeholder="hh/mm/ss" value="<?= $time?>" required />
	<span style="color:red;">
		<?php
			if(isset($timerr)){
				echo $timerr;
			}
		?>
	</span>
	</br>
    <button type="submit"  name="Addblog" class="form-control">Submit</button>
  </form>
  </div>
  <?php
require_once '../headerfooter/footer.php';
  ?>