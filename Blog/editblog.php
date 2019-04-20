<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<?php
require_once 'database.php';
require_once 'Blog.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new blog();
	//echo "hi";
    $blogs = $s->getEmailById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updblog'])){
	//echo "hi";
    $id= $_POST['fid'];
    $name = $_POST['name'];
	  $datetime = $_POST['datetime'];
    $message = $_POST['message'];
    $dbcon = Database::getDb();
    $s = new blog();
    $count = $s->updateblog($id, $name, $datetime, $message, $dbcon);
    if($count){
        header("Location: listblog.php");
    } else {
        echo  "problem updating";
    }
}
?>
<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $feedbacks->id; ?>" />
    name: <input type="text" class="form-control" name="name" value="<?= $blogs->name; ?>" /><br/>
	date: <input type="text" class="form-control" name="date" value="<?= $blogs->date; ?>" /><br/>
	time: <input type="text" class="form-control" name="time" value="<?= $blogs->time; ?>" /><br/>
    blog: <input type="text" class="form-control" name="blog" value="<?= $blogs->blog; ?>" /><br />
    <input type="submit"  class="form-control" name="updfeedback" value="Update Feedback">
</form>
</div>

