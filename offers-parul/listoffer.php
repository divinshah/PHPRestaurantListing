<?php
include "../headerfooter/adminhome.php";
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
<div class="jumbotron">
    <div class="container">
        <h1>Offers</h1>
    </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th hidden>Id</th>
                <th>Name</th>
                <th>Description</th>
                <th>Validity</th>
				<th>Price</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
<?php
require_once '../model/Database.php';
require_once 'offers.php';

$dbcon = Database::getDb();
$s = new offers();
$myoffer =  $s->getAllOffers(Database::getDb());



foreach($myoffer as $offer){
    echo "<tr>
	<td hidden> $offer->offerId </td>
	<td> <a href = 'offerDetail.php?id=$offer->offerId'>
	$offer->offerName </a> </td>
	<td>  $offer->offerDesc  </td>
    <td>  $offer->offerValidity  </td>
	<td>  $offer->offerPrice  </td>
    <td> <a href='editoffer.php?id=$offer->offerId' name='update' class='btn btn-primary btn-block'> Edit </a> </td>
    <td> <a href='deleteoffer.php?id=$offer->offerId' name='delete' class='btn btn-primary btn-block'> Delete </a> </td>
    </tr>";   
}
?>
</tbody>
</table>
<?php
include "../headerfooter/adminfooter.html";
?> 