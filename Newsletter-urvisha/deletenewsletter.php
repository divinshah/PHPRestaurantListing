<?php


include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'newsletter.php';

if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $n = new Newsletter();
    $count = $n->deleteNewsletter($id, $dbcon);

    if($count){
        header("Location: newsletter_list.php");
    }
}

<?php
	include'../headerfooter/footer.php';

?>