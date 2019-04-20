<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
include "../headerfooter/adminhome.php";
?> 
<div class="jumbotron">
    <div class="container">
        <h1>Contact Us</h1>
    </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Email</th>
                <th>Message</th>
                
            </tr>
        </thead>
        <tbody>
<?php
require_once '../model/Database.php';
require_once 'Contact.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $s = new Contact();
    $f = $s->getContactById($id, $dbcon);
}

echo  "<tr> 
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->email </td>
 <td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->message</p></strong></td>
</tr>";
?>
</tbody>
</table>
<?php
include "../headerfooter/adminfooter.html";
?>