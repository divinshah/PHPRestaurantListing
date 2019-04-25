

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
<<<<<<< HEAD
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



=======
require_once 'feedback.php';
if(isset($_GET['Id'])){
	$id = $_GET['Id'];
    $dbcon = Database::getDb();
	
    $f = new feedback();
    $feedback = $f->getEmailById($id, $dbcon);
//var_dump($feedback);
}
/* echo  "Email : " . $feedback->email . "<br />";
echo  "Message : " . $feedback->message . "<br />"; */
?>
<form action="" method="">
<label> Email: </label>
 <?= $feedback->email; ?><br/>
</form>
>>>>>>> 8ffbde17f3ffe112d5c1668b722ba054dda25edf
