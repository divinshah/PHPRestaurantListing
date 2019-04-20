<?php
//include 'header.php';
include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';
	//validations
	
	$nameerr = "";
	$descerr = "";	
	$locerr = "";
	$dateerr = "";
	$timerr = "";
	$feeserr = "";
	$name = $description = $location = $date = $time = $fee="";
	
	if(isset($_POST['name'])){
		
		$name = $_POST['name'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$fee = $_POST['fee'];
 		
		if($name == ""){
			$nameerr = "Please enter event name <br/>";
		}else{
			$nameerr = "";
		}
		
		if($description == ""){	
			$descerr = "Please enter description <br/>";
		}else{

			$descerr = "";
		}
		
		if($location == ""){
		
			$locerr = "Please enter event location <br/>";
		}else{
			$locerr = "";
		}
		
		//$dateptn = "[0-9]{4}/[0-1][0-9]{2}/[0-3][0-9]{2}";
		  $dateptn = "/^[0-9]{4}\/(0[1-9]|1[0-2])\/(0[1-9]|[1-2][0-9]|3[0-1])$/";
		  
		if(empty($date)){
			$dateerr = "Please enter date </br>";
		}
		elseif(!preg_match($dateptn,$date)){
			$dateerr ="Please enter date in formate yyyy/mm/dd <br/>";
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
			
			
		//fees	
		if(empty($fee)){
		
			$feeserr = "Please enter event fees <br/>";
		}else{
			$feeserr = "";
		}
		
		
	}
	



   //complete validations






    if(isset($_POST['addevent'])){
        $name = $_POST['name'];
		$description = $_POST['description'];
		$location = $_POST['location'];
		$date = $_POST['date'];
		$time = $_POST['time'];
		$fee = $_POST['fee'];
    
       $db = Database::getDb();
       $e = new Event();
      $myeve = $e -> addEvent($name, $description, $location, $date, $time, $fee);


       if($myeve){
           echo "Added event sucessfully";
       } else {
           echo "problem adding a event";
       }

    }
	
	
?>
<div class="jumbotron">
    <div class="container">
      <h1>Add Events</h1> 
        </div>
    </div>

<form action="" method="post">

	<!-- <label>upload image:</label>
	<input type="hidden" name="action" value="upload"/></br>
	<input type="file" name="file1"/></br>
	<input id="upload_button" type="submit" value="Upload"/></br> -->

	<label>Name: </label>
	<input type="text" name="name" value="<?= $name;  ?>" /> 
	<span style="color:red;">
		<?php
			if(isset($nameerr)){
				echo $nameerr;	
			}
		?>
	</span>
	</br>
	
	<label>Description: </label>
	<textarea name="description" rows="4" cols="50"><?= $description; ?> </textarea>
	
	<span style="color:red;">
		<?php
			if(isset($descerr)){
				echo $descerr;	
			}
		?>
	</span>
	</br>
	
	
	<label>Location: </label>
	<input type="text" name="location" value="<?= $location ?>"/>
	<span style="color:red;">
		<?php
			if(isset($locerr)){
				echo $locerr;
			}
		?>
	</span>
	</br>
	
	<label>Date: </label>
	<input type="text" name="date" placeholder="yyyy/mm/dd" value="<?= $date ?>" />
	<span style="color:red;">
		<?php
			if(isset($dateerr)){
				echo $dateerr;
			}
		?>
	</span>
	</br>
	
	<label>Time: </label>
	<input type="text" name="time" placeholder="hh/mm/ss" value="<?= $time?>" />
	<span style="color:red;">
		<?php
			if(isset($timerr)){
				echo $timerr;
			}
		?>
	</span>
	</br>
	
	<label>Fees: </label>
	<input type="text" name="fee" value="<?= $fee ?>"/>
	<span style="color:red;">
	<?php
		if(isset($feeserr)){
			echo $feeserr;
		}
	?>
	</span>
	</br>
	
	<input type="submit" name="addevent" value="Add Event" />
</form>

<?php
	include'../headerfooter/footer.php';
?>