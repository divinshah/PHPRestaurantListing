<?php
require_once 'Database.php';
require_once 'Contact.php';

$dbcon = Database::getDb();
$s = new Contact();
$myContact=  $s->getAllContacts(Database::getDb());



foreach($myContact as $contact){
    echo "<li><a href='contactDetail.php?id=$contact->id'>" .  $contact->email  . "</a>".
	    "<div class='container'>".
        "<form action='deleteContact.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$contact->id' name='id' />".
        "<input type='submit' class='btn2 btn-primary btn-list' value='Delete' name='delete' />".
        "</form>".
		"</div>".
        "</li>";
}
?>