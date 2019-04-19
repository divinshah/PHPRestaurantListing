<?php
require_once 'Database.php';
require_once 'Contact.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
	$dbcon = Database::getDb();
    $s = new Contact();
    $count = $s->deleteContact($id, $dbcon);
	if($count){
        header("Location: listContact.php");
    }
}