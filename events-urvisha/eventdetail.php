<?php
require_once './model/Database.php';
require_once './model/event.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $e = new Event();
    $event = $e ->getEventsById($id, $dbcon);

}

echo  "name : " . $event->eventName . "<br />";
echo  "description : " . $event->eventDescription . "<br />";
echo  "location : " . $event->eventLocation . "<br />";
echo  "eventdate : " . $event->eventdate . "<br />";
echo  "eventtime : " . $event->eventTime . "<br />";
echo  "fee : " . $event->eventFee . "<br />";