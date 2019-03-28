<?php
require_once './model/Database.php';
require_once './model/event.php';

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

<form action="" method="post">

	<label>Name: </label>
	<input type="text" name="name" /> <br/>
	
	<label>Description: </label>
	<textarea name="description" rows="4" cols="50"></textarea><br/>
	
	<label>Location: </label>
	<input type="text" name="location" /> <br/>
	
	<label>Date: </label>
	<input type="text" name="date" value="yyyy-mm-dd" /><br/>
	
	<label>Time: </label>
	<input type="text" name="time" value="hh:mm:ss"/><br/>
	
	<label>Fees: </label>
	<input type="text" name="fee"/><br/>
	
	<input type="submit" name="addevent" value="Add Event" />
</form>