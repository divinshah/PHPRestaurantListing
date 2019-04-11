<?php
require_once 'giftdatabase.php';
require_once 'giftcard.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $s = new giftcard();
    $f = $s->getGiftcardById($id, $dbcon);
	
//var_dump($faq);
}
echo  "Name1 : " . $f->Name1 . "<br />";
echo  "Name2 : " . $f->Name2 . "<br />";
echo  "Email : " . $f->Email . "<br />";
echo  "Message : " . $f->Message . "<br />";
