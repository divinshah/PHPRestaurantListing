<?php
include "header.php";
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/stylefaq.css">
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
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th hidden>Id</th>
                <th>Question</th>
                <th>Answer</th>
				<th>Option1</th>
				<th>Option 2</th>
                
            </tr>
        </thead>
        <tbody>
<?php
require_once 'Database.php';
require_once 'faq.php';

$dbcon = Database::getDb();
$s = new faq();
$myfaq =  $s->getAllFaq(Database::getDb());



foreach($myfaq as $faq){
   echo "<tr>
   <td hidden> $faq->faqId </td>
   <td><a href = 'faqDetail.php?id=$faq->faqId'>$faq->question </a></td>
   <td> $faq->answers</td>
   <td> <a href='editfaq.php?id=$faq->faqId' name='update' class='btn btn-primary btn-block'> Edit </a> </td>
   <td> <a href='deleteFaq.php?id=$faq->faqId' name='delete' class='btn btn-primary btn-block'> Delete </a> </td>
    </tr>"; 
}
?>
</tbody>
</table>
<?php
include "footer.php";
?>