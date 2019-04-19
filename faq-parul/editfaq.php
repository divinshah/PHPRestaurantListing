
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
.container{
	color:#1A5276;
	font-weight:bolder;
	font-size:25px;
	font-family:Arial, Helvetica, sans-serif;
}
input[type=text] {
    padding:5px; 
    border:1px solid #ccc; 
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
input[type=submit] {
    padding:5px 15px; 
    background:#1A5276; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
	margin-left: 40%;
    margin-right: 50%;
	width: 200px;
	font-family:Arial, Helvetica, sans-serif;
	color: white;
}
textarea {
    padding: 5px;
    line-height: 1.5;
    border-radius: 5px;
    border: 2px solid #ccc;
    -webkit-border-radius: 5px;
    border-radius: 5px;
}
</style>
<?php
require_once 'Database.php';
require_once 'faq.php';
	
if(isset($_GET['id'])){
	$id = $_GET['id'];
	
	$dbcon = Database::getDb();
    $s = new faq();
	//echo "hi";
    $f = $s->getFaqById($id, $dbcon);
    //var_dump($f);
	
}
if(isset($_POST['updfaq'])){
    $id= $_POST['fid'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $count = $s->updateFaq($id, $question, $answer, $dbcon);

    if($count){
        header("Location: listfaq.php");
    } else {
        echo  "problem updating";
    }
}
?>
<?php
include "../headerfooter/header.php";
?> 
<div class="jumbotron">
    <div class="container">
        <h1>Frequently Asked Questions</h1>
    </div>
</div>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $f->faqId; ?>" />
    Question: <input type="text" class="form-control" name="question" value="<?= $f->question; ?>" required /><br/>
    Answer: <input type="text" class="form-control" name="answer" value="<?= $f->answers; ?>" required /><br />
    <input type="submit"  class="form-control" name="updfaq" value="Update FAQ">
</form>
</div>
<?php
include "../headerfooter/footer.php";
?>