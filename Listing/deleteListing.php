<?php
require_once 'database.php';
require_once 'cakes.php';

 	$id = null;
    if (!empty($_GET['id'])) {
        $id = $_REQUEST['id'];

    $dbcon = Database::getDb();
    $b = new Listing();
	$count =$b->deleteListing($id, $dbcon);
	
	if($count){
		header("location: viewlistings.php");
	}
	else {
		echo "error";
	}
}