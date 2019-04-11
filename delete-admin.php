<?php
require_once 'Database.php';
require_once 'Admin.php';


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


