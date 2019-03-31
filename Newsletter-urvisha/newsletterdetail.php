<?php
require_once './model/Database.php';
require_once './model/newsletter.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $n = new Newsletter();
    $nwsltr = $n ->getNewsById($id, $dbcon);
	
}

echo  "topic : " . $nwsltr->topic . "<br />";
echo  "title : " . $nwsltr->title . "<br />";
echo  "message : " . $nwsltr->message . "<br />";



?>