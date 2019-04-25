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
require_once 'database.php';
require_once 'Blog.php';
	
if(isset($_POST['update'])){
	$id = $_POST['id'];
	
	$dbcon = Database::getDb();
    $s = new blog();
	//echo "hi";
    $blog = $s->getBlogById($id, $dbcon);
    //var_dump($faq);
	
}
if(isset($_POST['updblog'])){
	//echo "hi";
    $id= $_POST['fid'];
    $name = $_POST['name'];
	  $datetime = $_POST['datetime'];
    $message = $_POST['message'];
    $dbcon = Database::getDb();
    $blog = new blogs();
    $count = $blog->updateblog($id, $name, $datetime, $message, $dbcon);
    if($count){
        header("Location: listblog.php");
    } else {
        echo  ("problem updating");
    }
}
?>

<div class="container">
<form action="" method="post">
    <input type="hidden" class="form-control" name="fid" value="<?= $blogs->ID; ?>" />
    name: <input type="text" class="form-control" name="name" value="<?= $blogs->name; ?>" /><br/>
	date: <input type="text" class="form-control" name="date" value="<?= $blogs->date; ?>" /><br/>
	time: <input type="text" class="form-control" name="time" value="<?= $blogs->time; ?>" /><br/>
    blog: <input type="text" class="form-control" name="blog" value="<?= $blogs->blog; ?>" /><br />
    <input type="submit"  class="form-control" name="updfeedback" value="Update Feedback">
</form>
</div>
<?php
include "../headerfooter/adminfooter.html";
?>
