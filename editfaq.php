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

<form action="" method="post">
    <input type="hidden" name="fid" value="<?= $faq->faqId; ?>" />
    Question: <input type="text" name="question" value="<?= $faq->question; ?>" /><br/>
    Answer: <input type="text" name="answer" value="<?= $faq->answers; ?>" /><br />
    <input type="submit" name="updfaq" value="Update FAQ">
</form>