<?php
require_once './model/Database.php';
require_once './model/newsletter.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $n = new Newsletter();
    $count = $n->deleteNewsletter($id, $dbcon);

    if($count){
        header("Location: newsletter_list.php");
    }
}