<?php

require_once '../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';

if(isset($_POST['update'])){
    $id = $_POST['id'];

    $dbcon = Database::getDb();
    $e = new Event();
    $event = $e->getEventsById($id, $dbcon);
    //var_dump($event);

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
	$count = $e -> updateEvent($id,$name,$description,$location,$date,$time,$fee,$dbcon);
   
   if($count){
        header("Location: listevent.php");
    } else {
        echo  "problem updating";
    }


}



?>

<div class="jumbotron">
    <div class="container">
        <h1>Update</h1>
    </div>
</div>
<form action="" method="post">



	<label>Name: </label>
	<input type="text" name="name" value="<?= $event->eventName; ?>"/> <br/>
	
	<label>Description: </label>
	<textarea name="description" rows="4" cols="50"><?= $event->eventDescription; ?></textarea><br/>
	
	
	<label>Location: </label>
	<input type="text" name="location" value="<?= $event->eventLocation; ?>" /> <br/>
	
	<label>Date: </label>
	<input type="text" name="date" value="<?= $event->eventdate; ?>" /><br/>
	
	<label>Time: </label>
	<input type="text" name="time" value="<?= $event->eventTime; ?>"/><br/>
	
	<label>Fees: </label>
	<input type="text" name="fee" value="<?= $event->eventFee; ?>"/><br/>
	
	<input type="submit" name="updeve" value="update Event" />
</form>

<?php
include'../headerfooter/footer.php';
?>