<?php
require_once 'database.php';
<<<<<<< HEAD
require_once 'feedback.php';
=======
require_once 'Feedback.php';

>>>>>>> 8ffbde17f3ffe112d5c1668b722ba054dda25edf
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new feedback();
<<<<<<< HEAD
    $count = $s->deletefeedback($id, $dbcon);
=======
    $count = $s->deleteFeedback($id, $dbcon);
>>>>>>> 8ffbde17f3ffe112d5c1668b722ba054dda25edf
    if($count){
        header("Location: listfeedback.php");
    }
}