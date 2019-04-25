<?php
require_once 'database.php';
require_once 'Blog.php';
if(isset($_POST['delete'])){
    $id= $_POST['id'];
    $dbcon = Database::getDb();
    $s = new blog();
    $count = $s->deleteBlog($id, $dbcon);
    if($count){
        header("Location: listblog.php");
    }
}


