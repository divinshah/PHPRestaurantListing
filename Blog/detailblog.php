<?php
require_once 'database.php';
require_once 'blog.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $s = new blog();
    $f = $s->getBlogById($id, $dbcon);
//var_dump($feedback);
}
echo  "name : " . $f->name . "<br />";
echo  "date : " . $f->date . "<br />";
echo  "time : " . $f->time . "<br />";
echo  "blog : " . $f->blog . "<br />";