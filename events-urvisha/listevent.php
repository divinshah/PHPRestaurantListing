

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
a{
	font-family:Arial, Helvetica, sans-serif;
	text-transform:capitalize;
	font-size:20px;
	color: #1A5276;
}
a:link {
  color: green;
}
a:visited {
  color: #1A5276;
}
a:hover {
  color: hotpink;
}
a:active {
  color: blue;
}
</style>


<?php
include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'event.php';
$dbcon = Database::getDb();
$e = new Event();
$myeve =  $e->getAllEvents($dbcon);
//var_dump($myeve);

?>

<div class="jumbotron">
    <div class="container">
        <h1>Update Events</h1>
    </div>
</div>

<?php
foreach($myeve as $event){
    echo "<li><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>".
		"<div class='container'>".
        "<form action='update_event.php' method='post'>" . "</br>" .
        "<input type='hidden' class='form-control' value='$event->eventId' name='id' />". "</br>" .
        "<input type='submit' class='form-control' value='Update' name='update' />". "</br>" .
        "</form>" .
        "<form action='deleteevent.php' method='post'>" . "</br>" .
        "<input type='hidden' class='form-control' value='$event->eventId' name='id' />". "</br>" .
        "<input type='submit' class='form-control' value='Delete' name='delete' />". "</br>" .
        "</form>" .
		"</div>".
        "</li>";
}

	echo"<div class='container'>".
		"<form action='addevent.php'>"."</br>".
		"<input type='submit' class='form-control' value='add event' name='add event'>"."</br>".
		"</form>".
		"</div>";

?>

