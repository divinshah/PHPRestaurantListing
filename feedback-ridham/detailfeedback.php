

<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                 <th>Email</th>
                <th>Message</th>
                
            </tr>
        </thead>
        <tbody>
<?php
require_once 'database.php';
require_once 'Feedback.php';
if(isset($_GET['Id'])){
    $id = $_GET['Id'];
    $dbcon = Database::getDb();
    $s = new feedback();
    $f = $s->getEmailById($id, $dbcon);
//var_dump($feedback);
}
echo  "<tr> 
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->email </td>
 <td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->message</p></strong></td></tr>"
?>
</tbody>
</table>



