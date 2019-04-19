<?php

require_once '../model/Database.php';
require_once '../model/Admin.php';

$dbcon = Database::getDb();
$u = new Admin();
$role = $u->getAllRoles($dbcon);
$id = $_GET['id'];  
if(isset($_GET['id']))
{
    $id = $_GET['id'];  
    $admin = $u->getAdminById($id,$dbcon);
}
if(isset($_POST['edit']))
{
    
    header("Location: edit-admin.php?id=$id");
}
?>
<?php
require_once '../headerfooter/adminhome.php';
?>
<div class="container">
    <div class="card-header">
          <i class="fa fa-table"></i> Admin Details</div>
        <div class="card-body">
    <form action="" method="post">
        <div class="form-group">
            <input name="id" class="form-control" value="<?= $admin->id; ?>" type="hidden" />
            <label>User Name:</label>
            <input name="uname" class="form-control" placeholder="User Name" value="<?= $admin->name; ?>" type="text" readonly>
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" value="<?= $admin->emailid; ?>" type="text" readonly>
        </div>
        <div class="form-group">
            <label>Role :</label>
            <?php
                echo "<select class='form-control' name=role value=''> Role </option>";
                foreach($role as $r) 
                {
                    echo "<option value=$r->id name=rolevalue>$r->role_name</option>";
                }
                echo "</select>";
            ?>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" name="edit">Edit</button>
        </div>
    </form>
</div>
<?php
require_once '../headerfooter/adminfooter.html';
?>
