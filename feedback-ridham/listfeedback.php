<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
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
//require_once '../headerfooter/adminhome.php';
require_once 'database.php';
require_once 'feedback.php';

$dbcon = database::getDb();
$s = new feedback();
$myfeedback =  $s->getFEEDBACK($dbcon);
//var_dump($myfeedback);

foreach($myfeedback as $feedback){
	//echo "hi";
    echo "<li><a href='detailfeedback.php?Id=$feedback->id'>" .  $feedback->message  . "</a>".
	    "<div class='container'>".
        "<form action='editfeedback.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$feedback->id' name='id' />".
        "<input type='submit' class='form-control' value='Update' name='update' />".
        "</form>" .
        "<form action='deletefeedback.php' method='post'>" .
        "<input type='hidden' class='form-control' value='$feedback->id' name='id' />".
        "<input type='submit' class='form-control' value='Delete' name='delete' />".
        "</form>".
		"</div>".
        "</li>";
}
?>
  