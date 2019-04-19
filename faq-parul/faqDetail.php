<?php
include "../headerfooter/header.php";
?> 
<div class="jumbotron">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
    </div>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                
            </tr>
        </thead>
        <tbody>
<?php
require_once 'Database.php';
require_once 'faq.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $s = new faq();
    $f = $s->getFaqById($id, $dbcon);

	//var_dump($f);
}
echo  "<tr>
<td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->question </td>
 <td><p style='font-family:Arial, Helvetica, sans-serif;font-size:16px;color:#1A5276;'><strong>$f->answers</p></strong></td></tr>";
?>
</tbody>
</table>
<?php
include "../headerfooter/footer.php";
?> 