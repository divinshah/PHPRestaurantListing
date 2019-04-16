<?php
include'header.php';
require_once './model/Database.php';
require_once './model/event.php';
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
        "<form action='update_event.php' method='post'>" . "</br>" .
        "<input type='hidden' value='$event->eventId' name='id' />". "</br>" .
        "<input type='submit' value='Update' name='update' />". "</br>" .
        "</form>" .
        "<form action='deleteevent.php' method='post'>" . "</br>" .
        "<input type='hidden' value='$event->eventId' name='id' />". "</br>" .
        "<input type='submit' value='Delete' name='delete' />". "</br>" .
        "</form>" .
        "</li>";
}

?>

