<?php
require_once 'database.php';
require_once 'Feedback.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $s = new feedback();
    $f = $s->getEmailById($id, $dbcon);
//var_dump($faq);
}
echo  "Email : " . $f->Email . "<br />";
echo  "Message : " . $f->Message . "<br />";