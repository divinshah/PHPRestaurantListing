<?php
include "header.php";
?>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Validity</th>
				<th>Price</th>
                
            </tr>
        </thead>
        <tbody>
<?php
require_once 'Database.php';
require_once 'offers.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $s = new offers();
    $f = $s->getOfferById($id, $dbcon);
}

echo  "<tr> 
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->offerName </td>
 <td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->offerDesc</p></strong></td>
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong> Validity:$f->offerValidity</p></strong></td>
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->offerPrice</p></strong></td></tr>";
?>
</tbody>
</table>

<?php
include "footer.php";
?>
