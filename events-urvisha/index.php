<?php

include'../headerfooter/header.php';
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
	
	 echo "<li'><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>". "</br>"."</li>";
		

	
}
?>

<?php
include'../headerfooter/footer.php';
?>
 <!--
 
		
		foreach($myeve as $event){
			
			echo	"<table class='table table-hover'>".
			
					
					"<tr>".
						"<td>" . "<b>".$event->eventName."</b>" ."</td>".
						 /* "<td>" . $event->eventDescription ."</td>".	  */
						
						"<td>"."<button class=''btn btn-primary btn-lg' data-toggle='modal' data-target='#mymodel'>Details</button>"."</td>".
				    "</tr>".
					"</table>";
		}
?>-->
<!--
<div id="fh5co-event" class="fh5co-bg" style="background-image:url(images/img_bg_3jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
					 <span>Upcoming Events</span>
					<h2>Upcoming Events</h2>
				</div>
			</div> 
			<div class="row">
				<div class="display-t">
					<div class="display-tc">
						<div class="col-md-10 col-md-offset-1">
							<div class="col-md-6 col-sm-6 text-center">
								<div class="event-wrap animate-box">


php

foreach($myeve as $event){
	
	
	echo 
									"<h3>". $event->eventName ."<br/>"."</h3>".
									"<div class='event-col'>".
										"<i class='icon-clock'></i>".
										"<span>".$event -> eventTime."</span>".
									"</div>".
									"<div class='event-col'>".
										"<i class='icon-calendar'></i>".
										 "<span>".$event -> eventdate."</span>".
									"</div>".
									"<p>".$event -> eventDescription."</p>";
				

} 
?>
				</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>;-->









