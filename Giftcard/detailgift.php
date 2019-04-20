<?php
require_once 'giftdatabase.php';
require_once 'giftcard.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $s = new giftcard();
    $f = $s->getGiftcard-ById($id, $dbcon);
	
//var_dump($faq);
}
echo  "amount : " . $f->amount . "<br />";
echo  "email : " . $f->email . "<br />";
echo  "giftto : " . $f->giftto . "<br />";
echo  "giftfrom : " . $f->giftfrom . "<br />";
echo  "message : " . $f->message . "<br />";
