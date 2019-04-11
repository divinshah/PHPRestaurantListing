<?php
require_once 'giftdatabase.php';
require_once 'giftcard.php';
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new giftcard();
    $count = $s->deletegiftcard($id, $dbcon);
    if($count){
        header("Location: listgift.php");
    }
}