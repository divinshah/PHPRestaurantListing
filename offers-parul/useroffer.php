<?php
include "../headerfooter/header.php";
?>
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
$myfaq =  $s->getAllOffers(Database::getDb());



foreach($myfaq as $faq){
   echo "<tr>
   <td>   $faq->offerName  </td>
   <td>   $faq->offerDesc  </td>
    <td>  $faq->offerValidity  </td>
	<td>  $faq->offerPrice  </td>
   </tr>";
   
}
?>
</tbody>
</table>
<?php
include "../headerfooter/footer.php";
?>