<?php

include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';


	
		$dbcon = Database::getdb();
		$e = new Event();
		$myeve = $e ->getAllEvents($dbcon);
		//var_dump($myeve);
		
?>

<!-- 
<div class="jumbotron">
	<div class="container">
		<h1>Upcoming Events in the City</h1>
	</div>
</div>

<php

 foreach($myeve as $event){
	
	 echo"<div class='container'>".
	 "<div><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>". "</br>".
	 "</div>".
	 "</div>";
		
}
> -->

    <section class="main-block light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="styled-heading">
                        <h3>upcoming events</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 featured-responsive">
                    <div class="featured-place-wrap">
                        
                            <img src="images/featured1.jpg" class="img-fluid" alt="#"/>
                            <div class="featured-title-box">
                                <h6>Burger & Lobster</h6>
                                <p>Restaurant </p> <span>• </span>
                                <p>3 Reviews</p> <span> • </span>
                                <p><span>$$$</span>$$</p>
                                <ul>
                                    <li><span class="icon-location-pin"></span>
                                        <p>1301 Avenue, Brooklyn, NY 11230</p>
                                    </li>
                                    <li><span class="icon-screen-smartphone"></span>
                                        <p>+44 20 7336 8898</p>
                                    </li>
                                    <li><span class="icon-link"></span>
                                        <p>https://burgerandlobster.com</p>
                                    </li>

                                </ul>
                                <div class="bottom-icons">
                                    <div class="closed-now">CLOSED NOW</div>
                                    <span class="ti-heart"></span>
                                    <span class="ti-bookmark"></span>
                                </div>
                            </div>
                    </div>
                </div>
			</div>
		</div>
	</section>
<?php
include'../headerfooter/footer.php';
?>











