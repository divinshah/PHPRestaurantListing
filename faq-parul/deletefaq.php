<?php
require_once 'Database.php';
require_once 'faq.php';

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $dbcon = Database::getDb();
    $s = new faq();
    $count = $s->deleteFaq($id, $dbcon);

    if($count){
        header("Location: listfaq.php");
    }
}