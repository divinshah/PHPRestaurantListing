<?php
require_once 'Database.php';
require_once 'offers.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new offers();
    $count = $s->deleteOffer($id, $dbcon);

    if($count){
        header("Location: listoffer.php");
    }
}