<?php
require_once '../model/Database.php';
require_once '../model/User.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $u = new User();
    $count = $u->deleteUser($id,$dbcon);
    
    if($count) {
        //alert("Hi");
        header("Location: ../User-Panel/list-user.php");
    } 
    
}


