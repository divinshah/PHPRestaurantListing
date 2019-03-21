<?php
require_once 'Database.php';
require_once 'faq.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $dbcon = Database::getDb();

    $s = new faq();
    $f = $s->getFaqById($id, $dbcon);

//var_dump($faq);
}

echo  "Question : " . $f->question . "<br />";
echo  "Answer : " . $f->answers . "<br />";
