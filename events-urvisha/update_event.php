<?php
require_once './model/Database.php';
require_once './model/event.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $e = new Event();
    $event = $e->getEventsById($id, $dbcon);
    var_dump($event);

}

if(isset($_POST['updeve']))
{
    $id= $_POST['urvisha'];
    $name = $_POST['name'];
    $description = $_POST['description'];
	$location = $_POST['location'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$fee = $_POST['fee'];
    
   
	$dbcon = Database::getDb();
    $e = new Event();
	$count = $e -> updateEvent($id, $name, $description, $location, $date, $time, $fee, $dbcon);
    if($count){
        header("Location: listevents.php");
    } else {
        echo  "problem updating";
    }


}



?>


<form action="" method="post">

	<input type="hidden" name="urvisha" value="<?= $event->id;?>" />

	<label>Name: </label>
	<input type="text" name="name" value="<?= $event->name; ?>"/> <br/>
	
	<label>Description: </label>
	<textarea name="description" rows="4" cols="50" value="<?= $event->description; ?>"></textarea><br/>
	
	<label>Location: </label>
	<input type="text" name="location" value="<?= $event->location; ?>" /> <br/>
	
	<label>Date: </label>
	<input type="text" name="date" value="<?= $event->date; ?>" /><br/>
	
	<label>Time: </label>
	<input type="text" name="time" value="<?= $event->time; ?>"/><br/>
	
	<label>Fees: </label>
	<input type="text" name="fee" value="<?= $event->fee; ?>"/><br/>
	
	<input type="submit" name="update_event" value="update Event" />
</form>