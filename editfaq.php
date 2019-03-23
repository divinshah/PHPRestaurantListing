<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'Database.php';
require_once 'faq.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new faq();
	//echo "hi";
    $faq = $s->getFaqById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updfaq'])){
	echo "hi";
    $id= $_POST['fid'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];


    $dbcon = Database::getDb();
    $faq = new faq();
    $count = $faq->updateFaq($id, $question, $answer, $dbcon);

    if($count){
        header("Location: listfaq.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $faq->faqId; ?>" />
    Question: <input type="text" class="form-control" name="question" value="<?= $faq->question; ?>" /><br/>
    Answer: <input type="text" class="form-control" name="answer" value="<?= $faq->answers; ?>" /><br />
    <input type="submit"  class="form-control" name="updfaq" value="Update FAQ">
</form>
</div>