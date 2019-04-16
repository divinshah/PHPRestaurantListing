<?php

include'header.php';
require_once './model/Database.php';
require_once './model/event.php';

	
		
		$dbcon = Database::getdb();
		$e = new Event();
		$myeve = $e ->getAllEvents($dbcon);
		//var_dump($myeve);
?>

<div class="jumbotron">
	<div class="container">
		<h1>Upcoming Events in the City</h1>
	</div>
</div>

<?php

foreach($myeve as $event){
	
	// echo "<li class='btn btn-info btn-lg'><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>". "</li>";
		
	echo "<td>"."<div class='btn btn-info btn-lg'>" . $event->eventName . "</div>" ."</td>"."</br>"."</br>";
}

?>