<?php
//include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';

	$db = Database::getDb();
	$e = new Event();
	$evename = $e->geteventName($db);
	$events;
	 if(isset($_POST['drppro'])){
		$name = $_POST['event'];
		$events = $e->getEvent($db, $name);
	
	} 

?>

<h1>Events List </h1>

<form action="listevents.php" method="post">
    <select name="event">
        <?php foreach ($evename as $e){
            echo "<option value='$e->eventName'>" . $e->eventName . "</option>";
        }?>
    </select>
    <input type="submit" name="drppro" value="Get events" />
</form>

<div>
    <?php
    if(isset($events)){
        foreach ($events as $e) {
            echo "<li>" . $e->eventDescription . "</li>";
        }
    }?>
</div>

<?php
include'../headerfooter/footer.php';
?>
