<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'database.php';
require_once 'giftcard.php';

$dbcon = Database::getDb();
$s = new giftcard();
$mygift =  $s->getGIFTCARD(Database::getDb());
foreach($mygift as $giftcard){
    echo "<li><a href='detailgift.php?id=$giftcard->id'>" .  $giftcard->Email  . "</a>".
	    "<div class='container'>".
        "<form action='editgift.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$giftcard->id' name='id' />".
        "<input type='submit' class='form-control' value='Update' name='update' />".
        "</form>" .
        "<form action='deletegift.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$giftcard->id' name='id' />".
        "<input type='submit' class='form-control' value='Delete' name='delete' />".
        "</form>".
		"</div>".
        "</li>";
}