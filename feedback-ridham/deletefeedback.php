<?php
require_once 'database.php';
require_once 'feedback.php';
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new feedback();
    $count = $s->deletefeedback($id, $dbcon);
    if($count){
        header("Location: listfeedback.php");
    }
}