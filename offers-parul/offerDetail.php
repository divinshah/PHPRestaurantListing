<?php
include "header.php";
?> 
<?php
require_once 'Database.php';
require_once 'offers.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $s = new offers();
    $f = $s->getOfferById($id, $dbcon);
}

echo  "Offer Name : " . $f->offerName . "<br />";
echo  "Description: " . $f->offerDesc . "<br />";
echo  "Validity: " . $f->offerValidity . "<br />";
echo  "Price: " . $f->offerPrice . "<br />";
?>
<?php
include "footer.php";
?> 
