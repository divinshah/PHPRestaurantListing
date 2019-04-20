<?php

include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $e = new Event();
    $event = $e ->getEventsById($id, $dbcon);
	//var_dump($event);
}

/* echo  "name : " . $event->eventName . "<br />";
echo  "description : " . $event->eventDescription . "<br />";
echo  "location : " . $event->eventLocation . "<br />";
echo  "eventdate : " . $event->eventdate . "<br />";
echo  "eventtime : " . $event->eventTime . "<br />";
echo  "fee : " . $event->eventFee . "<br />"; */

?>

<div class="jumbotron">
	<div class="container">
		<h1><?= $event ->eventName;  ?> </h1>
	</div>
</div>
<form action="" method="post">

	 
	<label>Description: </label> 
	<?= $event->eventDescription; ?><br/>

	<label>Location: </label>
	<?= $event->eventLocation; ?><br/>
	
	<label>Date: </label>
	<?= $event->eventdate; ?><br/>
	
	<label>Time: </label>
	<?= $event->eventTime; ?><br/>
	
	<label>Fees: </label>
	<?= $event->eventFee; ?><br/>
	
	<!--<input type="submit" name="updeve" value="update Event" />-->
</form>

<?php
  include'../headerfooter/footer.php';

?>