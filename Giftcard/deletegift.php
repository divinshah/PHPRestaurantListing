<?php
require_once 'database.php';
require_once 'giftcard.php';
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new feedback();
    $count = $s->deleteFeedback($Id, $dbcon);
    if($count){
        header("Location: listgift.php");
    }
}