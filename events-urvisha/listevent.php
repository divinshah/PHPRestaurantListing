<?php
require_once './model/Database.php';
require_once './model/event.php';
$dbcon = Database::getDb();
$e = new Event();
$myeve =  $e->getAllEvents($dbcon);
//var_dump($myeve);


foreach($myeve as $event){
    echo "<li><a href='eventdetail.php?id=$event->eventId'>" .  $event->eventName  . "</a>".
        "<form action='update_event.php' method='post'>" .
        "<input type='hidden' value='$event->eventId' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteevent.php' method='post'>" .
        "<input type='hidden' value='$event->eventId' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}