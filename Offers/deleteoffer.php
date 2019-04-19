<?php
require_once 'Database.php';
require_once 'offers.php';

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $dbcon = Database::getDb();
    $s = new offers();
    $count = $s->deleteOffer($id, $dbcon);

    if($count){
        header("Location: listoffer.php");
    }
}