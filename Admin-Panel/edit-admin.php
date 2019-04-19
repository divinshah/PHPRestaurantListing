
<?php
require_once '../model/Database.php';
require_once '../model/Admin.php';

$dbcon = Database::getDb();
$u = new Admin();
$role = $u->getAllRoles($dbcon);
//$dbcon = Database::getDb();
//$u = new Admin();
if(isset($_GET['id']))
{
    $id = $_GET['id'];  
    $admin = $u->getAdminById($id,$dbcon);
}
if(isset($_POST['regiadmin']))
{
    $id = $_POST['id'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    
    $count = $u -> updateAdmin($id,$uname,$email,$role,$dbcon);

    if($count) {
        header("Location: list-admin.php");
    } else {
        echo "problem updating";
    }
}
?>
<?php
require_once '../headerfooter/adminhome.php';
?>
<div class="container">
    <div class="card-header">
          <i class="fa fa-table"></i> Edit Details</div>
    <div class="card-body">
    <!--<h2>Get Started with free account</h2>-->
    <form action="" method="post">
        <div class="form-group">
            <input name="id" class="form-control" value="<?= $admin->id; ?>" type="hidden" />
            <label>User Name:</label>
            <input name="uname" class="form-control" placeholder="User Name" value="<?= $admin->name; ?>" type="text">
        </div>
        <div class="form-group">
            <label>Email Id:</label>
            <input name="email" class="form-control" placeholder="Email Id" value="<?= $admin->emailid; ?>" type="text">
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
        <!--<div class="form-group">
            <label>Password :</label>
            <input name="pwd" class="form-control" placeholder="Password" value="<?= $admin->password; ?>" type="password">
        </div>-->
        <div class="form-group">
        <button type="submit" name="regiadmin" class="btn btn-primary">Edit Details </button>
        </div>
    </form>
</div>
<?php
require_once '../headerfooter/adminfooter.html';
?>
