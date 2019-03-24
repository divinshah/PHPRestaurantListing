<?php
require_once './model/Database.php';
require_once './model/event.php';

$dbcon = Database::getDb();
$e = new Event();
$myeve =  $e->getAllEvents(Database::getDb());



foreach($myeve as $event){
    echo "<li><a href='eventDetail.php?id=$event->id'>" .  $event->name  . "</a>".
        "<form action='updateEvent.php' method='post'>" .
        "<input type='hidden' value='$event->id' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteEvent.php' method='post'>" .
        "<input type='hidden' value='$event->id' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}