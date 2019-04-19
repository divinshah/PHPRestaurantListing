<?php
require_once '../model/Database.php';
require_once '../model/Admin.php';


if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $dbcon = Database::getDb();
    $u = new Admin();
    $count = $u->deleteAdmin($id,$dbcon);
    
    if($count) {
        header("Location:list-admin.php");
    } 
    
}


