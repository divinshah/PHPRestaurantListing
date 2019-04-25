<?php

require_once '../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';

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
	
	 echo"<div class='container'>".
	 "<div><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>". "</br>".
	 "</div>".
	 "</div>";
		
}
 

include'../headerfooter/footer.php';
?>











