<?php
include "header.php";
?> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
.btn-list{
      background: #3498db;
      border: solid 1px;
      border-color: #3498db;
      background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
      background-image: -moz-linear-gradient(top, #3498db, #2980b9);
      background-image: -ms-linear-gradient(top, #3498db, #2980b9);
      background-image: -o-linear-gradient(top, #3498db, #2980b9);
      background-image: linear-gradient(to bottom, #3498db, #2980b9);
      -webkit-border-radius: 5;
      -moz-border-radius: 5;
      border-radius: 5px;
      color: #ffffff;
      font-size: 15px;
      padding: 5px;
      width: 100px;
      text-decoration: none;
	  vertical-align: middle;
	  display:inline;
    }
	
a{
	font-family:Arial, Helvetica, sans-serif;
	text-transform:capitalize;
	font-size:20px;
	color: #1A5276;
}
a:link {
  color: green;
}
a:visited {
  color: #1A5276;
}
a:hover {
  color: hotpink;
}
a:active {
  color: blue;
}
</style>
<?php
require_once 'Database.php';
require_once 'offers.php';

$dbcon = Database::getDb();
$s = new offers();
$myoffer =  $s->getAllOffers(Database::getDb());



foreach($myoffer as $offer){
    echo "<li><a href='offerDetail.php?id=$offer->offerId'>" .  $offer->offerName  . "</a>".
	    "<div class='container'>".
        "<form action='editoffer.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$offer->offerId' name='id' />".
        "<input type='submit' class='btn2 btn-primary btn-list' value='Update' name='update' />".
        "</form>" .
        "<form action='deleteoffer.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$offer->offerId' name='id' />".
        "<input type='submit' class='btn2 btn-primary btn-list' value='Delete' name='delete' />".
        "</form>".
		"</div>".
        "</li>";
}
?>
<?php
include "footer.php";
?> 