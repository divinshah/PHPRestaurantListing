<?php
require_once 'Database.php';
require_once 'faq.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new faq();
    $count = $s->deleteFaq($id, $dbcon);

    if($count){
        header("Location: listfaq.php");
    }
}