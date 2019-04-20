<?php



include'../headerfooter/header.php';
require_once '../model/Database.php'; // get the database
require_once 'newsletter.php';
	$dbcon = Database::getDb();
	$n = new newsletter();
	$nwsltr =  $n->getAllNewsletter($dbcon);

foreach($nwsltr as $nws){
    echo "<li><a href='newsletterdetail.php?id=$nws->newsletterid'>" .  $nws->title  . "</a>".
        "<form action='update_newsletter.php' method='post'>" .
        "<input type='hidden' value='$nws->newsletterid' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deletenewsletter.php' method='post'>" .
        "<input type='hidden' value='$nws->newsletterid' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}




	include'footer.php';


?>