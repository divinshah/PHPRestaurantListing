<?php
require_once './model/Database.php';
require_once './model/event.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $e = new Event();
    $count = $e->deleteEvent($id, $dbcon);

    if($count){
        header("Location: listevent.php");
    }
}