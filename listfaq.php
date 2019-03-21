<?php
require_once 'Database.php';
require_once 'faq.php';

$dbcon = Database::getDb();
$s = new faq();
$myfaq =  $s->getAllFaq(Database::getDb());



foreach($myfaq as $faq){
    echo "<li><a href='faqDetail.php?id=$faq->faqId'>" .  $faq->question  . "</a>".
        "<form action='editfaq.php' method='post'>" .
        "<input type='hidden' value='$faq->faqId' name='id' />".
        "<input type='submit' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteFaq.php' method='post'>" .
        "<input type='hidden' value='$faq->faqId' name='id' />".
        "<input type='submit' value='Delete' name='delete' />".
        "</form>" .
        "</li>";
}
